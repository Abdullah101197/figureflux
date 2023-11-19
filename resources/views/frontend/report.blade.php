@extends('layouts.frontend.specific_header_bg')
@section('title')
    report
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
                        <h2>Financial performance overview</h2>
                        <p>One-stop destination for a complete overview of your financial health,
                            providing complete overview of all your income, expenses, and transactions.</p>
                        <div class="banner-buttons">
                            <ul>
                                <li><a href="{{ route('register') }}">Get started</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-image">
                        <img src="assets/images/nextpages/report-banner.png" alt="reporte">
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
                            <img src="assets/images/nextpages/reporte-transactions.png" alt="Transaction">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Transaction</span>
                        <h2>View & Mange Transaction Details</h2>
                        <p>Search, download, and delete transactions, View of each transaction including date,
                            amount, and category. Export to spreadsheet for analysis and sharing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/reporte-invoice.png" alt="Invoices">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Invoices</span>
                        <h2>Invoices Details Summary</h2>
                        <p>Search, view, create, and download invoices with customer name, price, due date and more.
                            User-friendly, secure and efficient invoicing solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/reporte-purchase.png" alt="Purchase">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Purchase</span>
                        <h2>Purchase Details Summary</h2>
                        <p>Manage purchases efficiently with customer name, payment data, due date
                             and management options, user-friendly, secure, and organized purchasing solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/account-statement.png" alt="Statement">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Account Statement</span>
                        <h2>Account Statement Summary</h2>
                        <p>Control finances with ease with account no, from date,
                            to date and transaction type functionalities, with secure financial management solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/income-reporte.png" alt="income">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Income Reports</span>
                        <h2>Income Report Summary</h2>
                        <p>View all income transactions with account no, type, category,
                             customer name, amount, and description, by using secure financial management solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/expence-reporte.png" alt="Expense">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Expense Report</span>
                        <h2>Expense Report Summary</h2>
                        <p>Track all expenses with total amount spent and detailed information.
                            Convenient and secure financial management solution.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/income-vs-expense.png" alt="income-vs-expense">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Income vs Expense </span>
                        <h2>Income vs Expense Summary</h2>
                        <p>Provide summary of the overall income and expenses of the business, including total income,
                            total expenses, and net income (income minus expenses).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/reporte-of-daye.png" alt="Report by Date">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Report by Date</span>
                        <h2>Reports By Date Summary</h2>
                        <p>Overview of all reports, including total transactions, total income,
                            and total expenses over a specific period of time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/all-income.png" alt="Summary">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>All Income</span>
                        <h2>All Income Detail Summary</h2>
                        <p>Rapidly analyze all income, including total income, income by source, and income by category</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/all-expence.png" alt="all-expence">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>All Expense</span>
                        <h2>All Expense Detail Summary</h2>
                        <p>Provide details of all expenses, including total expenses, expenses by category, and expenses by vendor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/sale-reporte.png" alt="all-expence">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Sales</span>
                        <h2>Sales Summary</h2>
                        <p>Quick overview of all sales of the business, including total sales, sales by product, and sales by customer</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/income-vs-expense-graph.png" alt="Graph">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Income Vs Expense (Graphical)</span>
                        <h2>Income vs Expense Graph Summary</h2>
                        <p>Show  graphical representation of total income and expenses over a specific period of time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/expoprt-report.png" alt="Graph">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Export</span>
                        <h2>Export Reports Summary</h2>
                        <p>SEasily allow users to export their reports in various file formats such as Excel, PDF, and CSV.</p>
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
