@extends('backend.master')


@section('css')
     <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Patient List</h3>
              <a href="{{ url('patient/create') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plus"></i> Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl No </th>
                  <th>Name </th>
                  <th>Mobile </th>
                  <th>Ward No </th>
                  <th>Cabin No </th>
                  <th>Seat No </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient_value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> {{ $patient_value->name }}</td>
                            <td> {{ $patient_value->mobile }}</td>
                            <td> {{ $patient_value->ward_no }}</td>
                            <td> {{ $patient_value->cabin_no }}</td>
                            <td> {{ $patient_value->seat_no }}</td>
                             <td>
                                <a href="#" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                                <a href="#" class="btn btn-danger btn-sm"> <i class="fa fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                    @endforeach

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
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
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
      </script>

@endsection
