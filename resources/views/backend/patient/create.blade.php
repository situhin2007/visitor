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

        @include('backend.includes.message')

        <form action="{{ url('patient/store') }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Enter Name">
                  @if($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('mobile') is-invalid @enderror" name="mobile" value="{{old('mobile')}}" placeholder="Enter Mobile No.">
                    @if($errors->has('mobile'))
                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Ward No <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('ward_no') is-invalid @enderror" name="ward_no" value="{{old('ward_no')}}" placeholder="Enter Ward No.">
                    @if($errors->has('ward_no'))
                        <span class="text-danger">{{ $errors->first('ward_no') }}</span>
                    @endif
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Cabin No <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('cabin_no') is-invalid @enderror" name="cabin_no" value="{{old('cabin_no')}}" placeholder="Enter Cabin No.">
                    @if($errors->has('cabin_no'))
                        <span class="text-danger">{{ $errors->first('cabin_no') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Seat No <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('seat_no') is-invalid @enderror" name="seat_no" value="{{old('seat_no')}}" placeholder="Enter Seat No.">
                    @if($errors->has('seat_no'))
                        <span class="text-danger">{{ $errors->first('seat_no') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Age <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('age') is-invalid @enderror" name="age" value="{{old('age')}}" placeholder="Enter age">
                    @if($errors->has('age'))
                        <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Admission No <span class="text-danger">*</span></label>
                  <input type="text" class="form-control  @error('admission_no') is-invalid @enderror" name="admission_no" value="{{old('admission_no')}}" placeholder="Enter admission no">
                    @if($errors->has('admission_no'))
                        <span class="text-danger">{{ $errors->first('admission_no') }}</span>
                    @endif
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Admission Date <span class="text-danger">*</span></label>
                  <input type="date" class="form-control  @error('admission_date') is-invalid @enderror" name="admission_date" value="{{old('admission_date')}}" placeholder="Enter admission date">
                    @if($errors->has('admission_date'))
                        <span class="text-danger">{{ $errors->first('admission_date') }}</span>
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
