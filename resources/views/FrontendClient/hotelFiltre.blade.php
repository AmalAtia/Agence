<div>
    @forelse($hotels as $hotel)
    <div class="product-right-grids">
        <div class="product-right-top">
            <div class="p-left">
                <div class="p-right-img">


                    <a href="{{ route('hotels.show',$hotel->id) }}"><img src="{{asset('hotels')}}/{{$hotel->image}}" alt="" style="min-height: 150px; background-size: cover; display: block; width: 100%; height:35%;">

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

                    <i class="fa {{$sup->icon}}" style="font-size: 20px;"></i>

                    @endforeach
                    @endif
                    <!-- <p class="p-call">+1 234 567 890</p> -->
                </div>
                <div class="col-md-6 p-right-right">
                    <!-- <h6>Rating : 4.1/5</h6>
                                    <p>(123) Views</p> -->

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

    @empty
    <div class="col-8 text-center" style=" margin-top: 200px;"><img src="{{asset('asset/images/emotion.png')}}"></div>
    <div>
        <h4 class="title-head text-center" style="margin-bottom: 0px; color: rgb(173, 173, 168);">Désolé nous n'avons trouvé
            aucun résultat</h4>
    </div>
    @endforelse


</div>