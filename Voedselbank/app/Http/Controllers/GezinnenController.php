<?php

namespace App\Http\Controllers;

use App\Models\Gezin;
use Illuminate\Http\Request;

class GezinnenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gezinnen = Gezin::with(['persoon'])->get();

        $eetwensNaam = $request->input('eetwens');

    if (!empty($eetwensNaam)) {
        $gezinnen = Gezin::select('gezinnen.*')
            ->join('eetwenspergezin', 'gezinnen.id', '=', 'eetwenspergezin.gezinid') // Adjusted column name
            ->join('eetwensen', 'eetwenspergezin.eetwensid', '=', 'eetwensen.id') // Adjusted column name
            ->where('eetwensen.naam', $eetwensNaam) // Correct column name
            ->get();
    } else {
        $gezinnen = Gezin::all();
    }

        return view('gezin.index', compact('gezinnen'));
    }

    }
