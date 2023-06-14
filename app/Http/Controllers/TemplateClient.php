<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Circuit;
use App\Models\Omra;


class TemplateClient extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $date=Carbon::now();
        $hotels=Hotel::whereNotNull('promo')
        ->where('date_fin','>=',$date)
        ->get();
       
        return view('FrontendClient.home',compact('hotels'));
    }
    public function index1()
    {
        
        $date=Carbon::now();
        $hotels=Hotel::whereNotNull('promo')
        ->where('date_fin','>=',$date)
        ->get();
        $voyages=Voyage::get();
        $circuits=Circuit::get();
        $omras=Omra::get();


        return view('FrontendClient.home',compact('hotels','voyages','circuits','omras'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
    
}