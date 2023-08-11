@extends('Front.Layout.master')
@section('title')
    Home
@endsection


@section('head')
@endsection


@section('content')
    <div class="ppb_wrapper ">
        <div class="one fullwidth ">
            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery"
                style="background:#262626;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.8 fullscreen mode -->
                <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-1" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb={{ asset('assets/frontend/upload/slide1_bg-100x50.jpg') }} data-rotate="0"
                            data-saveperformance="on" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            {{-- <div class="video-container">

                                <video autoplay loop muted poster="image.jpg")}}>
                                    <source src="video.mp4" type="video/mp4">
                                    <source src={{ asset('assets/frontend/upload/restaurant_video.webmsd.webm') }} type="video/webm">
                                </video>
                            </div> --}}
                            <div class="tp-caption   tp-resizeme fullscreenvideo  disabled_lc tp-videolayer"
                                id="slide-5-layer-1" data-x="0" data-y="0" data-type="video"
                                data-responsive_offset="on"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                data-exitfullscreenonpause="off" data-videocontrols="none" data-videowidth="100%"
                                data-videoheight="100%" data-videoposter={{ asset('assets/frontend/video.jpg') }}
                                data-videoogv={{ asset('assets/frontend/upload/restaurant_video.oggtheora.ogv') }}
                                data-videowebm={{ asset('assets/frontend/upload/restaurant_video.webmsd.webm') }}
                                data-videomp4={{ asset('assets/frontend/upload/restaurant_video.mp4.mp4') }}
                                data-noposteronmobile="off" data-videopreload="auto" data-videoloop="loop"
                                data-forceCover="1" data-aspectratio="16:9" data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-autoplay="on" data-volume="mute" style="z-index: 5;">
                            </div>
                            {{-- <img src={{ asset('assets/frontend/upload/slide1_bg.jpg') }} alt="" title="slide1_bg"
                                width="1300" height="867" data-bgposition="center top" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> --}}
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption title-first-word tp-resizeme" id="slide-1-layer-1" data-x="90"
                                data-y="center" data-voffset="20" data-width="auto" data-height="auto" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":450,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                data-textalign="['','','','']" style="z-index: 5; white-space: nowrap;text-transform:left;">
                                Welcome to
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption title tp-resizeme" id="slide-1-layer-2" data-x="90" data-y="center"
                                data-voffset="80" data-width="auto" data-height="auto" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                data-textalign="['','','','']"
                                style="z-index: 6; white-space: nowrap; color: #ffffff;text-transform:left;">
                                <strong> QR Restaurant</strong>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sub-title tp-resizeme" id="slide-1-layer-3" data-x="90"
                                data-y="center" data-voffset="150" data-width="auto" data-height="auto" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                data-textalign="['','','','']"
                                style="z-index: 7; white-space: nowrap; color: #ffffff;text-transform:left;">
                                Create a digital menu for your Restaurant or Bar.<br /> Engage more with your customers.

                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
                    </div>
                </div>

            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <div class="one withsmallpadding ppb_text"
            style="text-align:center;padding-bottom:0 !important;padding:50px 0 50px 0;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:60%">
                            </p>
                            <div style="font-size:25px;text-transform:uppercase;letter-spacing:-1px;font-weight:300;">
                                There are platforms where you can make QR code, but no menu. There are platforms where you
                                can create a menu but not design your QR
                                <div class="post_detail">


                                </div>
                                <p>
                                    <span style="font-family:Kristi;font-size:40px;font-weight:600;">We do both.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- aboutus--->
            <div id="aboutus" class="one ppb_card_two_cols_with_image"
                style="padding: 50px 0 70px 0 !important;position:relative;padding:40px 0 40px 0;">
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div class="one_half parallax_scroll_image" style="width:65%;">
                                <div class="image_classic_frame expand">
                                    <div class="image_wrapper">
                                        <a href={{ asset('assets/frontend/upload/about.jpg') }} class="img_frame"><img
                                                src={{ asset($aboutUs->image) }} class="portfolio_img"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="one_half last parallax_scroll"
                                style="width:40%;position:absolute;right:90px;padding:40px;background:#ffffff;"
                                data-stellar-ratio="1.3">
                                <h2 class="ppb_title"><span class="ppb_title_first">Discover</span>About Us</h2>
                                {{-- <div class="ppb_subtitle">
                                    Ultimate dining experience like no other
                                </div> --}}
                                <div class="page_header_sep left">
                                </div>
                                {{$aboutUs->description}}
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
            </div>


            <!------------------resturants----------------------->
            <div class="standard_wrapper">

                <div id="resturants" class="one withsmallpadding ppb_team_column"
                    style="padding-top: 100px !important;padding:30px;">
                    <div class="page_content_wrapper" style="text-align:center">
                        <h1 class="">
                            <span class="ppb_title_first">Our</span>Resturants
                        </h1>
                        <div class="inner">
                            <div class="team_wrapper">
                                <div class="one_third animated1 ">
                                    <div class="post_img team"><img class="team_pic animated" data-animation="fadeIn"
                                            src={{ asset('assets/frontend/upload/personell2-400x400.jpg') }}
                                            alt="" />
                                    </div>
                                    <br class="clear" />
                                    <div id="portfolio_desc_2626" class="portfolio_desc team "
                                        style="text-align:center;">
                                        <h5>Tessane Padares</h5>
                                        <div class="post_detail">French Cuisine</div>
                                        <ul class="social_wrapper team">
                                            <li><a title="Tessane Padares on Twitter" target="_blank" class="tooltip"
                                                    href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a title="Tessane Padares on Facebook" target="_blank" class="tooltip"
                                                    href="http://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a title="Tessane Padares on Google+" target="_blank" class="tooltip"
                                                    href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aliquam et elit eu nunc rhoncus viverra</p>
                                    </div>
                                </div>
                                <div class="one_third animated2 ">
                                    <div class="post_img team"><img class="team_pic animated" data-animation="fadeIn"
                                            src={{ asset('assets/frontend/upload/shutterstock_116468653-400x400.jpg') }}
                                            alt="" /></div>
                                    <br class="clear" />
                                    <div id="portfolio_desc_2622" class="portfolio_desc team "
                                        style="text-align:center;">
                                        <h5>John Bennett</h5>
                                        <div class="post_detail">French Kitchen Lead</div>
                                        <ul class="social_wrapper team">
                                            <li><a title="John Bennett on Twitter" target="_blank" class="tooltip"
                                                    href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a title="John Bennett on Facebook" target="_blank" class="tooltip"
                                                    href="http://facebook.com/#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a title="John Bennett on Google+" target="_blank" class="tooltip"
                                                    href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aliquam et elit eu nunc rhoncus viverra</p>
                                    </div>
                                </div>
                                <div class="one_third animated3 last">
                                    <div class="post_img team"><img class="team_pic animated" data-animation="fadeIn"
                                            src={{ asset('assets/frontend/upload/Depositphotos_3233253_original-400x400.jpg') }}
                                            alt="" />
                                    </div>
                                    <br class="clear" />
                                    <div id="portfolio_desc_2623" class="portfolio_desc team last"
                                        style="text-align:center;">
                                        <h5>Christina Hardy</h5>
                                        <div class="post_detail">Thai Cuisine</div>
                                        <ul class="social_wrapper team">
                                            <li><a title="Christina Hardy on Twitter" target="_blank" class="tooltip"
                                                    href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a title="Christina Hardy on Facebook" target="_blank" class="tooltip"
                                                    href="http://facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a title="Christina Hardy on Google+" target="_blank" class="tooltip"
                                                    href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aliquam et elit eu nunc rhoncus viverra</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!------pricing------>
            <div class="standard_wrapper mb-5">
                <h1 class="mb-4">
                    <span class="ppb_title_first">choose your</span>package
                </h1>
                <div class=" row  justify-content-center gap-4"id="pricing">
                @if($packages->count() > 0)
                @foreach($packages as $value)
                     <div  class=" col-12 col-md-4  card" style="height: 30rem; width:25rem">
                        <div class="card-body" style="margin-top: 30% ">
                            <h5 class="card-title fw-bold">{{$value->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$value->price}} <span>EGP</span></h6>
                            <p class="card-text">{{$value->description}} .</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                @endforeach
                @else
                  <b><p class="card-text">Sorry! No packages Now.</p></b>
                @endif
                   

                    {{-- <div class=" col-12 col-md-4  card" style="height: 30rem; width:25rem">
                        <div class="card-body" style="margin-top: 30% ">
                            <h5 class="card-title fw-bold">Package number 1</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">200 <span>EGP</span></h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class=" col-12 col-md-4  card" style="height: 30rem; width:25rem">
                        <div class="card-body" style="margin-top: 30% ">
                            <h5 class="card-title fw-bold">Package number 1</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">200 <span>EGP</span></h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div> --}}

                </div>
            </div>
        @endsection


        @section('script')
        @endsection
