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
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $patient->name }}">
                  @if($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control  @error('mobile') is-invalid @enderror" name="mobile" value="{{ $patient->mobile }}">
                    @if($errors->has('mobile'))
                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Ward No</label>
                  <input type="text" class="form-control  @error('ward_no') is-invalid @enderror" name="ward_no" value="{{ $patient->ward_no }}">
                    @if($errors->has('ward_no'))
                        <span class="text-danger">{{ $errors->first('ward_no') }}</span>
                    @endif
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Cabin No</label>
                  <input type="text" class="form-control  @error('cabin_no') is-invalid @enderror" name="cabin_no" value="{{ $patient->cabin_no }}">
                    @if($errors->has('cabin_no'))
                        <span class="text-danger">{{ $errors->first('cabin_no') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Seat No</label>
                  <input type="text" class="form-control  @error('seat_no') is-invalid @enderror" name="seat_no" value="{{ $patient->seat_no }}">
                    @if($errors->has('seat_no'))
                        <span class="text-danger">{{ $errors->first('seat_no') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Age <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('age') is-invalid @enderror" name="age" value="{{$patient->age}}" placeholder="Enter age">
                    @if($errors->has('age'))
                        <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Admission Date <span class="text-danger">*</span></label>
                  <input type="date" class="form-control  @error('admission_date') is-invalid @enderror" name="admission_date" value="{{$patient->admission_date}}" placeholder="Enter admission date">
                    @if($errors->has('admission_date'))
                        <span class="text-danger">{{ $errors->first('admission_date') }}</span>
                    @endif
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
