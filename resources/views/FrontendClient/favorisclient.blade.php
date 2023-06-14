@extends('FrontendClient.master')
@section('style')
<style>
    .product-details .product-name {
        text-transform: uppercase;
        font-size: 18px;
    }

    .product-details .product-rating {
        display: inline-block;
        margin-right: 15px;
    }

    .product-details .product-rating>i {
        color: #E4E7ED;
    }

    .product-details .product-rating>i.fa-star {
        color: #D10024;
    }

    .product-details .review-link {
        font-size: 12px;
    }

    .product-details .product-price {
        display: inline-block;
        font-size: 24px;
        margin-top: 10px;
        margin-bottom: 15px;
        color: #D10024;
    }

    .product-details .product-price .product-old-price {
        font-size: 70%;
        font-weight: 400;
        color: #8D99AE;
    }

    .product-details .product-available {
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        margin-left: 30px;
        color: #D10024;
    }

    .product-details .product-options {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .product-details .product-options .input-select {
        width: 90px;
    }

    .product-details .add-to-cart {
        margin-bottom: 30px;
    }

    .product-details .add-to-cart .add-to-cart-btn {
        position: relative;
        border: 2px solid transparent;
        height: 40px;
        padding: 0 30px;
        background-color: #ef233c;
        color: #FFF;
        text-transform: uppercase;
        font-weight: 700;
        border-radius: 40px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .product-details .add-to-cart .add-to-cart-btn>i {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 40px;
        line-height: 38px;
        color: #D10024;
        opacity: 0;
        visibility: hidden;
    }
</style>
@endsection

@section('content')
@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="main-content-inner">
    <div class="row">
        <!-- Product main img -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Liste des favoris</h4>
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <?php

                            use App\Models\Hotel;

                            $hotels = Hotel::get();
                            ?>
                            <div class="row">




                                <!-- Product details -->
                                <div class="col-md-5">
                                    <div class="product-details" style="padding: 10px, margin: 200px;">
                                        <h2 class="product-name">product name goes here</h2>
                                        <div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>

                                        </div>
                                        <div>
                                            <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>

                                        </div>
                                        <img src="" alt="">



                                        <div class="add-to-cart" style="    height: 40px,background-color: #ef233c,padding: 0 30px;">

                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        </div>




                                    </div>
                                </div>
                                <!-- /Product details -->



                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>



        @endsection