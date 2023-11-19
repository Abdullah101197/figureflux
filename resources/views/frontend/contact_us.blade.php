@extends('layouts.frontend.frontend_layout')
@section('title')
contact_us
@endsection
@section('content')
    <div class="integration">
        <div class="integration-title contact-title">
            <h1>Get In Touch With Us</h1>
            <p>Need assistance? Contact us for expert help with any questions or concerns.
                Our dedicated team is here to support you every step of the way</p>
        </div>
            <div class="contact-wrapper">


                <div class="contact-form">
                  @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif

                <form method="POST" action="{{ route('contact_us.store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Your name*</label>
                                <input type="text"  name="name" placeholder="Julia William">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Contact email *</label>
                                <input type="text" name="email" placeholder="you@example.com">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Company name*</label>
                                <input type="text" name="company_name" placeholder="Company name">
                                @if ($errors->has('company_name'))
                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                            @endif
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Country*</label>
                                <select placeholder="" class="form-control" name="country">

                                    @foreach ($countries as $countries )

                                    <option value="{{$countries->name}}">{{$countries->name}}</option>


                                    @endforeach

                                </select>

                                @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif                             </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-fields">
                                <label>Your message*</label>
                                    <textarea name="message" id="" placeholder="Type your message…."></textarea>
                                    @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <p>By submitting your request, you agree to our terms and conditions. Please review them carefully before proceeding.</p>
                        <button>Contact sales</button>
                </form>
            </div>
        </div>
        <div class="contact-info">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-card">
                            <div class="info-img">
                                <span>
                                    <img src="assets/images/nextpages/email.png" alt="Email us">
                                </span>
                            </div>
                            <h2>Email us</h2>
                            <p>Connect with us, in just a click</p>
                            <a href="mailto:info@figureflux.com">info@figureflux.com <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-card">
                            <div class="info-img">
                            <span>
                                <img src="assets/images/nextpages/call.png" alt="Call us">
                            </span>
                            </div>
                            <h2>Call us</h2>
                            <p>Speak to us directly, we're here to help.</p>
                            <a href="tel:+1 (385) 666-6357">+1 (385) 666-6357 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info-card">
                            <div class="info-img">
                            <span>
                                <img src="assets/images/nextpages/support.png" alt="Support">
                            </span>
                            </div>
                            <h2>Support</h2>
                            <p>We've got you covered, every step of the way</p>
                            <a href="#">Support Center <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/main.js"></script>
        @endsection
