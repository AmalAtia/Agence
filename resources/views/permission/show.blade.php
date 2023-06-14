@extends('Frontend.master')
@section('content')
<div class="row">
       <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2 style="color:black;">Détails de permission </h2>
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

       
    

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom:</strong></br>
            {{ $permission->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong></br>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection