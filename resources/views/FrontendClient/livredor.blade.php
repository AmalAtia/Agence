@extends('FrontendClient.master')
@section('content')
<div class="col-md-12">
    <div id="product-tab">
        <!-- product tab nav -->
        <ul class="tab-nav">
            <!-- <li class="active"><a data-toggle="tab" href="#tab1"></a></li> -->
            <li><a data-toggle="tab" href="#tab2">description</a></li>
            <li><a data-toggle="tab" href="#tab3">Commentaires ({{isset($avis)?count($avis):0}})</a></li>

        </ul>
        <!-- /product tab nav -->

        <!-- product tab content -->
        <div class="tab-content">

            <!-- tab2  -->
            <div id="tab2" class="tab-pane fade in">
                <div class="row">
                    <div class="col-md-3">
                        <p>{!! ($hotel->description) !!}</p>
                    </div>
                </div>
            </div>
            <!-- /tab2  -->

            <!-- tab3  -->
            <div id="tab3" class="tab-pane fade in">
                <div class="row">
                    <!-- Rating -->
                    <div class="col-md-3">
                        <div id="rating">
                            <div class="rating-avg">
                                <span>4.5</span>
                                <div class="rating-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <ul class="rating">
                                <li>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-progress">
                                        <div style="width: 80%;"></div>
                                    </div>
                                    <span class="sum">3</span>
                                </li>
                                <li>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-progress">
                                        <div style="width: 60%;"></div>
                                    </div>
                                    <span class="sum">2</span>
                                </li>
                                <li>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-progress">
                                        <div></div>
                                    </div>
                                    <span class="sum">0</span>
                                </li>
                                <li>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-progress">
                                        <div></div>
                                    </div>
                                    <span class="sum">0</span>
                                </li>
                                <li>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-progress">
                                        <div></div>
                                    </div>
                                    <span class="sum">0</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Rating -->

                    <!-- Reviews -->
                    <div class="col-md-6">
                        <div id="reviews">
                            <ul class="reviews">
                                @foreach($avis as $avi)
                                <li>
                                    <div class="review-heading">
                                        <h5 class="name">{{$avi->name}}</h5>
                                        <p class="date">{{date('d/m/Y',strtotime($avi->created_at))}}</p>
                                        <div class="review-rating">

                                            @for($i=1;$i<=$avi->stars;$i++)
                                                <i class="fa fa-star"></i>
                                                @endfor
                                                @if($avi->stars< 5) @php $nb=5-$avi->stars;
                                                    @endphp
                                                    @for($i=1;$i<=$nb;$i++) <i class="fa fa-star-o empty"></i>
                                                        @endfor
                                                        @endif
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p>{{$avi->description}}</p>
                                    </div>
                                </li>

                                @endforeach

                            </ul>
                            <ul class="reviews-pagination">
                                <li class="active">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Review Form -->
                    <div class="col-md-3">
                        <div id="review-form">
                            <form class="review-form" method="post" action="{{route('reviewstore')}}">
                                @csrf
                                <input class="input" type="text" placeholder="Username" name="name">
                                <input class="input" type="hidden" name="hotel_id" value="{{$hotel->id}}">
                                <textarea class="input" placeholder="Your Review" name="description"></textarea>
                                <div class="input-rating">
                                    <span>Your Rating: </span>
                                    <div class="stars">
                                        <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                        <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                        <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                        <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                        <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                    </div>
                                </div>
                                <button class="primary-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Review Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection