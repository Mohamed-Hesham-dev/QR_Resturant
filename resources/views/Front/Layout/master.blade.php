<!DOCTYPE html>
<html lang="en-US" data-menu="classicmenu">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('Front.Layout.headfiles')

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
        <form role="search" method="get" name="searchform" id="searchform" action="#">
            <div>
                <input type="text" value="" name="s" id="s" autocomplete="off"
                    placeholder="Search..." />
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div id="autocomplete">
            </div>
        </form>
        <div class="menu-side-menu-container">
            <ul id="mobile_main_menu" class="mobile_main_nav">
                <li class="menu-item current-menu-item menu-item-has-children "><a href="index.html">Home</a>
                </li>
                <li class="menu-item menu-item-has-children"><a href="our-menu-mixed.html">Menu</a>
                </li>
                <li class="menu-item menu-item-has-children "><a href="#">Pages</a>
                </li>
                <li class="menu-item"><a href="delivery.html">Delivery</a></li>
                <li class="menu-item menu-item-has-children "><a href="blog.html">News</a>
                </li>
                <li class="menu-item menu-item-has-children"><a href="accordion-toggles.html">Shortcodes</a>
                </li>
            </ul>
        </div>
        <!-- Begin Reservation -->
        <a href="javascript:;" id="tg_sidemenu_reservation" class="button ">Reservation</a>
        <!-- End Reservation -->
        <!-- Begin side menu sidebar -->
        <div class="page_content_wrapper">
            <div class="sidebar_wrapper">
                <div class="sidebar">
                    <div class="content">
                        <ul class="sidebar_widget">
                            <li id="custom_flickr-7" class="widget Custom_Flickr">
                                <h2 class="widgettitle">Gallery On Flickr</h2>
                                <ul class="flickr">
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/47015511494_a45979912a_b.jpg"
                                            title="roasted rhubarb with yogurt, mint, pistachio"><img
                                                src={{ asset('assets/frontend/upload/47015511494_a45979912a_s.jpg') }}
                                                alt="roasted rhubarb with yogurt, mint, pistachio" width="75"
                                                height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/46968818334_b4bb23dc19_b.jpg"
                                            title="radish pod and tomato salad"><img
                                                src={{ asset('assets/frontend/upload/46968818334_b4bb23dc19_s.jpg') }}
                                                alt="radish pod and tomato salad" width="75"
                                                height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/40747094363_16c3b23b2f_b.jpg" title="macarons and tea"><img
                                                src={{ asset('assets/frontend/upload/40747094363_16c3b23b2f_s.jpg') }}
                                                alt="macarons and tea" width="75" height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/33827445818_dac37b2303_b.jpg"
                                            title="macaron- commercial &amp; editorial"><img
                                                src={{ asset('assets/frontend/upload/33827445818_dac37b2303_s.jpg') }}
                                                alt="macaron- commercial &amp; editorial" width="75"
                                                height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/40713766323_618893a490_b.jpg"
                                            title="tomato with (thick) soy sauce, sugar and grated ginger"><img
                                                src={{ asset('assets/frontend/upload/40713766323_618893a490_s.jpg') }}
                                                alt="tomato with (thick) soy sauce, sugar and grated ginger"
                                                width="75" height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/46721156475_f02fc75334_b.jpg" title="summer corn soup"><img
                                                src={{ asset('assets/frontend/upload/46721156475_f02fc75334_s.jpg') }}
                                                alt="summer corn soup" width="75" height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/47631045331_46341532c8_b.jpg"
                                            title="roasted sweet potato"><img
                                                src={{ asset('assets/frontend/upload/47631045331_46341532c8_s.jpg') }}
                                                alt="roasted sweet potato" width="75" height="75" /></a>
                                    </li>
                                    <li>
                                        <a class="img_frame" target="_blank"
                                            href="upload/46670903915_a22e6c2472_b.jpg" title="tea eggs"><img
                                                src={{ asset('assets/frontend/upload/46670903915_a22e6c2472_s.jpg') }}
                                                alt="tea eggs" width="75" height="75" /></a>
                                    </li>
                                </ul>
                                <br class="clear" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>
