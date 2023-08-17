<div class="header_style_wrapper">
    <!-- Begin top bar -->

    <!-- End top bar -->
    <div class="top_bar hasbg">
        <div id="menu_wrapper">
            <!-- Begin logo -->
            <div id="logo_normal" class="logo_container">
                <div class="logo_align">
                    <a id="custom_logo" class="logo_wrapper hidden" href="index.html">
                        <img src={{ asset($aboutUs->logo) }} alt="logo" width="100" />
                    </a>
                </div>
            </div>
            <div id="logo_transparent" class="logo_container">
                <div class="logo_align">
                    <a id="custom_logo_transparent" class="logo_wrapper default" href="index.html">
                        <img src={{ asset($aboutUs->logo) }} alt="logo" width="100" />
                    </a>
                </div>
            </div>
            <!-- End logo -->
            <!-- Begin side menu button -->
            <div class="menu_buttons_container">
                <div class="menu_buttons_content">
                    <!-- Begin Reservation -->
                    @auth
                        @yield('resturantonly')
                    @endauth

                    <!-- End Reservation -->
                    <!-- Begin side menu -->
                    <a href="javascript:;" id="mobile_nav_icon"></a>
                    <!-- End side menu -->
                </div>
            </div>
            <!-- End side menu button -->
            <!-- Begin main nav -->


            <div id="nav_wrapper">
                <div class="nav_wrapper_inner">
                    <div id="menu_border_wrapper">

                        <div class="menu-main-menu-container">

                            <ul id="main_menu" class="nav">
                                <li class="menu-item current-menu-item menu-item-has-children "><a
                                        href={{ route('index') }}>Home</a>

                                </li>
                                <li class="menu-item menu-item-has-children "><a href="#aboutus">Abou us</a>

                                </li>
                                <li class="menu-item menu-item-has-children "><a href="#resturants">Resturants</a>

                                </li>
                                <li class="megamenu col3 menu-item menu-item-has-children  "><a
                                        href="#pricing">Pricing</a>

                                </li>



                                @if (auth()->user() && auth()->user()->type == 'user')
                                    <li class="megamenu col3 menu-item menu-item-has-children">
                                        <a href="{{ route('logout_user.logout') }}"
                                            style="text-decoration: none;">LOGOUT</a>

                                    </li>
                                @else
                                    <li class="menu-item"><a href="{{ route('register_user.index') }}">Sign Up</a></li>
                                    <li class="menu-item"><a href="{{ route('login_user.index') }}">Login</a></li>
                                @endif


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End main nav -->
        </div>
    </div>
</div>
@if (session('success'))
    <div id="success-alert" class="alert_box success"
        style=" position:absolute; margin:auto; width:50%; z-index: 999999999999999">
        <i class="fa fa-flag alert_icon"></i>
        <div class="alert_box_msg"> {{ session('success') }}</div><a href="#" class="close_alert"
            data-target="success-alert"><i class="fa fa-times"></i></a>
    </div>
@endif
@auth
    @yield('reservform')
@endauth
