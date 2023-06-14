@extends('FrontendClient.master')
@section('styles')
<style>
    .py-md-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    section {
        display: block;
    }

    .container {
        max-width: 1140px;
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        width: 100%;
        padding-right: var(--bs-gutter-x, .75rem);
        padding-left: var(--bs-gutter-x, .75rem);
        margin-right: auto;
        margin-left: auto;
    }

    .d-sm-block {
        display: block !important;
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x)/ -2);
        margin-left: calc(var(--bs-gutter-x)/ -2);
    }

    .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
    }

    .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x)/ 2);
        padding-left: calc(var(--bs-gutter-x)/ 2);
        margin-top: var(--bs-gutter-y);
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: 0.5rem;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: 700;
        line-height: 1.5;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .col-md-8 {
        flex: 0 0 auto;
        width: 66.6666666667%;
    }

    form {
        display: block;
        margin-top: 0em;
    }

    .card {
        border: #fff;
        border-radius: 0 !important;
        box-shadow: 0 2px 8px rgb(0 0 0 / 10%);
        transition: .5s ease;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }

    .shadow {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1rem 1rem;
    }

    div {
        display: block;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .h3,
    h3 {
        font-size: 22px;
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: 0.5rem;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: 700;
        line-height: 1.5;
    }

    .horizontal-line-5 {
        border-top: 3px solid #fc3;
        width: 5%;
        margin-bottom: 16px;
    }

    .mb-2 {
        margin-bottom: 0.5rem !important;
    }

    .flex-row {
        flex-direction: row !important;
    }

    .d-flex {
        display: flex !important;
    }

    .pe-3 {
        padding-right: 1rem !important;
    }

    label {
        display: inline-block;
    }

    label {
        cursor: default;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    input:not([type="range"]):not([type="color"]) {
        writing-mode: horizontal-tb !important;
    }

    input[type="radio" i] {
        background-color: initial;
        cursor: default;
        appearance: auto;
        box-sizing: border-box;
        margin: 3px 3px 0px 5px;
        padding: initial;
        border: initial;
    }

    .g-3,
    .gy-3 {
        --bs-gutter-y: 1rem;
    }

    .g-3,
    .gx-3 {
        --bs-gutter-x: 1rem;
    }

    .col-6 {
        flex: 0 0 auto;
        width: 50%;
    }

    .form-control,
    .form-select {
        font-size: 14px;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .small,
    small {
        font-size: .875em;
    }

    .col-6 {
        flex: 0 0 auto;
        width: 50%;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .horizontal-line-5 {
        border-top: 3px solid #fc3;
        width: 5%;
        margin-bottom: 16px;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }

    .font-weight-600 {
        font-weight: 600 !important;
    }

    .text-primary {
        color: #ff8000 !important;
    }

    .mb-1 {
        margin-bottom: 0.25rem !important;
    }

    .col-md-2 {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }

    .col-4 {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }

    .col {
        flex: 1 0 0%;
    }

    .col-md-2 {
        flex: 0 0 auto;
        width: 16.6666666667%;
    }

    .hidden-md {
        display: none !important;
    }

    .form-control,
    .form-select {
        font-size: 14px;
    }

    select:not(:-internal-list-box) {
        overflow: visible !important;
    }

    .form-control,
    .form-select {
        font-size: 14px;
    }

    .form-select {
        display: block;
        width: 100%;
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        vertical-align: middle;
        background-color: #fff;
        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    select {
        word-wrap: normal;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .small,
    small {
        font-size: .875em;
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }

    .hidden-md {
        display: none !important;
    }

    .form-control,
    .form-select {
        font-size: 14px;
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: 33.3333333333%;
    }

    .col {
        flex: 1 0 0%;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .bg-light {
        background-color: #f1f1f1 !important;
    }

    .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
    }

    .small,
    small {
        font-size: .875em;
    }

    .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }

    #mode_payement .nav-pills .nav-link.active,
    #mode_payement .nav-pills .show>.nav-link {
        background-color: #70cbf4;
        border: 1px solid #70cbf4;
        color: #fff;
    }

    #mode_payement .nav-pills .nav-link {
        border-radius: 0 !important;
        color: #000;
        position: relative;
        background-color: #f1f1f1;
        border-left: 1px solid #fff;
        border-right: 1px solid #fff;
        border-top: 1px solid #f1f1f1;
        border-bottom: 1px solid #f1f1f1;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: transparent;
        border-bottom: 3px solid #ff8000;
        color: #000;
        cursor: pointer;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #0d6efd;
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none;
    }

    .nav-pills .nav-link {
        border-radius: 0 !important;
        color: #000;
        position: relative;
        cursor: pointer;
    }

    .nav-pills .nav-link {
        border-radius: 0.25rem;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 0.5rem;
        text-decoration: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
    }

    a {
        color: #00327b;
        text-decoration: none;
        background-color: transparent;
    }

    a {
        color: #0d6efd;
        text-decoration: underline;
    }

    #mode_payement .nav-pills .nav-link {
        border-radius: 0 !important;
        color: #000;
        position: relative;
        background-color: #f1f1f1;
        border-left: 1px solid #fff;
        border-right: 1px solid #fff;
        border-top: 1px solid #f1f1f1;
        border-bottom: 1px solid #f1f1f1;
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none;
    }

    .nav-pills .nav-link {
        border-radius: 0 !important;
        color: #000;
        position: relative;
        cursor: pointer;
    }

    .nav-pills .nav-link {
        border-radius: 0.25rem;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 0.5rem;
        text-decoration: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
    }

    a {
        color: #00327b;
        text-decoration: none;
        background-color: transparent;
    }

    a {
        color: #0d6efd;
        text-decoration: underline;
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .fade {
        transition: opacity .15s linear;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .d-flex {
        display: flex !important;
    }

    .me-3 {
        margin-right: 1rem !important;
    }

    .form-check {
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5em;
        margin-bottom: 0.125rem;
    }

    .me-3 {
        margin-right: 1rem !important;
    }

    .form-check {
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5em;
        margin-bottom: 0.125rem;
    }

    .form-check-input[type=radio] {
        border-radius: 50%;
    }

    .form-check .form-check-input {
        float: left;
        margin-left: -1.5em;
    }

    .form-check-input {
        width: 1em;
        height: 1em;
        margin-top: 0.25em;
        vertical-align: top;
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: 1px solid rgba(0, 0, 0, .25);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
        transition: background-color .15s ease-in-out, background-position .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }
</style>
@endsection
@section('content')
<section class="py-md-5">
    <div class="container" id="resa">
        <div class="d-none d-sm-block">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h5 mb-3"> Votre réservation en un seul clic Cela ne vous prend que 2 minutes ! </h1>
                </div>
            </div>
        </div>
       
        <form name="step2h" id="step2h" method="post" action="{{route('send.reservation')}}" novalidate="novalidate" class="fv-form fv-form-bootstrap">
                    <button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                    @csrf
        <div class="row mt-xss-4">
            <!-- BEGIN col-left -->
            <div class="col-md-8" id="recap">


              
                   
                    <input type="hidden" name="customerId" class="customerId" value="{{Auth::user()->id}}">

                    <div class="card shadow mb-4" id="info">
                        <div class="card-body">
                            <div class="mb-3">
                                <!--  Vos informations-->
                                <h2 class="h3"> Vos informations</h2>
                                <div class="horizontal-line-5"></div>


                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class=" form-group">
                                            <label for="firstName">
                                                Nom et Prénom *
                                            </label>
                                            <input id="firstName" name="firstName" placeholder="Prénom" required="" value="{{Auth::user()->name}}" class="form-control" type="text" data-fv-field="firstName">
                                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="firstName" data-fv-result="NOT_VALIDATED" style="display: none;">Le prénom est obligatoire</small><small class="help-block" data-fv-validator="regexp" data-fv-for="firstName" data-fv-result="NOT_VALIDATED" style="display: none;">Le prénom ne peut comporter que des caractères alphabétiques et espaces</small><small class="help-block" data-fv-validator="stringLength" data-fv-for="firstName" data-fv-result="NOT_VALIDATED" style="display: none;">Le prénom doit comporter au minimum 2 et au maximum 25 caractères </small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <label for="email">Votre e-mail* </label>
                                            <input id="email" name="email" class="form-control" placeholder="Votre E-mail ici" value="{{Auth::user()->email}}" type="email" data-fv-field="email">

                                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">L´email est obligatoire</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">L´entrée n´est pas une adresse électronique valide</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" form-group">
                                            <label for="mobile">Mobile*</label>
                                            <input id="mobile" name="mobile" placeholder="Mobile" class="form-control" type="text" required="" value="{{Auth::user()->num_tel}}" data-fv-field="mobile">
                                            <small>(Pour vous contacter si besoin) </small>
                                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="mobile" data-fv-result="NOT_VALIDATED" style="display: none;">Veuillez fournir une valeur</small>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <!--Information sur la chambre-->
                                <h2 class="h3">Informations sur l'occupation</h2>
                                <div class="horizontal-line-5"></div>


                                @if(Request::get('rooms')!=null)

                                @php
                                $v=(Request::get('rooms'));
                                @endphp


                                <?php
                                $hotel_id = 0;
                                $nbrA = 0;
                                $nbrE = 0;
                                $dateD = '';
                                $dateAR = '';
                                $prixT = 0;
                                ?>
                                @if(is_string($v))

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                type
                                            </th>
                                            <th>
                                                Arrangement
                                            </th>
                                            <th>
                                                Prix
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(json_decode($v) as $res)

                                        <?php
                                        $hotel_id = $res->hotel_id;
                                        $nbrA = $res->nbA;
                                        $nbrE = $res->nbrCh;
                                        $dateD = $res->dateD;
                                        $dateAR = $res->dateAR;
                                        $prixT = $res->prixT;
                                        ?>
                                        <tr>
                                            <td>
                                                {{$res->nbrCh}} x {{$res->name}}
                                            </td>
                                            <td>
                                                {{$res->arrangement}}
                                            </td>
                                            <td>
                                                {{$res->prix}} DT
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <input type="hidden" name="rooms" value="{{$v}}">
                                @endif
                                @endif
                            </div>

                          
                            <!--Mode de paiement -->
                            <div class="mb-3" id="mode_payement">
                                <h2 class="h3">Paiement l'agence</h2>
                                <div class="horizontal-line-5"></div>

                                <div class="d-flex mb-3">
                                    <div class="form-check me-3">
                                        <input class="form-check-input payment" type="radio" name="modePayment" id="modePayment1" mode="AGV" checked="" value="1">
                                        <label class="form-check-label" for="modePayment1">
                                            Je paie le montant total à l'agence <strong></strong>
                                        </label>
                                    </div>
                                </div>



                            </div>
                            <!-- END Mode de paiement -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-none d-sm-block">
                                        <button type="button" onclick="history.back()" class="btn  btn-light rounded-0">Retour</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 text-end">

                                    <button type="submit" class="btn btn-secondary  btn-block rounded-0 btn-resa">Confirmer votre réservation</button>
                                </div>
                            </div>
                            <!--./Informations complémentaires-->
                        </div>
                    </div>
              
                <small class="help-block" data-fv-validator="notEmpty" data-fv-for="title" data-fv-result="NOT_VALIDATED" style="display: none;">Ce champs est obligatoire</small>
            </div>
            <!-- END  -->

            <!-- BEGIN col-right -->
            @if(is_string($v))
            <div class="col-md-4">
                <div>
                    <!-- class="collapse d-md-block " id="collapseRecap" -->
                    <div class="card shadow mb-md-3">
                        <div class="card-body">
                            <div class="hidden-md mb-2 ">
                                <div class="d-flex pb-2 border-bottom">
                                    <div class="font-weight-600 align-self-center"> Détails réservation </div>
                                    <a class="ms-auto ico-close" data-bs-toggle="collapse" href="#collapseRecap" aria-expanded="true" aria-controls="collapseRecap"> </a>
                                </div>
                            </div>
                            <h3 class="h4 hidden-sm"> Détails de votre réservation</h3>
                            <?php

                            $hotel = \App\Models\Hotel::find($hotel_id);
                            ?>

                            <input type="hidden" name="hotel_id" value="{{$hotel_id}}">
                            <input type="hidden" name="prixT" value="{{$prixT}}">
                            <div class="row ">
                                <div class="col-md-12">
                                    <center> <img src="{{asset('hotels/'.$hotel->image)}}" style="width: 81%;height: 68%;" class="img-fluid h-200 h-hotel-100 "></center>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12"><!-- col-md-7 mt-1 -->
                                            <h4 class="h5">
                                                {{$hotel->name}}
                                                @for($i=1;$i<=$hotel->nb_etoile;$i++)
                                                    <small class="rating d-inline-block">

                                                        <i class="fas fa-star"></i>
                                                    </small>
                                                    @endfor
                                            </h4>
                                            <div class="mb-3">
                                                <div class="text-bleu">{{$hotel->adresse}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                    $dep = Carbon\Carbon::parse($dateD);
                                    $arr = Carbon\Carbon::parse($dateAR);
                                    $nuit = $arr->diffInDays($dep);

                                    @endphp

                                    <input type="hidden" name="dateD" value="{{$dateD}}">
                                    <input type="hidden" name="dateAR" value="{{$dateAR}}">
                                    <input type="hidden" name="adults" value="{{$nbrA}}">
                                    <input type="hidden" name="enfant" value="{{$nbrE}}">
                                    <input type="hidden" name="nb_nuit" value="{{$nuit}}">

                                    <div class="d-flex mb-2">Date d'arrivée :<span class="ms-auto font-weight-600">{{date('d/m/Y',strtotime($dateD))}}</span></div>
                                    <div class="d-flex mb-2">Date départ : <span class="ms-auto font-weight-600">{{date('d/m/Y',strtotime($dateAR))}}</span> </div>
                                    <div class="d-flex mb-2">Nombre de nuits :<span class="ms-auto font-weight-600">{{$nuit}} nuits</span> </div>
                                </div>
                            </div>

                            <div class="bg-light p-3 border-top">
                                <h3 class="h4">Détail Tarifs</h3>



                                <div class="mt-2"><span>Occupation :</span> <span>{{$nbrA}} adults</span><br>
                                    <span>{{$nbrE}} enfant(s)</span>

                                </div>

                            </div>
                            <div class="my-2">

                            </div>



                            <div class="d-flex justify-content-between mt-3">
                                <div class="align-self-center">
                                    Montant Total &nbsp;&nbsp;
                                </div>
                                <div class="price-T font-weight-600 font-22">
                                    {{$prixT}} DT
                                </div>
                            </div>




                            <hr>

                            <p class="text-success font-weight-600">1 Million de tunisiens servis et satisfaits. On attend que vous. </p>

                        </div>
                    </div>
                </div>

                <div class="alert alert-primary alert-dismissible" role="alert" style="display:none">
                    <div class="d-flex">
                        <p class="font-weight-500 mb-1 trackingSearch"></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <div class="alert alert-primary alert-dismissible" role="alert" style="display:none">
                    <div class="d-flex">
                        <p class="font-weight-500 mb-1 trackingPendingBook"></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <div class="alert alert-danger alert-dismissible" role="alert" style="display:none">
                    <div class="d-flex">
                        <p class="font-weight-500 mb-1 trackingLastBook"></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>


            </div>
            @endif
        </div>
</form>
        <!-- END col-8 -->
    </div>

</section>

@endsection