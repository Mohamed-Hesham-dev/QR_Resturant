@extends('Dashboard.Layout.master')
@section('title')
Dashboard.Packages
@endsection


@section('css')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
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
contactUsSetting / Edit
@endsection

@section('title-page2')
Dashboard
@endsection

@section ('content')

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Update Contact Us Setting</p>
            <form action="{{ route('contactUsSetting.update', $all_contactUsSetting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <input type="text" name="mobile" class="form-control" placeholder="Mobile"  value="{{$all_contactUsSetting->mobile}}">
                </div>
              
                <div class="input-group mb-3">
                    <input type="text" name="facebook" class="form-control" placeholder="Facebook"  value="{{$all_contactUsSetting->facebook}}">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="instagram" class="form-control" placeholder="Instagram"  value="{{$all_contactUsSetting->instagram}}">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="youtube" class="form-control" placeholder="Youtube"  value="{{$all_contactUsSetting->youtube}}">
                </div>
                <div class="col-6" style="float:right;">
                    <button type="submit" class="btn btn-primary">Edit Contact Us Setting</button>
                </div>
      
        </form>
    </div>
    </div>
   
@endsection
