@extends('DashboardOwnerResturant.Layout.master')
@section('title')
DashboardOwnerResturant.Option
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
Menu / Option / Edit
@endsection

@section('title-page2')
DashboardOwnerResturant
@endsection

@section ('content')


<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Edit Option</p>
        <form action="{{route('options.update',$resturantOptionDashboard->id)}}"  method="POST" enctype="multipart/form-data">
            @csrf
                    @method('PUT')
            <div class="">
                <label for="email">Option Name*</label>
                <input style="width: 100%" id="name" name="option_name" type="text" class="required_field" value="{{$resturantOptionDashboard->option_name}}"/>
            </div>

            <div class="">
              <table class="table table-bordered  text-center col-md-12 mt-5" style="grid-auto-flow: column;justify-content: center; align-content: center;">
                    <thead class='' style='background-color: #2a415b;font-size:11px;
    color: white;'>
                        <tr>
                           <th class=" col-form-label">remove/add</th>
                        <th class=" col-form-label">value name</th>
                           
                        </tr>
                        @if (count($resturantOptionDashboard->value) > 0)
                            @foreach ($resturantOptionDashboard->value as $key => $val)
                                <tr id="value-{{ $key }}">
                                 
                                        <td class="text-center end-td ">
                                            <button type="button" title="Remove"
                                                onclick="removeRow({{ $key }},{{ $val->id }})"
                                                @if ($key == 0) disabled="disabled" @endif
                                                class="btn btn-danger btn-option">
                                                <i class="fa fa-minus-circle"></i>
                                            </button>
                                        </td>
                                 
                                    <th><input class="form-control" type="text"
                                            name="value[{{ $key }}][value_name]"
                                            value="{{ $val->value_name }}"></th>
                                   
                            @endforeach
                       
                                <tr class="datatable-row datatable-row-even">
                                    <td class="text-center end-td " id="increment">
                                        <button type="button" class="btn btn-primary add_new"
                                            id="btn-{{ count($resturantOptionDashboard->value) - 1 }}"
                                            onclick="appendRow({{ count($resturantOptionDashboard->value) - 1 }})"><i
                                                class="fa fa-plus-circle"></i></button>
                                    </td>
                                </tr>
                        
                           
                          
                        @else
                            <tr id="value-0">
                                <th class="text-center end-td ">
                                    <button type="button" title="Remove" disabled="disabled"
                                        class="btn btn-danger btn-option">
                                        <i class="fa fa-minus-circle"></i>
                                    </button>
                                </th>
                                <th><input class="form-control" type="text" name="value[0][value_name]"></th>
                              
                            </tr>

                            <tr class="datatable-row datatable-row-even">
                                <td class="text-center end-td " id="increment">
                                    <button type="button" class="btn btn-primary add_new" id="btn-0"
                                        onclick="appendRow(0)"><i class="fa fa-plus-circle"></i></button>
                                </td>
                            </tr>
                        @endif
                    </table>
            </div>
           <br>
            <div class="col-6" style="float:right;">
                <button type="submit" class="btn btn-primary">Edit Option</button>
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


     <script>
            function appendRow(num) {
                $new_number = parseInt(num) + 1;
                $appended_text = ` <tr class="datatable-row datatable-row-even" id="value-${$new_number}">
                                         
                                          <td class="text-center end-td ">
                                                    <button type="button" title="Remove" onclick="removeRow(${$new_number})"
                                                              class="btn btn-danger btn-option">
                                                              <i class="fa fa-minus-circle"></i>
                                                    </button>
                                          </td>
                                          <th><input class="form-control"  type="text" name="value[${$new_number}][value_name]"></th>

              
                                         
                                </tr>`;
                $($appended_text).insertAfter(`#value-${num}`);
                if (!document.getElementById(`value-${num}`)) {
                    $($appended_text).insertAfter(`#value-0`);
                }

                $(`#btn-${num}`).remove();
                $("#increment").append(
                    `<button type="button" class="btn btn-primary add_new" id="btn-${$new_number}" onclick="appendRow(${$new_number})"><i class="fa fa-plus-circle"></i></button></td>`
                );


            }

            function removeRow(num, id) {
                if (id != 0) {
                    $("#value-0").append(`<input type="hidden" name="ids[${num}]" value="${id}">`);
                }
                $(`#value-${num}`).remove();
            }
        </script>

@endsection
