<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Arrangement;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Resevation;
use App\Models\User;

class HotelClient extends Controller
{
    public function index()
    {
        $date = Carbon::now();
        $hotels = Hotel::get();

        return view('FrontendClient.hotelclient', compact('hotels'));
    }

    public function show($id, Request $request)
    {

        $hotels = Hotel::with(['chambre' => function ($q) use ($request) {
            $q->where('nb_adult', '<=', $request->adults)->where('nb_enfant', '<=', $request->children);
        }])
            ->where('id', $request->hotel_id)->get();


        $hotel = Hotel::find($id);
        $dep = Carbon::parse($request->depart);
        $arr = Carbon::parse($request->arrive);
        $duration1 = $arr->diffInDays($dep);
        $nbEnf = $request->children;
        $nbAd = $request->adults;
        $arra = $request->arrangement_id;



        return view('FrontendClient.hoteldetail', compact('hotel', 'nbAd', 'nbEnf', 'hotels',  'duration1', 'arra'));
    }


    function filtreByStars(Request $request)
    {
        $nbrEtoile = $request->nbrEtoile;
        //dd(($nbrEtoile));
        // on utilise whereIn avec array
        $hotels = Hotel::whereIn('nb_etoile', $nbrEtoile)->get();

        return view('FrontendClient.hotelFiltre', compact('hotels'));
    }

    public function search_hotels(Request $request)
    {
        $hotels = Hotel::whereBetween('prix', [$request->left_value, $request->right_value])->get();
        // dd($hotels);
        return view('FrontendClient.hotelFiltre', compact('hotels'))->render();
    }

    function filtreArrangement(Request $request)
    {
        $arrangement = $request->arrangement;
        // on utilise whereIn avec array
        $hotels = Hotel::whereIn('arrangement', $arrangement)->get();

        return view('FrontendClient.hotelFiltre', compact('hotels'));
    }




    function filtreLocalisation(Request $request)
    {
        $localisation = $request->localisation;
        // on utilise whereIn avec array
        $hotels = Hotel::where('adresse', $localisation)->get();

        return view('FrontendClient.hotelFiltre', compact('hotels'));
    }


    function reservation_hotels(Request $request)
    {

        // $hotel = Hotel::with(['chambre' => function ($q) use ($request) {
        //     $q->where('nb_adult', '<=', $request->adults)->where('nb_enfant', '<=', $request->children);
        // }])
        //     ->where('id', $request->hotel_id)->get();
        // dd($hotel);
        $somme=$request->adults+$request->children;
        $hotel=Hotel::with(['chambre' => function ($q) use ($somme) {
            $q->where('nb_de_lit', '=', $somme);
        }])
            ->where('id', $request->hotel_id)->get();
    }


    public function index1(Request $request)
    {
        //    dd($request->rooms);
        //return response()->json($request);

        return view('FrontendClient.hotelreservation');
    }



    public function reservation(Request $request)
    {

        $reservation = Resevation::create([
            'user_id' => $request->customerId,
            'name' => $request->firstName,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'mode_pay' => $request->modePayment,
            'hotel_id' => $request->hotel_id,
            'depart' => $request->dateD,
            'arrive' => $request->dateAR,
            'nb_adult' => $request->adults,
            'nb_enfant' => $request->enfant,
            'nb_nuit' => $request->nb_nuit,
            'total_price' => $request->prixT,
            'code_reservation' => 'K' . date('dmY'),
            'rooms' => $request->rooms,
        ]);
        $user = User::find($reservation->user_id);
        $hotel=Hotel::find($reservation->hotel_id);
        return view('FrontendClient.invoce', compact('reservation', 'user','hotel'));
    }
}
