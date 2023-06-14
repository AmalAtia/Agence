<?php

namespace App\Http\Controllers;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        
        return view ('Reservation.index');
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}
