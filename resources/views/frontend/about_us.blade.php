@extends('layouts.frontend.specific_header_bg')
@section('title')
FigurFlux - About Us
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


<div class="about-wrapper">
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
    <div class="about-title">
        <h1>About FigureFlux</h1>
            <p>At FigureFlux, we're passionate about helping businesses succeed. Our innovative and efficient solutions help you manage finances, reports, sales, marketing, and much more with a simple interface that allows easy customization. Get your business moving forward with FigureFlux.</p>
                <img src="assets/images/about-image.png" alt="About us">
    </div>
</div>
<div class="customer-intraction">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-6">
            <div class="intraction-card">
                <div class="intraction-icon">
                    <img src="assets/images/nextpages/fire.png" alt="Daily Active Users">
                </div>
                    <h2>10K+</h2>
                <p>Daily Active Users</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <div class="intraction-card">
                <div class="intraction-icon">
                    <img src="assets/images/nextpages/user-check.png" alt="Paid Customers">
                </div>
                    <h2>500+</h2>
                <p>Paid Customers</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <div class="intraction-card">
                <div class="intraction-icon">
                    <img src="assets/images/nextpages/envelope.png" alt="Message Rotation">
                </div>
                    <h2>1M+</h2>
                <p>Message Rotation </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <div class="intraction-card">
                <div class="intraction-icon">
                    <img src="assets/images/nextpages/flag.png" alt="Country Users">
                </div>
                    <h2>31</h2>
                <p>Country Users</p>
            </div>
        </div>
    </div>
</div>
    <div class="custom-container">
        <div class="benefits-title">
            <h2>Perks & Benefits </h2>
            <p>
              Learn about the exciting perks and benefits that come with being a part of our team!

            </p>
        </div>
<div class="benefite-inner">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Competitive salary and benefits package</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Opportunities for career growth and advancement</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Health and wellness benefits <a href="#">(Coming Soon)</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Collaborative and dynamic work environment</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Access to cutting-edge technology and tools</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Employee recognition and appreciation programs</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Access to training and education programs</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Employee referral bonuses</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Social events and team-building activities</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="benefite-card">
                        <p>Diverse and inclusive culture</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<div class="meet-team">
        <div class="custom-container">
            <h2>Meet Our Team</h2>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="team-card">
                        <h3>Zeeshan Ahmad </h3>
                        <p>Founder & CEO</p>
                    </div>
                </div>

                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="team-card">
                        <h3>Muhammad Ali</h3>
                        <p>Co-Founder & CMD</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="team-card">
                        <h3>Muhammad Nasir Qureshi </h3>
                        <p>Chief Technical Officer</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="team-card">
                        <h3>James Bolton</h3>
                        <p>Head of Sales</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="border-solid">
                    <div class="team-card">
                        <h3>Rachel Greene</h3>
                        <p>Head of Finance</p>
                    </div>
                    </div>
                </div>
            <div class="col-lg-3 mb-3">
                <div class="border-solid">
                <div class="team-card">
                    <h3>Kevin Ross</h3>
                    <p>Head of Marketing </p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="border-solid">
                <div class="team-card">
                    <h3>Ali Saeed</h3>
                    <p>HR Manager</p>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<div class="our-blogs">
    <div class="custom-container">
        <h2>Read Our Blog</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/images/nextpages/Base.png" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <span>Analytics</span>
                        <p>How great Content helps
                            drive success in Marketplace</p>
                        <a href="#">READ MORE <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/images/nextpages/Base.png" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <span>Marketing</span>
                        <p>Strossle International AB ranked #1 on  2023</p>
                        <a href="#">READ MORE <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/images/nextpages/Base.png" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <span>Advertising</span>
                        <p>What All Marketers Should Know About Brand Safe</p>
                        <a href="#">READ MORE <i class="fas fa-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-main">
        <div class="custom-container">
            <div class="newsletter-inner">
                <h2>Join Today To Get Started</h2>
                <p>Get the most out of our services with a single click; join us now and take the first step towards success</p>
                <div class="newsletter-content">
                    <form action='{{ route('register') }}'>
                        <input type="text" name="email" placeholder="Enter your email here">
                       <button >Register for free</button>

                    </form>
                </div>
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
