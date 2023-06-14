<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ResevationCircuit;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class CircuitClient extends Controller
{
    public function index()
    {$date=Carbon::now();
        $circuits=Circuit::get();
        
        return view('FrontendClient.circuitclient',compact('circuits'));
    }
    public function show($id)
    {
 
        $circuit = Circuit::find($id);
        return view('FrontendClient.circuitdetail', compact('circuit'));
    }

    public function store( Request $request){
        $idC = $request->circuit_id;
        
        $rules = array([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => '',
            'num_tel' => 'required|max:8|numeric|unique',
        ]);
        
        $reservationCircuit = new ResevationCircuit();
        $reservationCircuit->nom = $request->nom;
        $reservationCircuit->prenom = $request->prenom;
        $reservationCircuit->email = $request->email;
        $reservationCircuit->num_tel = $request->num_tel;
        $reservationCircuit->circuit_id =$idC; 

        $reservationCircuit->save();

        //$nbd = ResevationCircuit::where('id', $idC)->get()->count();

        
        $circuitNb = Circuit::find($idC);
        $circuitNb->nb_disponible = $request->nb_disponible;
        $circuitNb->save();
        
        $circuits=Circuit::get();
        Session::flash('message', 'Votre demande a bien été enregistrée, Un de nos conseillers vous contactera par téléphone.');

        return view('FrontendClient.circuitclient',compact('circuits'));  
    }



    public function search_circuit(Request $request)
    {
        $circuits= Circuit::whereBetween('prix',[$request->left_value, $request->right_value])->get();
      // dd($hotels);
        return view('FrontendClient.circuitFiltre',compact('circuits'))->render();
    }
   
    function filtreLocal(Request $request)
    {
        $local=$request->local;
// on utilise whereIn avec array
        $circuits=Circuit::where('ville_depart',$local)->get();
       
       return view('FrontendClient.circuitFiltre',compact('circuits'));
    }
   
    function  filtreAdresse(Request $request)
    {
        $adr=$request->adr;
// on utilise whereIn avec array
        $circuits=Circuit::where('ville_arrive',$adr)->get();
       
       return view('FrontendClient.circuitFiltre',compact('circuits'));
    }




}