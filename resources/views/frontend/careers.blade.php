@extends('layouts.frontend.specific_header_bg')
@section('title')
FigurFlux - Career
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

<div class="career-wrapper">
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
    <div class="custom-container">
        <div class="banner-section">
            <div class="banner-image">
                <img src="assets/images/nextpages/career-banner.png" alt="">
            </div>
            <div class="top-section">
                <h2>
                    Shape Your Future
                </h2>
                <p>We're always looking for creative and driven individuals to join our team. If you're passionate about making a difference and want to work with a dynamic group of people, we want to hear from you.</p>
                <a href="#">See Current Opening</a>
            </div>
        </div>
    </div>
</div>
<div class="main-value">
    <div class="custom-container">
        <div class="values-heading">
            <h2>Why Figure Flux Is A Great Place To Work</h2>
        </div>
        <div class="value-wrappers">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-content">
                        <h3>Our values</h3>
                <p>From our products to our services, we strive for high quality.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="value-card">
                                    <div class="value-img">
                                        <span>
                                            <img src="assets/images/nextpages/Workflow.png" alt="Workflow">
                                        </span>
                                    </div>
                                    <h4>Collaboration</h4>
                           <p>Together, we create products that are effective and reach our goals. We build strong relationships by working together openly.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="value-card">
                                    <div class="value-img">
                                        <span>
                                            <img src="assets/images/nextpages/Icon_Integrity.png" alt="">
                                        </span>
                                    </div>
                                    <h4>Transparency</h4>
                           <p>Keeping our employees informed and involved helps maintain a productive and engaged workplace.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="value-card">
                                    <div class="value-img">
                                        <span>
                                            <img src="assets/images/nextpages/Icon_Thumbs.png" alt="">
                                        </span>
                                    </div>
                                    <h4>Trust</h4>
                           <p>Our top priority is creating a workplace where everyone feels valued, respected, and heard. Our success depends on mutual trust and respect.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="value-card">
                                    <div class="value-img">
                                        <span>
                                            <img src="assets/images/nextpages/Icon_Multiple_shape.png" alt="">
                                        </span>
                                    </div>
                                    <h4>Integrity</h4>
                           <p>We value honesty and fairness. Our employees live up to these values every day.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-work">
    <div class="custom-container">
        <div class="different-services">
            <div class="differ-heading">
                <h2>What make us different?</h2>
                <p>We’re equal parts left and right brained. And we’re generally likeable. We won’t bored you with more adjectives. See for yourself.</p>
            </div>
            <div class="differ-image">
                <img src="assets/images/nextpages/differ-img.png" alt="">
            </div>
            <div class="main-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="differ-card">
                            <h3>Scalability</h3>
                            <p>Our ERP cloud solution can easily scale with the growing needs of a business. This can be particularly useful for small or mid-sized businesses that want to expand their operations.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="differ-card">
                            <h3>Flexibility</h3>
                            <p> Our ERP cloud solutions can be customized to fit the unique needs of each business. This means that businesses can choose the modules and features that they need to improve their efficiency and productivity.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="differ-card">
                            <h3>Accessibility</h3>
                            <p>Our Cloud-based ERP solutions are accessible from anywhere and at any time. This can be especially beneficial for remote workers, who can access the system from any location with an internet connection.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="differ-card">
                            <h3>Integration</h3>
                            <p>Our ERP cloud solution can integrate with other software and systems that a business is already using, such as CRM software, e-commerce platforms, and marketing automation tools. This helps to streamline operations and improve data accuracy.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="differ-card">
                            <h3>Security</h3>
                            <p>Our Cloud-based ERP solutions typically offer robust security measures to protect sensitive business data. This can include encryption, firewalls, and regular data backups.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="differ-card">
                            <h3>Customer Support</h3>
                            <p>Our Cloud-based ERP solutions are accessible from anywhere and at any time. This can be especially beneficial for remote workers, who can access the system from any location with an internet connection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="open-position">
        <h2>Let’s find you an open position.</h2>
            <div class="d-flex">
                <div class="short-text">
                    <p>Check out our current openings and find the perfect fit for you.</p>
                </div>
                <div class="form-content">
                    <select>
                         @foreach ($countries as $country )
                        <option>{{$country->name}}</option>
                        @endforeach
                    </select>
                    <form>
                        <input type="text" placeholder="Search Positions">
                        <button>Search</button>
                    </form>
                </div>
            </div>
            <div class="jobs">
                 @foreach ($job as $job)
                <div class="d-flex">
                    <div class="designation">

                        <h2>{{$job->title}}</h2>
                        <p>{{$job->Description}}</p>
                    </div>
                    <div class="degi-link">
                        <a href="{{route('contact_us')}}">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                @endforeach
                <!--<div class="d-flex">-->
                <!--    <div class="designation">-->
                <!--        <h2>UX Designer</h2>-->
                <!--        <p>New York, USA</p>-->
                <!--    </div>-->
                <!--    <div class="degi-link">-->
                <!--        <a href="{{route('contact_us')}}">-->
                <!--            <i class="fas fa-chevron-right"></i>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="d-flex">-->
                <!--    <div class="designation">-->
                <!--        <h2>UI Designer</h2>-->
                <!--        <p>New York, USA</p>-->
                <!--    </div>-->
                <!--    <div class="degi-link">-->
                <!--        <a href="{{route('contact_us')}}">-->
                <!--            <i class="fas fa-chevron-right"></i>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="d-flex">-->
                <!--    <div class="designation">-->
                <!--        <h2>Front-End Designer</h2>-->
                <!--        <p>San Fransisco, CA, USA</p>-->
                <!--    </div>-->
                <!--    <div class="degi-link">-->
                <!--        <a href="{{route('contact_us')}}">-->
                <!--            <i class="fas fa-chevron-right"></i>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="d-flex">-->
                <!--    <div class="designation">-->
                <!--        <h2>Senior Back-end Developer</h2>-->
                <!--        <p>New York, USA</p>-->
                <!--    </div>-->
                <!--    <div class="degi-link">-->
                <!--        <a href="{{route('contact_us')}}">-->
                <!--            <i class="fas fa-chevron-right"></i>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/main.js"></script>


@endsection
