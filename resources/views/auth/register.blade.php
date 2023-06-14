@extends('layouts.masterlogin')
@section('styles')
<style>
  .btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #b08eef;
    cursor: pointer;
    font-size: 20px;
    font-family: unset;
    /* margin-top: 20px; */
  }
</style>
@endsection

@section('contentlogin')

<div class="row w-100 m-0">
  <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
    <div class="card col-lg-4 mx-auto" style="background-color:rgba(1,1,1,0.1)">
      <div class="card-body px-5 py-5">
        <h3 class="card-title text-left mb-3 ">Inscription</h3>
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="form-group">
            <label>Nom Prénom</label>
            <input type="text" name="name" class="form-control p_input @error('name') is-invalid @enderror " style="background-color:beige;">

            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>

            @enderror

          </div>
          <div class="form-group">
            <label>Adresse</label>
            <input type="text" name="adresse" class="form-control p_input @error('adresse') is-invalid @enderror " style="background-color:beige;">

            @error('adresse')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>

            @enderror

          </div>
          <div class="form-group">
            <label>Numéro téléphonique</label>
            <input type="text" name="num" class="form-control p_input @error('num') is-invalid @enderror " style="background-color:beige;">

            @error('num')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>

            @enderror

          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control p_input  @error('email') is-invalid @enderror " style="background-color:beige;">
            <div class="text-danger">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>




          <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" class="form-control p_input  @error('password') is-invalid @enderror " style="background-color:beige;">
            <div class="text-danger">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>

              @enderror
            </div>
          </div>

          <div class="form-group">
            <label>mot de passe confirmé</label>
            <input type="password" name="password_confirmation" class="form-control p_input  @error('password_confirmation') is-invalid @enderror " style="background-color:beige;">
            <div class="text-danger">
              @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>

              @enderror
            </div>
          </div>



          <!-- <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Mot de passe oublié</a>
                  </div> -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Connexion</button>
          </div>


        </form>
      </div>
    </div>
  </div>
  @endsection