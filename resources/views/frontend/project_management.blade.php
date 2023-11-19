@extends('layouts.frontend.specific_header_bg')
@section('title')
    project management
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
                                <h2>Organize Your Projects Under One Roof </h2>
                                <p>Make your team's workflow easier and increase productivity with our unified project management solution. Keep all tasks and projects organized; no more scattered work.
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
                                <img src="assets/images/nextpages/projects.png" alt="Revitalize Your Contract Management">
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
                                    <img src="assets/images/nextpages/projects.png" alt="Create Contract Record">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="process-content">
                                <span>Management</span>
                                <h2>All-in-one Project Management</h2>
                                <p>Easily manage all aspects of your projects with our all-in-one project management software. From task assignments to deadlines and progress tracking, we've got you covered.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="process-image">
                                <div class="process-img">
                                    <img src="assets/images/nextpages/projects-1.png" alt="Instant Contract Visibility">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="process-content">
                                <span>Create Project</span>
                                <h2>Create New Project</h2>
                                <p>To initiate a new business endeavor or undertaking in the project management system of FigureFlux, the user can create a new project by defining its scope, identifying team members and their roles, establishing a budget and timeline, and assigning tasks and responsibilities. FigureFlux allows for management and addition of projects in multiple currencies, along with real-time status updates.</p>
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

@endsection
