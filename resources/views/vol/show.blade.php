@extends('Frontend.master')
@section('content')
   <div class="row">
       <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2 style="color:black;">Détails de vol </h2>
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
        <h5 class="card-text">Numéro de vol : {{ $vol->num }}</h5>
        <p class="card-text">Type de vol : {{ $vol->type_vol }}</p>
        <p class="card-text">Nombre de billets: {{ $vol->nb_billet }}</p>
        <p class="card-text">Date d aller: {{ $vol->date_aller }}</p>
        <p class="card-text">Date de retour: {{ $vol->date_retour }}</p>
        <p class="card-text">Nombre de personnes: {{ $vol->nb_personne }}</p>
        <p class="card-text">Ville de depart: {{ $vol->ville_depart }}</p>
        <p class="card-text">Ville d arrivé: {{ $vol->ville_arrive }}</p>
        <p class="card-text">Prix: {{ $vol->prix }}</p>
        




        </div>
</div>
    
@endsection