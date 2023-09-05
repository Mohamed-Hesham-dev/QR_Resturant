@extends('Front.Layout.master')
@section('content')
    <div style="background:black ">
        <div class="">
            <div class="" style=" padding-top: 10%; padding-bottom: 10%; color:white">
                <div class="reservation_form_wrapper">
                    <h2 class="ppb_title " style="color:white; margin-bottom:40px"><span
                            class="ppb_title_first">Resturant</span>Register</h2>

                    <form action="{{ route('register_user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <label for="email">Name*</label>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input style="width: 100%" id="name" name="name" type="text"
                                class="required_field" />
                        </div>
                        <div class="">
                            <label for="email">Email*</label>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input style="width: 100%" id="email" name="email" type="text"
                                class="required_field" />
                        </div>
                        <div class="">
                            <label for="password">Password*</label>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input style="width: 100%"id="password" name="password" type="password"
                                class="required_field" />
                        </div>
                        <p>I have account <a class="text-danger" href="{{ route('login_user.index') }}">Login</a>
                        </p>
                        <br class="clear" />
                        <div class="">
                            <p>
                                <input id="reservation_submit_btn" type="submit" value="Register" />
                            </p>
                        </div>
                        <br class="clear" />
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
