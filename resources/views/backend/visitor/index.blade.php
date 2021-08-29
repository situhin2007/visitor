@extends('backend.master')


@section('css')

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
              <h3 class="card-title">All Visitor List</h3>
              <a href="{{ url('visitor/create') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plus"></i> Add New</a>
            </div>
            <!-- /.card-header -->

              @include('backend.includes.message')

            <div class="card-body">
              <table id="visitor" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">Sl No</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Mobile</th>
                  <th class="text-center">Reference ID</th>
                  <th class="text-center">Reference Category</th>
                  <th class="text-center">Reference Name</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Check In</th>
                  <th class="text-center">Check Out</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($all_visitors as $all_visitor_value)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $all_visitor_value->name }}</td>
                            <td class="text-center">{{ $all_visitor_value->mobile }}</td>
                            <td class="text-center">{{ $all_visitor_value->reference_id }}</td>
                            <td class="text-center">{{ $all_visitor_value->reference_category }}</td>
                            <td class="text-center">{{ $all_visitor_value->visited_ref_name }}</td>
                            <td class="text-center">{{ $all_visitor_value->visited_date }}</td>
                            <td class="text-center">{{ $all_visitor_value->check_in }}</td>
                            <td class="text-center">{{ $all_visitor_value->check_out }}</td>
                            <td class="text-center">
                                <a href="{{url('visitor/edit',$all_visitor_value->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
{{--                                <a href="#" class="btn btn-danger btn-sm"> <i class="fa fa-trash-alt"></i> </a>--}}
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
          $('#visitor').DataTable({
           scrollX:'true',
           scrollY:'true'
          });
        });
      </script>

@endsection
