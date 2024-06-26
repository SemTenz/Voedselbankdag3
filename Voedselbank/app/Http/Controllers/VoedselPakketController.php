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
    $voedselpakket = Voedselpakket::findOrFail($id);
    $voedselpakket->status = $request->status;
    $voedselpakket->save();
    session()->flash('status_changed', 'De wijziging is doorgevoerd.');

    // Redirect back to the edit page or wherever you want to show the message
    return redirect()->route('voedselpakket.edit', $id);;
}
}