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
            'allergie_id' => 'required|exists:allergie,id', // Zorg ervoor dat dit overeenkomt met je database kolomnaam
        ]);

        $selectedAllergie = VoedselAllergie::find($request->allergie_id);

        // Controleer op het anafylactisch risico van de allergie
        if ($selectedAllergie && $selectedAllergie->anafylactischrisico === 'hoog') {
            $errorMessage = "Waarschuwing: Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een hoog risico op een anafylactische shock.";
            return redirect()->route('gezinnen.editAllergie', ['gezinId' => $gezinId, 'persoonId' => $persoonId])->with('error', $errorMessage);
        }

        $persoon->voedselAllergie()->sync([$request->allergie_id]);

        return redirect()->route('gezinnen.show', ['gezinId' => $gezinId])
            ->with('success', 'Allergie van persoon succesvol bijgewerkt.');
    }
}
