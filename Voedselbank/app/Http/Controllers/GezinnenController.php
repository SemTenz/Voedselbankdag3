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
    public function index()
    {
        // Retrieve all gezinnen with their associated vertegenwoordiger
        $gezinnen = Gezin::with('vertegenwoordiger')->get();
        // Return the view with the gezinnen data
        return view('gezin.index', compact('gezinnen'));
    }


}