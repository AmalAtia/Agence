@extends('Frontend.master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                        <h2 style="color:black;">Détails de chambre </h2>
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
<div class="card" style="background-color:white; border:none">
        <div class="card-body" style="color:black;">
                <h5 class="card-text">Type : {{ $chambre->type }}</h5>
                <p class="card-text">Image :</br> <img src="{{asset('chambres')}}/{{$chambre->image}}" alt="Image"></p>

                <p class="card-text">Nombre Adultes : {{ $chambre->nb_adult }}</p>
                <p class="card-text">Nombre enfants : {{ $chambre->nb_enfant }}</p>

                <?php
                $arr = \App\Models\Arrangement::where('room_id', $chambre->id)->first();

                ?>
                @if(isset($arr->prix_log_simple))
                <span class="badge badge-pill badge-info">Longement simple </span>
                @endif
                @if(isset($arr->prix_dp))
                <span class="badge badge-pill badge-info">Demi Pension</span>
                @endif
                @if(isset($arr->prix_log_pet_dej))
                <span class="badge badge-pill badge-info">Longement petit déjeuner </span>
                @endif
                @if(isset($arr->prix_all_inclus))
                <span class="badge badge-pill badge-info"> All inclusive </span>
                @endif
                @if(isset($arr->prix_all_soft_drink))
                <span class="badge badge-pill badge-info">All inclusive Soft Drink</span>
                @endif
                @if(isset($arr->prix_pension_comp))
                <span class="badge badge-pill badge-info">Pension complete</span>
                @endif



                <p class="card-text">Hôtel: {{ $chambre->hotel->name }}</p>


        </div>
</div>

@endsection