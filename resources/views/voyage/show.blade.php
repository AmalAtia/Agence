@extends('Frontend.master')
@section('content')
   <div class="row">
       <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2 style="color:black;">Détails de voyage </h2>
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
    <div class="card" style="background-color:white; border:none" >
      <div class="card-body" style="color:black;">
        <h5 class="card-text">Titre : {{ $voyage->titre }}</h5>
        <p class="card-text">Image :</br><img src="{{asset('voyage')}}/{{$voyage->image}}" style="width:400px; height:200px;" alt="Image"></p>
        <p class="card-text">Destination :{{$voyage->destination }}</p>
        <p class="card-text">Pays :{{ $voyage->pays }}</p>
        <p class="card-text">Thems :{{ $voyage->thems }}</p>
        <p class="card-text">Prix :{{ $voyage->prix }}</p>
        <p class="card-text">Date de debut :{{ $voyage->date_debut }}</p>
        <p class="card-text">Date de fin :{{ $voyage->date_fin }}</p>
        




 
        </div>
</div>
    
@endsection