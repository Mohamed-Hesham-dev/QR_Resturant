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
                    {{-- <a href="javascript:;" id="tg_reservation" class="button ">Reservation</a> --}}
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
                                    <li>
                                        <a href="{{ route('logout_user.logout') }}"
                                            style="text-decoration: none; color:white;">LOGOUT</a>

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


<!-- reservation form -->
<div id="reservation_wrapper">
    <div class="reservation_content">
        <div class="reservation_form">
            <div class="reservation_form_wrapper">
                <a id="reservation_cancel_btn" href="javascript:;"><i class="fa fa-close"></i></a>
                <h2 class="ppb_title"><span class="ppb_title_first">Table</span>Booking</h2>
                <div id="reponse_msg">
                    <ul>
                    </ul>
                </div>
                <form id="tg_reservation_form" method="post">
                    <input type="hidden" id="action" name="action" value="tg_reservation_mailer" />
                    <div class="one_third">
                        <label for="your_name">Name*</label>
                        <input id="your_name" name="your_name" type="text" class="required_field" />
                    </div>
                    <div class="one_third">
                        <label for="email">Email*</label>
                        <input id="email" name="email" type="text" class="required_field" />
                    </div>
                    <div class="one_third last">
                        <label for="phone">Phone*</label>
                        <input id="phone" name="phone" type="text" class="required_field" />
                    </div>
                    <br class="clear" />
                    <br />
                    <div class="one_third">
                        <label for="date" class="hidden">Date*</label>
                        <input type="text" class="pp_date required_field" id="date" name="date"
                            value="05/10/2019">
                    </div>
                    <div class="one_third">
                        <label for="time">Time*</label>
                        <input type="text" class="pp_time required_field" id="time" name="time"
                            value="06:00 PM" />
                    </div>
                    <div class="one_third last">
                        <label for="seats">Seats*</label>
                        <select id="seats" name="seats" class="required_field" style="width:99%">
                            <option value="1">1 person</option>
                            <option value="2">2 people</option>
                            <option value="3">3 people</option>
                            <option value="4">4 people</option>
                            <option value="5">5 people</option>
                            <option value="6">6 people</option>
                            <option value="7">7 people</option>
                            <option value="8">8 people</option>
                            <option value="9">9 people</option>
                            <option value="10">10 people</option>
                            <option value="11">11 people</option>
                            <option value="12">12 people</option>
                            <option value="13">13 people</option>
                            <option value="14">14 people</option>
                            <option value="15">15 people</option>
                            <option value="16">16 people</option>
                            <option value="17">17 people</option>
                            <option value="18">18 people</option>
                            <option value="19">19 people</option>
                            <option value="20">20+ people</option>
                        </select>
                    </div>
                    <br class="clear" />
                    <br />
                    <div class="one">
                        <label for="message">Special Requests</label>
                        <textarea id="message" name="message" rows="7" cols="10"></textarea>
                    </div>
                    <br class="clear" />
                    <br />
                    <div class="one">
                        <p>
                            <input id="reservation_submit_btn" type="submit" value="Book Now" />
                        </p>
                    </div>
                    <br class="clear" />
                </form>
            </div>
        </div>
    </div>
    <div class="parallax_overlay_header">
    </div>
</div>
