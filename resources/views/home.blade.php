@extends('layouts.frontend.frontend_layout')
@section('title')
    Home
@endsection
@section('content')
    <div class="main-top-wrapper">
        <div class="banner-wrapper">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h2>Efficiently Manage Your Business with our Powerful Cloud-based ERP Solution</h2>
                            <p>Facilitate your business processes with FigureFlux and increase productivity with our centralized platform that simplifies all your business needs.</p>
                            <div class="banner-buttons">
                                <ul>
                                    <li><a href="{{ route('register') }}">Get started</a></li>
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
                            <p>Our cutting-edge ERP Cloud Software is expertly engineered to optimize business operations of all sizes. By integrating critical business functions, including finance, human resources, supply chain management, and customer relationship management, into a unified system, our software ensures seamless workflows and real-time data sharing across multiple departments and locations.
</p>
                        </div>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"
                    integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <div class="overview-image" id="overview-image">

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
                            <h2>Manage Customer Relationships Coherently</h2>
                            <p>A centralized platform that helps you Improve your customer's management. Add and list your customers in one place to easily track them.</p>
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
                            <h2>Simplify Your Financial Management Tasks</h2>
                            <p>FigureFlux allows you to easily track income and expenses, manage invoices and payments, and generate real-time financial reports.</p>
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
                            <h2>Easily Track Your Invoicing And Payments</h2>
                            <p>Manage sales by tracking invoices, quotes, and payments. It makes it easy to keep track of outstanding payments, see what has been paid, and monitor the status of invoices and quotes.</p>
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
                            <h2>Strategize, Manage, And Develop Workforce Success</h2>
                            <p>Use real-time data and analytics, track employee performance, and simplify the recruitment and onboarding processes.</p>
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
                            <button class="nav-link active" id="pills-payment-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-payment" type="button" role="tab"
                                aria-controls="pills-payment" aria-selected="true">payment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-businessplan-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-businessplan" type="button" role="tab"
                                aria-controls="pills-businessplan" aria-selected="false">business plan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-leadmanagement-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-leadmanagement" type="button" role="tab"
                                aria-controls="pills-leadmanagement" aria-selected="false">lead management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-productservice-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-productservice" type="button" role="tab"
                                aria-controls="pills-productservice" aria-selected="false">product & service</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ordermanagement-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ordermanagement" type="button" role="tab"
                                aria-controls="pills-ordermanagement" aria-selected="false">order management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-projectmanagement-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-projectmanagement" type="button" role="tab"
                                aria-controls="pills-projectmanagement" aria-selected="false">project management</button>
                        </li>
                    </ul>
                    <div class="tab-content feature-details" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-payment" role="tabpanel"
                            aria-labelledby="pills-payment-tab">
                            <div class="custom-container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="process-content">
                                            <span>Payments</span>
                                            <h2>Secure, Convenient And Fast Payment Routes.</h2>
                                            <p>FigureFlux offers a reliable and safe system to process financial transactions, ensuring that your personal and financial information is protected against fraud and theft.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="process-image">
                                            <div class="process-img">
                                                <img src="assets/images/payment-main1.png" alt="">
                                            </div>
                                            <div class="process-img2 payment">
                                                <img src="assets/images/payment-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-businessplan" role="tabpanel"
                            aria-labelledby="pills-businessplan-tab">
                            <div class="custom-container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="process-content">
                                            <span>Business Plan</span>
                                            <h2>Track Progress And Adjust Plans Accordingly</h2>
                                            <p>Create, edit, and monitor business plans quickly, manage them for real-time performance tracking, and get insights to adjust plans accordingly to achieve set goals. </p>
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
                        <div class="tab-pane fade" id="pills-leadmanagement" role="tabpanel"
                            aria-labelledby="pills-leadmanagement-tab">
                            <div class="custom-container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="process-content">
                                            <span>Leads</span>
                                            <h2>Improve Sales and Revenue with Our Lead Management Tools.</h2>
                                            <p>Identify, track, and convert leads into customers easily with our efficient and user-friendly interface.
                                            </p>
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
                        <div class="tab-pane fade" id="pills-productservice" role="tabpanel"
                            aria-labelledby="pills-productservice-tab">
                            <div class="custom-container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="process-content">
                                            <span>Product</span>
                                            <h2>Centralized Product And Service Management</h2>
                                            <p>Add, track, and showcase your products and services to customers for maximum sales success.</p>
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
                        <div class="tab-pane fade" id="pills-ordermanagement" role="tabpanel"
                            aria-labelledby="pills-ordermanagement-tab">
                            <div class="custom-container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="process-content">
                                            <span>Order Management</span>
                                            <h2>Optimize Your Order Processing Workflow</h2>
                                            <p>Keep track of your orders, fulfill them effectively, improve customer satisfaction, and optimize your workflow.</p>
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
                        <div class="tab-pane fade" id="pills-projectmanagement" role="tabpanel"
                            aria-labelledby="pills-projectmanagement-tab">
                            <div class="custom-container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="process-content">
                                            <span>Project Management</span>
                                            <h2>Effortlessly Manage Your Projects with Our Cloud-Based ERP Software</h2>
                                            <p>Create your central hub for storing information related to your budgeting, resource allocation, and communications processes.</p>
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
            <h2>Tailor-Made Features</h2>
            <p>Everything is designed to meet your needs.</p>
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
                            <p>Keep track of suppliers and simplify procurement.</p>
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
                            <p>Increased team productivity and real-time visibility into purchasing performance.</p>
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
                            <p>A centralized hub for storing, organizing, and sharing documents.</p>
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
                            <p>Create and assign tasks, set deadlines, and track progress.</p>
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
                            <p>Get detailed, customizable reports on key business metrics.</p>
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
                            <p>Improve team coordination and communication with real-time chat rooms.</p>
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
                            <p>Transactions and orders are made easier with multi-channel point-of-sale integration.</p>
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
                            <p>Add and track your orders in one convenient location</p>
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
                        <h2>One Platform For All Your Tools</h2>
                        <p>Take advantage of our integration feature to organize your daily routine. Get more done, become more productive, and enjoy a hassle-free workflow.
</p>
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
            <!--@include('layouts.frontend.testimonail')-->

    <div class="plan-wrapper">
        <div class="plan-title">
            <h2>Take control, Choose your premium plan and start today</h2>
            <p>Start your journey with our freemium plan</p>
        </div>

        @livewire('packages')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
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
                responsive: [{
                    breakpoint: 480,
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
