@extends('backend.master')


@section('css')

    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/backends/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/backends/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Pre Visitor Registration List</h3>
                        </div>

                        <div class="card-body">
                            <table id="preVisitorRegistrationList" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getAllPreVisitorList as $preVisitor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $preVisitor->name }}</td>
                                            <td>{{ $preVisitor->mobile }}</td>
                                            <td>{{ $preVisitor->category }}</td>
                                            <td>{{ $preVisitor->visited_date }}</td>
                                            <td>{{ $preVisitor->check_in }}</td>
                                            <td>{{ $preVisitor->check_out }}</td>
                                            <td>{{ $preVisitor->description }}</td>
                                            <td>
                                                 <a href="#" class="btn btn-info btn-sm" > <i class="fas fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection


@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/backends/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/backends/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $('#preVisitorRegistrationList').DataTable({
                // scrollX:'true',
                // scrollY:'true'
            });
        });
    </script>

@endsection
