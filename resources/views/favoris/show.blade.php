@extends('favoris.layout')
@section('content')
<div class="card">
  <div class="card-header">Page des Favoris</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Id de l'hôtel: {{ $favoris->id_hotel }}</h5>
        <p class="card-text">Id de chambre : {{ $favoris->id_chambre }}</p>
        <p class="card-text">Id de vol : {{ $favoris->id_vol }}</p>
       





        
  </div>
      
    </hr>
  
  </div>
</div>