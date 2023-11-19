@extends('layouts.frontend.specific_header_bg')
@section('title')
products solution
@endsection
@section('content')
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        <li><a href="{{ route('/') }}">Home</a></li>
                                     <li><a href="{{ route('explore') }}">Features</a></li>
        <li><a href="{{ route('price') }}">Pricing</a></li>
        <li><a href="{{ route('Integrations') }}">Integrations</a></li>
    </ul>
</div>

<div class="secondary-design">
    <div class="main-next-wrapper">
        <div class="header-site">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="logo">
                            <a href="{{ route('/') }}">
                                <img src="assets/images/black-logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
                        <div class="menu-main-wrapper">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="{{ route('/') }}">Home</a></li>
                                    <li><a href="{{ route('explore') }}">Features</a></li>
                                    <li><a href="{{ route('price') }}">Pricing</a></li>
                                    <li><a href="{{ route('Integrations') }}">Integrations</a></li>
                                </ul>
                            </div>
                            <div class="login-button">
                                <ul>
                                    <li><a href="{{ route('login') }}">Log in</a></li>
                                    <li><a href="{{ route('register') }}">Sign up</a></li>
                                </ul>
                            </div>
                            <div class="mobile-login-button">
                                <ul>
                                    <li class="sub"><a href="javascript:void(0)"><i class="fas fa-user-cog"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('login') }}">Log in</a></li>
                                            <li><a href="{{ route('register') }}">Sign up</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-wrapper">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="banner-content">
                            <h2>Get Support From Us</h2>
                            <p>Our Support and Customer Success teams are ready to help. Teams are dedicated to answering any inquiries essential to your success.</p>
                            <div class="banner-buttons">
                                <ul>
                                    <li><a href="{{ route('register') }}">Get started</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner-image">
                            <img src="assets/images/nextpages/support-banner.png" alt="payment">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="process-wrapper next-page-process">
    <div class="custom-container">
        <div class="inner-process">
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/open-new-ticket.png" alt="Ticket">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Open New Ticket</span>
                        <h2>Open A New Ticket To Get Quick Support</h2>
                        <p>Receive expert support by submitting a new ticket and benefit from our extensive knowledge.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/support-ticket.png" alt="Support Ticket">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Tickets</span>
                        <h2>Track Support Ticket Progress</h2>
                        <p>Easily access and manage all your support tickets in one convenient location.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/prededined-replies.png" alt="Pre-written">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Predefined Replies</span>
                        <h2>Ready-To-Use Replies For Support Tickets</h2>
                        <p>Benefit from pre-written replies specifically crafted for support tickets, making the resolution process more efficient.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsletter-main next-pages-nsl">
    <div class="custom-container">
        <div class="newsletter-inner">
            <h2>Join Today To Get Started</h2>
            <p>Get the most out of our services with a single click; join us now and take the first step towards success.</p>
            <div class="newsletter-content">
                <form action='{{ route('register') }}'>
                    <input type="text" name="email" placeholder="Enter your email here">
                   <button >Register for free</button>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection
