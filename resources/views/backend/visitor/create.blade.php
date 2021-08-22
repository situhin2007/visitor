@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add New Visitor</h3>
          <a href="{{ url('visitor/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All Visitors</a>

        </div>
        <!-- /.card-header -->

        <form action="{{ url('visitor/store') }}" method="POST">
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
                  <label>Reference ID</label>
                  <input type="text" class="form-control" name="reference_id">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control" name="visited_date">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Check In</label>
                  <input type="time" class="form-control" name="check_in">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Check Out</label>
                  <input type="time" class="form-control" name="check_out">
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
