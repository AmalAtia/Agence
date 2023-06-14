@extends('Frontend.masterclient')
@section('styles')
<style>
    .btn {
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color: #00d25b;
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
            <h2 style="color:black;">Modifiez votre compte</h2>
        </div>

    </div>
</div>
<div class="card" style="background-color:white; border:none">
    <div class="card-body" style="color:black;">
        <form method="POST" action="{{route('profile.update',Auth::user()->id)}}">
            @csrf
            <div class="form-group row">
                <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Nom :</label>
                <div class="col-sm-5">
                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Email : </label>
                <div class="col-sm-5">
                    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Mot de passe : </label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputImage" class="col-sm-3 col-form-label" style="color:black;">Confirme Mot de passe :</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" id="exampleInputImage" style="background-color:white;color:black;">
                </div>
            </div>


           <center> <button type="submit" class="btn btn-primary" value="Modifier">Modifier</button></center>
        </form>


    </div>
</div>
@endsection