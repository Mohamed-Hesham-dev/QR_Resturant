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

        .reservation_content {
            z-index: 9 !important;
        }

        .card-img-top:hover {
            border: 5px solid #cfa670;
        }

        .reservation_wrapper {
            width: 50%;
            margin: auto;
            text-align: center;
            padding: 30px;
            border: 1px solid #fff;
            border-radius: 25px;
            position: relative;
            /* z-index: 999; */
        }

        #reservation_submit {
            background: #cfa670;
            margin-top: 20px;
            border-radius: 15px;
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
                            data-thumb={{ $resturant->resturant_cover }} data-rotate="0" data-saveperformance="on"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src={{ $resturant->resturant_cover }} alt=""
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
        <div style="z-index: 99999" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action={{ route('cart.store') }} method="post">
                        @csrf
                        <input type="hidden" name="productid" id="productid" />
                        <input type='hidden' name="resturant_id" id="resturant_id" />
                        <input type="hidden" name="productname" id="productname" />
                        <input type="hidden" name="productdescription" id="productdescription" />
                        <input type="hidden" name="totalprice" id="allprice" />
                        <div class="modal-header">
                            <h4>Add Product</h4>
                            <button type="button" class="btn-close" onclick="relod()" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 ">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        {{-- <div class="carousel-item active"></div> --}}

                                    </div>
                                    <div class="option"></div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3  m-2">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="fw-bold modal-title  "></h4>
                                            <p class=" modal-description"></p>
                                        </div>
                                        <div class="col-4 d-flex gap-1 align-items-center">
                                            <h4 id="totalPrice"></h4> <span class="fw-bold"> EGP</span>
                                        </div>
                                    </div>
                                </div>
                                <hr />


                                <div class="row align-items-center pb-3 m-2 options-container">

                                    {{-- <div class="col-12 col-md-6 mt-2 ">
                                        <h5 class="fw-bold pb-2 option"></h5>
                                        <div class="form-check d-flex  gap-2">
                                            <input class="form-check-input mt-1" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="  d-flex align-items-center gap-3" for="flexCheckDefault">
                                                <p></p>
                                                <p class="fw-bold"><span>EGP</span></p>
                                            </label>

                                        </div>
                                    </div> --}}
                                </div>
                                <div class="mb-4 m-2">
                                    <h4 class="fw-bold mb-3"> Quantity</h4>
                                    <div class=" d-flex">
                                        <a class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <span class=" btn btn-danger fs-5 fw-bold">-</span>
                                        </a>

                                        <input id="form1" min="0" name="quantity" value="1"
                                            type="number" class="form-control" />

                                        <a class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <span class=" btn btn-success fs-5 fw-bold">+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                onclick="relod()">Close</button>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!-------------Story-------------->
        <div id="aboutus" class="container d-flex  justify-content-start">
            <div class="row align-items-center">
                <div class=" col-10 row justify-content-center ">
                    <div class=" col-12 d-flex align-items-center">
                        <img src="{{ $resturant->resturant_logo }}" width="15%" class="pe-3"
                            style="border-radius:50%;">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex flex-column align-items-left">
                                <p style="margin-bottom:-10px" class=" fs-2 fw-bold">{{ $resturant->resturant_name }}</p>
                                <p class=" fs-5 mt-2 mb-3"><a href="tel:{{ $contactUs->mobile ?? '' }}">
                                        {{ $contactUs->mobile ?? '' }}

                                    </a></p>
                            </div>
                            <div style="margin-top:-5px">
                                <ul class="d-flex justify-content-center gap-4 list-unstyled mt-2">
                                    <li class="facebook soci"><a target="_blank" title="Facebook"
                                            href="{{ $contactUs->facebook ?? ' ' }}"><i
                                                class="fa fa-facebook  social fs-5"></i></a>
                                    </li>

                                    <li class="youtube soci"><a target="_blank" title="Youtube"
                                            href="{{ $contactUs->youtube ?? ' ' }}"><i
                                                class="fa fa-youtube social fs-5"></i></a>
                                    </li>

                                    <li class="instagram soci"><a target="_blank" title="Instagram"
                                            href="{{ $contactUs->instagram ?? '' }}"><i
                                                class="fa fa-instagram social fs-5"></i></a>
                                    </li>

                                    <li class="instagram soci"><a target="_blank" title="Instagram"
                                            href="{{ $contactUs->loaction ?? '' }}"><i
                                                class="fa fa-crosshairs social fs-5"></i></a>

                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>


                </div>
                {{-- <div class="col-2 ">
                    <img class="rounded" src={{ $resturant->resturant_logo }} alt="" width="190px"
                        height="190px" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                        class="rev-slidebg" data-no-retina>
                </div> --}}
            </div>

        </div>


        @if (count($resturant->getMedia('images')) > 0)
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                style="border-top:12px solid rgb(151, 0, 0)">
                <div class="carousel-inner">
                    <div class="carousel-inner" style="height: 400px; width:100%">
                        <div class="carousel-item active">
                            <img src="{{ $resturant->getMedia('images')[0]->getUrl() }}" width="100%">
                        </div>
                        @foreach ($resturant->getMedia('images') as $img)
                            <div class="carousel-item">
                                <img src="{{ $img ? $img->getUrl() : '' }}" width="100%">
                            </div>
                        @endforeach
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @endif





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


        <h2 class="ppb_title text-center mb-5 pt-5"><span class="ppb_title_first ">Resturant</span>Menu</h2>
        <div class="  mt-1">
            <div class="container-fluid">
                <nav class="row gap-4 justify-content-center nav-pills nav-fill">
                    @foreach ($categories as $category)
                        <a href={{ route('fil', ['id' => $category->id, 'restid' => $category->resturant_id]) }}
                            class="col-3 col-md-1 cattego btn btn-light p-2 fw-bold" style="font-size: 15px !important;">
                            {{ $category->category_name }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
        <div class="ppb_portfolio one nopadding " style="padding:0px 0 0px 0;">
            <div class=" mb-5 ">
                <div class="container ">
                    <div id='allproducct'>
                        <div class="row align-items-center justify-contnet-center">


                            @foreach ($allproducts as $productt)
                                <div class=" col-6 col-md-3 mb-5">

                                    <a id="modalnfo" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        onclick="openProductModal(this);" data-menu="{{ json_encode($productt) }}"
                                        data-options="{{ json_encode($productt->options()->get()) }}">

                                        <img src={{ asset($productt->logo) }} class="card-img-top"
                                            style="width: 100%; border-radius:50%;   " alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $productt->name }}</h5>
                                            {{-- <p class="card-textt">
                                                {{ Str::limit(strip_tags($productt->description), 33) }}</p> --}}
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

    </div>



    <!-----------SLIDER---------->
    <div>
        <div class="reservation_content pt-5 pb-5"
            style="background:url('/assets/frontend/mainimage/side-view-adult-holding-smartphone.jpg');background-size:cover;background-repeat:no-repeat;background-attachment: fixed;p">
            <div class="reservation_form">
                <div class="reservation_wrapper container">
                    <a id="reservation_cancel_btn" href="javascript:;"><i class="fa fa-close"></i></a>
                    <h2 class="ppb_title"><span class="ppb_title_first">Write</span class="fw-400">Feedback</h2>


                    <form action={{ route('feedback') }} method="post">
                        @csrf
                        <input type="hidden" id="action" name="resturant_id" value="{{ $resturant->id }}" />

                        <div class="one_third " style="width: 100%">
                            <label for="phone">Phone*</label>
                            <input id="phone" name="phone" type="text" class="required_field" />
                        </div>
                        <br class="clear" />
                        <br />

                        <div class="one">
                            <label for="message">Write Feedback</label>
                            <textarea id="message" name="feedback" rows="7" cols="10"></textarea>
                        </div>
                        <br class="clear" />
                        <br />
                        <div class="one">
                            <p>
                                <input id="reservation_submit" type="submit" value="Send Feedback" />
                            </p>
                        </div>
                        <br class="clear" />
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- Button trigger modal -->



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
    <script>
        function relod() {
            location.reload();
        }
    </script>


    <script>
        function openProductModal(alldata) {

            var productData = $(alldata).data('menu');


            var modal = document.getElementById('exampleModal'); // Select the modal using Bootstrap's Modal class

            var modalTitle = modal.querySelector('.modal-title');
            var modaldescription = modal.querySelector('.modal-description');

            modalTitle.textContent = productData.name;
            modaldescription.textContent = productData.description;
            document.getElementById('productname').setAttribute('value', productData.name);
            document.getElementById('productdescription').setAttribute('value', productData.description);
            document.getElementById('productid').setAttribute('value', productData.id);
            document.getElementById('resturant_id').setAttribute('value', productData.resturant_id);


            modal.addEventListener('shown.bs.modal', function(event) {

                $.ajax({
                    url: '/get-images/' + productData.id,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {

                        var imagesContainer = modal.querySelector('.carousel-inner');
                        imagesContainer.innerHTML = ''; // Clear previous content

                        var optionsContainer = modal.querySelector('.options-container');
                        optionsContainer.innerHTML = ''; // Clear previous content


                        $.each(response.images, function(index, image) {

                            if (index == 0) {
                                var tag = $('<div class="carousel-item active"></div>');
                            } else {
                                var tag = $('<div class="carousel-item"></div>');
                            }

                            var imgElement = $(
                                    '<img class="d-block w-100" alt="...">'
                                )
                                .attr('src', image).addClass('modal-image');

                            tag[0].appendChild(imgElement[0]);

                            imagesContainer.appendChild(tag[0]); // Append the DOM element
                        });

                        $.each(response.result, function(index, val) {
                            var contain = $('<div class="col-12 col-md-6 mt-2 "></div>');
                            var options = $(' <h5 class = "fw-bold pb-2"></h5>')
                            var optionElement = options.text(val.option);
                            var variab = contain.append(optionElement[0]);

                            $.each(val.values, function(index, value) {
                                var containvalue = $(
                                    '<div class="form-check d-flex  gap-2"></div>')
                                var inputval = $(
                                    '<input class="form-check-input mt-1" type="checkbox" >'
                                );
                                inputval.attr('value', value.name);

                                inputval.attr('name', val.option)
                                inputval.attr('data-price', value.price);
                                var label = $(
                                    ' <label class="  d-flex align-items-center gap-3" for="flexCheckDefault"></div>'
                                );
                                var valuename = $('<p>').text(value
                                    .name);
                                label[0].append(valuename[0]);

                                var valueprice = $('<p class="fw-bold"></p>')
                                    .text(value
                                        .price);
                                valueprice.append(
                                    '<span>EGP</span>');
                                label[0].append(
                                    valueprice[0]);

                                var valueText = 'value_name : ' + value.name;
                                if (value.price !== null) {
                                    valueText += ' - Price: ' + value.price;
                                }

                                containvalue.append(inputval[0]);
                                containvalue
                                    .append(label[0]);

                                contain.append(containvalue[0]);

                                // Append value text to the option element
                                // optionElement.append($('<br>')).append(valueText);
                            });
                            // Append the <p> element to the options container
                            optionsContainer.appendChild(variab[0]);
                        });
                    },
                    error: function(error) {
                        console.error('Error fetching images:', error);
                    }

                });


                modal.addEventListener('click', function(event) {
                    var checkboxes = document.querySelectorAll("input[type=checkbox]");
                    var totalPrice = 0;

                    for (var i = 0; i < checkboxes.length; i++) {

                        var checkbox = checkboxes[i];

                        if (checkbox.checked) {
                            totalPrice += parseFloat(checkbox.dataset.price);
                        }
                    }


                    var quantity = document.getElementById('form1');

                    totalPrice = quantity.value * totalPrice
                    document.getElementById("totalPrice").textContent = totalPrice; // }
                    document.getElementById("allprice").setAttribute("value", totalPrice);

                })
            });

        }
    </script>

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
    <script src={{ asset('assets/frontend/js/plugins/jquery.flexslider-min.js') }}></script>



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

        var revapi3, tpj;
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
@endsection
