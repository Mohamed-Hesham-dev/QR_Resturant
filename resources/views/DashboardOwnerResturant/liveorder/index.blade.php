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
                        <div class="col-12">
                            ORDER 1
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>
                        <div class="col-12">
                            ORDER 2
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>
                        <div class="col-12">
                            ORDER 3
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>

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
                        <div class="col-12">
                            ORDER 1
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>
                        <div class="col-12">
                            ORDER 2
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>
                        <div class="col-12">
                            ORDER 3
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>

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
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            ORDER 1
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>
                        <div class="col-12">
                            ORDER 2
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>
                        <div class="col-12">
                            ORDER 3
                            <span class="right badge badge-primary">details</span>
                            <hr>
                        </div>

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
