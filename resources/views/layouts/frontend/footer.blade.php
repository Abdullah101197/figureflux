<div class="footer-site">
    <div class="custom-container">
        <div class="footer-logo-wrapper">

    

            <div class="footer-logo">
                <a href="#">


                    <img src="{{ asset('assets/img/footer-logo.png') }}" alt="FigurFlux">
                </a>
            </div>

            @isset($social_media)

            <div class="socail-icons">
                <ul>
                    @foreach ($social_media as $social_media )

                    <li><a href="{{$social_media->url}} "><i class="{{ $social_media->icon }}"></i></a></li>


                    @endforeach

                </ul>
            </div>

            @endisset

        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-links">
                    <h2>COMPANY</h2>
                    <ul>
                        <li><a href="{{ route('about_us') }}">About FigureFlux</a></li>
                        <li><a href="{{ route('why_choose_us') }}">Why FigureFlux</a></li>
                        <li><a href="{{ route('mission') }}">Mission & Vision</a></li>
                        <li><a href="{{ route('team') }}">Meet Our Team</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6">
                <div class="footer-links">
                    <h2>FEAUTURES</h2>
                    <ul>
                        <li><a href="{{ route('crm') }}">CRM</a></li>
                        <li><a href="{{ route('account') }}"> Accounting</a></li>
                        <li><a href="{{ route('sales') }}">Sales</a></li>
                        <li><a href="{{ route('project_management') }}">Project Management</a></li>
                        <li><a href="{{ route('hrm') }}">HRM</a></li>
                        <li><a href="{{ route('bussiness-plan') }}">Business Plans</a></li>
                        <li><a href="{{ route('leads_management') }}">Leads Management</a></li>
                        <li><a href="{{ route('contracts') }}">Contracts</a></li>
                        <li><a href="{{ route('report') }}">Reports</a></li>
                        <li><a href="{{ route('explore') }}">Explore</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-links">
                    <h2>SUPPORT & TRAINING</h2>
                    <ul>
                        <li><a href="{{ route('support') }}">Support</a></li>
                        <li><a href="{{ route('contact_us') }}">Contact us</a></li>

                        <li><a href="{{ route('training') }}">Training</a></li>
                        <li><a href="{{ route('affiliate_program') }}">Affiliate Program</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-links">
                    <h2>POLICY</h2>
                    <ul>
                        <li><a href="{{ route('term_condition') }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('data_protection') }}">Data Protection</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="site-slogan">
            <p>FigureFlux - <strong>Efficiency, Visibility and Control</strong></p>
        </div>
        <div class="copy-right">


            <p>        <?php
                echo "© FigureFlux " . date("Y") . "<br>";

                ?>
                </p>
        </div>
    </div>
</div>
