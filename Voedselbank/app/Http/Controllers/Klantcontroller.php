<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gezin;
use App\Models\persoon;
use App\Models\contact;
use App\Models\contactpergezin as ContactPerGezin;

class Klantcontroller extends Controller
{


    //funcit eom de data te pakken die nodig is voor overzcht
    public function index()
    {

        $postcodes = contact::distinct()->pluck('postcode');

        $gezinnen = Gezin::with(['persoon', 'contact'])->get();
        return view('klant.index', compact('gezinnen', 'postcodes'));
    }

    //fucntie die zoekt naar postcodes als de user er ov vraagt 
    public function search(Request $request)
    {
        $search = $request->search;
        $postcode = $request->postcode;
        $postcodes = contact::distinct()->pluck('postcode');
        $gezinnen = Gezin::whereHas('contact', function ($query) use ($search, $postcode) {
            if ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            }
            if ($postcode) {
                $query->where('postcode', $postcode);
            }
        })->with(['persoon', 'contact'])->get();

        $isEmpty = $gezinnen->isEmpty();

        return view('klant.index', compact('gezinnen', 'isEmpty', 'postcodes'))->render();
    }

    //om naar edit scherm te komen
    public function edit($id)
    {
        $persoon = Persoon::find($id);

        return view('klant.edit', compact('persoon'));
    }



    // hier valideer en update ik data 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Voornaam' => 'required|max:255',
            'Achternaam' => 'required|max:255',
            'Geboortedatum' => 'required|date',
            'TypePersoon' => 'required',
            'Vertegenwoordiger' => 'required',
            'Postcode' => 'required|max:6',
            'Straatnaam' => 'required|max:255',
            'Huisnummer' => 'required|integer|numeric',
            'Toevoeging' => 'nullable|max:3',
            'Woonplaats' => 'required|max:255',
            'Email' => 'required|email|max:255',
            'Mobiel' => 'required|max:255',
        ]);

        $persoon = Persoon::find($id);
        $postcodes = Contact::pluck('Postcode');

        if (!$postcodes->contains($request->Postcode)) {
            // If the postcode does not exist, return an error message
            return back()->withErrors(['Postcode' => 'Deze postcode komt niet uit de regio maaskantje.', 'Banner' => 'De contactGegevens kunnen niet worden gewijzigd']);
        }
        $persoon->Voornaam = $request->Voornaam;
        $persoon->Tussenvoegsel = $request->Tussenvoegsel ?? '';
        $persoon->Achternaam = $request->Achternaam;
        $persoon->Geboortedatum = $request->Geboortedatum;
        $persoon->TypePersoon = $request->TypePersoon;
        $persoon->IsVertegenwoordiger = $request->Vertegenwoordiger == 'Ja' ? 1 : 0;

        $persoon->save();

        $contactPerGezin = ContactPerGezin::where('gezinId', $request->gezinId)->first();

        $contact = Contact::find($contactPerGezin->ContactId);

        $contact->Straat = $request->Straatnaam;
        $contact->Huisnummer = $request->Huisnummer;
        $contact->Toevoeging = $request->Toevoeging;
        $contact->Postcode = $request->Postcode;
        $contact->Woonplaats = $request->Woonplaats;
        $contact->Email = $request->Email;
        $contact->Mobiel = $request->Mobiel;

        $contact->save();

        $postcodes = contact::distinct()->pluck('postcode');

        $gezinnen = Gezin::with(['persoon', 'contact'])->get();

        return view('klant.index', compact('gezinnen', 'postcodes'))->with('success', 'De klantgegevens zijn gewijzigd.');
    }
}
