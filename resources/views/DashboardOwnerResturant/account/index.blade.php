@extends('DashboardOwnerResturant.Layout.master')
@section('title')
    Dashboard.Account
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
    Account / Edit
@endsection

@section('title-page2')
    Dashboard
@endsection

@section('content')
    <div class="card">
        <div class=" card-primary ">
            @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">Edit resturant</h3>
            </div>
            {{-- {{ route('resturant.update', $resturant->id) }} --}}
            <form class='container pb-5' action={{ route('account.update', $resturant->user->id) }} method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Owner Name</label>
                    <input class="required_field  form-control" id="name" name="name"
                        value="{{ $currentuser->name }}" type="text" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="required_field  form-control" id="email" name="email" type="text"
                        value="{{ $currentuser->email }}" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="required_field  form-control" id="password" name="password" type="password" />
                </div>

                <div class="col-6" style="float:right;">
                    <button type="submit" class="btn btn-primary">Edit User Info</button>
                </div>
                <!-- /.col -->

            </form>
        </div>
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
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var successAlert = document.getElementById('success-alert');
                if (successAlert) {
                    successAlert.style.display = 'none';
                }
            }, 2000); // 5000 milliseconds = 5 seconds
        });
    </script>
@endsection
