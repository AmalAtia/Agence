<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


class ProfileController extends Controller
{

         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('profile.index');
           
    }


    /**edit view**/
    public function edit($id)
    {
        return view('profile.edit'); 
    }
   
        /**update view**/
    public function update(Request $request, $id)
    {
        $rules = array([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::find($id);
        $user->name= $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->save();
        return view('profile.index');

    }
}
