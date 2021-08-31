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
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header" style="background: #027ca0; color: white">
                      <h3 class="card-title">Filter</h3>
                    </div>
                    <div class="card-body">
                      <form role="form" action="" method="post">
                          @csrf
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Name</label>
                              <div class="col-md-12 col-sm-12">
                                <select name="name" class="form-control select2bs4">
                                    <option value="-1">Select</option>
                                    <option value="-1">select</option>
                                    <option value="-1">select</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Mobile</label>
                              <div class="col-md-12 col-sm-12">
                                <select name="name" class="form-control select2bs4">
                                    <option value="-1">Select</option>
                                    <option value="-1">select</option>
                                    <option value="-1">select</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Age-From</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="number" class="form-control" name="age">
                              </div>
                            </div>
                          </div>
                            <div class="col-sm-2">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Age-To</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="number" class="form-control" name="age">
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
                        <div class="card card-primary">
                            <div class="card-header" style="background: #027ca0; color: white">
                                <h5 class="card-title m-0">Patients Information</h5>
                            </div>
                            <div class="card-body">
                                <table id="patientTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                      <th class="text-center">Sl.</th>
                                      <th class="text-center">Name</th>
                                      <th class="text-center">Ref-No</th>
                                      <th class="text-center">Age</th>
                                      <th class="text-center">Admission Date</th>
                                      <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Rahim Mia</td>
                                            <td>4945</td>
                                            <td>35</td>
                                            <td>26-08-2021</td>
                                            <td>
                                            <a href="" class="btn btn-info btn-sm">Get Pass</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>02</td>
                                            <td>Nirob</td>
                                            <td>2720</td>
                                            <td>22</td>
                                            <td>27-08-2021</td>
                                            <td>
                                            <a href="" class="btn btn-info btn-sm">Get Pass</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>03</td>
                                            <td>Hazi</td>
                                            <td>5666</td>
                                            <td>70</td>
                                            <td>28-08-2021</td>
                                            <td>
                                            <a href="" class="btn btn-info btn-sm">Get Pass</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>04</td>
                                            <td>Nargis</td>
                                            <td>2254</td>
                                            <td>65</td>
                                            <td>29-08-2021</td>
                                            <td>
                                            <a href="" class="btn btn-info btn-sm">Get Pass</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>05</td>
                                            <td>Bilkis</td>
                                            <td>5689</td>
                                            <td>54</td>
                                            <td>30-08-2021</td>
                                            <td>
                                            <a href="" class="btn btn-info btn-sm">Get Pass</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Right Side -->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header" style="background: #027ca0; color: white">
                      <h3 class="card-title">Today's</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card card-primary">
                                    <div class="card-header" style="background: #027ca0; color: white">
                                        <h5 class="card-title m-0">Issued Get-Pass</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="issueCardTable" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                              <th class="text-center">Sl.</th>
                                              <th class="text-center">Category</th>
                                              <th class="text-center">Name</th>
                                              <th class="text-center">Mobile</th>
                                              <th class="text-center">Ref-No.</th>
                                              <th class="text-center">Check-In</th>
                                              <th class="text-center">Check-Out</th>
                                              
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <td>01</td>
                                            <td>Patient</td>
                                            <td>Shakil</td>
                                            <td>0182546951</td>
                                            <td>5689</td>
                                            <td>09:00 AM</td>
                                            <td>11:00 AM</td>
                                            
                                            </tr>
                                            <tr>
                                            <td>02</td>
                                            <td>Patient</td>
                                            <td>Anik</td>
                                            <td>0195321011</td>
                                            <td>2254</td>
                                            <td>11:30 AM</td>
                                            <td>01:00 PM</td>
                                            
                                            </tr>
                                            <tr>
                                            <td>03</td>
                                            <td>Doctor</td>
                                            <td>Razib</td>
                                            <td>01752452521</td>
                                            <td>2426</td>
                                            <td>09:30 AM</td>
                                            <td>11:00 AM</td>
                                            
                                            </tr>
                                            <tr>
                                            <td>04</td>
                                            <td>Patient</td>
                                            <td>Kalam</td>
                                            <td>01824224241</td>
                                            <td>5666</td>
                                            <td>10:00 AM</td>
                                            <td>12:00 PM</td>
                                            
                                            </tr>
                                            <tr>
                                            <td>05</td>
                                            <td>Management</td> 
                                            <td>Alif</td>
                                            <td>01925445241</td>
                                            <td>2720</td>
                                            <td>10:30 AM</td>
                                            <td>01:00 PM</td>
                                            
                                            </tr>
                                            <tr>
                                            <td>06</td>
                                            <td>Vendor</td>
                                            <td>Shamim</td>
                                            <td>0172546251</td>
                                            <td>4945</td>
                                            <td>11:45 AM</td>
                                            <td>02:00 PM</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header" style="background: #027ca0; color: white">
                                <h5 class="card-title m-0">Returned Get-Pass</h5>
                            </div>
                            <div class="card-body">
                                <table id="returnCardTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                      <th class="text-center">Sl.</th>
                                              <th class="text-center">Category</th>
                                              <th class="text-center">Name</th>
                                              <th class="text-center">Mobile</th>
                                              <th class="text-center">Ref-No.</th>
                                              <th class="text-center">Check-In</th>
                                              <th class="text-center">Check-Out</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <td>01</td>
                                            <td>Vendor</td>
                                            <td>Shamim</td>
                                            <td>0172546251</td>
                                            <td>4945</td>
                                            <td>11:45 AM</td>
                                            <td>02:00 PM</td>
                                            </tr>
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

