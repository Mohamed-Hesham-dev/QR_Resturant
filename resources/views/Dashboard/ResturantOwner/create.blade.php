@extends('Dashboard.Layout.master')
@section('title')
    Dashboard.Resturants
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
    Resturants / Create
@endsection

@section('title-page2')
    Dashboard
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add new resturant</h3>
        </div>


        <form action="{{ route('resturant.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body  ">
                <div class="form-group">
                    <label for="email">Owner Name*</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input class="required_field form-control" value="{{ old('name') }}" id="name" name="name"
                        type="text" />
                </div>
                <div class="form-group">
                    <label for="resturant_name">Resturant Name*</label>
                    @error('resturant_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input class="required_field form-control" id="resturant_name" name="resturant_name" type="text"
                        value="{{ old('resturant_name') }}" />
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input class="required_field form-control" id="email" name="email" type="text"
                        value="{{ old('email') }}" />
                </div>
                <div class="form-group">
                    <label for="password">Password*</label>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input class="required_field form-control" id="password" name="password" type="password"
                        value="{{ old('password') }}" />
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Resturant Image*</label>
                    @error('resturant_logo')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control" name="resturant_logo" placeholder="Image"
                                id="exampleInputFile" onchange="loadFile(event)" accept="image/*"
                                value="{{ old('resturant_logo') }}">
                            <label class="custom-file-label" for="exampleInputFile" id="fileLabel">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Packages*</label>
                    <select name="package" class="form-control">
                        <option hidden>Package not selected</option>
                        @foreach ($all_packages as $value)
                            <option value="{{ $value->title }}">{{ $value->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">foodcourt </label>
                    <select name="foodcourt_id" class="form-control">
                        <option hidden value='0'> foodcourt not selected</option>
                        @foreach ($foodcourts as $foodcourt)
                            <option value="{{ $foodcourt->id }}">{{ $foodcourt->foodcourt_name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="">
                    <label for="email">Description*</label>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea style="width: 100%" id="name" name="description" class="required_field"></textarea>
                </div>
                <br>
                <div class="input-group mb-3 form-group">
                    <label for="email">Status &nbsp; &nbsp;</label>
                    <input class="checkbox form-control" type="checkbox" name="is_active" id="switch" value="1"
                        {{ old('is_active') == 1 ? 'checked' : '' }}>
                    <label for="switch" class="toggle">
                    </label>
                </div>
                <div class="col-6" style="float:right;">
                    <button type="submit" class="btn btn-primary">Add Owner Resturant</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!-- /.form-box -->
    </div><!-- /.card -->

    <script>
        function loadFile(event) {
            var input = event.target;
            var label = input.nextElementSibling;

            if (input.files && input.files[0]) {
                label.textContent = input.files[0].name;
            } else {
                label.textContent = 'Choose file';
            }
        }
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
