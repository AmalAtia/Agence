<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use App\Models\Contact;
use App\Models\Hotel;
use App\Models\Omra;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\ResevationOmra;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all();
        $cicuits = Circuit::all();
        $hotels = Hotel::all();
        $contacts = Contact::all();

        $reserOmra = ResevationOmra::orderBy('id', 'desc')->limit(5)->get();

        return view('acceuil.index', compact('voyages', 'cicuits', 'hotels', 'contacts', 'reserOmra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
