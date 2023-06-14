@extends('Frontend.master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="color:black;"> Afficher Agent</h2>
        </div>
        <div class="pull-right"  style="float:right; margin-bottom:2%;">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> retour</a>
        </div>
    </div>
</div>


<div class="card" style="background-color:white; border:none;" >
      <div class="card-body">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h3 style="color:black;">Name:</h3>
  <h6 style="color:black;">{{ $user->name }}</h6>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h3 style="color:black;">Email:</h3>
<h6 style="color:black;"> {{ $user->email }}</h6>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <h3 style="color:black;">Rôle:</h3>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection