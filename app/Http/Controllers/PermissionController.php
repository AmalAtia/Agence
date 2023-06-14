<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
          $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index','store']]);
          $this->middleware('permission:permission-create', ['only' => ['create','store']]);
         $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $permissions = Permission::paginate(46);
        return view ('permission.index',compact('permissions'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('permission.create');
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
            
             'name'=>'required',
          

        ]);
     
        permission::create([
             
                'name'=>$request->name,
               
            
        
            
            
        ]);
        return redirect()->route('permission.index')
        ->with('success','permission created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
      $permission= Permission::find($id);
        return view('permission.show',compact('permission'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission=Permission::find($id);

        return view('permission.edit',compact('permission'));
    }

   
    public function update(Request $request, $id)
    {
       $request->validate([

       ]);
       $permission=Permission::find($id);
       $permission->name=$request->name;
        $permission->update();
        return redirect()->route('permission.index')
        ->with('success','permission apdated successfully'); 
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission=Permission::find($id);
        $permission->delete();
        return redirect()->route('permission.index')
        ->with('success','permission deleted successfully'); 
    }
    
}
