<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gezin;
use App\Models\VoedselAllergie;

class GezinController extends Controller
{
    public function index(Request $request)
    {
        $allergieën = VoedselAllergie::all();

        // Filter op allergie als er een allergie_id is meegegeven
        if ($request->has('allergie_id')) {
            $allergieId = $request->input('allergie_id');
            $allergie = VoedselAllergie::find($allergieId);

            if ($allergie) {
                // Ophalen van gezinnen die personen hebben met de geselecteerde allergie
                $gezinnen = Gezin::whereHas('personen', function ($query) use ($allergieId) {
                    $query->whereHas('voedselAllergie', function ($q) use ($allergieId) {
                        $q->where('id', $allergieId);
                    });
                })->get();
            } else {
                // Als de allergie niet gevonden wordt, lege collectie tonen
                $gezinnen = collect();
            }
        } else {
            // Geen allergie_id meegegeven, toon alle gezinnen
            $gezinnen = Gezin::all();
        }

        return view('gezinnen.index', compact('gezinnen', 'allergieën'));
    }


    public function show(Request $request, $gezinId)
    {
        $allergieId = $request->query('allergie_id'); // Haal allergie_id op uit query parameters

        $gezin = Gezin::findOrFail($gezinId);
        $gezin->load('personen.voedselAllergie');

        return view('gezinnen.show', compact('gezin', 'allergieId'));
    }
}
