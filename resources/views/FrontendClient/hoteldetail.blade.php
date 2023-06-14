@extends('FrontendClient.master')
@section('styles')
<style>
    .flexslider .slides img {
        width: 100%;
        margin-bottom: -150px;
        display: block;
        border-radius: 4px;
    }

    img {
        max-width: 100%;
    }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }


    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {

        background: #ff9f1a !important;

        padding: 1.2em 1.5em !important;

        border: none;

        text-transform: UPPERCASE;

        font-weight: bold;

        color: #fff !important;

        -webkit-transition: background .3s ease;

        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {

        background: #b36800;

        color: #fff;
    }

    .not-available {

        text-align: center;

        line-height: 2em;
    }

    .not-available:before {

        font-family: fontawesome;

        content: "\f00d";

        color: #fff;
    }

    .orange {

        background: #ff9f1a;
    }

    .green {

        background: #85ad00;
    }

    .blue {

        background: #0076ad;
    }

    .tooltip-inner {

        padding: 1.3em;
    }
</style>



<style>
    .doctor-search-form.trans input,
    select {
        background-color: transparent;
        /* border: 2px solid #c2d6f3 !important; */
        border: 1px solid #dbdbdb !important;
        border-radius: 0;
        padding: 7px 15px;
        text-align: center;
        width: 88%;
    }

    border-radius: 0;
    padding: 7px 15px;
    text-align: center;
    width: 70%;

    .multiselect {
        width: 200px;
    }

    .selectBox {
        position: relative;
    }

    .selectBox select {
        width: 100%;
        font-weight: bold;
    }

    .overSelect {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }

    #checkboxes label {
        display: block;
    }

    #checkboxes label:hover {
        background-color: #1e90ff;
    }

    #social-links ul {
        padding-left: 0;
    }

    #social-links ul li {
        display: inline-block;
    }

    #social-links ul li a {
        padding: 6px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 1px;
        font-size: 25px;
    }

    #social-links .fa-facebook {
        color: #0d6efd;
    }

    #social-links .fa-twitter {
        color: deepskyblue;
    }

    #social-links .fa-linkedin {
        color: #0e76a8;
    }

    #social-links .fa-whatsapp {
        color: #25D366
    }

    #social-links .fa-reddit {
        color: #FF4500;
        ;
    }

    #social-links .fa-telegram {
        color: #0088cc;
    }
</style>

@endsection
@section('content')

<div class="banner-bottom">
    <!-- container -->
    <div class="container">
        <div class="faqs-top-grids">
            <!--single-page-->
            <div class="single-page">
                <div class="col-md-8 single-gd-lt">

                    <!-- <h2>{{ $hotel->name }}</h2>
                        <div class="rating" style=" margin-bottom: 9px;">
                            <span class="bottom-ratings">
                                @if( $hotel->nb_etoile ==1)
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                @elseif( $hotel->nb_etoile==2)
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                @elseif( $hotel->nb_etoile ==3)
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                @elseif( $hotel->nb_etoile ==4)
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                @else
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                @endif
                            </span>
                        </div>
                        <address class="property-address">
                            <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>{{ $hotel->adresse }}
                        </address> -->






                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{asset('asset/images/p1.jpg')}}">
                                <img src="{{asset('asset/images/p1.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p2.jpg')}}">
                                <img src="{{asset('asset/images/p2.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p3.jpg')}}">
                                <img src="{{asset('asset/images/p3.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p4.jpg')}}">
                                <img src="{{asset('asset/images/p4.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p1.jpg')}}">
                                <img src="{{asset('asset/images/p1.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p2.jpg')}}">
                                <img src="{{asset('asset/images/p2.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p3.jpg')}}">
                                <img src="{{asset('asset/images/p3.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p4.jpg')}}">
                                <img src="{{asset('asset/images/p4.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p1.jpg')}}">
                                <img src="{{asset('asset/images/p1.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p2.jpg')}}">
                                <img src="{{asset('asset/images/p2.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p3.jpg')}}">
                                <img src="{{asset('asset/images/p3.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p4.jpg')}}">
                                <img src="{{asset('asset/images/p4.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p1.jpg')}}">
                                <img src="{{asset('asset/images/p1.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p2.jpg')}}">
                                <img src="{{asset('asset/images/p2.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p3.jpg')}}">
                                <img src="{{asset('asset/images/p3.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p4.jpg')}}">
                                <img src="{{asset('asset/images/p4.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p1.jpg')}}">
                                <img src="{{asset('asset/images/p1.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p2.jpg')}}">
                                <img src="{{asset('asset/images/p2.jpg')}}" alt="" />
                            </li>
                            <li data-thumb="{{asset('asset/images/p3.jpg')}}">
                                <img src="{{asset('asset/images/p3.jpg')}}" alt="" />
                            </li>
                        </ul>
                        
                    </div>
                    <br>
                    <div class="column">
                        <h2 style="color:#1e91a5;">Description</h2></br>
                        
                            <br>
                        <p style=" text-align: justify;text-justify: inter-word;">{{ $hotel->short_description }}</p>


                    </div>
                    <!-- FlexSlider -->
                    <script defer src="js/jquery.flexslider.js"></script>
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>

                </div>
                <div class="col-md-4 single-gd-rt">
                    <div class="spl-btn">
                        <div class="spl-btn-bor" style="background-color:#f0ad4e;">
                            <a href="#">
                                <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                            </a>
                            <p>Offre spéciale</p>
                            <script>
                                $(document).ready(function() {
                                    $('[data-toggle="tooltip"]').tooltip();
                                });
                            </script>
                        </div>
                        <div class="sp-bor-btn ">
                            <!-- <h4><span>$8,750</span> $4,850</h4>
                            <p class="best-pri">Meilleur prix</p>
                            <a class="best-btn" href="booking.html">Réservez </a> -->
                            <center>
                                <h2>{{ $hotel->name }}</h2>
                                <div class="rating" style=" margin-bottom: 9px;">
                                    <span class="bottom-ratings">
                                        @if( $hotel->nb_etoile ==1)
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        @elseif( $hotel->nb_etoile==2)
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        @elseif( $hotel->nb_etoile ==3)
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        @elseif( $hotel->nb_etoile ==4)
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        @else
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        @endif
                                    </span>
                                </div>
                                <address class="property-address">
                                    <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>{{ $hotel->adresse }}
                                </address>
                                <span><?php
                                $supp = json_decode($hotel->supplement_id);
                                ?>
                            <?php
                            $supplements = '';
                            if (isset($supp))
                                $supplements = \App\Models\Supplement::whereIn('id', $supp)->get();

                            ?>

                            @if(isset($supplements)&&(!empty($supplements)))
                            @foreach($supplements as $sup)

                            <i class="fa {{$sup->icon}}" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$sup->nom}}"></i>

                            @endforeach
                            @endif</span>
                            </center>

                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="avis" style="width:100%;">
                                <!-- Tab Menu -->
                                <h2 class="pt-4" style="background: url(http://127.0.0.1:8000/asset/images/rat2.gif)   53px 10px;  width: 115%;height: 12%;background-size: 25%; padding-top: 7%;margin-left: -2%;">Avis</h2>
                            </div>
                            <hr>
                            <!-- /Tab Menu -->
                            <div class="col-md-12">

                                <div class="panel panel-default">



                                    <div class="panel-body">

                                        <form action="https://medor-medical.com/posts" method="POST">

                                            <input type="hidden" name="_token" value="RAkRXRoBvzMwpQdeFfWZrg9aNds7kjHySFE3ENhG">

                                            <div class="card">

                                                <div class="container-fliud" style=" padding: 3%;">
                                                    <h3> Vous commentez</h3>

                                                    <div class="wrapper row">



                                                        <div class="details col-md-12">



                                                            <div class="rating">

                                                                <div class="rating-container rating-xs rating-animate">
                                                                    <div class="clear-rating clear-rating-active" title="Clear"><i class="glyphicon glyphicon-minus-sign"></i></div>
                                                                    <div class="rating-stars"><span class="empty-stars"><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span></span><span class="filled-stars" style="width: 0%;"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span></span><input id="input-1" name="rate" class="rating rating-input" data-min="0" data-max="5" data-step="1" data-size="xs"></div>
                                                                    <div class="caption"><span class="label label-default">Not Rated</span></div>
                                                                </div>

                                                                <input type="hidden" name="id" required="" value="1231">
                                                                <span class="review-no">0 Avis</span>

                                                                <br>



                                                            </div>
                                                            <div class="form-group">
                                                                <label>Pseudo </label>
                                                                <input type="text" class="form-control service-desc  " name="pseudo">

                                                            </div>
                                                            <div class="form-group">
                                                                <label>Résumé </label>
                                                                <input type="text" class="form-control service-desc  " name="resume">

                                                            </div>
                                                            <div class="service-fields mb-3">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="desc" class="form-label">Description</label>
                                                                            <textarea class="my-editor form-control service-desc " id="my-editor" cols="30" rows="10" name="description"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                            <div class="action">

                                                                <button class="btn btn-success">Envoyer</button>


                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </form>



                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--//single-page-->
        </div>
        <div class="sap_tabs" style="background-color: #2d99c6e0;color: black;width: 100%;margin-top: 24px;">

            <div class="booking-info about-booking-info">
                <h2>Réserver </h2>
            </div>
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <!---->
                <div class="facts about-facts train-facts">
                    <div class="booking-form train-form">
                        <link rel="stylesheet" href="css/jquery-ui.css">
                        <!---strat-date-piker---->
                        <script>
                            $(function() {
                                $("#datepicker,#datepicker1").datepicker();
                            });
                        </script>
                        <!---/End-date-piker---->
                        <!-- Set here the key for your domain in order to hide the watermark on the web server -->
                        <form action="http://127.0.0.1:8000/showClientHotel/37" method="get">
                            <input type="hidden" name="_token" value="FJdIZwbArULQ07Lmdb3wCOKhzFsFHJ9jBTQxGiKK">

                            <input type="hidden" name="hotel_id" value="37">
                            <div class="online_reservation">
                                <div class="b_room">

                                    <div class="booking_room">

                                        <div class="reservation">
                                            <ul>
                                                <li class="span1_of_1">
                                                    <h5>Date de départ</h5>
                                                    <div class="book_date">

                                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                        <input type="date" name="depart" id="depart" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}" required="">

                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left">
                                                    <h5>Date d'arrivée</h5>
                                                    <div class="book_date">

                                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                        <input type="date" id="arrive" name="arrive" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}" required="">

                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left adult">
                                                    <h5>Adults </h5>
                                                    <!----------start section_room----------->
                                                    <div class="section_room">
                                                        <select id="adult" onchange="change_country(this.value)" class="frm-field required" name="adults" required="">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="span1_of_1 left h-child">
                                                    <h5>Enfant (0-10)</h5>
                                                    <!----------start section_room----------->
                                                    <div class="section_room">
                                                        <select id="enfant" onchange="change_country(this.value)" class="frm-field required" name="children" required="">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                </li>

                                                <div class="clearfix"></div>
                                            </ul>
                                        </div>
                                        <div class="reservation">
                                            <ul>

                                                <div class="clearfix"></div>
                                            </ul>
                                        </div>
                                        <div class="reservation">
                                            <ul>
                                                <li class="span1_of_3">
                                                    <div class="date_btn">

                                                        <input type="submit" value="Search">

                                                    </div>
                                                </li>
                                                <div class="clearfix"></div>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </form>

                        <!---->


                    </div>


                </div>

            </div>


        </div>

        @if(count($hotels)>0)
        <div class="c-rooms">
            <h3> Chambre disponibles </h3>
            @forelse($hotels as $h)
            @isset($h->chambre)
            @foreach($h->chambre as $chambre)

            <div class="p-table">
                <div class="p-table-grids">


                    <?php
                    $arr = \App\Models\Arrangement::where('room_id', $chambre->id)->first();
                    if (isset($arr)) {
                        $prixArS = $arr->prix_log_simple;
                        $prixChild = ($prixArS * $nbEnf) / 2;
                        $prix = ((($prixArS * $nbAd) + $prixChild) * $duration1);
                    } else {

                        $prixChild = ($chambre->hotel->prix * $nbEnf) / 2;
                        $prix = ((($chambre->hotel->prix * $nbAd) + $prixChild) * $duration1);
                    }
                    ?>

                    <div class="col-md-1">
                        <center> <input type="checkbox" value="{{$prix}}" style="margin-top: 210%;" id="check{{$chambre->id}}" name="check" onclick="UpdateCost(this,{{$chambre->id}},'{{$chambre->type}}')"> </center>

                    </div>
                    <div class="col-md-3 p-table-grid">
                        <div class="p-table-grad-heading">
                            <h6>Type de chambre</h6>
                        </div>
                        <div class="p-table-grid-info" style="height: 45%;">
                            <a href="#"><img src="{{asset('chambres')}}/{{$chambre->image}}" alt="Image"></a>
                            <div class="room-basic-info">
                                <a href="#">{{$chambre->type}}</a>
                                <h6>@for($i=0;$i<=$chambre->nb_adult;$i++)
                                        <i class="fa fa-male" style="font-size: 20px;"></i>
                                        @endfor
                                        @for($i=0;$i<=$chambre->nb_enfant;$i++)
                                            <i class="fa fa-child"></i>
                                            @endfor</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-table-grid">
                        <div class="p-table-grad-heading">
                            <h6>Arrangements</h6>
                        </div>
                        <div class="rate-features">
                            <?php
                            $arrangement = \App\Models\Arrangement::where('room_id', $chambre->id)->first();
                            ?>

                            @if(isset($arr->prix_dp))
                            @php $dp=$arr->prix_dp @endphp
                            <input type="radio" data-name="Demi Pension" onclick="arrangement({{$dp}},{{$nbAd}},{{$duration1}},{{$nbEnf}},{{$chambre->id}},this)" name="arrangement_id{{$chambre->id}}" value="{{$arr->prix_dp}}">

                            <label>Demi Pension</label>
                            <br>
                            @endif
                            @if(isset($arr->prix_log_pet_dej))
                            <input type="radio" data-name="Longement petit déjeuner" onclick="arrangement({{$arr->prix_log_pet_dej}},{{$nbAd}},{{$duration1}},{{$nbEnf}},{{$chambre->id}},this)" name="arrangement_id{{$chambre->id}}" value="{{$arr->prix_log_pet_dej}}">

                            <label>Longement petit déjeuner </label><br>
                            @endif
                            @if(isset($arr->prix_all_inclus))
                            <input type="radio" data-name="All inclusive" onclick="arrangement({{$arr->prix_all_inclus}},{{$nbAd}},{{$duration1}},{{$nbEnf}},{{$chambre->id}},this)" name="arrangement_id{{$chambre->id}}" value="{{$arr->prix_all_inclus}}">

                            <label> All inclusive </label><br>
                            @endif
                            @if(isset($arr->prix_all_soft_drink))
                            <input type="radio" data-name="All inclusive Soft Drink" onclick="arrangement({{$arr->prix_all_soft_drink}},{{$nbAd}},{{$duration1}},{{$nbEnf}},{{$chambre->id}},this)" name="arrangement_id{{$chambre->id}}" value="{{$arr->prix_all_soft_drink}}">

                            <label>All inclusive Soft Drink</label><br>
                            @endif
                            @if(isset($arr->prix_pension_comp))
                            <input type="radio" data-name="Pension complete" onclick="arrangement({{$arr->prix_pension_comp}},{{$nbAd}},{{$duration1}},{{$nbEnf}},{{$chambre->id}},this)" name="arrangement_id{{$chambre->id}}" value="{{$arr->prix_pension_comp}}">

                            <label>Pension complete</label><br>
                            @endif



                        </div>


                        <div style="    margin-left: 13px;">
                            <h5 style="    padding-bottom: 12px;"><b>Chambre(s)</b></h5>
                            <!----------start section_room----------->
                            <div class="section_room">
                                <select id="chambre{{$chambre->id}}" class="frm-field required" onchange="chambrePrix({{$prix}},{{$chambre->id}})" name="nbroom{{$chambre->id}}" style="width:201px">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 p-table-grid">
                        <div class="p-table-grad-heading">
                            <h6>Tarif moyen par nuit</h6>
                        </div>
                        <div class="avg-rate">
                            <h5>Recommandé pour vous</h5>
                            <p>Le prix :</p>


                            <span id="prixSansC{{$chambre->id}}">{{$prix}} DT</span>
                            <span id="prixCalcule{{$chambre->id}}"></span>

                            <input type="hidden" name="prixCalcule" id="inputprixCalcule{{$chambre->id}}" value="{{$prix}}">


                        </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
            @endforeach
            @endisset
            @empty


            <div class="col-8 text-center" style=" margin-top: 200px;"><img src="{{asset('asset/images/emotion.png')}}"></div>
            <div>
                <h4 class="title-head text-center" style="margin-bottom: 0px; color: rgb(173, 173, 168);">Désolé nous n'avons trouvé
                    aucun résultat</h4>
            </div>


            @endforelse

            <div class="row" style="float: right;">
                <div class="col-md-6">
                    <h2>prix</h2></br>
                    <span id="total{{$chambre->id}}"> </span>
                    <span id="total"></span>
                </div>
                <div class="col-md-6">

                    <div class="book-button-column" style="margin-top: -41px;">
                        <a id="reserve">Réservez</a>
                    </div>
                </div>
            </div>

            <div style="padding: 2%;"></div>


            @endif

        </div>
    </div>
    <div class="map-gd">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12937.052315488192!2d10.6272781!3d35.8425522!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13027584510f3853%3A0x4a2185abf6d1d7c9!2sM%C3%B6venpick%20Sousse!5e0!3m2!1sfr!2stn!4v1685881935503!5m2!1sfr!2stn"></iframe> -->
        <iframe src="https://www.google.com/maps/d/embed?mid=16SqHEAPAq5ENC3itIEg0FAxzDRmqg5Y&ehbc=2E312F" width="100%" height="100%"></iframe>
    </div>
    <!-- //container -->
</div>
@endsection
@section('scripts')


<script>
    $room = '';
    $arrang = '';

    function arrangement(prix, nbrA, nbrNuit, nbenf, room_id, elem) {

        $arrang = elem.getAttribute('data-name');
        $room = room_id;
        $prixChild = (prix * nbenf) / 2;
        $prixCalcule = (((prix * nbrA) + $prixChild) * nbrNuit);


        $('span#prixSansC' + room_id).hide();
        $('span#prixCalcule' + room_id).text($prixCalcule + ' DT');
        $('input#inputprixCalcule' + room_id).attr('value', $prixCalcule);
        $('#check' + room_id).attr('value', $prixCalcule);
    }

    function chambrePrix(prixInit, room_id) {
        $room = room_id;
        $id = '#chambre' + room_id;
        var nbrCh = $($id).val();
        var prixCalcule = 0;
        $prixAr = $('#inputprixCalcule' + room_id).val();

        if ($prixAr == '') {

            prixCalcule = prixInit * nbrCh;
        } else {
            prixCalcule = $prixAr * nbrCh;
        }

        $('span#prixSansC' + room_id).hide();
        $('span#prixCalcule' + room_id).text(prixCalcule + ' DT');
        $('input#inputprixCalcule' + room_id).attr('value', prixCalcule);
        $('#check' + room_id).attr('value', prixCalcule);

    }




    var total = 0;
    var tabChambre = [];

    function UpdateCost(elem, room_id, room_name) {

        var room = {};



        if (elem.checked == true) {
            total += Number(elem.value);
            let params = new URLSearchParams(location.search);

            room.name = room_name;
            room.id = room_id;
            room.prix = $('input#inputprixCalcule' + room_id).val();
            room.arrangement = $arrang;
            room.nbrCh = $('select#chambre' + room_id).val();
            room.nbA = params.get('adults');
            room.nbE = params.get('children');
            room.dateD = params.get('depart');
            room.dateAR = params.get('arrive');
            room.hotel_id = params.get('hotel_id');
            room.prixT = total;

            tabChambre.push(room);

        } else {
            total -= Number(elem.value);

            tabChambre.pop(room_id);


        }




        document.getElementById('total').innerHTML = total + " DT";
    }


    $('#reserve').on('click', function() {
        console.log('tt', tabChambre)
        $.ajax({
            type: 'GET',
            data: {
                'rooms': tabChambre,
            },
            success: function(reponse) {
                // window.location = "{{route('reservation.hotel')}}";

                $.ajax({
                    url: "{{route('reservation.hotel')}}",
                    type: 'GET',
                    datatype: 'html',
                    data: {
                        'rooms': tabChambre,
                    },
                    success: function(reponse) {
                        const queryString = '?rooms=' + encodeURIComponent(JSON.stringify(tabChambre));
                        window.location.href = "{{url('/reservation/hotel')}}/" + queryString;

                    }
                });

            }
        });

    });
</script>

@endsection