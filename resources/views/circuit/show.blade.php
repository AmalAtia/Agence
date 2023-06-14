@extends('Frontend.master')
@section('content')
   <div class="row">
       <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2 style="color:black;">Détails de Circuit </h2>
          </div>
          
       </div>
   </div>
    
   @if ($errors->any())
       <div class="alert alert-danger">
         <strong>Whoops!</strong>There were some problems with your input.<br><br>
         <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
             @endforeach
         </ul> 
      </div>
    @endif
    <div class="card" style="background-color:white; border:none" >
      <div class="card-body" style="color:black;">
        <h5 class="card-text">Titre : {{ $circuit->titre }}</h5>
        <p class="card-text">Description : {{ $circuit->description }}</p>
        <p class="card-text">Programme : {{ $circuit->programme }}</p>
        <p class="card-text">Ville de depart : {{ $circuit->ville_depart }}</p>
        <p class="card-text">Ville d'arrivé: {{ $circuit->ville_arrive }}</p>
        <p class="card-text">Nombre de personnes: {{ $circuit->nb_personne }}</p>
        <p class="card-text">Prix: {{ $circuit->prix }}</p>
        <p class="card-text">logement: {{ $circuit->logement }}</p>
        <p class="card-text">Date de debut: {{ $circuit->date_debut }}</p>
        <p class="card-text">Date de fin: {{ $circuit->date_fin }}</p>






        
 
        </div>
</div>
    
@endsection