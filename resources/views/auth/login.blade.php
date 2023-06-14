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
    font-family: cursive;
}
</style>
@endsection

@section('contentlogin')
<div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto" style="background-color:rgba(1,1,1,0.1)">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Connexion</h3>
                <form method="POST" action="{{ route('login') }}">
                @csrf

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control p_input @error('email') is-invalid @enderror" style="background-color:beige;">
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
           
                    @enderror
                   
                  </div>
                  <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password"  name="password" class="form-control p_input @error('password') is-invalid @enderror" style="background-color:beige;">
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
           
                    @enderror
                    
                  </div>
                 
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" style="font-family: unset;">Connexion</button>
                  </div>
                  
                  <p class="sign-up">vous n'avez pas un compte?<a href="{{ route('register') }}"> créer nouveau compte</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>

@endsection
