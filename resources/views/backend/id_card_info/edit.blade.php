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

        <form action="{{ url('id_card_generate/update',$id_card->id) }}" method="POST">
            @csrf
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>ID Number</label>
                <input type="text" class="form-control" name="id_card_no" value="{{ $id_card->id_card_no }}">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Serial Number</label>
                  <input type="text" class="form-control" name="serial_no" value="{{ $id_card->serial_no }}">
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
