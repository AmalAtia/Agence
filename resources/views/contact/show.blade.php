@extends('Frontend.master')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:black;">Détails de Contact </h2>
    </div>

  </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong>There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="card" style="background-color:white; border:none">
  <div class="card-body" style="color:black;">
    <h5 class="card-text">Titre : {{ $contact->nom }}</h5>
    <p class="card-text">Prix: {{ $contact->email }}</p>
    <p class="card-text">logement: {{ $contact->subject }}</p>
    <p class="card-text">Date de debut: {{ $contact->commentaire }}</p>
  </div>
</div>
<a href="{{route('contact.index')}}">Retour</a>
@endsection