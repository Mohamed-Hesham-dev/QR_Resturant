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
    Packages / Create
@endsection

@section('title-page2')
    Dashboard
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Package</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="name" name="title" type="text" class="required_field  form-control"
                        id="exampleInputEmail1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="name" name="price" type="text" class="required_field form-control"
                        id="exampleInputPassword1" placeholder="Enter price">
                </div>
                <div class="form-group">

                    <label for="">Description</label>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea style="width: 100%" id="name" name="description" class="required_field"></textarea>
                </div>
                <div class="input-group mb-3">
                    <label for="email">Status &nbsp; &nbsp;</label>
                    <input class="checkbox form-control" type="checkbox" name="is_active" id="switch" value="1"
                        {{ old('is_active') == 1 ? 'checked' : '' }}>
                    <label for="switch" class="toggle">
                    </label>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add package</button>

            </div>
        </form>
    </div>
    {{-- <div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Add new package</p>
        <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="email">Title*</label>
                <input style="width: 100%" id="name" name="title" type="text" class="required_field" />
            </div>
            <div class="">
                <label for="email">Price*</label>
                <input style="width: 100%" id="name" name="price" type="text" class="required_field" />
            </div>
            <div class="">
                <label for="email">Description*</label>
                <textarea style="width: 100%" id="name" name="description"  class="required_field" ></textarea>
            </div>
           
          
     
            <br>
            <div class="input-group mb-3">
              <label for="email">Status  &nbsp; &nbsp;</label>
                <input class="checkbox form-control" type="checkbox" name="is_active" id="switch" value="1" {{ old('is_active') == 1 ? 'checked' : '' }}>
                <label for="switch" class="toggle">
                </label>
            </div>
            <div class="col-6" style="float:right;">
                <button type="submit" class="btn btn-primary">Add package</button>
            </div>
            <!-- /.col -->

        </form>
    </div>
    <!-- /.form-box -->
</div><!-- /.card --> --}}

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

    <style>
        /* toggle in label designing */
        .toggle {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 35px;
            background-color: red;
            border-radius: 30px;
            border: 2px solid gray;
        }

        /* After slide changes */
        .toggle:after {
            content: '';
            position: absolute;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            background-color: gray;
            top: 1px;
            left: 1px;
            transition: all 0.5s;
        }

        /* Toggle text */


        /* Checkbox checked effect */
        .checkbox:checked+.toggle::after {
            left: 25px;
        }

        /* Checkbox checked toggle label bg color */
        .checkbox:checked+.toggle {
            background-color: green;
        }

        /* Checkbox vanished */
        .checkbox {
            display: none;
        }
    </style>
@endsection
