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
            <h2 style="color:black;">Modifier les permissions </h2>
          </div>
          <div class="pull-right" style="float:right; margin-bottom:2%;">
            <a class="btn btn-primary" href="{{ route('permission.index') }}"> retour</a>
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


{!! Form::model($permission, ['method' => 'POST','route' => ['permission.update', $permission->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group" style="background-color:white;">
            <strong>Nom:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control' ,'style' => 'color:white')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</div>
{!! Form::close() !!}


@endsection
