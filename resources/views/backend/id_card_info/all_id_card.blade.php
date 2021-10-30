@extends('backend.master')


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
<h5 class="mt-4 mb-2">All ID Card List</code></h5>
<div class="row">
    @foreach ($id_cards as $value)
        <div class="col-lg-2 col-6">
            <div style="width: 200px" class="small-box @if ($value->status == 0) bg-success @elseif ($value->status == 1) bg-info @elseif ($value->status == 2) bg-warning  @elseif ($value->status == 3) bg-danger @else @endif">
            <div class="inner">
                <h3>{{ $value->id_card_no }}</h3>
               <a href="{{ url('id_card_generate/edit',$value->id) }}" class="text-white"> <p>Card Number</p></a>
            </div>
            <div class="icon">
                <i class="fas fa-id-card"></i>
            </div>
            </div>
        </div>
    @endforeach
  </div>
</section>
@endsection


@section('js')

@endsection
