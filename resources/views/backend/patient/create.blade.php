@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add New Patient</h3>
          <a href="{{ url('patient/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All Patient</a>

        </div>
        <!-- /.card-header -->

        <form action="{{ url('patient/store') }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Ward No</label>
                  <input type="text" class="form-control" name="ward_no">
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Cabin No</label>
                  <input type="text" class="form-control" name="cabin_no">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Seat No</label>
                  <input type="text" class="form-control" name="seat_no">
                </div>
              </div>

          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection


@section('js')

@endsection
