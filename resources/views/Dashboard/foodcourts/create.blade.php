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


        <form action="{{ route('foodcourt.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body  ">

                <div class="form-group">
                    <label for="foodcourt_name">foodcourt Name*</label>
                    <input class="required_field form-control" id="resturant_name" name="resturant_name" type="text" />
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">foodcourt Image*</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control" name="foodcourt_logo" placeholder="Image"
                                id="exampleInputFile" onchange="loadFile(event)" accept="image/*">
                            <label class="custom-file-label" for="exampleInputFile" id="fileLabel">Choose file</label>
                        </div>
                    </div>
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
