@extends('Front.Layout.master')
@section('title')
    Resturants
@endsection


@section('head')
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
    <!------------------resturants----------------------->
    <div id="resturants" class="one ppb_team_column">
        <div class="page_content_wrapper " style="text-align:center; margin-top:10%">
            <h1>
                <span class="ppb_title_first">Welcome in</span>{{ $foodcourtdata->foodcourt_name }}
            </h1>

            <div class="inner">
                <div class="container ">
                    <div class="row gap-4 container justify-content-center">

                        @foreach ($allfoodcourtres as $rest_item)
                            <div class=" col-12 col-md-3   " style="width: 15rem;  ">
                                <a href="{{ route('resturant', [$rest_item->resturant_name, $rest_item->id]) }}">
                                    <img class="card-img-top" style="border-radius:50%" src={{ $rest_item->resturant_logo }}
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $rest_item->resturant_name }}</h5>
                                </a>
                                <ul class="d-flex justify-content-center gap-4 list-unstyled mt-3">
                                    <li class="facebook soci"><a target="_blank" title="Facebook"
                                            href="{{ $contactUs->where('resturant_id', $rest_item->id)->first()->facebook ?? ' ' }}"><i
                                                class="fa fa-facebook  social fs-5"></i></a>
                                    </li>

                                    <li class="youtube soci"><a target="_blank" title="Youtube"
                                            href="{{ $contactUs->where('resturant_id', $rest_item->id)->first()->youtube ?? ' ' }}"><i
                                                class="fa fa-youtube social fs-5"></i></a>
                                    </li>

                                    <li class="instagram soci"><a target="_blank" title="Instagram"
                                            href="{{ $contactUs->where('resturant_id', $rest_item->id)->first()->instagram ?? '' }}"><i
                                                class="fa fa-instagram social fs-5"></i></a></li>
                                </ul>
                            </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        function val(re) {
            var packageid = document.getElementById("packageinput");
            packageid.setAttribute("value", re);

            console.log(packageid);
        }
    </script>
    <script>
        window.odometerOptions = {
            format: '(,ddd).dd'
        };
        setTimeout(function() {
            jQuery('#1570096072336597485').html(20);
        }, 1000);

        window.odometerOptions = {
            format: '(,ddd).dd'
        };
        setTimeout(function() {
            jQuery('#1570096072772185217').html(12);
        }, 1000);

        window.odometerOptions = {
            format: '(,ddd).dd'
        };
        setTimeout(function() {
            jQuery('#15700960721959780185').html(15500);
        }, 1000);

        window.odometerOptions = {
            format: '(,ddd).dd'
        };
        setTimeout(function() {
            jQuery('#15700960721803188826').html(85);
        }, 1000);

        window.odometerOptions = {
            format: '(,ddd).dd'
        };
        setTimeout(function() {
            jQuery('#15700960721920355529').html(15);
        }, 1000);
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var tgAjax = {
            "ajaxurl": "#",
            "ajax_nonce": "c5281db0c2"
        };
        /* ]]> */
    </script>
@endsection
