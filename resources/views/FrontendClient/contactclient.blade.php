@extends('FrontendClient.master')
@section('styles')
<style>
    .contact-form {
        padding: 50px 0 60px;
        background-color: #fff;
    }

    section {
        display: block;
    }

    .contact-form form {
        background: #FFFFFF;
        box-shadow: 0px 4px 5px 3px #e5f1fb;
        border-radius: 0px;
        padding: 30px;
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;

    }

    .contact-form form textarea {
        min-height: 200px;
        resize: none;
        padding: 6px 15px;
    }
</style>

@endsection
@section('content')
@if (\Session::has('success'))
<div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div>
@endif
<section class="contact-form" style="background-color: #f4f7f9;">
    <div class="container">
        <div class="section-header text-center">
            <h2 style="margin-bottom: 27px;;">Contactez nous!</h2>
        </div>
        <div class="row">
            <div class="col-md-3 " style="background: url(http://127.0.0.1:8000/asset/images/contact.gif) no-repeat  -102px -75px;width: 53%;height: 120%;margin-left: -6%;">
            </div>
            <div class="col-md-7">
                <form action="{{route('contact.store')}}" method="POST" style="margin-left: 86%;height:86%;margin-top: -112%;">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="nom">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Objet</label>
                                <input type="text" class="form-control" name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Commentaires <span style="color:red;">*</span></label>
                                <textarea class="form-control" name="commentaire">
                                                    </textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <center> <button type="submit" class="best-btn" style="border-radius: inherit; font-size: 15px;">Send Message </button></center>
                    <!-- <button class="btn bg-primary">Send Message</button> -->
                </form>
            </div>
        </div>


</section>
<section class="contact-map " style="margin-top:-300%;">
    <div id="containerm">
        <div id="mapm">

        </div>
        <div class="row">


            <div class=" col-md-12 col-lg-12">
                <div class="mapouter">
                    <div class="gmap_canvas">


                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12948.272088594726!2d10.8163401!3d35.7737054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302130900a8730d%3A0x413f9f18864c2232!2sKAYAN%20VOYAGES!5e0!3m2!1sfr!2stn!4v1685917261462!5m2!1sfr!2stn" width="1650" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <style>
                            .mapouter {
                                margin-top: -13%;
                                position: relative;
                                text-align: right;
                                height: 100%;
                                width: 100%;
                            }
                        </style>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 100%;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>


            </div>

        </div>


    </div>
</section>

@endsection