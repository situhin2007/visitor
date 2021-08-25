@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit Doctor</h3>
          <a href="{{ url('doctor/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All Doctors</a>

        </div>
        <!-- /.card-header -->
        @include('backend.includes.message')

        <form action="{{ url('doctor/update', $doctor->id) }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ $doctor->name }}">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile"  value="{{ $doctor->mobile }}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Department</label>
                  <input type="text" class="form-control" name="department"  value="{{ $doctor->department }}">
                </div>
              </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control" name="designation"  value="{{ $doctor->designation }}">
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
