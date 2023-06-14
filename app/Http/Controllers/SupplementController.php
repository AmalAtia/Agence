<?php

namespace App\Http\Controllers;
use App\Models\Supplement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class SupplementController extends Controller
{
    /**
     * Display a listing of the resource.
     *supplement
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
          $this->middleware('permission:supplement-list|supplement-create|supplement-edit|supplement-delete', ['only' => ['index','store']]);
          $this->middleware('permission:supplement-create', ['only' => ['create','store']]);
         $this->middleware('permission:supplement-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:supplement-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $supplement = Supplement::paginate(30);
        return view ('supplement.index',compact('supplement'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('supplement.create');
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
             'nom'=>'required',
             'icon'=>'required',
             
        ]);
    
      
       Supplement::create([
               'nom'=>$request->nom,
               'icon'=>$request->icon,
                
              
        ]);
        return redirect()->route('supplement.index')
        ->with('success','supplement created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      $arrangement= Supplement::find($id);
        return view('supplement.show',compact('supplement'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplement=Supplement::find($id);

        return view('supplement.edit',compact('supplement'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([

       ]);
       $supplement=Supplement::find($id);
       $supplement->nom=$request->nom;
       $supplement->icon=$request->icon;
       $supplement->update();
        return redirect()->route('supplement.index')
        ->with('success','supplement apdated successfully'); 
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplement=Supplement::find($id);
        $supplement->delete();
        return redirect()->route('supplement.index')
        ->with('success','supplement deleted successfully'); 
    }
}
