@extends('backend.master')


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
     <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
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
                                <select name="patient_name" id="patient_name" class="form-control select2bs4">
                                    <option>Select</option>
                                    @foreach ($patients as $patientsName)
                                        <option value="{{ $patientsName->name }}">{{ $patientsName->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Mobile</label>
                              <div class="col-md-12 col-sm-12">
                                <select name="patient_mobile" id="patient_mobile" class="form-control select2bs4">
                                    <option >Select</option>
                                    @foreach ($patients as $patientsMobile)
                                        <option value="{{ $patientsMobile->mobile }}">{{ $patientsMobile->mobile }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Age-From</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="number" id="from_age" class="form-control" name="from_age">
                              </div>
                            </div>
                          </div>
                            <div class="col-sm-2">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Age-To</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="number" id="to_age" class="form-control" name="to_age">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Admission From Date</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="date" id="from_admission_date" class="form-control" name="from_admission_date">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>&nbsp;&nbsp; Admission To Date</label>
                              <div class="col-md-12 col-sm-12">
                                <input type="date" class="form-control" id="to_admission_date" name="to_admission_date">
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
                                      <th class="text-center">Sl No.</th>
                                      <th class="text-center">Name</th>
                                      <th class="text-center">Mobile</th>
                                      <th class="text-center">Ref-No</th>
                                      <th class="text-center">Age</th>
                                      <th class="text-center">Admission Date</th>
                                      <th class="text-center">Action</th>
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

        <div class="col-md-12">
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
  </section>



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

        // $(function () {
        //   $('#patientTable').DataTable({
        // //    scrollX:'true',
        // //    scrollY:'true'
        //   });
        // });

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

<script>
    $("#generate").on("click",function() {

        $('#generate').attr('disabled', true);
        $('#generate').addClass('loading-bar');

        var patient_mobile = $("#patient_mobile").val();
        var patient_name = $("#patient_name").val();

        var from_age = $("#from_age").val();
        var to_age = $("#to_age").val();

        var from_admission_date = $("#from_admission_date").val();
        var to_admission_date = $("#to_admission_date").val();

        $("#patientTable tbody").empty();
        $.ajax({
            url:"{{ url('/patient-data-show-filter') }}/",
            type:"GET",
            dataType:"json",
            data:{
                patient_mobile:patient_mobile,
                patient_name:patient_name,

                from_age:from_age,
                to_age:to_age,

                from_admission_date:from_admission_date,
                to_admission_date:to_admission_date,
                },
            success:function(data){
                $('#generate').attr('disabled', false);
                $('#generate').removeClass('loading-bar');
                console.log(data);
                $("#patientTable tbody").empty();
                if (data) {
                    var i = 1;
                    $.each(data,function(index,element){
                        $("#patientTable").append("<tr class='text-center'><td>" + i++ + "</td class='text-center'><td>" + element.name + "</td class='text-center'><td>" + element.mobile + "</td class='text-center'><td>" + element.reference_no + "</td class='text-center'><td>" + element.age + "</td class='text-center'><td>" + element.admission_date + "</td class='text-center'><td>" + "<a href='{{ url('get-pass-patient/') }}' class='btn btn-info'>Get Pass</a>" + "</td></tr>")
                    })
                }
            }
        });
    });
</script>

@endsection

