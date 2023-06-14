<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\ResevationVoyage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class VoyageClientEt extends Controller
{
    public function index()
    {$date=Carbon::now();
        $voyages=Voyage::get();
        
        return view('FrontendClient.voyageclient',compact('voyages'));
    }
    public function show($id)
    {

        $voyage = Voyage::find($id);
        return view('FrontendClient.voyagedetail', compact('voyage'));
    }




    public function search_voyage(Request $request)
    {
        $voyages= Voyage::whereBetween('prix',[$request->left_value, $request->right_value])->get();
      // dd($hotels);
        return view('FrontendClient.voyageFiltre',compact('voyages'))->render();
    }
   
    function filtreLocalisation(Request $request)
    {
        $localisation=$request->localisation;
// on utilise whereIn avec array
        $voyages=Voyage::where('pays',$localisation)->get();
       
       return view('FrontendClient.voyageFiltre',compact('voyages'));
    }
    public function store( Request $request){
        $idC = $request->voyage_id;
        
        $rules = array([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => '',
            'num_tel' => 'required|max:8|numeric|unique',
        ]);
        
        $reservationVoyage= new ResevationVoyage();
        $reservationVoyage->nom = $request->nom;
        $reservationVoyage->prenom = $request->prenom;
        $reservationVoyage->email = $request->email;
        $reservationVoyage->num_tel = $request->num_tel;
        $reservationVoyage->voyage_id =$idC; 

        $reservationVoyage->save();

        //$nbd = ResevationCircuit::where('id', $idC)->get()->count();

        
        $voyageNb = Voyage::find($idC);
        $voyageNb->nb_disponible = $request->nb_disponible;
        $voyageNb->save();
        
        $voyages=Voyage::get();
        Session::flash('message', 'Votre demande a bien été enregistrée, Un de nos conseillers vous contactera par téléphone.');

        return view('FrontendClient.voyageclient',compact('voyages'));  
    }


}