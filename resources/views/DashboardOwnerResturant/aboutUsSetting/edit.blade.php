@extends('DashboardOwnerResturant.Layout.master')
@section('title')
    DashboardOwnerResturant.About Us
@endsection


@section('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/min/dropzone.min.css') }}">
@endsection



@section('title-page')
    aboutUsSetting / Edit
@endsection

@section('title-page2')
    Dashboard
@endsection

@section('content')
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Update About Us Setting</p>
            <form action="{{ route('aboutUsSettingResturant.update', $all_aboutUsSetting->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <label for="resturant_name">Resturant Name*</label>
                    <input class="required_field form-control" id="resturant_name" name="resturant_name" type="text"
                        value="{{ $all_aboutUsSetting->resturant_name }}" />
                </div>
               <div class="">
                <label for="email">Description*</label>
                <textarea style="width: 100%" id="name" name="description"  class="required_field" >{{$all_aboutUsSetting->description}}</textarea>
            </div>
              <div class="">
                      <label for="password">Resturant Logo*</label>
                <img src="{{$all_aboutUsSetting->resturant_logo}}" id="output" width="70px" height="40px">
                <input class="form-control" placeholder="Image" type="file" accept="image/*"  name="resturant_logo">
            </div>
            
              <div class="">
                      <label for="password">Resturant Cover*</label>
                <img src="{{$all_aboutUsSetting->resturant_cover ?? null}}" id="output" width="70px" height="40px">
                <input class="form-control" placeholder="Image" type="file" accept="image/*"  name="resturant_cover">
            </div>
            
            <div class="form-group">
                <label for="exampleInputFile">Resturant Ads</label>
                @foreach ($all_aboutUsSetting->getMedia('images') as $img)

                <img src="{{ $img ? $img->getUrl() : '' }}" width="70px" height="40px">
                @endforeach
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="images[]" id="imageUpload" multiple>
                    </div>
                </div>
            </div>

            <br>
            
            <br>
                <div class="col-6" style="float:right;">
                    <button type="submit" class="btn btn-primary">Edit About Us Setting</button>
                </div>

            </form>
        </div>
    </div>
@endsection
