@extends('Frontend.masterclient')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="color:black;">Détails de votre compte</h2>
        </div>

    </div>
</div>
<div class="card" style="background-color:white; border:none">
    <div class="card-body" style="color:black;">

        <p class="card-text">Nom: {{Auth::user()->name}}</p>
        <p class="card-text">Email: {{Auth::user()->email}}</p>

        <a class="btn btn-primary" style="background-color: #26a1eb;" href="{{ route('profile.edit',Auth::user()->id) }}"><i class="mdi mdi-pencil-box-outline"></i></a>

    </div>
</div>

@endsection