<?php

namespace App\Http\Controllers;

use App\Models\Voyage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class VoyageOrganise extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyage = Voyage::paginate(10);
        return view ('voyage.index',compact('voyage'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('voyage.create');
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
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
             'titre'=>'required',
             'destination'=>'required',
             'pays'=>'required',
             'thems'=>'required',
             'prix'=>'required',
             'date_debut'=>'required',
             'date_fin'=>'required',
             'nb_personne'=>'required',
             'nb_disponible'=>'required',

        ]);
        if($request->hasFile('image')){
        $file = $request->file('image');

$imageName = $file->getClientOriginalName().'.'.$file->extension();  
       
$file->move(public_path('voyage'), $imageName);
        }
      
        Voyage::create([
                'image'=>$imageName,
                'titre'=>$request->titre,
                'destination'=>$request->destination,
                'pays'=>$request->pays,
                'thems'=>$request->thems,
                'prix'=>$request->prix,
                'date_debut'=>$request->date_debut,
                'date_fin'=>$request->date_fin,
                'nb_personne'=>$request->nb_personne,
                'nb_disponible'=>$request->nb_disponible,
                
           

            
        
            
            
        ]);
        return redirect()->route('voyage.index')
        ->with('success','voyage created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
          $this->middleware('permission:voyage-list|voyage-create|voyage-edit|voyage-delete', ['only' => ['index','store']]);
          $this->middleware('permission:voyage-create', ['only' => ['create','store']]);
         $this->middleware('permission:voyage-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:voyage-delete', ['only' => ['destroy']]);
    }
    public function show($id)
    {
        
      $voyage= Voyage::find($id);
        return view('voyage.show',compact('voyage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voyage=Voyage::find($id);

        return view('voyage.edit',compact('voyage'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([

       ]);
       $voyage=Voyage::find($id);
       if ($request->hasFile('image')) {
        $file = $request->file('image');

        $imageName = $file->getClientOriginalName() . '.' . $file->extension();

        $file->move(public_path('voyage'), $imageName);

        $voyage->image = $imageName;
    }

       $voyage->titre=$request->titre;
       $voyage->destination=$request->destination;
       $voyage->pays=$request->pays;
       $voyage->thems=$request->thems;
       $voyage->prix=$request->prix;
       $voyage->date_debut=$request->date_debut;
       $voyage->date_fin=$request->date_fin;
       $voyage->nb_personne=$request->nb_personne;
       $voyage->nb_disponible=$request->nb_disponible;
        $voyage->update();
        return redirect()->route('voyage.index')
        ->with('success','Voyage apdated successfully'); 
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyage=Voyage::find($id);
        $voyage->delete();
        return redirect()->route('voyage.index')
        ->with('success','Voyage deleted successfully'); 
    }
}
