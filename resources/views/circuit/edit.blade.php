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
      <h2 style="color:black;">Modifier</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
      <a class="btn btn-primary" href="{{ route('circuit.index') }}">retoure</a>
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
<form action="{{ url('circuit/update')}}/{{$circuit->id}}" method="Post">
  @csrf


  <div class="card" style="background-color:white; border:none">
    <div class="card-body">
      <form class="forms-sample">
        <div class="form-group row">
          <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Image</label>
          <div class="col-sm-9">
            <input type="file" name="image" value="{{ $circuit->image}}" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="color:black;">Titre</label>
          <div class="col-sm-9">
            <input type="text" name="titre" value="{{ $circuit->titre}}" class="form-control" id="exampleInputEmail2" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Circuit</label>
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="description" value="{{ $circuit->description}}" class="form-control" id="exampleInputMobile" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label" style="color:black;">Programme</label>
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="programme" value="{{ $circuit->programme}}" class="form-control" id="exampleInputPassword2" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputConfirmPasswordaa" class="col-sm-3 col-form-label" style="color:black;">Ville de départ</label>
          <div class="col-sm-9">
            <input type="text" name="ville_depart" value="{{ $circuit->ville_depart}}" class="form-control" id="exampleInputConfirmPasswordaa" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="form-group row">
          <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Ville d'arrivé</label>
          <div class="col-sm-9">
            <input type="text" name="ville_arrive" value="{{ $circuit->ville_arrive}}" class="form-control" id="exampleInputArrangement" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Nombre de personnes</label>
          <div class="col-sm-9">
            <input type="text" name="nb_personne" value="{{ $circuit->nb_personne}}" class="form-control" id="exampleInputArrangement" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="form-group row">
          <label for="exampleInputConfirm" class="col-sm-3 col-form-label" style="color:black;">Prix</label>
          <div class="col-sm-9">
            <input type="text" name="circuit" value="{{ $circuit->prix}}" class="form-control" id="exampleInputConfirm" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Logement</label>
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="logement" value="{{ $circuit->logement}}" class="form-control" id="exampleInputPassword4" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Date de debut</label>
          <div class="col-sm-9" style="color:black;">
            <input type="date" name="date_debut" value="{{ $circuit->date_debut}}" class="form-control" id="exampleInputPassword4" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Date de fin</label>
          <div class="col-sm-9" style="color:black;">
            <input type="date" name="date_fin" value="{{ $circuit->date_fin}}" class="form-control" id="exampleInputPassword4" style="background-color:white;color:black;">
          </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>


</form>


@endsection