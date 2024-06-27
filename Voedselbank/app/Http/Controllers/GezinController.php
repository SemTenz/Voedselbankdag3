<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Gezin;
use App\Models\Persoon;
use App\Models\VoedselAllergie;

class GezinController extends Controller
{
    public function index(Request $request)
    {
        $allergieën = VoedselAllergie::all();

        $query = Gezin::query();

        if ($request->has('allergie_id') && $request->allergie_id !== '') {
            $query->whereHas('personen.voedselAllergie', function ($q) use ($request) {
                $q->where('allergie.id', $request->allergie_id); // Specificeer de correcte relatie en kolom
            });
        }

        $gezinnen = $query->with('personen.voedselAllergie')->get();

        // Controleer of er een geselecteerde allergie is en geen gezinnen zijn gevonden
        $selectedAllergie = VoedselAllergie::find($request->allergie_id);
        $errorMessage = null;

        if ($selectedAllergie && $gezinnen->isEmpty()) {
            $errorMessage = "Er zijn geen gezinnen bekent die de geselecteerde allergie hebben.";
        }

        return view('gezinnen.index', compact('gezinnen', 'allergieën', 'errorMessage'));
    }


    public function show(Request $request, $gezinId)
    {
        try {
            $gezin = Gezin::findOrFail($gezinId);
            $gezin->load('personen.voedselAllergie');

            return view('gezinnen.show', compact('gezin'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        }
    }
    public function editAllergie($gezinId, $persoonId)
    {
        try {
            $gezin = Gezin::findOrFail($gezinId);
            $persoon = Persoon::findOrFail($persoonId);
            $allergieën = VoedselAllergie::all();

            return view('gezinnen.edit', compact('gezin', 'persoon', 'allergieën'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function updateAllergie(Request $request, $gezinId, $persoonId)
    {
        $persoon = Persoon::findOrFail($persoonId);

        $request->validate([
            'allergie_id' => 'required|exists:allergie,id', // Controleer de exacte tabelnaam en kolomnaam hier
        ]);

        $selectedAllergie = VoedselAllergie::find($request->allergie_id);
        $standaardAllergieId = $persoon->voedselAllergie->first()->id;

        if ($persoonId == 5 && $request->allergie_id != $standaardAllergieId) {
            // Controleer of de geselecteerde allergie een anafylactisch risico heeft
            if ($selectedAllergie && $selectedAllergie->anafylactischrisico !== 'anafylactischrisico') {
                $errorMessage = "Waarschuwing: Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een risico op een anafylactische reactie.";
                return redirect()->route('gezinnen.editAllergie', ['gezinId' => $gezinId, 'persoonId' => $persoonId])->with('error', $errorMessage);
            }
        }

        $persoon->voedselAllergie()->sync([$request->allergie_id]);

        session()->flash('status_success', 'De wijziging is doorgevoerd.');

        // Redirect naar de show-pagina van het gezin met een vertraging
        try {
            $gezin = Gezin::findOrFail($gezinId);
            $persoon = Persoon::findOrFail($persoonId);
            $allergieën = VoedselAllergie::all();

            return view('gezinnen.edit', compact('gezin', 'persoon', 'allergieën'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        }
        return view('gezinnen.show', compact('gezin'));
    }
}
