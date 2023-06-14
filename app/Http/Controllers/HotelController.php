<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Supplement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:hotel-list|hotel-create|hotel-edit|hotel-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:hotel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:hotel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:hotel-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $hotels = Hotel::paginate(10);
        return view('hotels.index', compact('hotels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Supplements = Supplement::get();
        return view('hotels.create', compact('Supplements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'nb_etoile' => 'required',
            'short_description' => 'required',
            'adresse' => 'required',

           
            'prix' => 'required',
          
            'supplement_id' => 'required',
           


        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = $file->getClientOriginalName() . '.' . $file->extension();

            $file->move(public_path('hotels'), $imageName);
        }

        Hotel::create([
            'image' => $imageName,
            'name' => $request->name,
            'nb_etoile' => $request->nb_etoile,
            'short_description' => $request->short_description,
            'adresse' => $request->adresse,

          
            'prix' => $request->prix,
            'promo' => $request->promo,
            'date_deb' => $request->date_deb,
            'date_fin' => $request->date_fin,
            'supplement_id' => json_encode($request->supplement_id),
            






        ]);
        return redirect()->route('hotels.index')
            ->with('success', 'Hotel créé avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $hotel = Hotel::find($id);
        return view('hotels.show', compact('hotel'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $supplements = Supplement::get();


        return view('hotels.edit', compact('hotel', 'supplements'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([]);
        $hotel = Hotel::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = $file->getClientOriginalName() . '.' . $file->extension();

            $file->move(public_path('hotels'), $imageName);

            $hotel->image = $imageName;
        }


        $hotel->name = $request->name;
        $hotel->nb_etoile = $request->nb_etoile;
        $hotel->short_description = $request->short_description;
        $hotel->adresse = $request->adresse;
        $hotel->prix = $request->prix;
        $hotel->promo = $request->promo;
        $hotel->date_deb = $request->date_deb;
        $hotel->date_fin = $request->date_fin;
        $hotel->supplement_id = $request->supplement_id;
       

        $hotel->update();
        return redirect()->route('hotels.index')
            ->with('success', 'Mis à jour avec succés');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect()->route('hotels.index')
            ->with('success', 'Hotel supprimé avec succés');
    }
}
