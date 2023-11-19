@extends('layouts.frontend.specific_header_bg')
@section('title')
    payment
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
        </ul>
    </div>
    <div class="transarent-header">
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
    </div>
    <div class="pricing-plan-main">
    <div class="pricing-title">
        <h1>Check Out Our Plans And Pick The One That Works Best For You</h1>
        <p>Get a clear overview of different plans with our handy comparison chart. Compare features, benefits, and pricing to find the best plan for you.</p>
    </div>
            @livewire('packages')
            


    </div>
    <div class="short-note">
                <p>Get access to enterprise-level features and save money by choosing our annual payment option.</p>
            </div>
            <div class="sale-wrapper">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-6">
                        <div class="sale-img">
                            <img src="assets/images/crm/sale.png" alt="Big Sale">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sale-content">
                            <h2>Take Advantage Of 50% Off And Save Big</h2>
                            <p>Your influence matters. FigureFlux is thrilled to aid nonprofit organizations with tailored pricing options. Streamline your tasks, and continue to make an impact.</p>
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
                  How do I upgrade my package?
                    <i class="fal fa-plus ion-md-add"></i>
                            </div>
                  <div class="answer">
                    <p>To upgrade your package, please log into your account and navigate to the "settings" or "subscription" page. From there, you should be able to select a new package and make the appropriate payment. </p>
                        </div>
                    </div>
                <div class="accordian-item item2">
                  <div class="accordian-link">
                    What measures do you have in place to ensure data security?
                    <i class="fal fa-plus ion-md-add"></i>
                </div>
                  <div class="answer">
                    <p>We have implemented a number of security measures to protect your data, including SSL encryption, regular backups, and access controls. Additionally, we comply with industry-standard regulations such as HIPAA and PCI-DSS(In Progress).
</p>
            </div>
                            </div>
                <div class="accordian-item item3">
                  <div class="accordian-link">
                  How do I cancel my subscription?
                    <i class="fal fa-plus ion-md-add"></i>
                        </div>
                  <div class="answer">
                    <p>To cancel your subscription, please log into your account and navigate to the "settings" or "subscription" page. From there, you should be able to find a "cancel subscription" button or link. Once you have canceled, you will still have access to your account until the end of your billing cycle.</p>
                                </div>
                            </div>
                <div class="accordian-item item4">
                  <div class="accordian-link">
                  Can I upgrade at any time?
                    <i class="fal fa-plus ion-md-add"></i>
                        </div>
                  <div class="answer">
                    <p>Yes, you can upgrade your plan at any time to access additional features and benefits.</p>
                    </div>
                </div>
                <div class="accordian-item item5">
                  <div class="accordian-link">
                  Is my data secure?
                    <i class="fal fa-plus ion-md-add"></i>
            </div>
                  <div class="answer">
                    <p>Your data security is a top priority for us. We employ robust security measures to ensure that your information is always protected.</p>
          </div>
    </div>
    <div class="accordian-item item4">
                  <div class="accordian-link">
                  Can I ask for a refund?
                    <i class="fal fa-plus ion-md-add"></i>
                        </div>
                  <div class="answer">
                    <p>Yes, we offer a satisfaction guarantee. If you are not completely satisfied with our software, you may request a refund within a specified time period and we approve refunds after thorough evaluation.
</p>
                    </div>
                </div>
</div>
</div>
</div>
    <div class="newsletter-main price-news">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {

            $('.testimonial-inner').slick({
                dots: true,
                infinite: false,
                speed: 300,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });

            $('.plans-slide').slick({
                dots: false,
                infinite: false,
                speed: 300,
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 1020,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });



            // $(".readmore").each(function() {
            //     var $this = $(this),
            //         $lis = $this.children(),
            //         $a = $("<button href='javascript:void(0)'>Less</button>")
            //     if ($lis.length > 3) {
            //         $this.after($a);
            //         $a.click(function() {
            //             $lis.slice(3).toggle();
            //             $a.html($a.html() === "More" ? "Less" : "More")
            //         }).click();
            //     }
            // });


        });
    </script>

    @endsection
