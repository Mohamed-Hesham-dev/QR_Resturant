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
            height: 10% !important;
        }
    </style>
@endsection


@section('content')
    <div class="container" style="height: 100%; margin-top: 20%;">
        <h1 class="fw-bold m-auto text-white text-center">Thank you {{ $request->clientname }} for choosing fill menu
            services, visit us
            again ❤️</h1>
        <h3 class="fw-bold m-auto text-white text-center mt-5"> Your order number #{{ $id }}</h3>
    </div>
@endsection


@section('script')
@endsection
