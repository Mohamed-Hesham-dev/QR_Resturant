@extends('DashboardOwnerResturant.Layout.master')
@section('title')
DashboardOwnerResturant.Tables
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
Tables / Edit
@endsection

@section('title-page2')
DashboardOwnerResturant
@endsection

@section ('content')


<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Edit Table</p>
               <form action="{{route('table.update',$resturantTableDashboard->id)}}"  method="POST" enctype="multipart/form-data">
            @csrf
                    @method('PUT')
            <div class="">
                <label for="email">Title*</label>
                <input style="width: 100%" id="name" name="title" type="text" value="{{$resturantTableDashboard->title}}" class="required_field" />
            </div>
            <div class="">
                <label for="email">Table Number*</label>
                <input style="width: 100%" id="name" name="num_table" type="number" value="{{$resturantTableDashboard->num_table}}" class="required_field" />
            </div>
            <div class="">
                <label for="email">Number Of Chairs*</label>
                <input style="width: 100%" id="name" name="num_chairs" type="number" value="{{$resturantTableDashboard->num_chairs}}" class="required_field" />
            </div>
           
            <div class="">
                <label for="email">Area*</label>
                    <select name="area" class="form-control">
                        <option hidden>Select Area</option>
                        <option value="inside"{{$resturantTableDashboard->area=='inside' ?'selected' : ''}}>Inside</option>
                        <option value="outside" {{$resturantTableDashboard->area=='outside' ?'selected' : ''}}>Outside</option>
                       
                    </select>
             
            </div>
            <br>
            <div class="input-group mb-3">
              <label for="email">Status  &nbsp; &nbsp;</label>
                <input class="checkbox form-control" type="checkbox" name="is_active" id="switch" value="1"  {{$resturantTableDashboard->is_active == 1 ? 'checked':''}}>
                <label for="switch" class="toggle">
                </label>
            </div>
            <div class="col-6" style="float:right;">
                <button type="submit" class="btn btn-primary">Edit Table</button>
            </div>
            <!-- /.col -->

        </form>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->

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
