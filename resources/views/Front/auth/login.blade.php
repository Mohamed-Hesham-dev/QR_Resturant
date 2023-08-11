@extends('Front.Layout.master')
@section('content')
    <div style="background:black ">
        <div class="">
            <div class="" style=" padding-top: 20%; padding-bottom: 20%; color:white">
                <div class="reservation_form_wrapper">
                    <h2 class="ppb_title " style="color:white; margin-bottom:40px"><span
                            class="ppb_title_first">Resturant</span>Login</h2>

                   <form action="{{route('login_user.loginUser')}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="">
                            <label for="email">Email*</label>
                            <input style="width: 100%" id="email" name="email" type="text"
                                class="required_field" />
                        </div>
                        <div class="">
                            <label for="Password">Password*</label>
                            <input style="width: 100%"id="Password" name="password" type="password"
                                class="required_field" />
                        </div>

                        <br class="clear" />
                        <div class="">
                            <p>
                                <input id="reservation_submit_btn" type="submit" value="Login" />
                            </p>
                        </div>
                        <br class="clear" />
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('style')
@endsection
