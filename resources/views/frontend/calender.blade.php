@extends('layouts.frontend.specific_header_bg')
@section('title')
clander
@endsection
@section('content')
<style>
    .next-page-process .inner-process .reverse-row .process-image:after {
    background-image: url(assets/images/nextpages/structure-elips.png);
    right: 0;
    left: -8%;
    background-position: left;
    background-size: contain;
}
.row.reverse-row {
    flex-direction: row-reverse;
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
    <div class="banner-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner-content">
                        <h2>Manage Team And Project Schedules</h2>
                        <p>With FigureFlux, users can unify team and project deadlines, streamline team planning, easily coordinate team and project timelines, and ultimately maximize productivity.</p>
                        <div class="banner-buttons">
                            <ul>
                                                                <li><a href="{{ route('register') }}">Get started</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-image">
                    <img src="assets/images/crm/calender-main.png" alt="emplyee">
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
                            <img src="assets/images/crm/calender-1.png" alt="Collaborate ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Collaborate </span>
                        <h2>Collaborate and Meet Deadlines with FigureFlux Calendar</h2>
                        <p>Our calendar is easy to use and designed to help you manage your team's schedules, deadlines, and appointments in one centralized location.</p>
                    </div>
                </div>
            </div>
            <div class="team-calender">
                <div class="team-calender-wrapper explore-wrapper">
                    <h2>With team Calendar software you can...</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-solid">
                                <div class="inner-feature-card">
                                 <h4>Switch between Viewing List </h4>
                                 <p>Switch between viewing tasks by due date or sorting and filter them for optimal task management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border-solid">
                                <div class="inner-feature-card">
                                 <h4>Track Teams Progress</h4>
                                 <p>View all team assignments and deadlines using advanced search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border-solid">
                                <div class="inner-feature-card">
                                 <h4>Sync To Be Ultimate Schedule Companion</h4>
                                 <p>Integrate with your favorite scheduling tool such as Google Calendars, iCal, Outlook, and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row reverse-row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/crm/calender-1.png" alt="Streamline Lead Tracking">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Time deliveries</span>
                        <h2>Keep Your Team Aligned with Shared Calendars for on-Time deliveries</h2>
                        <p>Choose from various calendar views to fit your team's needs and easily switch between them to get a complete overview of your project details.
                        </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
@endsection
