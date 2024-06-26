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
        try {
            // Log request data to debug
            Log::info('Request data:', $request->all());

            // Find the family and the person
            $gezin = Gezin::findOrFail($gezinId);
            $persoon = Persoon::findOrFail($persoonId);

            // Validate the request data
            $request->validate([
                'allergie_id' => 'required|exists:voedsel_allergies,id',
            ]);

            // Update the person's allergy using sync method
            $persoon->voedselAllergie()->sync([$request->allergie_id]);

            // Redirect back to the show page with success message
            return redirect()->route('gezinnen.show', ['gezinId' => $gezin->id])
                ->with('success', 'Allergie van persoon succesvol bijgewerkt.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error updating allergy:', ['message' => $e->getMessage()]);

            // Handle other exceptions gracefully
            return redirect()->back()->withInput()
                ->withErrors(['message' => 'Er is een fout opgetreden bij het bijwerken van de allergie. Probeer het opnieuw.']);
        }
    }
}
