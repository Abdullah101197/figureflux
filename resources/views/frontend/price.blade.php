
@extends('layouts.frontend.specific_header_bg')
@section('title')
    Price
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

    <div class="pricing-title">
        <h1>Take Advantage Of Every Dollar You Spend</h1>
        <p>Select the right plan with our flexible pricing options. Only pay for what you use.</p>
    </div>

    @livewire('packages')
    
    <div class="main-pakeges-wrapper">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="inner-plans-wrapper">
                            <p>Select Plan</p>
                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                   <button class="nav-link active" id="v-pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#v-pills-monthly" type="button" role="tab" aria-controls="v-pills-monthly" aria-selected="true">Monthly</button>
                                      <button class="nav-link" id="v-pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#v-pills-yearly" type="button" role="tab" aria-controls="v-pills-yearly" aria-selected="false">Yearly</button>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-monthly" role="tabpanel" aria-labelledby="v-pills-monthly-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="plan-detail">
                                            <h2>Basic</h2>
                                            <p>Start off strong with everything you need</p>
                                            <h3>$USD 39</h3>
                                            <p>Per Month</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="plan-detail">
                                            <h2>Standard</h2>
                                            <p>Start off strong with everything you need</p>
                                            <h3>$USD 99</h3>
                                            <p>Per Month</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="plan-detail">
                                            <h2>Premium</h2>
                                            <p>Start off strong with everything you need</p>
                                            <h3>$USD 399</h3>
                                            <p>Per Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-yearly" role="tabpanel" aria-labelledby="v-pills-yearly-tab">  <div class="row">
                                <div class="col-md-4">
                                    <div class="plan-detail">
                                        <h2>Basic</h2>
                                        <p>Start off strong with everything you need</p>
                                        <h3>$USD 390</h3>
                                        <p>Per Year</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="plan-detail">
                                        <h2>Standard</h2>
                                        <p>Start off strong with everything you need</p>
                                        <h3>$USD 990</h3>
                                        <p>Per Year</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="plan-detail">
                                        <h2>Premium</h2>
                                        <p>Start off strong with everything you need</p>
                                        <h3>$USD 3390</h3>
                                        <p>Per Year</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                          </div>
                    </div>
                </div>
                <div class="points-table">
                    <table class="table table-striped">
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Dashboard</span></td>                           
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Chat</span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Tasks</span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Documents</span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Accounts</span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Business Plans</span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Payments</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Accounts</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Sales</span></td>
                            <td> <span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Suppliers</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Purchase</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Contracts</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Projects</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Leads</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Support</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>Knowledgebase</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Orders</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> HRM</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span>  Calendar</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Products & services</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Reports</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Utilities</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                        <tr>
                            <td class="d-flex" style="justify-content: space-around;width: 100%;"><span class="check"><i class="fas fa-check-circle"></i></span><span> Settings</span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="cross"><i class="fas fa-times-circle"></i></span></td>
                            <td><span class="check"><i class="fas fa-check-circle"></i></span></td>
                        </tr>
                      </table>
                </div>
            </div>
        </div>

        <div class="primum-pln-st-decs">
            <p>Get access to enterprise-level features and save money by choosing our annual payment option.</p>
        </div>
        <div class="our-main-feature">
            <h2>Core Features</h2>
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="our-feature-card">
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/images/nextpages/utm.png" alt="Collaborate Beyond The Limits">
                                </span>
                            </div>
                            <h3>Unlock Limitless Team Collaboration</h3>
                            <p>Unleash team collaboration potential with unlimited members for free</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="our-feature-card">
                            <div class="feature-icon">
                                <span>
                                <img src="assets/images/nextpages/ua.png" alt="Unlimited App Growth">
                                </span>
                            </div>
                            <h3>Unlimited App Growth</h3>
                            <p>
                            Unlock boundless possibilities with as many sign ups as you want
                                </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="our-feature-card">
                            <div class="feature-icon">
                                <span>
                                    <img src="assets/images/nextpages/urb.png" alt="Unlimited reported bugs">
                                </span>
                            </div>
                            <h3>Unlimited reported bugs</h3>
                            <p>Do your testers report a thousand bugs? We're fine with that.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="our-feature-card">
                            <div class="feature-icon">
                                <span>
                                     <img src="assets/images/nextpages/fcd.png" alt="Fully customizable data">
                                </span>
                            </div>
                            <h3>Fully customizable data</h3>
                            <p>Easily adjust the data you receive to best suit your needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="our-feature-card">
                            <div class="feature-icon">
                                <span>
                                <img src="assets/images/nextpages/ds.png" alt="Deep search">
                            </span>
                            </div>
                            <h3>Deep search</h3>
                            <p>Effortlessly find, for example, only bugs reported from iOS 11.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="our-feature-card">
                            <div class="feature-icon">
                                <span>
                                <img src="assets/images/nextpages/clf.png" alt="Customize the look and feel">
                                </span>
                            </div>
                            <h3>Customize the look and feel</h3>
                            <p>Customize the invoking gesture to your needs.</p>
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
                    What is the cost of using FigureFlux?
                    <i class="fal fa-plus ion-md-add"></i>
                  </div>
                  <div class="answer">
                    <p>The cost of using FigureFlux depends on the plan you choose. We have various plans to suit
                         different needs and budgets,
                        including a free plan and various paid plans with increasing features and capabilities. </p>
                  </div>
                </div>
                <div class="accordian-item item2">
                  <div class="accordian-link">
                    Is there a free trial for FigureFlux?
                    <i class="fal fa-plus ion-md-add"></i>
                  </div>
                  <div class="answer">
                    <p>Yes, we offer a free trial for all our paid plans so you can test and evaluate the software before making a purchase.</p>
                  </div>
                </div>
                <div class="accordian-item item3">
                  <div class="accordian-link">
                    Is there a discount for annual billing?
                    <i class="fal fa-plus ion-md-add"></i>
                  </div>
                  <div class="answer">
                    <p>Yes, we offer a discount for annual billing compared to monthly billing.</p>
                  </div>
                </div>
                <div class="accordian-item item5">
                  <div class="accordian-link">
                    Can I upgrade or downgrade my plan at any time?
                    <i class="fal fa-plus ion-md-add"></i>
                  </div>
                  <div class="answer">
                    <p>Yes, you can upgrade or downgrade your plan at any time to suit your changing needs.</p>
                  </div>
                </div>
        </div>
    </div>
    </div>
    <div class="newsletter-main price-news">
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
            $(document).ready(function() {



                $('.plans-slide').slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    arrows: true,
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
                //         $a = $("<button href='javascript:void(0)'>Less...</button>")
                //     if ($lis.length > 3) {
                //         $this.after($a);
                //         $a.click(function() {
                //             $lis.slice(3).toggle();
                //             $a.html($a.html() === "More..." ? "Less..." : "More...")
                //         }).click();
                //     }
                // });


            });
        </script>

@endsection
