@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add New Doctor</h3>
          <a href="{{ url('doctor/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All Doctors</a>

        </div>
        <!-- /.card-header -->
        @include('backend.includes.message')

        <form action="{{ url('doctor/store') }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                @if($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No.">
                  @if($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                  @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Department <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="department" placeholder="Enter Depertment">
                  @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                  @endif
                </div>
              </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label>Designation <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                  @if($errors->has('designation'))
                    <span class="text-danger">{{ $errors->first('designation') }}</span>
                  @endif
                </div>
              </div>

          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Store</button>
        </div>
    </form>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection


@section('js')

@endsection
