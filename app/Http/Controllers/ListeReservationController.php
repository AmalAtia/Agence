<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ResevationOmra;
use App\Models\ResevationVoyage;
use App\Models\ResevationCircuit;

class ListeReservationController extends Controller
{

    public function listeCircuit()
    {

        $email = Auth::user()->email;
        $reserCircuit = ResevationCircuit::where('email', $email)->get();
        return view('listes.listeCircuit', compact('reserCircuit'));
    }
    public function listeHotel()
    {

        $email = Auth::user()->email;
        //$reserHotel = Reservation::where('email',$email)->get();
        // return view('listes.listeHotel',compact('reserHotel'));

    }
    public function listeVol()
    {
        $email = Auth::user()->email;
        //$reserVol = ReservationVol::where('email',$email)->get();
        //return view('listes.listeVol',compact('reserVol'));

    }
    public function listeOmra()
    {

        $email = Auth::user()->email;
        $reserOmra = ResevationOmra::where('email', $email)->get();
        return view('listes.listeOmra', compact('reserOmra'));
    }
    public function listeVayage()
    {
        $email = Auth::user()->email;
        $reserVoyage = ResevationVoyage::where('email', $email)->get();
        return view('listes.listeVayage', compact('reserVoyage'));
    }
}
