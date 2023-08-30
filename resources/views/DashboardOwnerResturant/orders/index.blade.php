@extends('DashboardOwnerResturant.Layout.master')
@section('title')
    Dashboard.Orders
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title-page')
    Orders
@endsection

@section('title-page2')
    Dashboard
@endsection

@section('content')
    <div class="row" id='orderss'>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Orders</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>CREATED</th>
                                <th>TABLE / METHOD</th>
                                <th>ITEMS</th>
                                <th>PRICE</th>
                                <th>LAST STATUS </th>
                                <th>Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $order)
                                @if ($order->statue == 'pending')
                                    <audio loop id="playAudio">
                                        <source src="{{ asset('Audio/Ring.mp3') }}">
                                    </audio>
                                @endif
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->created_at }}
                                    </td>
                                    <td>{{ $order->tablemethod }}</td>
                                    <td>{{ $order->Items }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ $order->statue }}</td>

                                    <td>
                                        {{-- href="{{ route('orders.edit', $order->id) }}" --}}
                                        <div class="action">
                                            <div class=" statue d-flex justify-content-center">
                                                @if ($order->statue == 'pending')
                                                    <div class="ms-5 me-5">
                                                        <form action="{{ route('orders.update', $order->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type='hidden' name="ststue" value='ACCEPTED'>
                                                            <button type="submit"
                                                                class="accept pe-auto btn-success rounded mr-1"
                                                                data-action="accept">accepted</button>
                                                        </form>
                                                    </div>

                                                    <div>
                                                        <form action="{{ route('orders.update', $order->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type='hidden' name="ststue" value='REJECTED'>
                                                            <button type="submit"
                                                                class="accept pe-auto  btn-danger rounded mr-1"
                                                                data-action="accept">regicted</button>
                                                        </form>
                                                    </div>
                                                @elseif($order->statue == 'ACCEPTED')
                                                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type='hidden' name="ststue" value='PREPARED'>
                                                        <button type="submit"
                                                            class="accept pe-auto  btn-primary rounded mr-1"
                                                            data-action="accept">prepared</button>
                                                    </form>
                                                @elseif($order->statue == 'PREPARED')
                                                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type='hidden' name="ststue" value='DELIVERD'>
                                                        <button type="submit" class="accept pe-auto  btn-info rounded mr-1"
                                                            data-action="accept">delivered</button>
                                                    </form>
                                                @elseif($order->statue == 'DELIVERD')
                                                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type='hidden' name="ststue" value='ClOSED'>
                                                        <button type="submit"
                                                            class="accept pe-auto  btn-secondary rounded mr-1"
                                                            data-action="closed">closed</a>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </td>

                                    {{-- <td>
                                        <form action="" method="POST">
                                            <a class="btn btn-primary" title="Edit" href=" ">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" title="Delete" class="btn btn-danger">
                                                <i class="fa fa-ban"></i>
                                            </button>

                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var audio = document.getElementById("playAudio");
        setTimeout(function() {
            if (audio) {

                document.addEventListener("mouseout", function() {
                    audio.play();
                });
                document.addEventListener("mouseover", function() {
                    audio.pause();
                });

            }
        }, 3000);
    </script>

    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
