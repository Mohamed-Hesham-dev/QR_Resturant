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
    <div class="row">
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
    {{-- <script>
        $(document).ready(function() {
            $('.accept').click(function(event) {
                event.preventDefault();
                const orderId = {{ $order->id }};
                const action = $(this).data('action');
                $.ajax({
                    url: $(this).attr('href'),
                    type: 'POST',
                    data: {
                        order_id: orderId,
                        action: action,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Handle the successful response, e.g., show a success message
                        console.log(response);
                    },
                    error: function(error) {
                        // Handle errors that occur during the AJAX request
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script> --}}
    {{-- <script>
        const action = document.querySelector('.action');
        const accept = document.querySelector('#accept');
        const regict = document.querySelector('#regict');
        const prepared = document.querySelector('#prepared');
        const delivered = document.querySelector('#delivered');
        const closed = document.querySelector('#closed');



        // console.log(e.target.dataset.action);
        $.ajax({
            url: "{{ route('orders.update', $order->id) }}",
            type: "GET",
            method: "PUT",
            success: function(statuue) {
                if (statuue == '"pending"') {
                    accept.style.display = "bolck";
                    regict.style.display = "block";
                    prepared.style.display = "none";
                    delivered.style.display = "none";
                    closed.style.display = "none";
                }
                if (statuue == '"ACCEPTED"') {
                    accept.style.display = "none";
                    regict.style.display = "none";
                    prepared.style.display = "block";
                    delivered.style.display = "none";
                    closed.style.display = "none";
                }
                if (statuue == '"REJECTED"') {
                    accept.style.display = "none";
                    regict.style.display = "none";
                    prepared.style.display = "none";
                    delivered.style.display = "none";
                    closed.style.display = "block";
                }
                if (statuue == '"PREPARED"') {
                    accept.style.display = "none";
                    regict.style.display = "none";
                    prepared.style.display = "none";
                    delivered.style.display = "block";
                    closed.style.display = "none";
                }
                if (statuue == '"DELIVERD"') {
                    accept.style.display = "none";
                    regict.style.display = "none";
                    prepared.style.display = "none";
                    delivered.style.display = "none";
                    closed.style.display = "block";
                }
                if (statuue == '"ClOSED"') {
                    accept.style.display = "none";
                    regict.style.display = "none";
                    prepared.style.display = "none";
                    delivered.style.display = "none";
                    closed.style.display = "none";
                }

            }
        });
    </script> --}}
    {{-- <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script> --}}
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
