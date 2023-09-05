@extends('Front.Layout.master')
@section('title')
    Cart
@endsection


@section('head')
    <style>
        body {
            background: url('/assets/frontend/mainimage/side-view-adult-holding-smartphone.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            vertical-align: middle;
            display: flex;
            font-family: sans-serif;
            font-size: 0.8rem;
            font-weight: bold;

        }

        .title {
            margin-bottom: 5vh;
        }

        .card {
            margin: auto;
            margin-top: 6%;

            max-width: 950px;
            width: 90%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        @media(max-width:767px) {
            .card {
                margin: 3vh auto;
            }
        }

        .cart {
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
        }

        @media(max-width:767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem;
            }
        }

        .summary {
            background-color: #ddd;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65);
        }

        @media(max-width:767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem;
            }
        }

        .summary .col-2 {
            padding: 0;
        }

        .summary .col-10 {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .title b {
            font-size: 1.5rem;
        }

        .main {
            margin: 0;
            padding: 2vh 0;
            width: 100%;
        }

        .col-2,
        .col {
            padding: 0 1vh;
        }

        a {
            padding: 0 1vh;
        }

        .close {
            margin-left: auto;
            font-size: 0.7rem;
        }

        img {
            width: 3.5rem;
        }

        .back-to-shop {
            margin-top: 4.5rem;
        }

        h5 {
            margin-top: 4vh;
        }

        hr {
            margin-top: 1.25rem;
        }

        form {
            padding: 2vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .bttn {
            background-color: #cfa670;
            border: none;
            color: white;
            width: 100%;
            font-size: 1.7rem;
            margin-top: 4vh;
            padding: 1vh;
            border-radius: 10px;
        }

        .bttn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            background-color: #705838 -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .bttn:hover {
            color: white;
            background-color: #705838
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        #code {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }
    </style>
@endsection


@section('content')
    <div class="container" id='cartpage'>
        <div class="card">

            <form action={{ route('cart.storee') }} method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-8 cart">
                        <div class="title">
                            <div class="row">
                                <div class="col">
                                    <h4><b>Shopping Cart</b></h4>
                                </div>
                                <div class="col align-self-center text-right text-muted fw-bold">
                                    {{ count((array) session('cart')) }}
                                    <input type="hidden" name="itemcount" value=" {{ count((array) session('cart')) }}">
                                    items
                                </div>
                            </div>
                        </div>
                        <div class="modal-content">
                            <div class="modal-body">
                                <table class="table table-image">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Options</th>
                                            <th scope="col">price</th>
                                            <th scope="col">Quantity</th>
                                            {{-- <th scope="col">Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="tbodyy">
                                        @if (isset($data))
                                            @foreach ($data as $dat)
                                                <tr>
                                                    <th scope="col">{{ $dat['productname'] }}</th>

                                                    <th scope="col">

                                                        @foreach ($dat['options'] as $key => $value)
                                                            {{ $key }} : {{ $value }}
                                                            <br>
                                                        @endforeach

                                                    </th>
                                                    <th scope="col">{{ $dat['totalprice'] }}</th>
                                                    <th scope="col">{{ $dat['productquantity'] }}</th>
                                                    {{-- <th scope="col"><a class="btn btn-danger btn-sm"> <i
                                                                class="fa fa-times">
                                                            </i> </a></th> --}}
                                                </tr>
                                            @endforeach
                                        @else
                                            <h4> No Item on Cart</h4>
                                        @endif

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {{-- <h5>Total: <span class="pricee text-success"></span><span style="font-size: 10px">EGP</span>

                                </h5> --}}

                                </div>
                            </div>

                        </div>
                        <hr>
                        <br>
                        <div>
                            {{-- @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        @endif --}}
                            <h2 class="mb-4 fw-bold">Dine In / Takeaway / Delivery
                            </h2>
                            <div class="form-check d-flex gap-2">
                                <input class="form-check-input" type="radio" name="methodd" value="DineIn" id="DineIn">
                                <label class="form-check-label" for="DineIn">
                                    Dine In
                                </label>
                            </div>
                            <div class="form-check d-flex gap-2">
                                <input class="form-check-input" type="radio" name="methodd" id="Takeaway"
                                    value="Takeaway">
                                <label class="form-check-label" for="Takeaway">
                                    Takeaway
                                </label>
                            </div>


                            @auth
                                <div class="form-check d-flex gap-2">
                                    <input class="form-check-input" type="radio" name="methodd" id="Delivery"
                                        value="Delivery">
                                    <label class="form-check-label" for="Delivery">
                                        Delivery
                                    </label>
                                </div>
                            @else
                                <p class="text-success">If you need make your order Delivery Please Log in and make your account
                                    now
                                    <a class="text-danger" href="{{ route('register_user.index') }}">Register</a>
                                </p>
                            @endauth

                        </div>
                        <div id="toggle">
                            <div class="table dineinfields">
                                @if (session('table_number'))
                                    <input type="hidden" name='table' value="{{ session('table_number') }}">
                                @endif
                                @if (session('table_number') == null)
                                    <h2 class="mb-4 fw-bold">Table
                                    </h2>
                                    @error('table')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <select class="form-select" name="table" aria-label="Default select example">

                                        <option selected>Number of Table</option>
                                        @if (isset($resturan->table))
                                            @foreach ($resturan->table as $item)
                                                <option value="{{ $item->num_table }}">{{ $item->num_table }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                @endif

                            </div>
                            <div class="name">
                                @error('clientname')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <h2 class="mb-4 fw-bold ">Your Name
                                </h2>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name='clientname' id="name"
                                        placeholder=" ">
                                </div>
                            </div>
                            <div class="name ">
                                @error('phonenumber')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <h2 class="mb-4 fw-bold">Your Phone
                                </h2>
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="phonenumber" placeholder=" ">
                                </div>
                            </div>


                            <div class="deliveryfields">
                                <h2 class="mb-4 fw-bold">Your Address
                                </h2>
                                <div class="mb-3">
                                    <textarea class="form-control" name='address' id="address" placeholder="Your Address"></textarea>
                                </div>
                            </div>

                            <div class="table takeaway-fields">
                                <h2 class="mb-4 fw-bold">Pick-up Time
                                </h2>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="pickupTime" id="pickupTime"
                                        placeholder="">
                                </div>
                            </div>


                            {{-- @if (isset($resturan))
                                <div class="resturantinfo mt-5">
                                    <input type="hidden" name='resturantname' value="{{ $resturan->resturant_name }}">
                                    <input type="hidden" name='resturantphone' value="{{ $resturan->about->mobile }}">
                                    <input type="hidden" name='resturantlocation'
                                        value="{{ $resturan->about->loaction }}">
                                    <h2 class="fw-bold">Restaurant information
                                    </h2>
                                    <div>

                                        <h5 class="resturant name">{{ $resturan->resturant_name }}</h5>
                                        <p class="phonenumber">{{ $resturan->about->mobile }}</p>
                                        <p class="location">{{ $resturan->about->loaction }}</p>
                                    </div>
                                </div>
                            @endif --}}
                            <div class="back-to-shop"><a href="/">&leftarrow;<span class="text-muted">Back
                                        to
                                        shop</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 summary">
                        <div>
                            <h5><b>Checkout</b></h5>
                        </div>
                        <hr>
                        <p>SHIPPING</p>
                        <select name="paymentmethod">
                            <option class="text-muted paymentmeth " selected value="cash">Cash</option>
                            <option class="text-muted paymentmeth" value="visa/card">visa/card</option>
                        </select>

                        @if (isset($totalprice))
                            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                                <div class="col">TOTAL PRICE</div>
                                <input type="hidden" name="totalprice" value="{{ $totalprice }}">
                                <div class="col text-right "><span class="pricee"> {{ $totalprice }}</span> EGP</div>
                            </div>
                        @endif
                        <button class="bttn">Place Order</button>
            </form>
        </div>
    </div>

    </div>
    </div>
@endsection


@section('script')
    <script>
        const dineInRadio = document.getElementById("DineIn");
        const takeawayRadio = document.getElementById("Takeaway");
        const deliveryRadio = document.getElementById("Delivery");
        const dineInFields = document.querySelectorAll('.dineinfields');
        const takeawayFields = document.querySelectorAll('.takeaway-fields');
        const deliveryFields = document.querySelectorAll('.deliveryfields');

        const toggle = document.getElementById('toggle').style.display = 'none';
        dineInRadio.addEventListener('click', function() {
            const toggle = document.getElementById('toggle').style.display = 'block';
            deliveryFields.forEach(field => field.style.display = 'none');
            dineInFields.forEach(field => field.style.display = 'block');
            takeawayFields.forEach(field => field.style.display = 'none');
        });

        takeawayRadio.addEventListener('click', function() {
            const toggle = document.getElementById('toggle').style.display = 'block';
            takeawayFields.forEach(field => field.style.display = 'block');
            deliveryFields.forEach(field => field.style.display = 'none');
            dineInFields.forEach(field => field.style.display = 'none');

        });
        if (deliveryRadio) {
            deliveryRadio.addEventListener('click', function() {
                const toggle = document.getElementById('toggle').style.display = 'block';
                deliveryFields.forEach(field => field.style.display = 'block');
                dineInFields.forEach(field => field.style.display = 'none');
                takeawayFields.forEach(field => field.style.display = 'none');
            });
        }
    </script>
@endsection
