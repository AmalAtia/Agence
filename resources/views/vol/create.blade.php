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
      <h2  style="color:black;">Ajouter un nouveau vol</h2>
    </div>
    <div class="pull-right" style="float:right; margin-bottom:2%;">
       <a class="btn btn-primary" href="{{ route('vol.index')}}">retoure</a>
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
  
  <form action="{{ route('vol.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    
    <div class="card" style="background-color:white; border:none;" >
      <div class="card-body">
        
        
        <form class="forms-sample">
          <div class="form-group row">
            <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Numéro de vol</label>
            <div class="col-sm-9"  >
                <input type="text" name="num" class="form-control" id="exampleInputImage" placeholder="numéro de vol" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"  style="color:black;">Type de vol</label>
            <div class="col-sm-9" >
                <input type="text" name="type_vol" class="form-control"  id="exampleInputEmail2" placeholder="Type de vol" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label"  style="color:black;" >Nombre de billets</label>
            <div class="col-sm-9" style="color:black;">
                <input type="text" name="nb_billet" class="form-control" id="exampleInputMobile" placeholder="Nombre de billets" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label"  style="color:black;" >Date d'aller</label>
            <div class="col-sm-9" style="color:black;">
                <input type="datetime-local" name="date_aller" class="form-control" id="exampleInputPassword2" placeholder="Date d'aller" style="background-color:white;color:black;">
            </div>
          </div>
          
          
          <div class="form-group row">
            <label for="exampleInputConfirmPasswordaa" class="col-sm-3 col-form-label" style="color:black;">Date de retour</label>
            <div class="col-sm-9" >
                <input type="datetime-local" name="date_retour" class="form-control" id="exampleInputConfirmPasswordaa" placeholder="Date de retour" style="background-color:white;color:black;">
            </div>
</div>
            
            <div class="form-group row" >
            <label for="exampleInputArrangement" class="col-sm-3 col-form-label" style="color:black;">Nombre de personne</label>
            <div class="col-sm-9" >
                <input type="text" name="nb_personne" class="form-control" id="exampleInputArrangement" placeholder="Nombre de personne" style="background-color:white;color:black;">
            </div>
</div>
            <div class="form-group row" >
            <label for="exampleInputConfirm" class="col-sm-3 col-form-label" style="color:black;">Ville de départ</label>
            <div class="col-sm-9" >
                <input type="text" name="ville_depart" class="form-control" id="exampleInputConfirm" placeholder="Ville de départ" style="background-color:white;color:black;">
            </div>
</div>
            <div class="form-group row" >
            <label for="exampleInputPassword4" class="col-sm-3 col-form-label"  style="color:black;" >Ville d'arrivé</label>
            <div class="col-sm-9" style="color:black;">
                <input type="textarea" name="ville_arrive" class="form-control" id="exampleInputPassword4" placeholder="Ville d'arrivé" style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row" >
            <label for="exampleInputPassword4" class="col-sm-3 col-form-label"  style="color:black;" >Prix</label>
            <div class="col-sm-9" style="color:black;">
                <input type="text" name="prix" class="form-control" id="exampleInputPassword4" placeholder="Prix" style="background-color:white;color:black;">
            </div>
          </div>
          
          
          <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input"> Remember me </label>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Envoyer </button>
      </div>




      
  </form>
 @endsection
  

