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
      <h2  style="color:black;">Ajouter un nouveau Voyage organisé</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
       <a class="btn btn-primary" href="{{ route('voyage.index')}}">retoure</a>
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
  
  <form action="{{ route('voyage.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    
    <div class="card" style="background-color:white; border:none;" >
      <div class="card-body">
        
        
        <form class="forms-sample">
          <div class="form-group row">
            <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Image</label>
            <div class="col-sm-9"  >
                <input type="file" name="image" class="form-control" id="exampleInputImage" placeholder="image" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"  style="color:black;">titre</label>
            <div class="col-sm-9" >
                <input type="text" name="titre" class="form-control"  id="exampleInputEmail2" placeholder="Titre" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label"  style="color:black;" >Destination</label>
            <div class="col-sm-9" style="color:black;">
                <input type="text" name="destination" class="form-control" id="exampleInputMobile" placeholder="Destination" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label"  style="color:black;" > Pays</label>
            <div class="col-sm-9" style="color:black;">
                <input type="textarea" name="pays" class="form-control" id="exampleInputPassword2" placeholder="Pays " style="background-color:white;color:black;">
            </div>
          </div>
          
          
          <div class="form-group row">
            <label for="exampleInputConfirmPasswordaa" class="col-sm-3 col-form-label" style="color:black;">Thems</label>
            <div class="col-sm-9" >
                <input type="text" name="thems" class="form-control" id="exampleInputConfirmPasswordaa" placeholder="Thems" style="background-color:white;color:black;">
            </div>
</div>
            
            <div class="form-group row" >
            <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Prix</label>
            <div class="col-sm-9" >
                <input type="text" name="prix" class="form-control" id="exampleInputArrangement" placeholder="prix" style="background-color:white;color:black;">
            </div>
</div>
            <div class="form-group row" >
            <label for="exampleInputConfirm" class="col-sm-3 col-form-label" style="color:black;">Date de debut</label>
            <div class="col-sm-9" >
                <input type="date" name="date_debut" class="form-control" id="exampleInputConfirm" placeholder="date_debut" style="background-color:white;color:black;">
            </div>
</div>
            <div class="form-group row" >
            <label for="exampleInputPassword4" class="col-sm-3 col-form-label"  style="color:black;" >Date de fin</label>
            <div class="col-sm-9" style="color:black;">
                <input type="date" name="date_fin" class="form-control" id="exampleInputPassword4" placeholder="date_fin" style="background-color:white;color:black;">
            </div>
          </div>
          
          
          
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Envoyer </button>
      </div>




      
  </form>
 @endsection
  

