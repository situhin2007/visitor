@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add New</h3>
          <a href="{{ url('id_card_generate/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All ID Number</a>

        </div>
        <!-- /.card-header -->
        @include('backend.includes.message')

        <form action="{{ url('id_card_generate/store') }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>ID Number <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="id_card_no" placeholder="Enter New ID No. ">
                @if($errors->has('id_card_no'))
                    <span class="text-danger">{{ $errors->first('id_card_no') }}</span>
                @endif
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Serial Number <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="serial_no" placeholder="Enter Serial No. (ex: chip no.)">
                @if($errors->has('serial_no'))
                    <span class="text-danger">{{ $errors->first('serial_no') }}</span>
                @endif
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
