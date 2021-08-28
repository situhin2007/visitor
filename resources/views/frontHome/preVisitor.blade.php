{{--@extends('home_landing_page')--}}

{{--@section('home_content')--}}

{{--    <!--hero header-->--}}
{{--    <section class="pt-5 pt-md-8">--}}
{{--        <div class="container">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="col-8 offset-2">--}}
{{--                        <form>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="Mobile">Mobile</label>--}}
{{--                                <input type="email" class="form-control" placeholder="Enter mobile">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="Mobile">Select Category</label>--}}
{{--                                <select name="category_name" id="category_name"  class="form-control">--}}
{{--                                    <option value="">---Please Select----</option>--}}
{{--                                    <option value="patient">Patient</option>--}}
{{--                                    <option value="doctor">Doctor</option>--}}
{{--                                    <option value="management">Management</option>--}}
{{--                                    <option value="vendor">Vendor</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bangladesh Institute of Health Sciences Hospital</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('assets/backends/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/backends/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{asset('assets/frontend/logo/download.png')}}" alt="logo" class="brand-image" style="opacity: .8">
            </a>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('pre-visitor')}}" class="nav-link">Pre-Visitor</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('visitor-registration')}}" class="nav-link">Registration</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1> Bangladesh Institute of Health Sciences Hospital</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Pre-Visitor</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="Mobile">Mobile</label>
                                        <input type="email" class="form-control" placeholder="Enter mobile">
                                    </div>

                                    <div class="form-group">
                                        <label for="Mobile">Select Category</label>
                                        <select name="category_name" id="category_name"  class="form-control">
                                            <option value="">---Please Select----</option>
                                            <option value="patient">Patient</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="management">Management</option>
                                            <option value="vendor">Vendor</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="text-center"><strong>Copyright &copy; {{date('Y')}} <a href="javascript:void(0)">BIHS</a>.</strong> All rights reserved.</div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets/backends/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/backends/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/backends/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/backends/dist/js/demo.js')}}"></script>
</body>
</html>

