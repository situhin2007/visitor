@extends('backend.master')


@section('css')

@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <h5 class="mt-4 mb-2">All ID Card List</code></h5>
            <div class="row">
                @foreach ($id_cards as $value)
                    @if ($value->status == 0 || $value->status == 2)
                        <div class="col-lg-3 col-6">
                            <a href="{{ url('id_card_generate/edit', $value->id) }}" class="text-white">
                                <div class="small-box @if ($value->status == 0) bg-success @elseif ($value->status == 1) bg-info @elseif ($value->status == 2) bg-danger @else @endif">
                                    <div class="inner">
                                        <h3>{{ $value->id_card_no }}</h3>
                                        <p>Card Number</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-id-card"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-lg-3 col-6">
                            <a href="{{ url('visitor/card-to-visitor-info', $value->id_card_no) }}" class="text-white">
                                <div class="small-box @if ($value->status == 0) bg-success @elseif ($value->status == 1) bg-info @elseif ($value->status == 2) bg-danger @else @endif">
                                    <div class="inner">
                                        <h3>{{ $value->id_card_no }}</h3>
                                        <p>Card Number</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-id-card"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
    </section>
@endsection


@section('js')

@endsection
