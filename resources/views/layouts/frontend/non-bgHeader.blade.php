<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        <li><a href="{{ route('/') }}">Home</a></li>
           <li><a href="{{ route('explore') }}">Features</a></li>
        <li><a href="{{ route('price') }}">Pricing</a></li>
        <li><a href="{{ route('Integrations') }}">Integrations</a></li>
    </ul>
</div>
<div class="bg-none-wrapper">
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
</div>