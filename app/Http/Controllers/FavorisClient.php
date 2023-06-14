<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Circuit;
use App\Models\Omra;
use App\Models\Voyage;


use App\Models\Favoris;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FavorisClient extends Controller
{
    public function index($hotel_id)
    {
        $favorie = Favoris::where('hotel_id', $hotel_id)->where('user_id', Auth::id())->first();
        if (isset($favorie)) {
            Session::flash('message', 'hotel favoris already exists');
            return back();
        } else {
            Favoris::insert([
                'user_id' => Auth::id(),
                'hotel_id' => $hotel_id
            ]);
        }



        Session::flash('message', 'favoris inserted successfilly');
        return back();
    }
    public function index1($circuit_id)
    {
        $favorie = Favoris::where('circuit_id', $circuit_id)->where('user_id', Auth::id())->first();

        if (isset($favorie)) {
            Session::flash('message', 'circuit favoris already exists');
            return back();
        } else {

            Favoris::insert([
                'user_id' => Auth::user()->id,
                'circuit_id' => $circuit_id
            ]);
        }



        Session::flash('message', 'favoris inserted successfilly');
        return back();
    }
    public function index2($omra_id)
    {
        $favorie = Favoris::where('omra_id', $omra_id)->where('user_id', Auth::id())->first();

        if (isset($favorie)) {
            Session::flash('message', 'omra favoris already exists');
            return back();
        } else {

            Favoris::insert([
                'user_id' => Auth::user()->id,
                'omra_id' => $omra_id
            ]);
        }



        Session::flash('message', 'favoris inserted successfilly');
        return back();
    }
    public function index3($voyage_id)
    {
        $favorie = Favoris::where('voyage_id', $voyage_id)->where('user_id', Auth::id())->first();

        if (isset($favorie)) {
            Session::flash('message', 'Voyage favoris already exists');
            return back();
        } else {

            Favoris::insert([
                'user_id' => Auth::user()->id,
                'voyage_id' => $voyage_id
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

        $favorit = Favoris::find($id);
        // dd($favorit,$hotel);
        if ($favorit) {
            $favorit->delete();
            return back();
        }

        return back();
    }
}
