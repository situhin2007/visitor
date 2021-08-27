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
          <h3 class="card-title">Add New Visitor</h3>
          <a href="{{ url('visitor/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All Visitors</a>

        </div>
        <!-- /.card-header -->

        <form action="{{ url('visitor/store') }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                <label>Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
              </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                  <label>Mobile<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="mobile" placeholder="Enter mobile">
                </div>
              </div>

              <div class="col-md-3">
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
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Reference No<span class="text-danger">*</span></label>
                  <select class="form-control select2bs4" id="reference_id" name="reference_id">

                  </select>
                </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                      <label>Reference Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="visited_ref_name" readonly id="visited_ref_name">
                  </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Date<span class="text-danger">*</span></label>
                  <input type="text" id="visited_date" class="form-control" name="visited_date" placeholder="Enter visited date">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Check In<span class="text-danger">*</span></label>
                  <input type="time" class="form-control" name="check_in">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>Check Out<span class="text-danger">*</span></label>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(function () {
            $("#visited_date").datepicker({ dateFormat:'yy-mm-dd' });
        });

        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        $("#reference_category").change("change", function() {
            // e.preventDefault();
            var reference_category = $("#reference_category").val();
            var reference_id = $("#reference_id").val();
            var visited_ref_name = $("#visited_ref_name").val();
            console.log(reference_category);
            var token = "{{ csrf_token() }}";
            var url_data = "{{ url('/reference_category_select_data') }}";
            $.ajax({
                method: "GET",
                url: url_data,
                dataType: "json",
                data: {
                    _token: token,
                    reference_category: reference_category,
                },
                success: function(data) {
                    // console.log(data[0].name);
                    if(data){
                        $('#reference_id').empty();
                        $('#reference_id').focus;
                        $('#reference_id').append('<option value="">-- Please select--</option>');
                        $.each(data, function(key, value){
                            $('select[name="reference_id"]').append('<option value="'+ value.reference_no +'">' + value.reference_no+ '</option>');
                        });
                    }else{
                        $('#reference_id').empty();
                    }
                },
                error:function (data) {
                    console.log(data);
                }
            });
        });

    </script>
@endsection
