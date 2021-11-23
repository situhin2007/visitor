@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit ID Number</h3>
          <a href="{{ url('id_card_generate/index') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-table"></i> All ID Number</a>

        </div>
        <!-- /.card-header -->
        @include('backend.includes.message')

        <form action="{{ url('id_card_generate/update',$id_card->id) }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>ID Number</label>
                <input type="text" class="form-control" name="id_card_no" value="{{ $id_card->id_card_no }}">
                @if($errors->has('id_card_no'))
                    <span class="text-danger">{{ $errors->first('id_card_no') }}</span>
                @endif
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Serial Number</label>
                  <input type="text" class="form-control" name="serial_no" value="{{ $id_card->serial_no }}">
                  @if($errors->has('serial_no'))
                  <span class="text-danger">{{ $errors->first('serial_no') }}</span>
              @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" id="">
                    {{-- <option {{ $id_card->status == '0' ? 'selected' : '' }} value="0">Active</option>
                    <option {{ $id_card->status == '1' ? 'selected' : '' }} value="1">Inactive</option> --}}
                    <option {{ $id_card->status == '2' ? 'selected' : '' }} value="2">Disabled</option>
                  </select>
                  @if($errors->has('status'))
                  <span class="text-danger">{{ $errors->first('status') }}</span>
              @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Remarks</label>
                  <input type="text" class="form-control" name="remarks" value="{{ $id_card->remarks }}">
                  @if($errors->has('remarks'))
                  <span class="text-danger">{{ $errors->first('remarks') }}</span>
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
