<?php

namespace App\Http\Controllers;

use App\Models\Arrangement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class ArrangementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:arrangement-list|arrangement-create|arrangement-edit|arrangement-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:arrangement-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:arrangement-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:arrangement-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $arrangement = Arrangement::paginate(5);
        return view('arrangement.index', compact('arrangement'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('arrangement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $nomLS = 'prix_log_simple' . $id;
        $nomLPD = 'prix_log_pet_dej' . $id;
        $nomDP = 'prix_dp' . $id;
        $nomALLI = 'prix_all_inclus' . $id;
        $nomASD = 'prix_all_soft_drink' . $id;
        $nomPC = 'prix_pension_comp' . $id;

        $arr = \App\Models\Arrangement::where('room_id', $id)->first();

        if (isset($arr) > 0) {


            $arr->prix_dp = $request->$nomDP;
            $arr->prix_log_simple = $request->$nomLS;
            $arr->prix_log_pet_dej = $request->$nomLPD;
            $arr->prix_all_inclus = $request->$nomALLI;
            $arr->prix_all_soft_drink = $request->$nomASD;
            $arr->prix_pension_comp = $request->$nomPC;
            $arr->update();
            return back()
            ->with('success', 'Mise à jour avec succés.');
        } else {
            Arrangement::create([
                'prix_dp' => $request->$nomDP,
                'prix_log_simple' => $request->$nomLS,
                'prix_log_pet_dej' => $request->$nomLPD,
                'prix_all_inclus' => $request->$nomALLI,
                'prix_all_soft_drink' => $request->$nomASD,
                'prix_pension_comp' => $request->$nomPC,
                'room_id' => $id,


            ]);
            return back()
            ->with('success', 'Arrangement créé avec succés.');
        }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $arrangement = Arrangement::find($id);
        return view('arrangement.show', compact('arrangement'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arrangement = Arrangement::find($id);

        return view('arrangement.edit', compact('arrangement'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([]);
        $arrangement = Arrangement::find($id);
        $arrangement->nom = $request->nom;
        $arrangement->prix = $request->prix;
        $arrangement->update();
        return redirect()->route('arrangement.index')
            ->with('success', 'Arrangement apdated successfully');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arrangement = Arrangement::find($id);
        $arrangement->delete();
        return redirect()->route('arrangement.index')
            ->with('success', 'Arrangement deleted successfully');
    }
}
