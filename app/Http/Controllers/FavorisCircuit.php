<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circuit;
use App\Models\Favoris;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FavorisClient extends Controller
{
    public function index($circuit_id)
    {
        $favorie = Favoris::where('circuit_id', $circuit_id)->where('user_id', Auth::id())->first();
        if (isset($favorie)) {
            Session::flash('message', 'circuit favoris already exists');
            return back();
        } else {
            Favoris::insert([
                'user_id' => Auth::id(),
                'circuit_id' => $circuit_id
            ]);
        }



        Session::flash('message', 'favoris inserted successfilly');
        return back();
    }



    public function ShowCount($id)
    {
        $favoriecount = Favoris::count($id);
        return view('FrontendClient.master', compact('favoriecount'));
    }

  
    public function destroy($id)
    {
       
      $favorit= Favoris::find($id);
// dd($favorit,$hotel);
      if($favorit){
        $favorit->delete();
        return back();
      }
      
        return back();
    }
}
