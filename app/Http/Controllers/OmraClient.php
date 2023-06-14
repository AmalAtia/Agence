<?php

namespace App\Http\Controllers;

use App\Models\Omra;
use App\Models\ResevationOmra;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class OmraClient extends Controller
{
    public function index()
    {
        $date = Carbon::now();
        $omras = Omra::get();

        return view('FrontendClient.omraclient', compact('omras'));
    }

    public function show($id)
    {

        $omra = Omra::find($id);
        return view('FrontendClient.omradetail', compact('omra'));
    }
    public function search_omra(Request $request)
    {
        $omras = Omra::whereBetween('prix', [$request->left_value, $request->right_value])->get();
        // dd($hotels);
        return view('FrontendClient.omraFiltre', compact('omras'))->render();
    }



    public function store(Request $request)
    {
        $idC = $request->omra_id;

        $rules = array([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => '',
            'num_tel' => 'required|max:8|numeric|unique',
        ]);

        $reservationOmra = new ResevationOmra();
        $reservationOmra->nom = $request->nom;
        $reservationOmra->prenom = $request->prenom;
        $reservationOmra->email = $request->email;
        $reservationOmra->num_tel = $request->num_tel;
        $reservationOmra->omra_id = $idC;
        $reservationOmra->save();

        

        //$nbd = ResevationOmra::where('id', $idC)->get()->count();


        $omraNb = Omra::find($idC);
        $omraNb->nb_disponible = $request->nb_disponible;
        $omraNb->save();

        $omras = Omra::get();
        Session::flash('message', 'Votre demande a bien été enregistrée, Un de nos conseillers vous contactera par téléphone.');

        return view('FrontendClient.omraclient', compact('omras'));
    }
}
