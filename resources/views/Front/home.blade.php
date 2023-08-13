@extends('Front.Layout.master')
@section('title')
    Home
@endsection


@section('head')
    <link rel='stylesheet' href={{ asset('assets/frontend/upload/css/datepicker.css') }} type='text/css' media='all' />
    <style>
        .social {
            color: #cfa670 !important;
            padding: 5px;
            border-radius: 10%;


        }

        .soci {
            cursor: pointer;
        }

        .social:hover {
            color: #000;
        }
    </style>
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
                                data-videomp4={{ asset($aboutUs->video) }} data-noposteronmobile="off"
                                data-videopreload="auto" data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9"
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-autoplay="on" data-volume="mute" style="z-index: 5;">
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
                                {{ $aboutUs->description }}
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </div>
            </div>


            <!------------------resturants----------------------->


            <div id="resturants" class="one withsmallpadding ppb_team_column"
                style="padding-top: 100px !important;padding:30px;">
                <div class="page_content_wrapper" style="text-align:center">
                    <h1 class="">
                        <span class="ppb_title_first">Our</span>Resturants
                    </h1>
                    <div class="inner">
                        <div class="container ">
                            <div class="row gap-4 container justify-content-center">
                                @foreach ($resturant as $rest_item)
                                    <div class=" col-12 col-md-3 p-5 " style="width: 15rem;  ">
                                        <a href="{{ route('resturant', $rest_item->id) }}">
                                            <img class="card-img-top" style="border-radius:50%"
                                                src={{ $rest_item->image }} alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold">{{ $rest_item->resturant_name }}</h5>
                                        </a>
                                        <ul class="d-flex justify-content-center gap-4 list-unstyled mt-3">
                                            <li class="facebook soci"><a target="_blank" title="Facebook"
                                                    href="#"><i class="fa fa-facebook  social fs-5"></i></a>
                                            </li>

                                            <li class="youtube soci"><a target="_blank" title="Youtube"
                                                    href="#"><i class="fa fa-youtube social fs-5"></i></a>
                                            </li>

                                            <li class="instagram soci"><a target="_blank" title="Instagram"
                                                    href="http://instagram.com/#"><i
                                                        class="fa fa-instagram social fs-5"></i></a></li>
                                        </ul>
                                    </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!------pricing------>
        <div class="  mb-5">
            <h1 class="mb-4">
                packages
            </h1>
            <div class=" row justify-content-center gap-4" id="pricing">
                @if ($packages->count() > 0)
                    @foreach ($packages as $value)
                        <div class=" col-12 col-md-4  card" style=" width:20%">
                            <div class="card-body" style="margin-top: 10% ">
                                <img src={{ asset('assets/frontend/upload/dollar.png') }} width="30%" class="mb-3">
                                <h3 class="card-title fw-bold">{{ $value->title }}</h3>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $value->price }}
                                    <span><small>EGP</small></span>
                                </h6>
                                <p class="card-text mb-4 ">{{ $value->description }}</p>
                                <a href="#" class="btn"
                                    style="background: #cfa670;color:white ; bottom:0; ">Contact with
                                    Us </a>

                            </div>
                        </div>
                    @endforeach
                @else
                    <b>
                        <p class="card-text">Sorry! No packages Now.</p>
                    </b>
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
