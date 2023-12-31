<!DOCTYPE  html >
 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Font: Source Sans Pro -->
    @include('DashboardOwnerResturant.Layout.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed" id="content">

    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src={{ asset('assets/img/AdminLTELogo.png') }} alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        <!-- Navbar -->

        @include('DashboardOwnerResturant.Layout.main-headerbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('DashboardOwnerResturant.Layout.main-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> control of<b>
                                    {{ Auth::guard('owner')->user()->resturant->resturant_name }}</b> </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">@yield('title-page2')</li>
                                <li class="breadcrumb-item"><a href="#">@yield('title-page')</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Main content -->
                    @yield('content')
                    <!-- /.content -->
                </div>
            </section>
        </div>
        @include('DashboardOwnerResturant.Layout.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('DashboardOwnerResturant.Layout.scripts')
</body>

</html>
