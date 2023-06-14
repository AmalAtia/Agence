@extends('Frontend.masterclient')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card" style="background-color:#fff; border:none;">
        <div class="card-body">

            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card" style="border: none;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">
                        <div class="card-body" style="background-color: beige;">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0" style="color: black;">{{count($reserCircuit)}}</h3>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>  -->
                                    </div>
                                </div>
                               <!-- <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div> -->
                            </div>
                            <h6 class="text-muted font-weight-normal">Réservation Circuit</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card" style="border: none;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">
                        <div class="card-body" style="background-color: beige;">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0" style=" color: black;">{{count($reserOmra)}}</h3>
                                     <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p> -->
                                    </div>
                                </div>
                             <!-- <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>  -->
                            </div>
                            <h6 class="text-muted font-weight-normal">Réservation Omra</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card" style="border: none;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">
                        <div class="card-body" style="background-color: beige;">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0" style=" color: black;">{{count($reserVoyage)}}</h3>
                                        <!-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> -->
                                    </div>
                                </div>
                                 <!-- <div class="col-3">
                  <div class="icon icon-box-danger">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>  -->
                            </div>
                            <h6 class="text-muted font-weight-normal">Réservation Voyage</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card" style="border: none;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">
                        <div class="card-body" style="background-color: beige;">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0" style=" color: black;"></h3>
                                         <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>  -->
                                    </div>
                                </div>
                                <!-- <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>  -->
                            </div>
                            <h6 class="text-muted font-weight-normal">Réservation Hotel</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card" style="border: none;box-shadow: 2px 2px 13px rgba(0, 0, 0, 0.1);">
                        <div class="card-body" style="background-color: beige;">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h3 class="mb-0" style=" color: black;"></h3>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>  -->
                                    </div>
                                </div>
                                  <!-- <div class="col-3">
                    <div class="icon icon-box-success ">
                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                    </div>
                  </div>   -->
                            </div>
                            <h6 class="text-muted font-weight-normal">Réservation Vol</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection