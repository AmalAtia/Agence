@extends('FrontendClient.master')
@section('styles')
<style>
    #rangeValue {
        position: relative;
        text-align: center;
        width: 60px;
        font-size: 1.25em;
        color: #fff;
        background: #27a0ff;
        margin-left: 15px;
        border-radius: 25px;
        font-weight: 500;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff, inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 5px rgba(255, 255, 255, 0.05);
    }

    .middle {
        position: relative;
        /* width: 100%; */
        max-width: 500px;
        margin-top: 10px;
        display: inline-block;
    }

    #multi_range {
        margin: 0 auto;
        background-color: #f0ad4e;
        border-radius: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center;
        width: 200px;
        font-weight: 500;
        font-size: 1.25em;
        color: #fff;
    }


    .slider {
        position: relative;
        z-index: 1;
        height: 10px;
        margin: 0 15px;
    }

    .slider>.track {
        position: absolute;
        z-index: 1;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: 5px;
        background-color: #b5d7f1;
    }

    .slider>.range {
        position: absolute;
        z-index: 2;
        left: 25%;
        right: 25%;
        top: 0;
        bottom: 0;
        border-radius: 5px;
        background-color: #f0ad4e;
    }

    .slider>.thumb {
        position: absolute;
        z-index: 3;
        width: 30px;
        height: 30px;
        background-color: #f0ad4e;
        border-radius: 50%;
    }

    .slider>.thumb.left {
        left: 25%;
        transform: translate(-15px, -10px);
    }

    .slider>.thumb.right {
        right: 25%;
        transform: translate(15px, -10px);
    }






    .rang_slider::-webkit-slider-thumb {
        pointer-events: all;
        width: 30px;
        height: 30px;
        border-radius: 0;
        border: 0 none;
        background-color: red;
        cursor: pointer;
        -webkit-appearance: none;
    }

    */ #rangeValue {
        position: relative;
        text-align: center;
        width: 60px;
        font-size: 1.25em;
        color: #fff;
        background: #299617;
        margin-left: 15px;
        border-radius: 25px;
        font-weight: 500;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px #fff, inset 5px 5px 10px rgba(0, 0, 0, 0.1), inset -5px -5px 5px rgba(255, 255, 255, 0.05);
    }

    .middle {
        position: relative;
        width: 100%;
        max-width: 500px;
        margin-top: 10px;
        display: inline-block;
    }

    .range_slider {
        position: absolute;
        pointer-events: none;
        -webkit-appearance: none;
        z-index: 2;
        height: 10px;
        width: 100%;
        opacity: 0;
    }

    .range_slider::-webkit-slider-thumb {
        pointer-events: all;
        width: 30px;
        height: 30px;
        border-radius: 0;
        border: 0 none;
        background-color: red;
        cursor: pointer;
        -webkit-appearance: none;
    }

    #multi_range {
        margin: 0 auto;
        background-color: #f0ad4e;
        border-radius: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center;
        width: 200px;
        font-weight: 500;
        font-size: 1.25em;
        color: #fff;
    }
</style>
@endsection
@section('content')
</br>
<!-- Search Widget -->


<form action="/search" method="GET" role="search">
    {{ csrf_field() }}
    <div class="row col-md-12">
        <div class="col-md-9">
            <div class=" ">
                <input type="text" class="form-control" placeholder="Rechercher..." name="q" style="width: 95%;
    margin-left: 6%;
    margin-top: 3%;">
                <span class="input-group-btn">
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <button class="btn btn-secondary" type="submit" style="background-color:#f0ad4e;color:white;margin-right: 100px;margin-top: 10%;/* margin-right: 5%; */float: revert;">Rechercher</button>
            <!-- background-color:#1e91a5;color:white;margin-right: 100px;margin-top: 10%;/* margin-right: 5%; */float: revert; -->
        </div>
    </div>


</form>
</br></br>

<div class="banner-bottom">
    <!-- container -->
    <div class="container">
        <div class="faqs-top-grids">
            <div class="product-grids">
                <div class="col-md-3 product-left">
                    <div class="h-class">
                        <h5>Hotel Class</h5>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="5" name="nbrEtoile" onclick="liveSearch_cat()">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="starTextLabel">5 Stars</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="4" name="nbrEtoile" onclick="liveSearch_cat()">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="starTextLabel">4 Stars </span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="3" name="nbrEtoile" onclick="liveSearch_cat()">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="starTextLabel">3 Stars </span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="2" name="nbrEtoile" onclick="liveSearch_cat()">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="starTextLabel">2 Stars </span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="1" name="nbrEtoile" onclick="liveSearch_cat()">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span class="starTextLabel">1 Stars </span>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="h-class p-day">
                        <h5>prix par nuitée</h5>
                        <!-- <div>
                            <div class="wrapper">



                                <div class="price-input">
                                    <div class="field">
                                        <span>Min</span>
                                        <input type="number" class="input-min" name="left_value" value="100">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                        <span>Max</span>
                                        <input type="number" class="input-max" name="right_value" value="500">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min range_slider" min="0" max="10000" value="2500"  >
                                    <input type="range" class="range-max range_slider" min="0" max="10000" value="7500" >
                                </div>
                            </div>
                          
                        </div> -->
                        @include('FrontendClient.sliderp')

                    </div>
                    </br>
                    </br>
                    </br>
                    <hr>
                    <div class="h-class">
                        <h5>Localisation</h5>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Tunis" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Tunis</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Nabeul" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Nabeul</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Sousse" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Sousse</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Monastir" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Monastir</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Mahdia" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Mahdia</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Hamamet" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Hamamet</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Gafsa" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Gafsa</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Bizert" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Bizert</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="radio" value="Paris" name="localisation" onclick="liveSearch_local()">
                                <span class="p-day-grid">Paris</span>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="h-class p-day">
                        <h5>Arrangement</h5>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="Logement Simple" name="arrangement" onclick="liveSearch_arrang()">
                                <span class="p-day-grid">Logement Simple</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="Logement Petit Déjeuner" name="arrangement" onclick="liveSearch_arrang()">
                                <span class="p-day-grid">Logement Petit Déjeuner</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="Demi Pension" name="arrangement" onclick="liveSearch_arrang()">
                                <span class="p-day-grid">Demi Pension</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="All Inclusive" name="arrangement" onclick="liveSearch_arrang()">
                                <span class="p-day-grid">All Inclusive</span>
                            </label>
                        </div>

                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="All Inclusive Soft Drink" name="arrangement" onclick="liveSearch_arrang()">
                                <span class="p-day-grid">All Inclusive Soft Drink</span>
                            </label>
                        </div>
                        <div class="hotel-price">
                            <label class="check">
                                <input type="checkbox" value="Pension Compléte" name="arrangement" onclick="liveSearch_arrang()">
                                <span class="p-day-grid">Pension Compléte</span>
                            </label>
                        </div>
                    </div>

                </div>

                <div class="col-md-9 product-right" id="produitSansFiltre">
                    @foreach($hotels as $hotel)
                    <div class="product-right-grids">
                        <div class="product-right-top">
                            <div class="p-left">
                                <div class="p-right-img">


                                    <a href="{{ route('hotel.clishow',$hotel->id) }}"> <img src="{{asset('hotels')}}/{{$hotel->image}}" alt="" style="min-height: 150px; background-size: cover; display: block; width: 100%; height:35%;">

                                    </a>


                                    <!-- <img src= "{{asset('asset/images/2.jpg')}}"  style="min-height: 150px; background-size: cover; display: block; width: 97%;"> -->

                                    <!-- <a href="p-single.html"> </a> -->
                                </div>
                            </div>
                            <div class="p-right">
                                <div class="col-md-6 p-right-left">
                                    <h4 class="card-text" style="color:#1e91a5"><strong> {{ $hotel->name }}</strong></h4>
                                    <!-- <a href="p-single.html">Lorem ipsum dolor sit amet</a> -->
                                    <div class="p-right-price">
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
                                    </div>
                                    <address class="property-address">
                                        <i class="fa fa-map-marker " aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>{{ $hotel->adresse }}
                                    </address>
                                    <p class="card-text">{{ Str::limit($hotel->short_description,'100','...') }}</p>


                                    <?php
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
                                    @endif
                                </div>
                                <div class="col-md-6 p-right-right">
                                    <!-- <h6>Rating : 4.1/5</h6>
                                    <p>(123) Views</p> -->
                                    <a href="{{route('favorisListShow.index',$hotel)}}"><i class="fa-regular fa-heart"></i><span class="tooltipp"></span></a></br></br>

                                    @if(($hotel->promo !=null)&&($hotel->date_fin > date('Y-m-d')))

                                    <?php

                                    $prixapresremise = (intval($hotel->prix) * intval($hotel->promo)) / 100;

                                    ?>
                                    <span class="p-offer" style="color:red" ;><strong>{{$prixapresremise}}</strong></span><span class="p-last-price">{{$hotel->prix}} <small>DT</small></span>
                                    @else
                                    <span class="p-offer">{{$hotel->prix}} <small>DT</small></span>
                                    @endif
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>


                    @endforeach


                </div>

                <div class="col-md-9 product-right" id="produitFiltre">





                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //container -->
</div>
@endsection

@section('scripts')

<!-- <script>
    console.log('test');



    function liveSearch_cat() {
        let cards = document.querySelectorAll('#produitSansFiltre') //class div hotel
        var elems = document.querySelectorAll('[name=nbrEtoile]')
        var search_query = [];
        var rslt = [];
        for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) {
                search_query.push(elems[i].value.toString());


            }
        }

        console.log('nbrEtoile', search_query);
        // for (var j = 0; j < cards.length; j++) {

        //     if (cards[j].getElementsByClassName('etoliess')[0]) {
        //         x = cards[j].getElementsByClassName('etoliess')[0].innerText.toLowerCase().toString();
        //         if (search_query.includes(x.trim())) {
        //             rslt.push(cards[j].id);
        //         } else {
        //             //cards[j].classList.add("is-hidden");
        //         }
        //     }
        // }

        // return rslt;
    }
</script> -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(e) {
        $('.range_slider').on('change', function() {
            let left_value = $('#input_left').val();
            let right_value = $('#input_right').val();
            // alert(left_value+right_value);
            $.ajax({
                url: "{{ route('search.hotel.price')}}",
                method: "GET",
                data: {
                    left_value: left_value,
                    right_value: right_value
                },
                success: function(res) {
                    $('#produitSansFiltre').hide(); //cette ecriture avec jQuery

                    $('#produitFiltre').show();
                    $('#produitFiltre').html(res);
                }
            });
        });


    })
</script>

@endsection