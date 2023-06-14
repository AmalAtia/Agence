@extends('Frontend.master')
@section('styles')
<style>
   .btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color:#1c9cea;
    cursor: pointer;
    font-size: 20px;
    font-family: unset;
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:black;">Ajouter un nouveau Circuit</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
      <a class="btn btn-primary" href="{{ route('circuit.index')}}">retoure</a>
    </div>
  </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> there were some problems with your input. <br><br>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}} </li>
    @endforeach
  </ul>
</div>

@endif

<form action="{{ route('circuit.store')}}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="card" style="background-color:white; border:none;">
    <div class="card-body">


      <form class="forms-sample">
        <div class="form-group row">
          <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Image</label>
          <div class="col-sm-9">
            <input type="file" name="image" class="form-control" id="exampleInputImage" placeholder="image" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="color:black;">Titre</label>
          <div class="col-sm-9">
            <input type="text" name="titre" class="form-control" id="exampleInputEmail2" placeholder="Titre" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Description</label>
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="description" class="form-control" id="exampleInputMobile" placeholder="Description" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label" style="color:black;">Programme</label>
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="programme" class="form-control" id="exampleInputPassword2" placeholder="Programme " style="background-color:white;color:black;">
          </div>
        </div>


        <div class="form-group row">
          <label for="exampleInputConfirmPasswordaa" class="col-sm-3 col-form-label" style="color:black;">Ville de départ</label>
          <div class="col-sm-9">
            <input type="text" name="ville_depart" class="form-control" id="exampleInputConfirmPasswordaa" placeholder="Ville de départ" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="form-group row">
          <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Ville d'arrivé</label>
          <div class="col-sm-9">
            <input type="text" name="ville_arrive" class="form-control" id="exampleInputArrangement" placeholder="Ville d'arrivé" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="form-group row">
          <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Nombre de personnes</label>
          <div class="col-sm-9">
            <input type="integer" name="nb_personne" class="form-control" id="exampleInputArrangement" placeholder="Nombre de personnes" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="form-group row">
          <label for="exampleInputConfirm" class="col-sm-3 col-form-label" style="color:black;">Prix</label>
          <div class="col-sm-9">
            <input type="text" name="prix" class="form-control" id="exampleInputConfirm" placeholder="Prix" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Logement</label>
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="logement" class="form-control" id="exampleInputPassword4" placeholder="Logement" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Date de début</label>
          <div class="col-sm-9" style="color:black;">
            <input type="date" name="date_debut" class="form-control" id="exampleInputPassword4" placeholder="Date de début" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Date de fin</label>
          <div class="col-sm-9" style="color:black;">
            <input type="date" name="date_fin" class="form-control" id="exampleInputPassword4" placeholder="Date de fin" style="background-color:white;color:black;">
          </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer </button>
        </div>





      </form>
      @endsection