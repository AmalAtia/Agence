<div>
    @forelse($omras as $omra)
    <div class="product-right-grids">
        <div class="product-right-top">
            <div class="p-left">
                <div class="p-right-img">


                    <a href="{{ route('omra.client.show',$omra->id) }}"><img src="{{asset('omra')}}/{{$omra->image}}" alt="" style="min-height: 150px; background-size: cover; display: block; width: 100%; height:35%;">

                    </a>



                </div>
            </div>
            <div class="p-right">
                <div class="col-md-6 p-right-left">
                    <h4 class="card-text" style="color:#1e91a5"><strong> {{ $omra->titre }}</strong></h4>
                    <p class="card-text">{{ $omra->description }}</p>

                </div>
                <div class="col-md-6 p-right-right">
                    <a href="{{route('favorisOmra.index',$omra)}}"><i class="fa-regular fa-heart"></i><span class="tooltipp"></span></a></br></br>


                    @if(($omra->promo !=null)&&($omra->date_fin > date('Y-m-d')))

                    <?php

                    $prixapresremise = (intval($omra->prix) * intval($omra->promo)) / 100;

                    ?>
                    <span class="p-offer" style="color:red" ;><strong>{{$prixapresremise}}</strong></span><span class="p-last-price">{{$omra->prix}} <small>DT</small></span>
                    @else
                    <span class="p-offer">{{$omra->prix}} <small>DT</small></span>
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