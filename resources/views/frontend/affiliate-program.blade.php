@extends('layouts.frontend.specific_header_bg')
@section('title')
    affliated program
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
    <div class="pricing-plan-main transarent-header">
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
                                    </ul></li>
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
        <div class="af-program-wrapper">
            <div class="about-title">
                <h1>Partner Up And Prosper With Figureflux</h1>
                <p>Make Money Simply by Referring Customers to FigureFlux.</p>
                <div class="program-bg">
                    <img src="assets/images/affiliate-program.png" alt="affiliate program">
                </div>
            </div>
        </div>
    </div>
    <div class="custom-container">
        <div class="commsion-section">
            <h2>20% Commission Per successful Refferal</h2>
            <p>Refer Customers to FigureFlux and Earn a Generous 20% on Every Sale for the First Year.</p>
        </div>
    </div>
    <div class="earn-commission-wrapper">
        <h2>Earn Commission With Figureflux</h2>
        <div class="commsion-inner">
            <div class="row">
                <div class="col-lg-4">
                    <div class="commission-card">
                        <h3>Become a Partner</h3>
                        <p>Sign Up for the FigureFlux Affiliate Program and Get Your Unique Affiliate Link.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="commission-card">
                        <h3>Refer to FigureFlux</h3>
                        <p>Share Your Affiliate Link and Receive Commission for Every Sign-Up Within 30 Days of Clicking
                            Your Link.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="commission-card">
                        <h3>Get Paid!</h3>
                        <p>Get Paid for Every User Sign-Up and Upgrade. Receive Commission on All Transactions for 12
                            Months per user.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="guidance-wrapper">
        <h2>Guidance</h2>
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="basic-plan-main">
                        <div class="basic-plan">
                            <h3>Please DO:</h3>
                            <div class="plan-list">
                                <ul>
                                    <li><span>1</span> Engage the Audience with Valuable Content</li>
                                    <li><span>2</span> Use Creative & Relevant Promotion Techniques</li>
                                    <li><span>3</span> Monitor Performance, Adjust Strategies as Needed</li>
                                    <li><span>4</span> Use Branding from Brand Page, Contact for More</li>
                                    <li><span>5</span> Promote FigureFlux following branding guidelines</li>
                                    <li><span>6</span> Place Affiliate links in Blogs, Social Media, etc.</li>
                                    <li><span>7</span> Promote FigureFlux Link on Social Media Channels</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="basic-plan-main">
                        <div class="basic-plan">
                            <h3>Avoid These Don'ts</h3>
                            <div class="plan-list">
                                <ul>
                                    <li><span>1</span> Don't use an affiliate link on inappropriate sites</li>
                                    <li><span>2</span> Avoid fraudulent marketing practices</li>
                                    <li><span>3</span> Don't abuse the program</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-main training-faq">
        <div class="faq-inner-wrapper">
            <h2>Frequently Asked Questions</h2>
            <div class="accourdian">
                <div class="accordian-item item1">
                    <div class="accordian-link">
                        What is the FigureFlux affiliate program?
                        <i class="fal fa-plus ion-md-add"></i>
                    </div>
                    <div class="answer">
                        <p>The FigureFlux affiliate program allows individuals and businesses to earn a commission by
                            promoting our enterprise resource planning (ERP) services to their network.</p>
                    </div>
                </div>
                <div class="accordian-item item2">
                    <div class="accordian-link">
                        Who can become an affiliate?
                        <i class="fal fa-plus ion-md-add"></i>
                    </div>
                    <div class="answer">
                        <p>Anyone can apply to become an affiliate. We welcome individuals, bloggers, website owners,
                            and businesses to join our program.</p>
                    </div>
                </div>
                <div class="accordian-item item3">
                    <div class="accordian-link">
                        How much commission can I earn as an affiliate?
                        <i class="fal fa-plus ion-md-add"></i>
                    </div>
                    <div class="answer">
                        <p>The commission amount varies based on the specific affiliate agreement and the services that
                            are promoted.</p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        How do I get paid for my affiliate earnings?
                        <i class="fal fa-plus ion-md-add"></i>
                    </div>
                    <div class="answer">
                        <p>Affiliate earnings are paid monthly, through a payment method of your choice, such as PayPal
                            or bank transfer.</p>
                    </div>
                </div>
                <div class="accordian-item item5">
                    <div class="accordian-link">
                        Is there any support provided for affiliates to promote the services?
                        <i class="fal fa-plus ion-md-add"></i>
                    </div>
                    <div class="answer">
                        <p>Yes, we provide marketing materials, tracking links, and support to our affiliates to help
                            them effectively promote our ERP services.</p>
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
