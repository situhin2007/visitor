@extends('backend.master')


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection


@section('content')

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: #027ca0; color: white">
                      <h3 class="card-title">Filter</h3>
                    </div>
                    <div class="card-body">
                      <form role="form" action="" method="post">
                          @csrf
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Name</label>
                              <div class="col-md-12 col-sm-12">
                                <select name="name" class="form-control select2bs4">
                                    <option value="-1">select</option>
                                    <option value="-1">select</option>
                                    <option value="-1">select</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-5">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Mobile</label>
                              <div class="col-md-12 col-sm-12">
                                <select name="name" class="form-control select2bs4">
                                    <option value="-1">select</option>
                                    <option value="-1">select</option>
                                    <option value="-1">select</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Age</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="text" class="form-control" name="age">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Admission From Date</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="date" class="form-control" name="age">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Admission To Date</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="date" class="form-control" name="age">
                              </div>
                            </div>
                          </div>

                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" id="generate" class="btn" style="background: #027ca0; color: white">Search</button>
                    </div>
                  </form>
                  </div>


                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Patients Information</h5>
                            </div>
                            <div class="card-body">
                                <table id="patientTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                      <th class="text-center">Name</th>
                                      <th class="text-center">Mobile</th>
                                      <th class="text-center">Age</th>
                                      <th class="text-center">Admission Date</th>
                                      <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Test</td>
                                            <td>018237478234</td>
                                            <td>25</td>
                                            <td>ss35353</td>
                                            <td>
                                                <a href="" class="btn btn-info">Get Pass</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: #027ca0; color: white">
                      <h3 class="card-title">Today's</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title m-0">Issue</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="issueCardTable" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                              <th class="text-center">Name</th>
                                              <th class="text-center">Mobile</th>
                                              <th class="text-center">Ref.</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Return</h5>
                            </div>
                            <div class="card-body">
                                <table id="returnCardTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                      <th class="text-center">Name</th>
                                      <th class="text-center">Mobile</th>
                                      <th class="text-center">Ref.</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>


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
            $("#visited_date").datepicker({
                dateFormat:'Y-m-d',
                startDate: new Date()
            });
        });

        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        $(function () {
          $('#patientTable').DataTable({
        //    scrollX:'true',
        //    scrollY:'true'
          });
        });

        $(function () {
          $('#issueCardTable').DataTable({
        //    scrollX:'true',
        //    scrollY:'true'
          });
        });

        $(function () {
          $('#returnCardTable').DataTable({
        //    scrollX:'true',
        //    scrollY:'true'
          });
        });

    </script>
@endsection

