@extends('FrontendClient.master')
@section('content')
    

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title" style="margin-top: 110px; font-size: 19px;">
                        <h4>Contactez-nous</h4>
                        
                    </div>
                    <div class="contact-widget" >
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text" style="margin-top: 20px;">
                                <span style="margin-top: 5px;">Addresse:</span>
                                <p style="margin-top: 5px;">60-49 Road 11378 New York</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text" style="margin-top: 20px;">
                                <span style="margin-top: 5px;">Phone:</span>
                                <p style="margin-top: 5px;">+65 11.188.888</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text" style="margin-top: 20px;">
                                <span style="margin-top: 5px;">Email:</span>
                                <p style="margin-top: 5px;">hellocolorlib@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form" style="margin-top: 100px;">
                        <div class="leave-comment" style="font-size: 18px;">
                            <h4 >NOUS CONTACTER</h4>
                            <p style="font-size: 16px;">Contactez nous et nous vous répondrons aussi rapidement que possible.</p>
                             <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your name" style="margin-top: 20px; border: 1px solid #ccc;">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" class="form-control" placeholder="Your email" style="margin-top: 20px; border: 1px solid #ccc;">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message"  name="message" style="margin-top: 20px; padding: 30px; width: 556px; height: 122px; border: 1px solid #ccc;"></textarea>
                                         
                                        <button type="submit" class="form-control" class="site-btn" style="margin-top: 20px;">Envoyer le message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection
