@extends('Frontend.master')
@section('content')
   <div class="row">
       <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2 style="color:black;">Modifier</h2>
          </div>
          <div class="pull-right" style="float:right; margin-bottom:2%;">
            <a class="btn btn-primary" href="{{ route('favoris.index') }}">retoure</a>
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
    <form action="{{ url('favoris/update')}}/{{$favoris->id}}" method="Post">
      @csrf 
     
        
      <div class="card" style="background-color:white; border:none" >
      <div class="card-body">
      <form class="forms-sample">
      
      <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"  style="color:black;">Id de l'hôtel</label>
            <div class="col-sm-9" >
            <input type="text" name="id_hotel" value="{{ $favoris->id_hotel}}"  class="form-control"  id="exampleInputEmail2"  style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label"  style="color:black;" >Id de chambre</label>
            <div class="col-sm-9" style="color:black;">
                <input type="text" name="id_chambre" value="{{ $favoris->id_chambre}}" class="form-control" id="exampleInputMobile"  style="background-color:white;color:black;">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label"  style="color:black;" >Id de vol</label>
            <div class="col-sm-9" style="color:black;">
                <input type="textarea" name="Id de vol" value="{{ $favoris->id_vol}}" class="form-control" id="exampleInputPassword2"  style="background-color:white;color:black;">
            </div>
          </div>
          
          



          
          
          
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
         </div> 
      </div>   

        
    </form>

    
@endsection
  
