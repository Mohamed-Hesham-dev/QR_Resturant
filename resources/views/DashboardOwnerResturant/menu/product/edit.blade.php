@extends('DashboardOwnerResturant.Layout.master')
@section('title')
DashboardOwnerResturant.Resturants
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
Products / Edit
@endsection

@section('title-page2')
Dashboard
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
    </div>


    <form action="{{route('products.update',$resturantProductDashboard->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body  ">

            <div class="form-group">
                <label for="email">Categories*</label>
                <select name="category_id" class="form-control">
                    <option hidden>Select Category</option>
                    @foreach ($categories as $value)
                    <option value="{{ $value->id }}" {{$value->id ==$resturantProductDashboard->category_id ? 'selected' : ''}}>{{ $value->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="email">Product Name*</label>
                <input class="required_field form-control" id="name" name="name" type="text" value="{{$resturantProductDashboard->name}}" />
            </div>

            <div class="form-group">

                <label for="">Description</label>
                <textarea style="width: 100%" id="name" name="description" class="required_field">{{$resturantProductDashboard->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Product Image*</label>
                <img src="{{ $resturantProductDashboard->logo }}" id="output" width="80px" height="40px">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control" name="logo" placeholder="Image" id="exampleInputFile" onchange="loadFile(event)" accept="image/*">
                        <label class="custom-file-label" for="exampleInputFile" id="fileLabel">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Product Gallery</label>
                @foreach ($resturantProductDashboard->getMedia('images') as $img)

                <img src="{{ $img ? $img->getUrl() : '' }}" width="70px" height="40px">
                @endforeach
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="images[]" id="imageUpload" multiple>
                    </div>
                </div>
            </div>

            <br>
            <h4>Options</h4>
            <hr>
            @if(count($resturantProductDashboard->options)>0)
            @foreach($resturantProductDashboard->options as $key => $item)
            <div class="items-{{$key}}">
                <div id="first" class="row">
                    <div class="col">
                        <label>Options</label>
                        <select class="form-control" name="options[]" onChange="changeOptions(event,{{$key}})" id="option-{{$key}}">

                            <option>Choose</option>
                            @foreach($options as $option)
                            <option @if($item->pivot->option_id == $option->id) selected @endif
                                value="{{$option->id}}">{{$option->option_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label>Values</label>

                        <select class="form-control" name="values[]" id="value-{{$key}}">

                            <option>Choose</option>
                            @foreach($item->values as $value)
                            <option @if($item->pivot->value_id == $value->id) selected @endif
                                value="{{$value->id}}">{{$value->value_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label> price</label>
                        <input type="number" min="1" name="prices[]" class="form-control" placeholder="price" value="{{$item->pivot->price}}">
                    </div>
                    <div class="col">

                        <button type="button" title="Remove" @if ($key==0) disabled="disabled" @endif style="height:43px; margin-top:29px" class="btn btn-danger btn-option delete-repeat">
                            <i class="fa fa-minus-circle"></i>
                        </button>
                    </div>
                </div>

            </div>

            <br>

            @endforeach
            
            <button type="button" class="btn btn-primary btn-icon-split " style=" margin-left: 20px;" id="button-repeat" data-key="{{ count($resturantProductDashboard->options) - 1  }}"> <span class="icon text-white-50" >
                    <i class="fas fa-plus"></i>
                </span></button>
            <br><br>
            @else
            <div class="items-0">
                <div id="first" class="row">
                    <div class="col">
                        <label>Options</label>
                        <select class="form-control" name="options[]" onChange="changeOptions(event,0)" id="option-0">

                            <option>Choose</option>
                            @foreach($options as $key=>$option)
                            <option value="{{$option->id}}">{{$option->option_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label>Values</label>
                        <select class="form-control" name="values[]" id="value-0">

                            <option>Choose</option>

                        </select>
                    </div>

                    <div class="col">
                        <label> price</label>
                        <input type="number" min="1" name="prices[]" class="form-control" placeholder="price">
                    </div>
                    <div class="col">

                        <button type="button" title="Remove" style="height:43px; margin-top:29px" disabled="disabled" class="btn btn-danger btn-option delete-repeat">
                            <i class="fa fa-minus-circle"></i>
                        </button>
                    </div>
                </div>

            </div>

            <br>
            <button type="button" class="btn btn-primary btn-icon-split " style=" margin-left: 20px;" id="button-repeat"> <span class="icon text-white-50" >
                    <i class="fas fa-plus"></i>
                </span></button>
            <br><br>
            @endif
            <div class="col-6" style="float:right;">
                <button type="submit" class="btn btn-primary">Edit Product</button>
            </div>
            <br><br>
            <!-- /.col -->
        </div>
    </form>

    <!-- /.form-box -->
</div><!-- /.card -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    $options = @json($options);
    $productoptions = @json($resturantProductDashboard -> options);

    var number = $productoptions.length;

    function changeOptions(e, num) {


        let selected = e.target.value;

        const map1 = $options.filter(function(item) {

            if (item.id == selected) {

                return item
            }
        });


        $(`.value-${num}`).remove();
        for (let i = 0; i < map1[0].values.length; i++) {

            $(`#value-${num}`).append(`<option class="value-${num}" value="${map1[0].values[i].id}" > ${map1[0].values[i].value_name}</option>`);
        }

    }



    $('#button-repeat').on('click', function(e) {
        $options = @json($options);
        $productoptions = @json($resturantProductDashboard -> options);

        var number = $productoptions.length;

        e.preventDefault();
        if (number != 0) {
const key = $(this).data('key');
  const incrementedKey = key + 1;

            const content = `<div class="row">
                            <div class="col">
                               
                                <select class="form-control" name="options[]" onChange="changeOptions(event,${incrementedKey})"  id="option-${incrementedKey}">

                                    <option>Choose</option>
                                    @foreach($options as $option)
                                    <option value="{{$option->id}}">{{$option->option_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                
                                <select class="form-control" name="values[]" id="value-${incrementedKey}">

                                    <option>Choose</option>

                                </select>
                            </div>

                            <div class="col">
                               
                                <input type="text" name="prices[]" class="form-control" placeholder="price">
                            </div>
                           
<br>

 <div class="col">
                     
                    <button type="button" title="Remove" style="height:43px; margin-top:4px"  class="btn btn-danger btn-option delete-repeat" >
                        <i class="fa fa-minus-circle"></i>
                    </button>
                    </div>


                            
                        </div>



</div>`;

            $(`.items-${number-1}`).append(content);
   $(this).data('key', incrementedKey);
        } else {

            number++;

            const content = `<div class="row">
                            <div class="col">
                               
                                <select class="form-control" name="options[]" onChange="changeOptions(event,${number})"  id="option-${number}">

                                    <option>Choose</option>
                                    @foreach($options as $option)
                                    <option value="{{$option->id}}">{{$option->option_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                
                                <select class="form-control" name="values[]" id="value-${number}">

                                    <option>Choose</option>

                                </select>
                            </div>

                            <div class="col">
                               
                                <input type="text" name="prices[]" class="form-control" placeholder="price">
                            </div>
                           
<br>

 <div class="col">
                     
                    <button type="button" title="Remove" style="height:43px; margin-top:4px"  class="btn btn-danger btn-option delete-repeat">
                        <i class="fa fa-minus-circle"></i>
                    </button>
                    </div>


                            
                        </div>



</div>`;
            $(`.items-${number-1}`).append(content);
        }


    });
    $(document).on('click', '.delete-repeat', function() {

        $(this).closest(".row").remove();
        number--;
    });

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
