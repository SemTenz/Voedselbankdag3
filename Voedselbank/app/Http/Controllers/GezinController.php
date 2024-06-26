<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoedselAllergie;
use App\Models\Persoon;
use App\Models\Gezin;

class GezinController extends Controller
{
    public function index()
    {
        $allergieën = VoedselAllergie::all();
        return view('gezinnen.index', compact('allergieën'));
    }

    public function show(Request $request)
    {
        $allergieId = $request->input('allergie_id');
        $allergie = VoedselAllergie::find($allergieId);

        if ($allergie) {
            $personen = Persoon::where('allergie_id', $allergieId)->get();
            $gezinnen = $personen->map(function ($persoon) {
                return $persoon->gezin;
            })->unique();

            return view('gezinnen.show', compact('gezinnen', 'allergie'));
        } else {
            return redirect()->route('gezinnen.index')->with('error', 'Er zijn geen gezinnen gevonden met de geselecteerde allergie.');
        }
    }
}
