<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LivreDor extends Controller
{
    public function index()
    {
        
        return view('FrontendClient.livredor');
    }
}