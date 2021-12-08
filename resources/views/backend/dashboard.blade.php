@extends('backend.master')


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/backends/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/backends/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/backends/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background: #027ca0; color: white">
                                <h3 class="card-title text-sm">Filter</h3>
                            </div>
                            <div class="card-body">
                                <form role="form" action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="text-sm">&nbsp;&nbsp; Name</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <select name="patient_name" id="patient_name"
                                                        class="form-control text-sm select2bs4">
                                                        <option>Select</option>
                                                        @foreach ($patients as $patientsName)
                                                            <option value="{{ $patientsName->name }}">
                                                                {{ $patientsName->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="text-sm">&nbsp;&nbsp; Mobile</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <select name="patient_mobile" id="patient_mobile"
                                                        class="form-control text-sm select2bs4">
                                                        <option>Select</option>
                                                        @foreach ($patients as $patientsMobile)
                                                            <option value="{{ $patientsMobile->mobile }}">
                                                                {{ $patientsMobile->mobile }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="text-sm">&nbsp;&nbsp; Age-From</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="number" id="from_age" class="form-control text-sm"
                                                        name="from_age">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="text-sm">&nbsp;&nbsp; Age-To</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="number" id="to_age" class="form-control text-sm" name="to_age">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="text-sm">&nbsp;&nbsp; Admission From Date</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="date" id="from_admission_date" class="form-control text-sm"
                                                        name="from_admission_date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="text-sm">&nbsp;&nbsp; Admission To Date</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="date" class="form-control text-sm" id="to_admission_date"
                                                        name="to_admission_date">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="generate" class="btn text-sm"
                                    style="background: #027ca0; color: white">Search</button>
                            </div>
                            </form>
                        </div>


                        <div class="row">
                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card card-primary">
                                    <div class="card-header" style="background: #027ca0; color: white">
                                        <h5 class="card-title m-0 text-sm">Patients Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="patientTable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-sm">Sl No.</th>
                                                    <th class="text-center text-sm">Name</th>
                                                    <th class="text-center text-sm">Mobile</th>
                                                    <th class="text-center text-sm">Ref-No</th>
                                                    <th class="text-center text-sm">Age</th>
                                                    <th class="text-center text-sm">Admission Date</th>
                                                    <th class="text-center text-sm">Action</th>
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
                            <h3 class="card-title text-sm">Issued Get-Pass(Today's)</h3>
                        </div>

                        @include('backend.includes.message')

                        <div class="card-body">
                            <table id="issueCardTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-sm">
                                        <th>Sl No</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Visited Date</th>
                                        <th>Check-In</th>
                                        <th>Check-Out</th>
                                        <th>Card No</th>
                                        <th> Issued By </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getPassIssueData as $getPassData)

                                        <tr class="text-sm">
                                            @php
                                                $nowTime = date('H:i:s', time());
                                            @endphp

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $getPassData->category }}</td>
                                            <td>{{ $getPassData->visitor_name }}</td>
                                            <td>{{ $getPassData->visitor_mobile }}</td>
                                            <td>{{ $getPassData->visited_date }}</td>
                                            <td>{{ date('h:i:s', strtotime($getPassData->check_in)) }}</td>
                                            <td>{{ date('h:i:s', strtotime($getPassData->check_out)) }}</td>
                                            <td>{{ $getPassData->card_no }}</td>
                                            <td>{{ $getPassData->issue_get_current_pc_user }}</td>
                                            <td>

                                                @if ($nowTime <= $getPassData->check_out)
                                                    @if ($getPassData->status == 0)
                                                        <span class="badge badge-danger">Active</span>
                                                    @endif
                                                @else
                                                    @if ($getPassData->status == 0)
                                                        <span class="badge badge-success">Active</span>
                                                    @endif
                                                @endif

                                            </td>

                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('getPassChangeStatus',$getPassData->id) }}"><i class="fa fa-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>

                            <div class="card-header" style="background: #027ca0; color: white">
                                <h3 class="card-title text-sm">Returned Get-Pass(Today's)</h3>
                            </div>
                            <br>

                            <table id="returnCardTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-sm">
                                        <th>Sl No</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Visited Date</th>
                                        <th>Check-In</th>
                                        <th>Check-Out</th>
                                        <th>Card No</th>
                                        <th> Received By </th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getPassIssueDataVisited as $getPassDataVisited)
                                        <tr class="text-sm">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $getPassDataVisited->category }}</td>
                                            <td>{{ $getPassDataVisited->visitor_name }}</td>
                                            <td>{{ $getPassDataVisited->visitor_mobile }}</td>
                                            <td>{{ $getPassDataVisited->visited_date }}</td>
                                            <td>{{ $getPassDataVisited->check_in }}</td>
                                            <td>{{ $getPassDataVisited->check_out }}</td>
                                            <td>{{ $getPassDataVisited->card_no }}</td>
                                            <td>{{ $getPassDataVisited->return_get_current_pc_user }}</td>
                                            <td>
                                                @if ($getPassDataVisited->status == 1)
                                                    <span class="badge badge-danger">Visited</span>
                                                @else

                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade patientVisitorModal" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Visitor Get Pass</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-secondary m-3">
                            <div class="card-header">
                                <h3 class="card-title">Patient Info:</h3>
                            </div>
                        </div>
                        {{-- <form id="patientVisitorForm"> --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" disabled id="c_name" name="c_name"
                                            placeholder="Enter name">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" disabled id="c_mobile" name="c_mobile"
                                            placeholder="Enter mobile">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-secondary m-3">
                            <div class="card-header">
                                <h3 class="card-title">Visitor Info:</h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="category" id="category"
                                            value="patient">
                                        <label>Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="visitor_name" id="visitor_name"
                                            placeholder="Enter name">
                                            <span class="text-danger" id="visitorNameError"></span>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="visitor_mobile" id="visitor_mobile"
                                            placeholder="Enter mobile">
                                            <span class="text-danger" id="visitorMobileError"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Card<span class="text-danger">*</span></label>
                                        <select name="card_no" id="card_no" class="form-control select2bs4">
                                            <option value="">select</option>
                                            @foreach ($idCardInfo as $idCard)
                                                <option value="{{ $idCard->id_card_no }}">{{ $idCard->id_card_no }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="idCardNoError"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Check In<span class="text-danger">*</span></label>
                                        <input type="time" class="form-control" name="check_in" id="check_in">
                                        <span class="text-danger" id="checkInError"></span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Check Out<span class="text-danger">*</span></label>
                                        <input type="time" class="form-control" name="check_out" id="check_out">
                                        <span class="text-danger" id="checkOutError"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="submitPatientButton" class="btn btn-primary">Save changes</button>
                    </div>
                    {{-- </form> --}}
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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
        // const Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top-end',
        //     showConfirmButton: false,
        //     timer: 3000
        // });



        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

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

        // $(function () {
        //   $('#patientTable').DataTable({
        // //    scrollX:'true',
        // //    scrollY:'true'
        //   });
        // });

        $(function() {
            $('#issueCardTable').DataTable({
                //    scrollX:'true',
                //    scrollY:'true'
            });
        });

        $(function() {
            $('#returnCardTable').DataTable({
                //    scrollX:'true',
                //    scrollY:'true'
            });
        });
    </script>

    <script>
        function getPassVisitor(id) {

            $.ajax({
                type: "GET",
                url: "{{ route('getPassPatient') }}",
                data: {
                    id: id
                },

                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $('.patientVisitorModal').modal('show');
                    $('#c_name').val(res.name);
                    $('#c_mobile').val(res.mobile);
                }
            });
        }

        // update or store the data
        $('#submitPatientButton').on("click", function() {

            var c_name = $('#c_name').val();
            var c_mobile = $('#c_mobile').val();

            var visitor_name = $('#visitor_name').val();
            var visitor_mobile = $('#visitor_mobile').val();
            var card_no = $('#card_no').val();
            var category = $('#category').val();

            var check_in = $('#check_in').val();
            var check_out = $('#check_out').val();

            $.ajax({
                url: "{{ route('getPassDataStore') }}",
                type: "GET",
                dataType: "json",
                data: {
                    c_name: c_name,
                    c_mobile: c_mobile,
                    visitor_name: visitor_name,
                    visitor_mobile: visitor_mobile,
                    card_no: card_no,
                    category: category,
                    check_out: check_out,
                    check_in: check_in
                },
                success: (data) => {
                    console.log(data);
                    alert('Visitor get pass successfully saved.');
                    // Toast.fire({
                    //     type: 'success',
                    //     title: 'Visitor get pass successfully saved.'
                    // })

                    $('.patientVisitorModal').modal('hide');

                    // var oTable = $('#brand').dataTable();
                    // oTable.fnDraw(false);

                    $('#c_name').val('');
                    $('#c_mobile').val('');

                    $('#visitor_name').val('');
                    $('#visitor_mobile').val('');
                    $('#card_no').val('');
                    $('#category').val('');

                    window.location.reload();
                },
                error: function(data) {
                    alert('Operation Failed');
                    var response = data.responseJSON.errors;

                    $('#visitorNameError').text(response.visitor_name[0]);
                    $('#visitorMobileError').text(response.visitor_mobile[0]);
                    $('#idCardNoError').text(response.card_no[0]);
                    $('#checkInError').text(response.check_in[0]);
                    $('#checkOutError').text(response.check_out[0]);
                }
            });
        });


        $("#generate").on("click", function() {

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
                url: "{{ url('/patient-data-show-filter') }}/",
                type: "GET",
                dataType: "json",
                data: {
                    patient_mobile: patient_mobile,
                    patient_name: patient_name,

                    from_age: from_age,
                    to_age: to_age,

                    from_admission_date: from_admission_date,
                    to_admission_date: to_admission_date,
                },
                success: function(data) {
                    $('#generate').attr('disabled', false);
                    $('#generate').removeClass('loading-bar');
                    console.log(data);
                    $("#patientTable tbody").empty();
                    if (data) {
                        var i = 1;
                        $.each(data, function(index, element) {
                            $("#patientTable").append("<tr class='text-center'><td>" + i++ +
                                "</td class='text-center'><td>" + element.name +
                                "</td class='text-center'><td>" + element.mobile +
                                "</td class='text-center'><td>" + element.reference_no +
                                "</td class='text-center'><td>" + element.age +
                                "</td class='text-center'><td>" + element.admission_date +
                                "</td class='text-center'><td>" +
                                "<button type='button' onclick='getPassVisitor(" + element
                                .id + ")' class='btn btn-info'>Get Pass</button>" +
                                "</td></tr>")
                        })
                    }
                }
            });
        });
    </script>

@endsection
