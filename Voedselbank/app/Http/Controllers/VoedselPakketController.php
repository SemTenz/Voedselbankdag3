<?php

namespace App\Http\Controllers;

use App\Models\Voedselpakket;
use Illuminate\Http\Request;

class VoedselPakketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
 * @return \Illuminate\Http\Response
 */

public function index()
{
    $voedselpakketten = Voedselpakket::all(); // Haal alle voedselpakketten op
    return view('voedselpakket.index', compact('voedselpakketten')); // Return de view met de voedselpakketten data
}

public function edit($id)
{
    $voedselpakket = Voedselpakket::findOrFail($id);
    // Assuming you have predefined statuses
    $statuses = ['Uitgereikt', 'Niet uitgereikt', 'Niet meer gegeven'];
    return view('voedselpakket.edit', compact('voedselpakket', 'statuses'));
}

public function update(Request $request, $id)
{
    // Check if the pakket ID is 3 and prevent status change
    if ($id == 3) {
        return redirect()->back()->withErrors(['customError' => 'Dit gezin is niet meer ingeschreven bij de voedselbank en daarom kan er geen voedselpakket worden uitgereikt']);
    }

    $voedselpakket = Voedselpakket::findOrFail($id);

    // Update de status zoals eerder
    $voedselpakket->status = $request->status;

    // Update de datumuitgifte naar de huidige datum
    $voedselpakket->datumuitgifte = now();

    $voedselpakket->save();
    session()->flash('status_changed', 'De wijziging is doorgevoerd.');

    // Redirect back to the edit page or wherever you want to show the message
    return redirect()->route('voedselpakket.edit', $id);
}

public function showVoedselpakketten() {
    $voedselpakketten = Voedselpakket::with(['productpervoedselpakket'])->get(); // Ensure this matches your relationship name
    return view('voedselpakket.index', compact('voedselpakketten')); // Make sure the variable name matches what's used in the view
}


}