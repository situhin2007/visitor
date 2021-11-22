<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bangladesh Institute of Health Sciences Hospital</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backends/dist/css/adminlte.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('assets/frontend/logo/download.png') }}" alt="logo" class="brand-image"
                        style="opacity: .8">
                </a>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item">
                            <a href="{{ url('pre-visitor') }}" class="nav-link">Pre-Visitor</a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ url('visitor-registration') }}" class="nav-link">Registration</a>
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
                                    <h5 class="card-title m-0">Visitor Registration</h5>
                                </div>
                                @include('backend.includes.message')

                                <form action="{{ route('preVisitorRegistrationStore') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter name">
                                                    @if ($errors->has('name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mobile<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile"
                                                        placeholder="Enter mobile">
                                                    @if ($errors->has('mobile'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('mobile') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Category<span class="text-danger">*</span></label>
                                                    <select class="form-control select2bs4" id="category"
                                                        name="category">
                                                        <option value="">---Please Select----</option>
                                                        <option value="patient">Patient</option>
                                                        <option value="doctor">Doctor</option>
                                                        <option value="management">Management</option>
                                                        <option value="vendor">Vendor</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="visited_date"
                                                        placeholder="Enter visited date">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Check In<span class="text-danger">*</span></label>
                                                    <input type="time" class="form-control" name="check_in">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Check Out<span class="text-danger">*</span></label>
                                                    <input type="time" class="form-control" name="check_out">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description<span class="text-danger">*</span></label>
                                                    <textarea name="description" class="form-control" id="" cols=5
                                                        rows="5"
                                                        placeholder="Whats your business here?/ Whom do you want to meet?/ Please describe specific detail's here."></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
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
            <div class="text-center"><strong>Copyright &copy; {{ date('Y') }} <a
                        href="javascript:void(0)">BIHS</a>.</strong> All rights reserved.</div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/backends/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/backends/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/backends/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/backends/dist/js/demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(function() {
            $("#visited_date").datepicker({
                dateFormat: 'Y-m-d',
                startDate: new Date()
            });
        });

        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>
</body>

</html>
