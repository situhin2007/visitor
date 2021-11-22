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
              <h3 class="card-title">All Visitor History List</h3>
            </div>
            <!-- /.card-header -->

              @include('backend.includes.message')

            <div class="card-body">
              <table id="visitor" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <tr class="text-sm">
                        <th>Sl No</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Visited Date</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Card No</th>
                        <th>Issued By</th>
                        <th>Return By </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                    @foreach ($visitorHistoryData as $all_visitor_value)
                    <tr class="text-sm">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $all_visitor_value->category }}</td>
                        <td>{{ $all_visitor_value->visitor_name }}</td>
                        <td>{{ $all_visitor_value->visitor_mobile }}</td>
                        <td>{{ $all_visitor_value->visited_date }}</td>
                        <td>{{ $all_visitor_value->check_in }}</td>
                        <td>{{ $all_visitor_value->check_out }}</td>
                        <td>{{ $all_visitor_value->card_no }}</td>
                        <td>{{ $all_visitor_value->issue_get_current_pc_user }}</td>
                        <td>{{ $all_visitor_value->return_get_current_pc_user }}</td>
                        <td>
                            @php
                                $nowTime = date('H:i:s', time());
                            @endphp
                            @if ($all_visitor_value->status == 1)
                                <span class="badge badge-danger">Visited</span>
                            @else
                                @if ($nowTime <= $all_visitor_value->check_out)
                                    <span class="badge badge-danger">Active</span>
                                @else
                                    <span class="badge badge-success">Active</span>
                                @endif
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('visit.details',$all_visitor_value->id) }}"> <i class="fa fa-eye btn btn-sm btn-info"></i> </a>
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
           scrollY:'50vh'
          });
        });
      </script>

@endsection
