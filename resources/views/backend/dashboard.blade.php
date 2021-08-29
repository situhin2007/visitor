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
                {{ $total_visitor }}
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

      <!-- serachbox -->
      <div class="row">
        <div class="col-12 ">
          <div class="card">
            <div class="card-header text-center">
                <h5>Search-Box</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 btn-group">
                    <div class="form-group">
                      <label>Reference Category<span class="text-danger">*</span></label>
                      <select class="form-control select2bs4" id="reference_category" name="reference_category">
                          <option value="">---Please Select----</option>
                          <option value="patient">Patient</option>
                          <option value="doctor">Doctor</option>
                          <option value="management">Management</option>
                          <option value="vendor">Vendor</option>
                      </select>
                  </div>
                  <div class="col-2 pl-3 md-4 sm-3">
                    <label>Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                  </div>
                  <div class="col-2 md-4 sm-3">
                    <label>Mobile<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Mobile">
                  </div>
                  <div class="col-2 md-4 sm-3">
                    <label>Age<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="name" placeholder="Age">
                  </div>
                  <div class="col-md-2 md-4 sm-3">
                  <div class="form-group">
                  <label>Admission Date<span class="text-danger">*</span></label>
                  <input type="text" id="visited_date" class="form-control" name="visited_date" placeholder="Enter visited date">
                </div>
                </div>

                <div class="col-md-2 pt-4 md-4 sm-3">
                <button type="button" class="btn btn-outline-primary float-right">Search</button>
                  </div>
                    </div>
                    </div>
                    </div>
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

<script>
        $(function () {
            $("#visited_date").datepicker({
                dateFormat:'Y-m-d',
                startDate: new Date()
            });
        });

</script>