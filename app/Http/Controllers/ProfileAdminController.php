<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profilAdmin.index');
    }


    /**edit view**/
    public function edit($id)
    {
        return view('profilAdmin.edit');
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
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->save();
        return view('profilAdmin.index');
    }
}
