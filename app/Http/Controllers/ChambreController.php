<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Arrangement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:chambre-list|chambre-create|chambre-edit|chambre-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:chambre-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:chambre-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:chambre-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $chambres = Chambre::paginate(10);
        return view('chambre.index', compact('chambres'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::get();
        $arrangements = Arrangement::get();
        return view('chambre.create', compact('hotels','arrangements'));

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
            'type' => 'required',
            'nb_de_lit' => 'required',
            'nb_adult' => 'required',
            'nb_enfant' => 'required',
            'prix_par_personne' => 'required',
            'hotel_id' => 'required',
            'qte' => 'required',
            

            

        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = $file->getClientOriginalName() . '.' . $file->extension();

            $file->move(public_path('chambres'), $imageName);
        }

        Chambre::create([
            'image' => $imageName,
            'type' => $request->type,
            'nb_de_lit' => $request->nb_de_lit,
            'nb_adult' => $request->nb_adult,
            'nb_enfant' => $request->nb_enfant,
            'prix_par_personne' => $request->prix_par_personne,
            'hotel_id' => $request->hotel_id,
            'qte' => $request->qte,
          




        ]);
        return redirect()->route('chambre.index')
            ->with('success', 'Chambre créé avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $chambre = Chambre::find($id);
        return view('chambre.show', compact('chambre'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $chambre = Chambre::find($id);
        $hotels = Hotel::get();
        $arrangements = Arrangement::get();
        return view('chambre.edit', compact('chambre', 'hotels','arrangements'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([]);
     
        $chambre = Chambre::find($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $imageName = $file->getClientOriginalName() . '.' . $file->extension();

            $file->move(public_path('chambres'), $imageName);

            $chambre->image = $imageName;
        }


        
       
        $chambre->type = $request->type;
        $chambre->nb_de_lit = $request->nb_de_lit;
        $chambre->prix_par_personne = $request->prix_par_personne;
        $chambre->nb_adult = $request->nb_adult;
        $chambre->nb_enfant = $request->nb_enfant;
        $chambre->hotel_id = $request->hotel_id;
        $chambre->qte = $request->qte;
       

        $chambre->update();
        
        return redirect()->route('chambre.index')
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
        $chambre = Chambre::find($id);
        $chambre->delete();
        return redirect()->route('chambre.index')
            ->with('success', 'Hotel supprimé avec succés');
    }
}
