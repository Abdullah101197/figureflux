
      @extends('layouts.frontend.frontend_layout')
@section('title')
    products&services
@endsection
@section('content')
<div class="main-top-wrapper">

    <div class="banner-wrapper business-plan">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h2>Get up to 70% PSG support for Flux 300</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis autem</p>
                        <div class="banner-buttons">
                            <ul>
                                <li><a href="#">Get started</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 banner-animation">
                    <div id="banner-view"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partner-company">
    <h2>Companies we have helped grow</h2>
    <div class="custom-container">
        <div class="row">
        <div class="partner-logo">
            <ul>
                <li><img src="assets/images/Aven.png" alt="Aven"></li>
                <li><img src="assets/images/Ideaa.png" alt="Ideaa"></li>
                <li><img src="assets/images/Velocity-9.png" alt="Velocity 9"></li>
                <li><img src="assets/images/Liva.png" alt="Liva"></li>
                <li><img src="assets/images/Treva.png" alt="Treva"></li>
            </ul>
        </div>
    </div>
    </div>
</div>
<div class="product-overview">
    <div class="custom-container">
        <div class="product-overview-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="title-content">
                        <h1><span>Product</span> Overview</h1>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product-content">
                        <p>
                        Donec bibendum, dui id ultrices molestie, neque neque porta felis, id viverra ligula justo interdum mi.
                        Nunc malesuada, risus consec maximus consequat, purus enim ultricies nisi, quis ornare.</p>
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
<div class="process-wrapper">
    <div class="custom-container">
        <div class="inner-process">
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/crm.png" alt="">
                        </div>
                        <div class="process-img2">
                            <img src="assets/images/crm-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>CRM</span>
                        <h2>Keep conversations organized.</h2>
                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to
                            specific teams or projects. Control who has access to each
                            chat and stay on top of conversations with your Notifications feed.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/account-1.png" alt="">
                        </div>
                        <div class="process-img2 account-process">
                            <img src="assets/images/account-2.png" alt="">
                        </div>
                        <div class="process-img3">
                            <img src="assets/images/account-3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Accounting</span>
                        <h2>Format your messages for clarity.</h2>
                        <p>Include code blocks, bulleted lists, banners, and more to communicate work
                             details more clearly. Save time on formatting work with /Slash Command shortcuts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/sales-1.png" alt="">
                        </div>
                        <div class="process-img2 sale-process">
                            <img src="assets/images/sales-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Sales</span>
                        <h2>Format your messages for clarity.</h2>
                        <p>Include code blocks, bulleted lists, banners, and more to communicate work
                             details more clearly. Save time on formatting work with /Slash Command shortcuts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/hr-management-1.png" alt="">
                        </div>
                        <div class="process-img2 hr-management">
                            <img src="assets/images/hr-management-2.png" alt="">
                        </div>
                        <div class="process-img3 hr-management-bottom">
                            <img src="assets/images/hr-management-3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>HR Management</span>
                        <h2>Keep conversations organized.</h2>
                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                            to each chat and stay on top of conversations with your Notifications feed.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-wrapper">
            <div class="title-section">
                <h2>FEATURES</h2>
                <h3>Organize work your way.</h3>
            </div>
            <div class="feature-inner">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="true">payment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-businessplan-tab" data-bs-toggle="pill" data-bs-target="#pills-businessplan" type="button" role="tab" aria-controls="pills-businessplan" aria-selected="false">business plan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-leadmanagement-tab" data-bs-toggle="pill" data-bs-target="#pills-leadmanagement" type="button" role="tab" aria-controls="pills-leadmanagement" aria-selected="false">lead management</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-productservice-tab" data-bs-toggle="pill" data-bs-target="#pills-productservice" type="button" role="tab" aria-controls="pills-productservice" aria-selected="false">product & service</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-ordermanagement-tab" data-bs-toggle="pill" data-bs-target="#pills-ordermanagement" type="button" role="tab" aria-controls="pills-ordermanagement" aria-selected="false">order management</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-projectmanagement-tab" data-bs-toggle="pill" data-bs-target="#pills-projectmanagement" type="button" role="tab" aria-controls="pills-projectmanagement" aria-selected="false">project management</button>
                    </li>
                  </ul>
                  <div class="tab-content feature-details" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                        <div class="custom-container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="process-content">
                                        <span>Payments</span>
                                        <h2>Keep conversations organized.</h2>
                                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                                            to each chat and stay on top of conversations with your Notifications feed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="process-image">
                                        <div class="process-img">
                                            <img src="assets/images/payment-1.png" alt="">
                                        </div>
                                        <div class="process-img2 payment">
                                            <img src="assets/images/payment-2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-businessplan" role="tabpanel" aria-labelledby="pills-businessplan-tab">
                        <div class="custom-container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="process-content">
                                        <span>Business Plan</span>
                                        <h2>Keep conversations organized.</h2>
                                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                                            to each chat and stay on top of conversations with your Notifications feed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="process-image">
                                        <div class="process-img">
                                            <img src="assets/images/business-plan.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-leadmanagement" role="tabpanel" aria-labelledby="pills-leadmanagement-tab">
                        <div class="custom-container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="process-content">
                                        <span>Leads</span>
                                        <h2>Keep conversations organized.</h2>
                                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                                            to each chat and stay on top of conversations with your Notifications feed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="process-image">
                                        <div class="process-img">
                                            <img src="assets/images/leads.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-productservice" role="tabpanel" aria-labelledby="pills-productservice-tab">
                        <div class="custom-container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="process-content">
                                        <span>Product & Service</span>
                                        <h2>Keep conversations organized.</h2>
                                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                                            to each chat and stay on top of conversations with your Notifications feed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="process-image">
                                        <div class="process-img">
                                            <img src="assets/images/product&services.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-ordermanagement" role="tabpanel" aria-labelledby="pills-ordermanagement-tab">
                        <div class="custom-container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="process-content">
                                        <span>Order Management</span>
                                        <h2>Keep conversations organized.</h2>
                                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                                            to each chat and stay on top of conversations with your Notifications feed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="process-image">
                                        <div class="process-img">
                                            <img src="assets/images/ordermanagement.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-projectmanagement" role="tabpanel" aria-labelledby="pills-projectmanagement-tab">
                        <div class="custom-container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="process-content">
                                        <span>Project Management</span>
                                        <h2>Keep conversations organized.</h2>
                                        <p>Create a Chat view for any work you need inside ClickUp, from company-wide updates to specific teams or projects. Control who has access
                                            to each chat and stay on top of conversations with your Notifications feed.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="process-image">
                                        <div class="process-img">
                                            <img src="assets/images/payment-1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="feature-for-you">
    <div class="feature-title">
        <h2>Features for you</h2>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
    </div>
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon supplier-icon">
                        <img src="assets/images/Suppliers.png" alt="Suppliers">
                    </div>
                    <div class="feature-content">
                        <h2>Suppliers</h2>
                        <p>Sed ut perspiciatis unde omnis iste
                        natus error sit voluptatem accusantium</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon purchase-orders-icon">
                        <img src="assets/images/Purchase-Orders.png" alt="Purchase Orders">
                    </div>
                    <div class="feature-content">
                        <h2>Purchase Orders</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon documents-management-icon">
                        <img src="assets/images/Documents-Management.png" alt="Documents Management">
                    </div>
                    <div class="feature-content">
                        <h2>Documents Management</h2>
                        <p>Ut enim ad minima veniam, quis nostrum rcitationem ullam corporis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon task-management-icon">
                        <img src="assets/images/Task-Management.png" alt="Task Management">
                    </div>
                    <div class="feature-content">
                        <h2>Task Management</h2>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon reports-icon">
                        <img src="assets/images/Reports.png" alt="Reports">
                    </div>
                    <div class="feature-content">
                        <h2>Reports</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon email-icon">
                        <img src="assets/images/Email-SMS-Marketing.png" alt="Email & SMS Marketing">
                    </div>
                    <div class="feature-content">
                        <h2>Email & SMS Marketing</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon pos-icon">
                        <img src="assets/images/POS-Integrations.png" alt="POS Integrations">
                    </div>
                    <div class="feature-content">
                        <h2>POS Integrations</h2>
                        <p>Ut enim ad minima veniam, quis nostrum rcitationem ullam corporis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="inner-feature-card">
                    <div class="feature-icon contract-icon">
                        <img src="assets/images/Contracts.png" alt="Contracts">
                    </div>
                    <div class="feature-content">
                        <h2>Contracts</h2>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p>
                    </div>
                </div>
            </div>
            <div class="explor-btn">
                                    <a href="{{route('explore')}}">Explore Features</a>
            </div>
        </div>
    </div>
</div>
<div class="integration-wrapper">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="integration-content">
                    <span>Integerations</span>
                    <h2>Bring all of your tools into one place.</h2>
                    <p>If you're not ready replace all your tools, ClickUp can
                        integrate with them with native and third-party integrations. Sync your team calendars,
                        messaging apps, cloud storage, and more to keep everything in one place.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="intergration-img">
                    <img src="assets/images/integration.png" alt="integration">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="custom-container">
        <div class="testimonial-inner">
            <div class="slick-item">
            <div class="row">
                <div class="col-lg-4">
                    <div class="customer-image">
                        <img src="assets/images/customer-img.png" alt="testimonial">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="customer-comment">
                        <img src="assets/images/Aven.png" alt="Aven">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <span>Cristofer Vaccaro / Associat Director at Impact Justice</span>
                    </div>
                    <div class="meet-customer">
                        <a href="#">Meet our customers <i class="fas fa-long-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="slick-item">
            <div class="row">
                <div class="col-lg-4">
                    <div class="customer-image">
                        <img src="assets/images/customer-img.png" alt="testimonial">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="customer-comment">
                        <img src="assets/images/Aven.png">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <span>Cristofer Vaccaro / Associat Director at Impact Justice</span>
                    </div>
                    <div class="meet-customer">
                        <a href="#">Meet our customers <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            </div>
         </div>
    </div>
</div>

<div class="plan-wrapper">
    <div class="plan-title">
        <h2>Start today, with free or premium plan, you choose</h2>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
    </div>
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="basic-plan-main">
                    <div class="basic-btn">
                        <a href="#">BASIC PLAN</a>
                    </div>
                    <div class="basic-plan">
                        <div class="plan-list">
                            <ul>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Limited access library</li>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Hotline support 24/7</li>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> 100+ HTML UI Elements</li>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> EaCommerce builder</li>
                            </ul>
                        </div>
                        <div class="plan-content">
                            <h2>$0 <span>per month</span></h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio
                            cumque nihil impedit quo minus id quod maxime placeat
                            facere possimus</p>
                            <a href="#">Join now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="basic-plan-main primum-plan">
                    <div class="basic-btn">
                        <a href="#">PREMIUM PLAN</a>
                    </div>
                    <div class="basic-plan">
                        <div class="plan-list">
                            <ul>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Limited access library</li>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> Hotline support 24/7</li>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> 100+ HTML UI Elements</li>
                                <li><span><img src="assets/images/plan-tick.png" alt="plan"></span> EaCommerce builder</li>
                            </ul>
                        </div>
                        <div class="plan-content">
                            <h2>$99 <span>per month</span></h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike
                                men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                            <a href="#">Join now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsletter-main">
    <div class="custom-container">
        <div class="newsletter-inner">
            <h2>Sign up and get started</h2>
            <p>Free trail 14 days of change and without obligation</p>
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
