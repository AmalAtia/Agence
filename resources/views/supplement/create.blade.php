@extends('Frontend.master')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:black;">Ajouter un supplement</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
      <a class="btn btn-primary" href="{{ route('supplement.index')}}">retour</a>
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

<form action="{{ route('supplement.store')}}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="card" style="background-color:white; border:none;">
    <div class="card-body">


      <form class="forms-sample">

        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="color:black;">Nom de supplement</label>
          
          <div class="col-sm-9">
            <input type="text" name="nom" class="form-control" id="exampleInputEmail2" placeholder="Nom de supplement" style="background-color:white;color:black;">
          </div>
        </div>
        <div class="form-group row">
      
          <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color:black;"><a href="https://fontawesome.com/icons" target="_blank" >Cliquez ici pour choisir votre icone </a></label>
         
          <div class="col-sm-9" style="color:black;">
            <input type="text" name="icon" class="form-control" id="exampleInputMobile" placeholder="Icon" style="background-color:white;color:black;">
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer </button>
        </div>
      </form>
      @endsection