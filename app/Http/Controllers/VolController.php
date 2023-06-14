<?php

namespace App\Http\Controllers;
use App\Models\Vol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
          $this->middleware('permission:vol-list|vol-create|vol-edit|vol-delete', ['only' => ['index','store']]);
          $this->middleware('permission:vol-create', ['only' => ['create','store']]);
         $this->middleware('permission:vol-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:vol-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $vol = Vol::paginate(5);
        return view ('vol.index',compact('vol'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('vol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request -> validate([
             
             'num'=>'required',
             'type_vol'=>'required',
             'nb_billet'=>'required',
             'date_aller'=>'required',
             'date_retour'=>'required',
             'nb_personne'=>'required',
             'ville_depart'=>'required',
             'ville_arrive'=>'required',
             'prix'=>'required',

        ]);
     
      
        Vol::create([
                'num'=>$request->num,
                'type_vol'=>$request->type_vol,
                'nb_billet'=>$request->nb_billet,
                'date_aller'=>$request->date_aller,
                'date_retour'=>$request->date_retour,
                'nb_personne'=>$request->nb_personne,
                'ville_depart'=>$request->ville_depart,
                'ville_arrive'=>$request->ville_arrive,
                'prix'=>$request->prix,

            
        
            
            
        ]);
        return redirect()->route('vol.index')
        ->with('success','Vol created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      $vol= Vol::find($id);
        return view('vol.show',compact('vol'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol=Vol::find($id);

        return view('vol.edit',compact('vol'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([

       ]);
       $vol=Vol::find($id);
       $vol->num=$request->num;
       $vol->type_vol=$request->type_vol;
       $vol->nb_billet=$request->nb_billet;
       $vol->date_aller=$request->date_aller;
       $vol->date_retour=$request->date_retour;
       $vol->nb_personne=$request->nb_personne;
       $vol->ville_depart=$request->ville_depart;
       $vol->ville_arrive=$request->ville_arrive;
       $vol->prix=$request->prix;
     


        $vol->update();
        return redirect()->route('vol.index')
        ->with('success','Vol apdated successfully'); 
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol=Vol::find($id);
        $vol->delete();
        return redirect()->route('vol.index')
        ->with('success','Vol deleted successfully'); 
    }
}
