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
            {{-- @if (session('success'))
                <div id="success-alert" class="alert_box success"
                    style=" position:absolute; margin:auto; width:30%; z-index: 99999999999999999999"><i
                        class="fa fa-flag alert_icon"></i>
                    <div class="alert_box_msg"> {{ session('success') }}</div><a href="#" class="close_alert"
                        data-target="success-alert"><i class="fa fa-times"></i></a>
                </div>
            @endif --}}

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
                                    <li class="megamenu col3 menu-item menu-item-has-children  ">
                                        <a href="{{ route('logout_user.logout') }}">LOGOUT</a>

                                    </li>
                                @else
                                    <li class="menu-item"><a href="{{ route('register_user.index') }}">Sign Up</a></li>
                                    <li class="menu-item"><a href="{{ route('login_user.index') }}">Login</a></li>
                                @endif


                                <li class="megamenu col3 menu-item menu-item-has-children  ">
                                    <div class="container">
                                        <a id="cart" type="button" data-toggle="modal" data-target="#cartModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                class="bi bi-cart " viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                            <span>({{ count((array) session('cart')) }})</span>
                                        </a>
                                    </div>

                                </li>

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
