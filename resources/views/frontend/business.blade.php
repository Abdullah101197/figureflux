@extends('layouts.frontend.specific_header_bg')
@section('title')
business
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
                                <h2>Plan Your Business For Success</h2>
                                <p>Take your business planning to the next level and plan like never before. Create a comprehensive plan to guide your business toward achieving your goals.</p>
                        <div class="banner-buttons">
                            <ul>
                                        <li><a href="{{ route('register') }}">Get started</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        <div class="col-lg-7">
                            <div class="banner-image">
                                <img src="assets/images/payment-banner.png" alt="CRM">
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
        <div class="process-wrapper next-page-process bussines-plan">
    <div class="custom-container">
                <div class="inner-process">
                    <div class="plan-title">
                        <span>Business plan</span>
                        <h3>Make business plan</h3>
                    </div>
            <div class="row">
                        <div class="col-lg-5">
                            <div class="process-content">
                                <h2>Create A Roadmap For Your Business</h2>
                                <p>Create a roadmap for your business with a step-by-step process. Write a comprehensive business plan to achieve your goals and objectives. </p>
                    </div>
                </div>
                        <div class="col-lg-7">
                            <div class="process-image">
                                <div class="process-img">
                                    <img src="assets/images/make-plan.png" alt="Streamline Lead Tracking">
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js" integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <div class="overview-image" id="overview-image">

                <!-- <img src="assets/images/product-overview.png" alt=""> -->
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
                                    <img src="assets/images/payment-banner.png" alt="Streamline Lead Tracking">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                                <h2>Business plans </h2>
                                <p>Keep all your business plans in one place, easily accessible and organized. Quickly edit, update, and manage them with a user-friendly interface.</p>
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
                <form>
                    <input type="text" placeholder="Enter your email here">
                    <button>Register for free</button>
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
