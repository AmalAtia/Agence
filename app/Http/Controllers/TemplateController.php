<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ResevationOmra;
use App\Models\ResevationVoyage;
use App\Models\ResevationCircuit;


class TemplateController extends Controller
{
    public function index()
    {
        return view('Frontend.home');
    }
    public function index1()
    {
        $email = Auth::user()->email;

        $reserCircuit = ResevationCircuit::where('email', $email)->get();
        $reserOmra = ResevationOmra::where('email', $email)->get();
        $reserVoyage = ResevationVoyage::where('email', $email)->get();

        //$reserVol = ReservationVol::where('email',$email)->get();
        //$reserHotel = Reservation::where('email',$email)->get();
        return view('Frontend.homeclient', compact('reserCircuit', 'reserOmra', 'reserVoyage'));
    }
}
