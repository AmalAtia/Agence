<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvisController extends Controller
{
    public function reviewstore(Request $request){
        $review = new Avis();
        $review->hotel_id = $request->hotel_id;
        $review->name= $request->name;
        $review->description= $request->description;
        $review->stars = $request->rating;
        $review->user_id = Auth::user()->id;
       
        $review->save();
        return redirect()->back()->with('success','Your review has been submitted Successfully,');
    }
}
