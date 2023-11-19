@extends('layouts.frontend.frontend_layout')
@section('title')
    products solution
@endsection
@section('content')

    <div class="secondary-design">
<div class="main-next-wrapper">

    <div class="banner-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner-content">
                        <h2>Intuitive Utilities Management Interface</h2>
                        <p>Centralized hub for managing business utilities, improving efficiency with
                            real-time monitoring and tracking. User-friendly interface for flawless management.</p>
                        <div class="banner-buttons">
                            <ul>
                                <li><a href="{{ route('register') }}">Get started</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-image">
                        <img src="assets/images/nextpages/account-banner.png" alt="Utilities">
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
                            <img src="assets/images/nextpages/activity-log.png" alt="Activity">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Activity</span>
                        <h2>Recent Activity Log</h2>
                        <p>Track recent utility account activity. This feature tracks payments, service requests, and use reports on your account.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/community.png" alt="COMMUNICATE">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Email</span>
                        <h2>Comprehensive Email Log</h2>
                        <p>Track of all the emails you receive from the utilities company, including bill
                             reminders, payment confirmations and service updates.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/invoice-access.png" alt="Invoice">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Invoice</span>
                        <h2>Invoice History Log</h2>
                        <p>View a summary of your invoices, including the total amount due,
                             the due date, and a breakdown of charges for different services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/invoice-backup.png" alt="Schedule">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Schedule</span>
                        <h2>Backup Scheduling</h2>
                        <p>Perform manual backups at any time, giving you full control over your data protection.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/dadabase-status.png" alt="Database">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Database</span>
                        <h2>Real-time Database Status</h2>
                        <p>Monitor the performance of your database in real-time and identify any potential issues.
                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/crown-log.jpg" alt="Database">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>CRON </span>
                        <h2>CRON Log Status</h2>
                        <p>View a history of all CRON jobs, including the start and end time of each job, and the outcome of the job.
                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/code-integration.jpg" alt="Integration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Integration </span>
                        <h2>Integration Code Management</h2>
                        <p>Regularly audit integration code to ensure compliance with industry standards and best practices.
                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/system-status.png" alt="Monitoring">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Monitoring </span>
                        <h2>System Uptime Monitoring</h2>
                        <p>Ensure your website is always available with real-time monitoring of uptime and availability,
                            quickly identify and resolve any issues and a positive user experience
                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/password-manager.png" alt="Auditing">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Auditing </span>
                        <h2>Password Auditing</h2>
                        <p>Analyze and evaluate the strength of your passwords and suggest improvements if needed.
                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-image">
                        <div class="process-img">
                            <img src="assets/images/nextpages/tools.jpg" alt="Tools">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="process-content">
                        <span>Tools </span>
                        <h2>Data Manipulation Tools</h2>
                        <p>Allows users to import data from external sources,
                            such as CSV or Excel files, into the tool for further analysis and processing.
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
            <h2>Start using Chat view and save one day every week.</h2>
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
