@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit Patient</h3>
          <a href="{{ url('patient/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All Patient</a>

        </div>
        <!-- /.card-header -->

        @include('backend.includes.message')

        <form action="{{ url('patient/update', $patient->id) }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ $patient->name }}">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile" value="{{ $patient->mobile }}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Ward No</label>
                  <input type="text" class="form-control" name="ward_no" value="{{ $patient->ward_no }}">
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Cabin No</label>
                  <input type="text" class="form-control" name="cabin_no" value="{{ $patient->cabin_no }}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Seat No</label>
                  <input type="text" class="form-control" name="seat_no" value="{{ $patient->seat_no }}">
                </div>
              </div>

          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection


@section('js')

@endsection
