@extends('Frontend.master')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:black;">Détails del'hôtel </h2>
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
<div class="card" style="background-color:white; border:none">
  <div class="card-body" style="color:black;">
    <h5 class="card-text">Nom de l'hôtel : {{ $hotel->name }}</h5>
    <p class="card-text">Image :</br> <img src="{{asset('hotels')}}/{{$hotel->image}}" alt="Image"></p>
    <p class="card-text">petite description : {{ $hotel->short_description }}</p>
    <p class="card-text">Adresse : {{ $hotel->adresse }}</p>
    <p class="card-text">Supplement: {{ $hotel->supplement->nom  }}</p>
   
    <p class="card-text">Option: {{ $hotel->option }}</p>
    <p class="card-text">Option: {{ $hotel->prix }}</p>
    <p class="card-text">Promo: {{ $hotel->promo }}</p>
    <p class="card-text">Début promo: {{ $hotel->date_deb }}</p>
    <p class="card-text">Fin promo: {{ $hotel->date_fin }}</p>
    <p class="card-text">Maps: {{ $hotel->maps }}</p>


  </div>
</div>

@endsection
