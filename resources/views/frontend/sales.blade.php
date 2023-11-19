@extends('layouts.frontend.specific_header_bg')
@section('title')
account
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
                        <h2>Customize To Fit Your Sales Needs</h2>
                        <p>Easily customize to fit your unique sales process without needing development assistance. You can edit deal stages, add additional columns, and manage multiple pipelines at once.</p>
                            <div class="banner-buttons">
                                <ul>
                                    <li><a href="{{ route('register') }}">Get started</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner-image">
                            <img src="assets/images/nextpages/account-banner.png" alt="Account">
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
                            <img src="assets/images/nextpages/sale-invoice.png" alt="sale-invoice">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Invoices</span>
                        <h2>Organize Your Invoicing</h2>
                        <p>Never let invoicing slow down your business. Get a clear view of all your invoices at a glance.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/sale-new-invoice.png" alt="sale-new-invoice">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>New invoice </span>
                        <h2>Add An Invoice In A Few Simple Steps</h2>
                        <p>To make invoicing a breeze, add personal details for each customer, including their name, title, amount, and address. Show your customers that you care with every invoice.
</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/sale-pos.png" alt="POS">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>POS </span>
                        <h2>Personalized POS Transactions</h2>
                        <p>Empower yourself to take control of your sales process. With personalized transactions, you can make each sale feel unique and valued, enhancing the customer experience.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/recurring-invoice.png" alt="Recurring">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Recurring </span>
                        <h2>Automate Recurring Billing</h2>
                        <p>Make your billing process manageable and automate invoicing to save time, allowing you to focus on growing your business.
</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/new-recurring-invoice.png" alt="Recurring Invoices">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>New Recurring Invoice</span>
                        <h2>Add New Recurring Invoices</h2>
                        <p>Automate the process by adding a new Recurring Invoice and save time. Add customer name, staff, currency, and status along with the address.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/credite-note.png" alt="Credit Note">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Credit Notes </span>
                        <h2>Centralized Credit Note Management</h2>
                        <p>Simplify your financial operations by easily tracking and managing credit transactions in one centralized location for a more efficient workflow.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/new-credite-note.jpg" alt="new-credite-note">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>New Credit Note </span>
                        <h2>Create New Credit Notes </h2>
                        <p>Establish an efficient workflow by improving the process of creating credit notes and keeping accurate records.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/quetes.jpg" alt="Quotes">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Quotes </span>
                        <h2>Manage Quotes with Precision</h2>
                        <p>A powerful platform for accurate and efficient quote management to get the most out of your sales process.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/new-quetes.jpg" alt="Effortlessly">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Create New Quote</span>
                        <h2>Create New Quotes</h2>
                        <p>Make quoting easy with this tool designed to streamline the process.
</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/sale-payments.jpg" alt="Sale Payment">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Payment </span>
                        <h2>See A History Of Payments</h2>
                        <p>Streamline payment processing by tracking and managing payments efficiently.
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
