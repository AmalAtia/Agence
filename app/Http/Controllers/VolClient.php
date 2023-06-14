<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VolClient extends Controller
{
    public function index()
    {
        
        return view('FrontendClient.volclient');
    }

    public function search(Request $request)
    {
        $type = $request->type;
        $dtedep = $request->date_aller;
        $dteArr = $request->date_retour;
        $typeVol = $request->type_vol;
        $villeD = $request->ville_depart;
        $ville_arrive = $request->ville_arrive;

        $vol = Vol::where('type_vol', $typeVol)
        ->where('date_aller', $dtedep)
        ->where('date_retour', $dteArr)
        ->where('ville_depart' , $villeD)
        ->where('ville_arrive',$ville_arrive);

        $dteArr = $request->date_retour;
        return view('FrontendClient.searchvol',compact('vol' ,'type','dtedep' , 'dteArr','typeVol', 'villeD','ville_arrive' ));
    }
}