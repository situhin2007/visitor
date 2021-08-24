@extends('backend.master')

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> <a href="{{url('visitor/index')}}"> Total Visitor </a> </span>
              <span class="info-box-number">
                10
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Remaining ID</span>
              <span class="info-box-number">60</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total ID Given</span>
              <span class="info-box-number">340</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h5>Quick Access</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <a href="" class="btn btn-info"> Patient</a>
                        <a href="" class="btn btn-info ml-3"> Doctors</a>
                        <a href=""class="btn btn-info ml-3"> Managment</a>
                        <a href=""class="btn btn-info ml-3">Vendor</a>
                    </div>
                    <div class="col-4">
                        <a href="{{ url('visitor/index') }}"class="btn btn-success float-right">Visitor List</a>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
@endsection
