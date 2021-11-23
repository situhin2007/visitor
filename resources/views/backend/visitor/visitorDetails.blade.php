@extends('backend.master')


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Visitor Details Information</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-4">
                <h4> Visitor Information </h4>
                <label>Name</label>: {{ $visitorDetails->visitor_name }} <br/>
                <label>Mobile</label>: {{ $visitorDetails->visitor_mobile }} <br/>
                <label>Card No</label>: {{ $visitorDetails->card_no }} <br/>
                <label>Check In Time</label>: {{ date('h:i:s', strtotime($visitorDetails->check_in)) }} <br/>
                <label>Check Out Time</label>: {{ date('h:i:s', strtotime($visitorDetails->check_out)) }} <br/>
            </div>
            <div class="col-4">
                <h4> To Information</h4>
                <label>Category</label>: {{ $visitorDetails->category }} <br/>
                <label>Name</label>: {{ $visitorDetails->c_name }} <br/>
                <label>Mobile</label>: {{ $visitorDetails->c_mobile }} <br/>

                @if (isset($patientsInfo))
                    <label>Ward No</label>: {{ $patientsInfo->ward_no }} <br/>
                    <label>Cabin No</label>: {{ $patientsInfo->cabin_no }} <br/>
                    <label>Age</label>: {{ $patientsInfo->age }} <br/>
                    <label>Admission Date</label>: {{ $patientsInfo->admission_date }} <br/>
                @endif

            </div>

            <div class="col-4">
                <h4> Issued Information</h4>
                <label>Issued By</label>: {{ $visitorDetails->issue_get_current_pc_user }} <br/>
                <label>Received By</label>: {{ $visitorDetails->return_get_current_pc_user }}
            </div>

          </div>
        </div>
        {{-- <div class="card-footer">
            <button type="submit" class="btn btn-success">Back</button>
        </div> --}}
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
