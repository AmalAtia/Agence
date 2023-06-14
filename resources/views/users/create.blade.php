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
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card" style="background-color:#fff; border:none;">
    <div class="card-body">

      <div class="pull-left">
        <h2 style="color:black;">Ajouter un nouveau agent</h2>
      </div>
      <div class="row">
        <div class="col-lg-12 margin-tb">
          <div class="pull-right" style="float:right; margin-bottom:2%;">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> retour</a>
          </div>
        </div>
      </div>


      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{ route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card" style="background-color:white; border:none;">
          <div class="card-body">


            <div class="form-group row">
              <label for="exampleInputName" class="col-sm-3 col-form-label" style="color:black;">Nom:</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Nom d'agent" style="background-color:white;color:black;">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputEmail" class="col-sm-3 col-form-label" style="color:black;">Email:</label>
              <div class="col-sm-9">
                <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" style="background-color:white;color:black;">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputPass" class="col-sm-3 col-form-label" style="color:black;">Mot de passe:</label>
              <div class="col-sm-9">
                <input type="password" name="password" class="form-control" id="exampleInputPass" placeholder="Mot de passe" style="background-color:white;color:black;">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputPass1" class="col-sm-3 col-form-label" style="color:black;">Confirmez votre mot de passe:</label>
              <div class="col-sm-9">
                <input type="password" name="confirm-password" class="form-control" id="exampleInputPass1" placeholder="Confirmez votre mot de passe" style="background-color:white;color:black;">
              </div>
            </div>

            <div class="col-xs-12 col-sm-9 col-md-9">
              <div class="form-group">
                <p style="color:black; width: 34px;margin-left: -14px;">Role:</p>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple','style' => 'color: black; background-color: white;border:1px solid black;margin-left: 221px;margin-top: -30px;width: 103%')) !!}
              </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Envoyer </button>
            </div>

          </div>
        </div>
      </form>
    </div>



  </div>
</div>




@endsection