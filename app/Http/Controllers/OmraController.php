<?php

namespace App\Http\Controllers;
use App\Models\Omra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class OmraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
          $this->middleware('permission:omra-list|omra-create|omra-edit|omra-delete', ['only' => ['index','store']]);
          $this->middleware('permission:omra-create', ['only' => ['create','store']]);
         $this->middleware('permission:omra-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:omra-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $omra = Omra::paginate(5);
        return view ('omra.index',compact('omra'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('omra.create');
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
             'date_depart'=>'required',
             'date_arrive'=>'required',
             'prix'=>'required',
             'promo'=>'required',
             'date_deb'=>'required',
             'date_fin'=>'required',
             'nb_personne'=>'required',
             'nb_disponible'=>'required',

        ]);
        if($request->hasFile('image')){
        $file = $request->file('image');

$imageName = $file->getClientOriginalName().'.'.$file->extension();  
       
$file->move(public_path('omra'), $imageName);
        }
      
        Omra::create([
                'image'=>$imageName,
                'titre'=>$request->titre,
                'description'=>$request->description,
                'date_depart'=>$request->date_depart,
                'date_arrive'=>$request->date_arrive,
                'prix'=>$request->prix,
                'promo'=>$request->promo,
                'date_deb'=>$request->date_deb,
                'date_fin'=>$request->date_fin,
                'nb_personne'=>$request->nb_personne,
                'nb_disponible'=>$request->nb_disponible,
                

            
        
            
            
        ]);
        return redirect()->route('omra.index')
        ->with('success','Omra created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      $omra= Omra::find($id);
        return view('omra.show',compact('omra'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omra=Omra::find($id);

        return view('omra.edit',compact('omra'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([

       ]);
       $omra=Omra::find($id);
       if ($request->hasFile('image')) {
        $file = $request->file('image');

        $imageName = $file->getClientOriginalName() . '.' . $file->extension();

        $file->move(public_path('omra'), $imageName);

        $omra->image = $imageName;
    }
       $omra->titre=$request->titre;
       $omra->description=$request->description;
       $omra->date_depart=$request->date_depart;
       $omra->date_arrive=$request->date_arrive;
       $omra->prix=$request->prix;
       $omra->promo=$request->promo;
       $omra->date_deb=$request->date_deb;
       $omra->date_fin=$request->date_fin;
       $omra->nb_personne=$request->nb_personne;
       $omra->nb_disponible=$request->nb_disponible;

       
        $omra->update();
        return redirect()->route('omra.index')
        ->with('success','Omra apdated successfully'); 
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $omra=Omra::find($id);
        $omra->delete();
        return redirect()->route('omra.index')
        ->with('success','Omra deleted successfully'); 
    }
}
