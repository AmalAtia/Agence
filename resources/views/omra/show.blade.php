@extends('Frontend.master')
@section('content')
   <div class="row">
       <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2 style="color:black;">Détails de l'Omra </h2>
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
        <h5 class="card-text">Titre : {{ $omra->titre }}</h5>
        <p class="card-text">Image :</br> <img src="{{asset('omra')}}/{{$omra->image}}"  style="width:400px; height:200px;"alt="Image"></p>
        <p class="card-text">Description : {{ $omra->description }}</p>
        <p class="card-text">Date de depart : {{ $omra->date_depart}}</p>
        <p class="card-text">Date d'arrivé: {{ $omra->date_arrive }}</p>
        <p class="card-text">prix: {{ $omra->prix }}</p>
        <p class="card-text">Promo: {{ $omra->promo }}</p>
        <p class="card-text">Début promo: {{ $omra->date_deb }}</p>
        <p class="card-text">Fin promo: {{ $omra->date_fin }}</p>
        

  




        
        </div>
</div>
    
@endsection