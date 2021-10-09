@extends('backend.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Visitor Get Pass</h3>
                    <a href="{{ url('dashboard') }}" class="btn btn-primary btn-sm float-right"> <i
                            class="fa fa-table"></i> Back</a>
                </div>

                <!-- /.card-header -->
                @include('backend.includes.message')

                <div class="card card-secondary m-3">
                    <div class="card-header">
                        <h3 class="card-title">Patient Info:</h3>
                    </div>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter mobile">
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card card-secondary m-3">
                        <div class="card-header">
                            <h3 class="card-title">Visitor Info:</h3>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter mobile">
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Card<span class="text-danger">*</span></label>
                                    <select name="card" id="" class="form-control">
                                        <option value="">select</option>
                                        <option value="">2345</option>
                                    </select>
                                    @if ($errors->has('card'))
                                        <span class="text-danger">{{ $errors->first('card') }}</span>
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
