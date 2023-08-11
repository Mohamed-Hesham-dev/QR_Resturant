<!DOCTYPE html>
<html lang="en-US" data-menu="classicmenu">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('Front.Layout.headfiles')
    @yield('head')
</head>

<body class="home page-template-default page page-id-2 woocommerce-no-js">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="classicmenu" />
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="" />
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="" />
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="images/" />
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html" />
    <input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="1" />
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1" />
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="1" />
    <input type="hidden" id="post_client_column" name="post_client_column" value="4" />
    <input type="hidden" id="pp_back" name="pp_back" value="Back" />
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1" />
    <input type="hidden" id="tg_project_filterable_link" name="tg_project_filterable_link" value="" />
    <input type="hidden" id="pp_reservation_start_time" name="pp_reservation_start_time" value="11:00" />
    <input type="hidden" id="pp_reservation_end_time" name="pp_reservation_end_time" value="21:00" />
    <input type="hidden" id="pp_reservation_time_step" name="pp_reservation_time_step" value="30" />
    <input type="hidden" id="pp_reservation_date_format" name="pp_reservation_date_format" value="mm/dd/yy" />
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="4" />

    <!-- Begin mobile menu -->
    <div class="mobile_menu_wrapper">
        <a id="close_mobile_menu" href="javascript:;"><i class="fa fa-close"></i></a>
            <img src={{ asset('assets/frontend/upload/logo@2x.png') }} alt="Grand Restaurant | Restaurant Theme"
                width="101" height="34" style="width:101px;height:40px;" />
        <div class="menu-side-menu-container">
            <ul id="mobile_main_menu" class="mobile_main_nav">
                <li class="menu-item current-menu-item menu-item-has-children "><a href="{{ route('index') }}">Home</a>
                </li>
                <li class="menu-item menu-item-has-children "><a href="#aboutus">About US</a>
                </li>
                <li class="menu-item"><a href="#resturants">Resturants</a></li>
                <li class="menu-item menu-item-has-children "><a href="#pricing">Pricing</a>
                </li>

            </ul>
        </div>
        <!-- Begin Reservation -->
        <a href="javascript:;" id="tg_sidemenu_reservation" class="button ">Reservation</a>
        <!-- End Reservation -->
        <!-- Begin side menu sidebar -->

        <!-- End side menu sidebar -->
    </div>
    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg">
        @include('Front.Layout.header')
        @yield('content')

        <div class="footer_bar ">

            @include('Front.Layout.footer')
        </div>
    </div>
    <div id="overlay_background">
    </div>


    @include('Front.Layout.scripts')
    @yield('script')
</body>

</html>
