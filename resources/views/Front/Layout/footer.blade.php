<div id="footer_before_widget_text">
</div>
<div id="" class=" container text-white ">
    <div style="text-align: justify" class="row justify-content-between align-items-center ">
        <div class="col-12 col-md-4" style="width:30%">

            <img src={{ asset($aboutUs->logo) }} alt="" width="30%" />

            <p class="mb-5">
                {{ $aboutUs->description }} <br />
            </p>
            <div class="social_wrapper shortcode dark ">
                <ul>

                    <li class="facebook"><a target="_blank" title="Facebook" href="{{ $contact->facebook }}"><i
                                class="fa fa-facebook"></i></a></li>

                    <li class="youtube"><a target="_blank" title="Youtube" href="{{ $contact->youtube }}"><i
                                class="fa fa-youtube"></i></a></li>

                    <li class="instagram"><a target="_blank" title="Instagram" href="{{ $contact->instagram }}"><i
                                class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-4  " style="width:30%">
            <div id="custom_recent_posts-2" class="widget Custom_Recent_Posts">
                <h5 class="fw-bold  " style=" text-align:left; color:white">Pages</h5>
                <ul class="posts blog   " style="list-style: none ; text-align:left">
                    <li><a class="text-white"href="{{ route('index') }}">
                            Home</a>

                    </li>
                    <li><a class="text-white" href="#aboutus">
                            About</a>

                    </li>
                    <li><a class="text-white" href="#pricing">
                            Pricing</a>

                    </li>
                    <li><a class="text-white" href="#resturants">
                            Resturants</a>

                    </li>
                </ul>
            </div>

        </div>
        <div class="col-12 col-md-4" style="width:30%; align-items:flex-start">
            <div id="text-14" class="widget  ">
                <h5 class=" text-white fw-bold">Contact Info</h5>
                <div class="textwidget">

                    <p>
                        <i class="fa fa-phone marginright"></i><a href="tel:+65.4566743">{{ $contact->mobile }}</a>
                    </p>

                    <p>
                        <i class="fa fa-globe marginright"></i>QR-Restuarant.com
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
<br class="clear" />
<div id="copyright">
    © Copyright By <a>O&H Group</a>
</div>
