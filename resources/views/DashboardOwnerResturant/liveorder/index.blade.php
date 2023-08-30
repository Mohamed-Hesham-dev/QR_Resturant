@extends('DashboardOwnerResturant.Layout.master')
@section('title')
    Dashboard.Liveorder
@endsection


@section('css')
@endsection



@section('title-page')
    Liveorder
@endsection

@section('title-page2')
    Dashboard
@endsection

@section('content')
    <div class="row">

        <div class="col-md-4">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">New Orders</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <div class="row">
                        @foreach ($orders->where('statue', 'pending') as $order)
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted" style="font-size:12px; ">{{ $order->created_at }}</p>
                                    <p class="text-info fw-bold" style="font-size:12px; font-weight:bold ">
                                        {{ $order->statue }}</p>
                                </div>
                                <p> Table / Method : <span><b>{{ $order->tablemethod }}</b></span></p>
                                <p> numbers of Items: <span><b>{{ $order->Items }}</b></p>
                                <p> price: <span><b>{{ $order->price }}</b><span style="font-size:10px"> EGP</span></p>
                                <a class="right badge badge-primary" data-toggle="modal" data-target="#exampleModal"
                                    style="cursor: pointer">details</a>

                                <hr>

                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-mute" style="font-size:15px ">Resturant Information</p>
                                                    <h5>Resturant Name: <span
                                                            style="font-weight:bold ">{{ $resturant->resturant_name }}</span>
                                                    </h5>
                                                    <h6>OwnerName: <span
                                                            style="font-weight:bold ">{{ $resturant->user->name }}</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-mute" style="font-size:15px ">Client Information</p>
                                                    <h5>Client Name <span
                                                            style="font-weight:bold ">{{ $order->clientname }}</span>
                                                    </h5>
                                                    <p>phone number: <span
                                                            style="font-weight:bold ">{{ $order->phonenumber }}</span>
                                                    </p>
                                                    <p>PickupTime : <span>{{ $order->PickupTime }}</span></p>
                                                    <p>Orderid : <span>{{ $order->id }}</span></p>
                                                    <p>Address : <span>{{ $order->address }}</span></p>
                                                    <p>paymentmethod : <span>{{ $order->payment }}</span></p>
                                                </div>
                                                <div class="col-12">

                                                    <div class="bg-info p-2 rounded">
                                                        <h4 class="text-wite text-center" style="font-weight:bold ">Order
                                                            Information</h4>
                                                    </div>
                                                    @foreach ($order->cart()->get() as $item)
                                                        <div class="col-6">
                                                            <div>
                                                                <p>Quantity
                                                                    <span class="text-success">
                                                                        :{{ $item->productquantity }}</span>
                                                                </p>
                                                                <p> Name: <span
                                                                        style="font-weight:bold">{{ $item->productname }}</span>
                                                                </p>
                                                                <p> Product Description: <span
                                                                        style="font-weight:bold">{{ $item->productdescription }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <table class="table-bordered text-center"
                                                                    style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">id</th>
                                                                            <th scope="col">Option name</th>
                                                                            <th scope="col">Option value</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($item->options()->get() as $option)
                                                                            <tr>
                                                                                <th scope="row">{{ $option->id }}</th>
                                                                                <td>{{ $option->key }}</td>
                                                                                <td>{{ $option->value }}</td>
                                                                            </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Accepted</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach ($orders_ACCEPTED as $order)
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted" style="font-size:12px; ">{{ $order->created_at }}</p>
                                    <p class="text-info fw-bold" style="font-size:12px; font-weight:bold ">
                                        {{ $order->statue }}</p>
                                </div>
                                <p> Table / Method : <span><b>{{ $order->tablemethod }}</b></span></p>
                                <p> numbers of Items: <span><b>{{ $order->Items }}</b></p>
                                <p> price: <span><b>{{ $order->price }}</b><span style="font-size:10px"> EGP</span></p>
                                <a class="right badge badge-primary" data-toggle="modal" data-target="#exampleModal1"
                                    style="cursor: pointer">details</a>

                                <hr>
                            </div>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-mute" style="font-size:15px ">Resturant Information</p>
                                                    <h5>Resturant Name: <span
                                                            style="font-weight:bold ">{{ $resturant->resturant_name }}</span>
                                                    </h5>
                                                    <h6>OwnerName: <span
                                                            style="font-weight:bold ">{{ $resturant->user->name }}</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-mute" style="font-size:15px ">Client Information</p>
                                                    <h5>Client Name <span
                                                            style="font-weight:bold ">{{ $order->clientname }}</span>
                                                    </h5>
                                                    <h6>phone number: <span
                                                            style="font-weight:bold ">{{ $order->phonenumber }}</span>
                                                    </h6>
                                                    <p>PickupTime : <span>{{ $order->PickupTime }}</span></p>
                                                </div>
                                                <div class="col-12">

                                                    <div class="bg-primary p-2 rounded">
                                                        <h4 class="text-wite text-center" style="font-weight:bold ">Order
                                                            Information</h4>
                                                    </div>
                                                    @foreach ($order->cart()->get() as $item)
                                                        <div class="col-6">
                                                            <div>
                                                                <p>Quantity
                                                                    <span class="text-success">
                                                                        :{{ $item->productquantity }}</span>
                                                                </p>
                                                                <p> Name: <span
                                                                        style="font-weight:bold">{{ $item->productname }}</span>
                                                                </p>
                                                                <p> Product Description: <span
                                                                        style="font-weight:bold">{{ $item->productdescription }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <table class="table-bordered text-center"
                                                                    style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">id</th>
                                                                            <th scope="col">Option name</th>
                                                                            <th scope="col">Option value</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($item->options()->get() as $option)
                                                                            <tr>
                                                                                <th scope="row">{{ $option->id }}
                                                                                </th>
                                                                                <td>{{ $option->key }}</td>
                                                                                <td>{{ $option->value }}</td>
                                                                            </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-4">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Prepared</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach ($orders->where('statue', 'PREPARED') as $order)
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted" style="font-size:12px; ">{{ $order->created_at }}</p>
                                    <p class="text-info fw-bold" style="font-size:12px; font-weight:bold ">
                                        {{ $order->statue }}</p>
                                </div>
                                <p> Table / Method : <span><b>{{ $order->tablemethod }}</b></span></p>
                                <p> numbers of Items: <span><b>{{ $order->Items }}</b></p>
                                <p> price: <span><b>{{ $order->price }}</b><span style="font-size:10px"> EGP</span></p>
                                <a class="right badge badge-primary" data-toggle="modal" data-target="#exampleModal2"
                                    style="cursor: pointer">details</a>

                                <hr>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-mute" style="font-size:15px ">Resturant Information</p>
                                                    <h5>Resturant Name: <span
                                                            style="font-weight:bold ">{{ $resturant->resturant_name }}</span>
                                                    </h5>
                                                    <h6>OwnerName: <span
                                                            style="font-weight:bold ">{{ $resturant->user->name }}</span>
                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-mute" style="font-size:15px ">Client Information</p>
                                                    <h5>Client Name <span
                                                            style="font-weight:bold ">{{ $order->clientname }}</span>
                                                    </h5>
                                                    <h6>phone number: <span
                                                            style="font-weight:bold ">{{ $order->phonenumber }}</span>
                                                    </h6>
                                                    <p>PickupTime : <span>{{ $order->PickupTime }}</span></p>
                                                </div>
                                                <div class="col-12">

                                                    <div class="bg-success p-2 rounded">
                                                        <h4 class="text-wite text-center" style="font-weight:bold ">Order
                                                            Information</h4>
                                                    </div>
                                                    @foreach ($order->cart()->get() as $item)
                                                        <div class="col-6">
                                                            <div>
                                                                <p>Quantity
                                                                    <span class="text-success">
                                                                        :{{ $item->productquantity }}</span>
                                                                </p>
                                                                <p> Name: <span
                                                                        style="font-weight:bold">{{ $item->productname }}</span>
                                                                </p>
                                                                <p> Product Description: <span
                                                                        style="font-weight:bold">{{ $item->productdescription }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <table class="table-bordered text-center"
                                                                    style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">id</th>
                                                                            <th scope="col">Option name</th>
                                                                            <th scope="col">Option value</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($item->options()->get() as $option)
                                                                            <tr>
                                                                                <th scope="row">{{ $option->id }}
                                                                                </th>
                                                                                <td>{{ $option->key }}</td>
                                                                                <td>{{ $option->value }}</td>
                                                                            </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

    </div>
@endsection

@section('script')
@endsection
