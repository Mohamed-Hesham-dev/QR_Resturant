<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Font: Source Sans Pro -->
    @include('Dashboard.Layout.head')
</head>


<body class="hold-transition register-page">
    @if (session('error'))
        <div class="alert alert-danger" id="danger-alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="alert" id="danger-alert11">



        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Login</p>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif
                <form action="{{ url('owner/login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" type="password" name="password"
                            placeholder="Password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                        </div>
                        <!-- /.col -->

                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('asset/dist/js/adminlte.min.js') }}"></script>
    <script>
        setTimeout(function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
</body>

</html>
