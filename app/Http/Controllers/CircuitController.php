<?php

namespace App\Http\Controllers;
use App\Models\Circuit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
          $this->middleware('permission:circuit-list|circuit-create|circuit-edit|circuit-delete', ['only' => ['index','store']]);
          $this->middleware('permission:circuit-create', ['only' => ['create','store']]);
         $this->middleware('permission:circuit-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:circuit-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $circuit = Circuit::paginate(5);
        return view ('circuit.index',compact('circuit'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('circuit.create');
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
             'description'=>'required',
             'date_debut'=>'required',
             'date_fin'=>'required',
             'programme'=>'required',
             'ville_depart'=>'required',
             'ville_arrive'=>'required',
             'prix'=>'required',
             'logement'=>'required',
             'nb_personne'=>'required',
             'nb_disponible'=>'required',
             
            

        ]);
        if($request->hasFile('image')){
        $file = $request->file('image');

$imageName = $file->getClientOriginalName().'.'.$file->extension();  
       
$file->move(public_path('circuit'), $imageName);
        }
      
        Circuit::create([
                'image'=>$imageName,
                'titre'=>$request->titre,
                'description'=>$request->description,
                'date_debut'=>$request->date_debut,
                'date_fin'=>$request->date_fin,
                'programme'=>$request->programme,
                'ville_depart'=>$request->ville_depart,
                'ville_arrive'=>$request->ville_arrive,
                'prix'=>$request->prix,
                'logement'=>$request->logement,
                'nb_personne'=>$request->nb_personne,
                'nb_disponible'=>$request->nb_disponible,
                

            
        
            
            
        ]);
        return redirect()->route('circuit.index')
        ->with('success','Circuit created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      $circuit= Circuit::find($id);
        return view('circuit.show',compact('circuit'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $circuit=Circuit::find($id);

        return view('circuit.edit',compact('circuit'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([

       ]);
       $circuit=Circuit::find($id);
       if ($request->hasFile('image')) {
        $file = $request->file('image');

        $imageName = $file->getClientOriginalName() . '.' . $file->extension();

        $file->move(public_path('circuit'), $imageName);

        $circuit->image = $imageName;
    }


       $circuit->titre=$request->titre;
       $circuit->description=$request->description;
       $circuit->date_debut=$request->date_debut;
       $circuit->date_fin=$request->date_fin;
       $circuit->programme=$request->programme;
       $circuit->ville_depart=$request->ville_depart;
       $circuit->ville_arrive=$request->ville_arrive;
       $circuit->prix=$request->prix;
       $circuit->logement=$request->logement;
       $circuit->nb_personne=$request->nb_personne;
       $circuit->nb_disponible=$request->nb_disponible;

        $circuit->update();
        return redirect()->route('circuit.index')
        ->with('success','Circuit apdated successfully'); 
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $circuit=Circuit::find($id);
        $circuit->delete();
        return redirect()->route('circuit.index')
        ->with('success','Circuit deleted successfully'); 
    }
}
