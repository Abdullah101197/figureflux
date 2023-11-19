@extends('layouts.frontend.specific_header_bg')
@section('title')
 bussiness plan
@endsection
@section('content')

<style>
    .process-wrapper.next-page-process.bussines-plan {
    background: #F5F5F5;
    margin-bottom:80px;

}
    .process-wrapper.next-page-process.bussines-plan .row:nth-of-type(even) {
    flex-direction: row;
}

.process-wrapper.next-page-process.bussines-plan .inner-process .row:nth-of-type(even) .process-image:after{
    background:none;
}
</style>

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
                                <h2>Quickly Access Lead Information</h2>
                                <p>Stay organized and on top of your leads with our lead database management system. Manage and categorize leads to increase sales efficiency.
                                </p>
                                <div class="banner-buttons">
                                    <ul>
                                        <li><a href="{{ route('register') }}">Get started</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-image">
                                <img src="assets/images/nextpages/leads.png" alt="Revitalize Your Contract Management">
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
                                    <img src="assets/images/nextpages/contarct-1.png" alt="Create Contract Record">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="process-content">
                                <span>Leads</span>
                                <h2>Advanced Lead Entry</h2>
                                <p>Quickly add new leads by inputting minimal information such as name and contact details.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="process-image">
                                <div class="process-img">
                                    <img src="assets/images/nextpages/contarct-list.png" alt="Instant Contract Visibility">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="process-content">
                                <span>Web To Lead</span>
                                <h2>Easily Convert Web Visitors to Leads</h2>
                                <p>Capture valuable leads from your website with Web to Leads. Easily convert website visitors into potential customers with just a few clicks.
                                </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        var animation = bodymovin.loadAnimation({
        container: document.getElementById('overview-image'),
        path: 'assets/animations/Animation-proview.json',
        renderer: 'svg',
        loop: true,
        autoplay: true,
        name: "Animation-proview",
        });
    </script>
    <script>
        var animation = bodymovin.loadAnimation({
        container: document.getElementById('banner-view'),
        path: 'assets/animations/Animation-banner.json',
        renderer: 'svg',
        loop: true,
        autoplay: true,
        name: "Animation-banner",
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.testimonial-inner').slick({
                dots: true,
                infinite: false,
                speed: 300,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
            });
        });
      </script>
@endsection
