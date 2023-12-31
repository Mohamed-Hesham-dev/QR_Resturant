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
        <img src={{ asset($aboutUs->logo) }} alt="logo" width="101" height="34"
            style="width:101px;height:40px;" />

        <div class="menu-side-menu-container">
            <ul id="mobile_main_menu" class="mobile_main_nav">
                <li class="menu-item current-menu-item menu-item-has-children "><a href="{{ route('index') }}">Home</a>
                </li>
                <li class="menu-item menu-item-has-children "><a href="#aboutus">About US</a>
                </li>
                <li class="menu-item"><a href="#resturants">Resturants</a></li>
                <li class="menu-item menu-item-has-children "><a href="#pricing">Pricing</a>
                </li>
                <li class="megamenu col3 menu-item menu-item-has-children  ">
                    <div class="container ">
                        <a id="cart2" class="btn btn-light" type="button" data-toggle="modal"
                            data-target="#cartModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                class="bi bi-cart menu-item text-white" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <span>({{ count((array) session('cart')) }})</span>
                        </a>
                    </div>

                </li>

            </ul>
        </div>


        <!-- Begin Reservation -->
        @auth
            @yield('resturantonly')
        @endauth
        <!-- Begin side menu sidebar -->

        <!-- End side menu sidebar -->
    </div>



    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Your Cart
                    </h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fs-5">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <table class="table table-image">
                        <thead>
                            <tr>

                                <th scope="col">Product</th>
                                <th scope="col">Options</th>
                                <th scope="col">price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyy">



                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <h5>Total: <span class="pricee text-success"></span><span style="font-size: 10px">EGP</span>
                        </h5>
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    @if (session()->has('cart') && count(session()->get('cart')) > 0)
                        <a href="{{ route('cart.index') }}" type="button" class="btn btn-success">Checkout</a>
                    @endif
                </div>
            </div>
        </div>
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
