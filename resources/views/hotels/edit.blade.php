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
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:black;">Modifier</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
      <a class="btn btn-primary" href="{{ route('hotels.index') }}">retoure</a>
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
<form action="{{ url('hotel/update')}}/{{$hotel->id}}" method="Post">
  @csrf


  <div class="card" style="background-color:white; border:none">
    <div class="card-body">
      <form class="forms-sample">
        <div class="form-group row">
          <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Image</label>
          <div class="col-sm-9">
            <input type="file" name="image" value="{{ $hotel->image}}" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="color:black;">Nom d'hôtel</label>
          <div class="col-sm-9">
            <input type="text" name="name" value="{{ $hotel->name}}" class="form-control" id="exampleInputEmail2" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">nombre des étoiles</label>
          <div class="col-sm-9" style="color:black;">
            <input type="integer" name="nb_etoile" value="{{ $hotel->nb_etoile}}" class="form-control" id="exampleInputMobile" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label" style="color:black;">petite description</label>
          <div class="col-sm-9" style="color:black;">
            <input type="textarea" name="short_description" value="{{ $hotel->short_description}}" class="form-control" id="exampleInputPassword2" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputConfirmPasswordaa" class="col-sm-3 col-form-label" style="color:black;">Adresse</label>
          <div class="col-sm-9">
            <input type="text" name="adresse" value="{{ $hotel->adresse}}" class="form-control" id="exampleInputConfirmPasswordaa" style="background-color:white;color:black;">
          </div>
        </div>
        @foreach( $supplements as $supplement)
            {{dd($supplement)}}
            @endforeach
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Supplement</label>
          <div class="col-sm-9" style="color:black;">
            <select name="supplement_id[]" id="hotel" multiple="multiple" class="form-control" style="background-color: white;color: grey; border: solid 1px black; height: 100px;">
             
            @foreach( $supplements as $supplement)
            {{dd($supplements)}}
              <option value="{{  $supplement->id }}" @foreach(json_decode($hotel->supplement_id) as $sup) {{($supplement->id==$sup) ? 'selected':''}} @endforeach>{{ $supplement->nom }}</option>
              @endforeach
            </select>
          </div>
        </div>

        
       
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Prix</label>
          <div class="col-sm-9" style="color:black;">
            <input type="textarea" name="prix" value="{{ $hotel->prix}}" class="form-control" id="exampleInputPassword4" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Promo</label>
          <div class="col-sm-9" style="color:black;">
            <input type="textarea" name="promo" value="{{ $hotel->promo}}" class="form-control" id="exampleInputPassword4" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Début promo</label>
          <div class="col-sm-9" style="color:black;">
            <input type="date" name="date_deb" value="{{ $hotel->date_deb}}" class="form-control" id="exampleInputPassword7" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword4" class="col-sm-3 col-form-label" style="color:black;">Fin promo</label>
          <div class="col-sm-9" style="color:black;">
            <input type="date" name="date_fin" value="{{ $hotel->date_fin}}" class="form-control" id="exampleInputPassword6" style="background-color:white;color:black;">
          </div>
        </div>
       



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>


</form>


@endsection