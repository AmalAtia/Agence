@extends('Frontend.master')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:black;">Ajouter un arrangement</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
      <a class="btn btn-primary" href="{{ route('hotels.index')}}">retour</a>
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

<form action="{{ route('arrangement.store')}}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="card" style="background-color:white; border:none;">
    <div class="card-body">


      <form class="forms-sample">

        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="color:black;">Nom d'arrangement</label>
          <div class="col-sm-9">
            <input type="text" name="nom" class="form-control" id="exampleInputEmail2" placeholder="Nom d'arrangement" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;">Prix</label>
          <div class="col-sm-9" style="color:black;">
            <input type="integer" name="prix" class="form-control" id="exampleInputMobile" placeholder="prix" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer </button>
        </div>
      </form>
      @endsection