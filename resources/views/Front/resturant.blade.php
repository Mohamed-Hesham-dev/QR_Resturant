@extends('Front.Layout.master')
@section('title')
    Resturant
@endsection

@section('resturantonly')
    <a href="javascript:;" id="tg_reservation" class="button ">Reservation</a>
@endsection
@section('head')
    <style>
        .card-img-top {
            border: 5px solid #717171;
        }

        .card-img-top:hover {
            border: 5px solid #cfa670;
        }
    </style>
@endsection



@section('content')
    <div class="ppb_wrapper  ">

        <div class="one fullwidth mb-5">
            <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery"
                style="margin:0px auto;background:#262626;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
                <div id="rev_slider_3_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;"
                    data-version="5.4.8">
                    <ul>
                        <!-- SLIDE  abreakey-raw-foodphotography-squid-still-life-100x50.jpg-->
                        <li data-index="rs-3" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb={{ asset('assets/frontend/upload/sella.jpeg') }} data-rotate="0"
                            data-saveperformance="on" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src={{ asset('assets/frontend/upload/sella.jpeg') }} alt=""
                                title="abreakey-raw-foodphotography-squid-still-life" width="1400" height="1049"
                                data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption title-first-word   tp-resizeme" id="slide-3-layer-1" data-x="center"
                                data-hoffset="" data-y="center" data-voffset="-80" data-width="['auto']"
                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":450,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"nothing"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-weight: ; letter-spacing: ;">Welcome to </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption title   tp-resizeme" id="slide-3-layer-2" data-x="center" data-hoffset=""
                                data-y="center" data-voffset="-20" data-width="['auto']" data-height="['auto']"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"nothing"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="font-family:'Cairo'!important; font-weight:bold; z-index: 6; white-space: nowrap; line-height: ; color: #ffffff; letter-spacing: ;">
                                {{ $resturant->resturant_name }} <strong>Restaurant</strong> </div>

                            <!-- LAYER NR. 3 -->

                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>

            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <h4 id="product-name"></h4>
                        <p id="product-description"></p>
                        <img id="product-image" src width="70px" height="40px">
                        {{-- @foreach ($product->getMedia('images') as $img)
                            <img src="{{ $img ? $img->getUrl() : '' }}" width="70px" height="40px">
                        @endforeach --}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-------------Story-------------->
        <div id="aboutus" class="container d-flex  justify-content-start">
            <div class="row justify-content-center ">
                <div class=" col-12 d-flex align-items-center">
                    <img src="{{ $resturant->image }}" width="15%" class="pe-3" style="border-radius:50%;">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex flex-column align-items-center">
                            <p style="margin-bottom:-10px" class=" fs-2 fw-bold">{{ $resturant->resturant_name }}</p>
                            <span><a href="tel:{{ $contactUs->mobile ?? '' }}"> {{ $contactUs->mobile ?? '' }}

                                </a></span>
                        </div>
                        <div style="margin-top:-5px">
                            <ul class="d-flex justify-content-center gap-4 list-unstyled mt-2">
                                <li class="facebook soci"><a target="_blank" title="Facebook"
                                        href="{{ $contactUs->facebook ?? ' ' }}"><i
                                            class="fa fa-facebook  social fs-9"></i></a>
                                </li>

                                <li class="youtube soci"><a target="_blank" title="Youtube"
                                        href="{{ $contactUs->youtube ?? ' ' }}"><i
                                            class="fa fa-youtube social fs-9"></i></a>
                                </li>

                                <li class="instagram soci"><a target="_blank" title="Instagram"
                                        href="{{ $contactUs->instagram ?? '' }}"><i
                                            class="fa fa-instagram social fs-9"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="  mt-1">
                            <div>
                                <nav class=" d-flex gap-4 nav-pills nav-fill">
                                    @foreach ($categories as $category)
                                        <a class="  btn btn-light p-2"
                                            href={{ route('resturant.category', $category->category_name) }}>{{ $category->category_name }}</a>
                                    @endforeach
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>


        <div class="container text-center mt-5">
            <div id="aboutus" style=" position:relative; ">
                <div class=" " style="" data-stellar-ratio="1">
                    <h2 class="fw-bold"><span class="ppb_title_first sw-bold">Find Us</h2>
                    {{-- <div class="ppb_subtitle">
                                Ultimate dining experience like no other
                            </div> --}}
                    <div class="page_header_sep left">
                    </div>
                    {{ $resturant->description }}
                </div>
            </div>
        </div>



        <!-------------------------MENUE---------------->

        <div style="border-top:3px solid rgb(216, 216, 216); width:50% ; margin:auto" class="mt-5"></div>

        <div>
            <h2 class="ppb_title text-center mb-5 pt-5"><span class="ppb_title_first ">Resturant</span>Menu</h2>
            <div class="ppb_portfolio one nopadding " style="padding:0px 0 0px 0;">
                <div class=" mb-5 ">
                    <div class="container ">
                        <div class="row align-items-center justify-contnet-center">
                            @foreach ($allproducts as $product)
                                <div class=" col-6 col-md-3 ">
                                    <a class="modalnfo" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-product="{{ json_encode($product) }}"
                                        data-product-images="{{ $product->getMedia('images')->count() > 0 ? htmlspecialchars(json_encode($product->getMedia('images'))) : '' }}">
                                        <img src={{ asset($product->logo) }} class="card-img-top"
                                            style="width: 100%; border-radius:50%;   " alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-textt">
                                                {{ Str::limit(strip_tags($product->description), 33) }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <!-----------SLIDER---------->
    <div class="ppb_portfolio one nopadding ">
        <div class="slider_wrapper portfolio">
            <div class="flexslider tg_gallery" data-height="750">
                <ul class="slides">
                    <li><img src={{ asset('assets/frontend/upload/7311365.jpg') }} alt="" />
                        <div id="menuc_3190" class="portfolio_slider_desc">
                            <h5 class="menu_post">
                                <span class="menu_title">Italian Source Mushroom</span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$19.9</span>
                            </h5>
                            <div class="post_detail menu_excerpt">Mushroom / Garlic / Veggies</div>
                            <div class="menu_order"><a href="#">Order</a></div>
                        </div>
                    </li>
                    <li><img src={{ asset('assets/frontend/upload/slide-02_tom-aikens-food-photography.jpg') }}
                            alt="" />
                        <div id="menuc_3191" class="portfolio_slider_desc">
                            <h5 class="menu_post">
                                <span class="menu_title">Fried Potatoes With Garlic</span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$12</span>
                            </h5>
                            <div class="post_detail menu_excerpt">Potatoes / Olive Oil / Garlic</div>
                            <div class="menu_order"><a href="#">Order</a></div>
                        </div>
                    </li>
                    <li><img src={{ asset('assets/frontend/upload/greg.jpg') }} alt="" />
                        <div id="menuc_3192" class="portfolio_slider_desc">
                            <h5 class="menu_post">
                                <span class="menu_title">Tuna Roast Source</span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$24.5</span>
                            </h5>
                            <div class="post_detail menu_excerpt">Tuna / Potatoes / Rice</div>
                            <div class="menu_highlight"><i class="fa fa-star"></i></div>
                            <div class="menu_order"><a href="#">Order</a></div>
                        </div>
                    </li>
                    <li><img src={{ asset('assets/frontend/upload/indian-food-with-chapatti-rice-curries-vegetables-papad-pickle-payasam-f4.jpg') }}
                            alt="" />
                        <div id="menuc_3193" class="portfolio_slider_desc">
                            <h5 class="menu_post">
                                <span class="menu_title">Roast Pork (4 Sticks)</span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$15.5</span>
                            </h5>
                            <div class="post_detail menu_excerpt">Pork / Veggies / Shoyu</div>
                            <div class="menu_order"><a href="#">Order</a></div>
                        </div>
                    </li>
                    <li><img src={{ asset('assets/frontend/upload/plae_bistro_ad_food_photography_milwaukee_advertising_photographer_appleton_wisconsin_culinary_photography_retouching_preparation_cuisine_11.jpg') }}
                            alt="" />
                        <div id="menuc_3194" class="portfolio_slider_desc">
                            <h5 class="menu_post">
                                <span class="menu_title">Salted Fried Chicken</span>
                                <span class="menu_dots"></span>
                                <span class="menu_price">$20</span>
                            </h5>
                            <div class="post_detail menu_excerpt">Chicken / Olive Oil / Salt</div>
                            <div class="menu_order"><a href="#">Order</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    </div>
@endsection
@section('reservform')
    <!-- reservation form -->
    <div id="reservation_wrapper">
        <div class="reservation_content">
            <div class="reservation_form">
                <div class="reservation_form_wrapper">
                    <a id="reservation_cancel_btn" href="javascript:;"><i class="fa fa-close"></i></a>
                    <h2 class="ppb_title"><span class="ppb_title_first">Table</span>Booking</h2>


                    <form id="tg_reservation_form" action={{ route('reservation') }} method="post">
                        @csrf
                        <input type="hidden" id="action" name="action" value="tg_reservation_mailer" />
                        <input type="hidden" id="action" name="resturant_id" value="{{ $resturant->id }}" />

                        <div class="one_third " style="width: 100%">
                            <label for="phone">Phone*</label>
                            <input id="phone" name="phone" type="text" class="required_field" />
                        </div>
                        <br class="clear" />
                        <br />
                        <div class="one_third">
                            <label for="date" class="hidden">Date*</label>
                            <input type="text" class="  required_field" id="date" name="date"
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
                                @foreach ($tables as $table)
                                    <option value="{{ $table->num_chairs }}">{{ $table->num_chairs }}</option>
                                @endforeach
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
@endsection
@section('script')
   

    <script type='text/javascript'>
        /* <![CDATA[ */
        var tgAjax = {
            "ajaxurl": "#",
            "ajax_nonce": "c5281db0c2"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'>
        jQuery(window).load(function() {
            jQuery('.slider_wrapper').flexslider({
                animation: "fade",
                animationLoop: true,
                itemMargin: 0,
                minItems: 1,
                maxItems: 1,
                slideshow: false,
                controlNav: false,
                smoothHeight: false,
                slideshowSpeed: 5000,
                move: 1
            });

            jQuery('.slider_wrapper.portfolio .slides li').each(function() {
                var height = jQuery(this).height();
                var imageHeight = jQuery(this).find('img').height();

                var offset = (height - imageHeight) / 2;

                jQuery(this).find('img').css('margin-top', offset + 'px');

            });
        });
    </script>

    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
                    .gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
                    .sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                            .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) /
                            100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e
                                .fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss =
            ".tp-caption.title-first-word,.title-first-word{font-size:60px;line-height:50px;font-family:Kristi;color:#cfa670;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none}.tp-caption.title,.title{font-size:65px;font-weight:300;font-family:Lato;color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-3px}.tp-caption.sub-title-center,.sub-title-center{font-size:20px;line-height:24px;font-weight:400;font-family:Lato;color:#ffffff;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-1px}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        if (setREVStartSize !== undefined) setREVStartSize({
            c: '#rev_slider_3_1',
            gridwidth: [1425],
            gridheight: [600],
            sliderLayout: 'auto'
        });

        var revapi3,
            tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",
                onLoad);
            else onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("on" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_3_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_3_1");
                } else {
                    revapi3 = tpj("#rev_slider_3_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/plugins/revslider/public/assets/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 7000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                        },
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: 1425,
                        gridheight: 600,
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner3",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }; /* END OF revapi call */

            }; /* END OF ON LOAD FUNCTION */
        }()); /* END OF WRAPPING FUNCTION */
    </script>
    <script>
        var htmlDivCss = '  #rev_slider_3_1_wrapper .tp-loader.spinner3 div { background-color: #444444 !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script src={{ asset('assets/frontend/js/plugins/jquery.flexslider-min.js') }}></script>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
@endsection
