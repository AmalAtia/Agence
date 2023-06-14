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
        <h2 style="color:black;">Modifier agent</h2>
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

      <form action="{{ url('users/update')}}/{{$user->id}}" method="Post">
        @csrf
        <div class="card" style="background-color:white; border:none">
          <div class="card-body">

            <div class="form-group row">
              <label for="exampleInputName" class="col-sm-1 col-form-label" style="color:black;">Nom:</label>
              <div class="col-sm-4">
                <input type="text" name="name" value="{{ $user->name}}" class="form-control" id="exampleInputName" style="background-color:white;color:black;">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputEmail" class="col-sm-1 col-form-label" style="color:black;">Email:</label>
              <div class="col-sm-4">
                <input type="email" name="email" value="{{ $user->email}}" class="form-control" id="exampleInputEmail" style="background-color:white;color:black;">
              </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-9">
              <div class="form-group">
                <p style="color:black; width: 34px;margin-left: -14px;">Role:</p>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple','style' => 'color: black; background-color: white; border:1px solid black; margin-left: 63px;margin-top: -30px;')) !!}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection