<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src={{ asset('assets/frontend/js/jquery.js') }}></script>
{{-- <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script> --}}
{{-- <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}></script> --}}

<script src={{ asset('assets/frontend/js/jquery-migrate.min.js') }}></script>
<script src={{ asset('assets/frontend/js/bootstrap.min.js') }}></script>

<script src={{ asset('assets/frontend/js/bootstrap.bundle.js') }}></script>

<script src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js') }}>
</script>
<script src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js') }}>
</script>
<script
    src={{ asset('assets/frontend/js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js') }}>
</script>
<script src={{ asset('assets/frontend/js/plugins/jquery.blockUI.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/js.cookie.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.magnific-popup.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.easing.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/waypoints.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.isotope.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.masory.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.tooltipster.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/hw-parallax.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.stellar.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.resizeimagetoparent.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/custom_plugins.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/custom.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/core.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/datepicker.min.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/custom-date.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.timepicker.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/custom-time.js') }}></script>
<script src={{ asset('assets/frontend/js/plugins/jquery.validate.js') }}></script>
<script src={{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 3000); // 5000 milliseconds = 5 seconds
    });
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var tgAjax = {
        "ajaxurl": "#",
        "ajax_nonce": "c5281db0c2"
    };
    /* ]]> */
</script>
<script src={{ asset('assets/frontend/js/plugins/custom_onepage.js') }}></script>
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
        ".tp-caption.title-first-word,.title-first-word{font-size:60px;line-height:50px;font-family:Kristi;color:#cfa670;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none}.tp-caption.title,.title{font-size:65px;font-weight:300;font-family:Lato;color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-3px}.tp-caption.sub-title,.sub-title{font-size:20px;line-height:24px;font-weight:400;font-family:Lato;color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-1px}";
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
        c: '#rev_slider_1_1',
        gridwidth: [1425],
        gridheight: [650],
        sliderLayout: 'fullscreen',
        fullScreenAutoWidth: 'off',
        fullScreenAlignForce: 'off',
        fullScreenOffsetContainer: '',
        fullScreenOffset: ''
    });
    var revapi1,
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
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullscreen",
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
                    gridheight: 650,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
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
    var htmlDivCss = '  #rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #444444 !important; } ';
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>

<script>
    var cart = document.getElementById('cart');
    cart.addEventListener('click', function() {
        var modal = document.getElementById('cartModal'); // Select the modal using Bootstrap's Modal class

        $.ajax({
            url: "/cart/show",
            method: 'GET',
            success: function(response) {
                console.log(response);

                var totalprice = 0;
                var bod = modal.getElementsByClassName('tbodyy');
                bod[0].innerHTML = "";
                $.each(response.data, function(index, dat) {
                    if (index == 0) {
                        var tag = $('<tr class="allde"></tr>');
                    } else {
                        var tag = $('<tr class="allde"></tr>');
                        var td1 = $('<td class="productname"></td>').text(dat.productname)
                        const keys = Object.keys(dat.options);
                        const values = Object.values(dat.options);

                        // var result = "";

                        var td2 = $('<td class="productdescription"></td>');
                        for (let i = 0; i < keys.length; i++) {
                            var option = $(`<p>${keys[i] + ": " + values[i]}</p>`);
                            td2.append(option);
                        }
                        var td3 = $('<td class="productprice"></td>').text(dat.totalprice)
                        var td4 = $('<td class="productquantity"></td>').text(dat
                            .productquantity)
                        var td5 = $(
                            ' <td>  </td>'
                        )
                        var action = $(
                            '<a class="btn btn-danger btn-sm"> <i class = "fa fa-times"> </i> </a>'
                        )
                        action.attr('href', `/cart/destroy/${dat.productid}`);
                        td5.append(action);
                        var td11 = tag.append(td1);
                        var td22 = tag.append(td2);
                        var td33 = tag.append(td3);
                        var td44 = tag.append(td4);
                        var td55 = tag.append(td5);
                        bod[0].appendChild(tag[0]);
                    }

                    totalprice += parseInt(dat.totalprice);
                });

                console.log(totalprice)
                var price = modal.querySelector(".pricee").innerHTML = totalprice


            },
            error: function(error) {
                console.error('Error fetching ass:', error);
            }

        });
    })
</script>
