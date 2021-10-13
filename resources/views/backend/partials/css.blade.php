<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<title>Admin | Dashboard</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('assets/backends/plugins/fontawesome-free/css/all.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('assets/backends/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/backends/dist/css/adminlte.min.css') }}">

<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/backends/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/backends/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<!-- SweetAlert2 -->
<link rel="stylesheet"
    href="{{ asset('assets/backends/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/backends/plugins/toastr/toastr.min.css') }}">

@yield('css')
