@extends('layouts.frontend.specific_header_bg')
@section('title')
    document
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
                        <h2>Customize Your FigureFlux Experience</h2>
                        <p>Unlock the full potential of your FigureFlux system by adjusting settings to fit your specific business needs.
                            Make changes on demand for optimal results</p>
                        <div class="banner-buttons">
                            <ul>
                                <li><a href="{{ route('register') }}">Get started</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-image">
                        <img src="assets/images/nextpages/account-banner.png" alt="payment">
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
                            <img src="assets/images/nextpages/general-settings.png" alt="Setup">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>General Settings</span>
                        <h2>Corporate Identity Setup</h2>
                        <p>Manage your company's identity by configuring your business details on the general settings page.
                            Keep your information accurate and professional</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/staff.png" alt="staff">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Staff</span>
                        <h2>Manage Staff Users</h2>
                        <p>Easily add and remove staff users on the staff page.
                            Manage access to the FigureFlux and keep control over who can manage the software.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/roles.png" alt="roles">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Roles</span>
                        <h2>Manage Employee Roles</h2>
                        <p>Manage employee roles and permissions on the roles page. Keep track of your team's responsibilities and control access to the FigureFlux.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/sale-curriences.png" alt="currience">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>localization</span>
                        <h2>Regional Configuration</h2>
                        <p>Personalize your FigureFlux experience by configuring regional settings on the localization page. Choose your time zone, date format, and currency.
</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/multipl-curriences.png" alt="currience">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Currency</span>
                        <h2>Multiple Currency Support</h2>
                        <p>Manage your currency settings globally by adding and removing currencies on the currencies page.
                             Keep track of exchange rates and conversions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/payment-setting.png" alt="Gateway">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Payment Gateways</span>
                        <h2>Payment Gateway Integration</h2>
                        <p>Manage your payment gateways easily on the payment gateways page. Keep track of all your payment providers and ensure secure transactions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/expence-category.png" alt="Cost">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Expense categories</span>
                        <h2>Cost Classification Setup</h2>
                        <p>Manage your expense categories effectively on the expense categories page.
                            Keep track of all your company's expenses and effectively allocate budget</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/income-category.png" alt="income-category">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span> Income categories</span>
                        <h2>Income Stream Management</h2>
                        <p>Setup and classify your revenue on the income categories page.
                            Control your income tracking and effectively manage your financials.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/setting-unit.png" alt="setting unit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Units</span>
                        <h2>Product Specification Setup</h2>
                        <p>Efficiently manage your product specifications by adding and modifying units of measurement on the units page</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/manage-tag.png" alt="Tag">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Manage tags</span>
                        <h2>Tag Management</h2>
                        <p>Easily control your item classification by managing tags on the manage tags page.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/manage-payment.png" alt="Payment Options">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Manage payment methods</span>
                        <h2>Payment Options Setup</h2>
                        <p>Easily add and manage payment methods on the payment methods page.
                             Keep track of all accepted payment options for your business.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/sale-tex.png" alt="Sales Tax">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Sales Tax</span>
                        <h2>Sales Tax Management</h2>
                        <p>Efficiently manage your taxes by adding, editing and deleting tax codes and rates on the sales tax page.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/email-setting.png" alt="Email">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Email settings</span>
                        <h2>Outgoing Email Management</h2>
                        <p>Efficiently manage your outgoing emails by configuring your email settings on the email settings page</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/email-template.png" alt="Automated">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span> Email templates</span>
                        <h2>Automated Email Setup</h2>
                        <p>Design and manage your communication templates on the email templates page. Control your email content and ensure effective communication.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/custom-field.png" alt="Customization">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Custom fields</span>
                        <h2>Data Customization</h2>
                        <p>Manage your unique data fields effectively on the custom fields page. Tailor your data to your specific needs.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/automation-settings.png" alt="Task">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Automation Settings</span>
                        <h2>Task Automation Control</h2>
                        <p>Improve efficiency by automating your processes on the automation page. Control your automated tasks and ensure smooth workflow</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/api-access.png" alt="API">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>API access</span>
                        <h2>API Permissions Setup</h2>
                        <p>Manage your API access effectively on the API access page.
                             Securely integrate your data with external systems and control permissions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/support-tickey.png" alt="Ticket">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span> Support Ticket departments</span>
                        <h2>Ticket Department Management</h2>
                        <p>Manage your help desk effectively on the support ticket departments page. Assign tickets to the appropriate department for efficient support.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/chose-feature.png" alt="Software">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Choose features</span>
                        <h2>Customization</h2>
                        <p>Customize your software by managing feature selection on the choose features page. Control which modules are enabled for your use</p>
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
