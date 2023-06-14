@extends('FrontendClient.master')
@section('styles')
<style>


.w-15 {
    width: 12%;
}
.font-weight-500 {
    font-weight: 500 !important;
}
.bg-success {
    background-color: #f0ad4e !important;
}
.d-flex {
    display: flex!important;
}
.text-white {
    --bs-text-opacity: 1;
    color: white !important;
}
.p-2 {
    padding: 0.5rem!important;
}
.py-2 {
    padding-top: 0.5rem!important;
    padding-bottom: 0.5rem!important;
}
.px-3 {
    padding-right: 1rem!important;
    padding-left: 1rem!important;
}
.fs-6 {
    font-size: 1.6rem!important;
    font-weight: bold;
}
.px-1 {
    padding-right: 0.25rem!important;
    padding-left: 0.25rem!important;
}

.text-info {
    color: #5792f9 !important;
    
    font-weight: bold;
    font-size: 83%;
}


.d-md-flex {
    display: flex!important;
}
.pe-2 {
    padding-right: 0.5rem!important;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-family: "Roboto Condensed", sans-serif;
    font-weight: 700;
    line-height: 1.5;
}
.ms-auto {
    margin-left: auto!important;
    font-weight: bold;
}
.align-self-center {
    align-self: center!important;
}
</style>

@section('content')

<div class="container">
    <div class="faqs-top-grids">
        <div class="product-grids">
            <!-- ------recherche--- -->
            <div class="col-md-12 product-right">
                <div class="product-right-grids">
                    <div class="product-right-top">
                        <div class="d-flex ">
                            <div class="bg-success w-15 p-2 text-white font-weight-500">Votre recherche</div>
                            <div class="ms-auto px-3 py-2 hidden-md">
                                <a class="fs-6 font-weight-500 text-dark" data-bs-toggle="collapse" href="#collapseEdit" role="button" aria-expanded="false" aria-controls="collapseEdit"><i class="bi bi-pencil-fill"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="px-3 py-2 ">
                        <div class="d-md-flex">
                            <div>
                                <div class="">
                                    
                                    <h1 class="fs-6"> {{$villeD}} Ville - Tous les aéroports  <i class="bi bi-arrow-left-right px-1"></i>  {{$ville_arrive}}  - Tous les aéroports  <small class="text-info"> {{$type}}</small></h1>

                                </div>
                                <div class="d-md-flex">
                                    <div class="pe-2 "> Classe: {{$typeVol}} <span class="hidden-sm">| </span> </div>
                                    <div class="pe-2">
                                        <div>
                                            Passagers:
                                            1 Adulte
                                        </div>
                                    </div>
                                    <div>

                                        <span class="hidden-sm">| </span>
                                        Dates: <span> {{$dtedep}} <i class="bi bi-arrow-right px-1"></i>{{$dteArr}} </span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="ms-auto align-self-center hidden-sm">
                                <a class="fs-6 font-weight-500"  href="{{route('vol.client')}}" role="button"><u> Modifier la recherche</u></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ****** -->
            </div>


            <!------->
            <div class="col-md-9 product-right">
                <div class="product-right-grids">
                    <div class="product-right-top">
                        <div class="p-left">
                            <div class="p-right-img">
                                <a href="p-single.html"> </a>
                            </div>
                        </div>
                        <div class="p-right">
                            <div class="col-md-6 p-right-left">
                                <a >Lorem ipsum dolor sit amet</a>
                                <div class="p-right-price">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </div>
                                <p>Vestibulum molestie id orci eget vulputate</p>
                                <p class="p-call">+1 234 567 890</p>
                            </div>
                            <div class="col-md-6 p-right-right">
                                <h6>Rating : 4.1/5</h6>
                                <p>(123) Views</p>
                                <span class="p-offer">$140</span><span class="p-last-price">$230</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>


            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection