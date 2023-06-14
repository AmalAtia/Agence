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
      <a class="btn btn-primary" href="{{ route('chambre.index') }}">retoure</a>
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
<form action="{{ url('chambre/update')}}/{{$chambre->id}}" method="Post" enctype="multipart/form-data">
  @csrf


  <div class="card" style="background-color:white; border:none">
    <div class="card-body">
      <form class="forms-sample">
        <div class="form-group row">
          <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Image</label>
          <div class="col-sm-9">
            <input type="file" name="image" value="{{ $chambre->image}}" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="color:black;">Type</label>
          <div class="col-sm-9">
            <input type="text" name="type" value="{{ $chambre->type}}" class="form-control" id="exampleInputEmail2" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Hôtel</label>
          <div class="col-sm-9" style="color:black;">
            <select name="hotel_id" id="chambre" class="form-control" style="background-color: white;color: grey; border: solid 1px black;">
              @foreach($hotels as $hotel)
              <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Nombre des lits</label>
          <div class="col-sm-9" style="color:black;">
            <input type="integer" name="nb_de_lit" value="{{ $chambre->nb_de_lit}}" class="form-control" id="exampleInputMobile" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Nombre Adultes</label>
          <div class="col-sm-9" style="color:black;">
            <input type="integer" name="nb_adult" value="{{ $chambre->nb_adult}}" class="form-control" id="exampleInputMobile" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Nombre Enfants</label>
          <div class="col-sm-9" style="color:black;">
            <input type="integer" name="nb_enfant" value="{{ $chambre->nb_enfant}}" class="form-control" id="exampleInputMobile" style="background-color:white;color:black;">
          </div>
        </div>


        <div class="form-group row">
          <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Prix par personne</label>
          <div class="col-sm-9">
            <input type="text" name="prix_par_personne" value="{{ $chambre->prix_par_personne}}" class="form-control" id="exampleInputArrangement" style="background-color:white;color:black;">
          </div>
        </div>




        <div class="form-group row">
          <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Quantités des chambres</label>
          <div class="col-sm-9">
            <input type="integer" name="qte" value="{{ $chambre->qte}}" class="form-control" id="exampleInputQte" style="background-color:white;color:black;">
          </div>
        </div>







        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>


</form>


@endsection