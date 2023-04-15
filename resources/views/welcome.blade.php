@extends('layouts.app')

@section('content')

<div class="row mt-3">
    @foreach($data as $item)
    <div class="col-12  col-sm-6 col-xl-4">
        <div class="card mb-3">
            <img src="{{asset($item->image)}}" class="card-img-top h1 text-center text-white" alt="{{$item->title}}">
            <div class="card-body">
                <h3 class="card-title text-center text-white"> {{$item->title}}</h3>
                <h5 class="card-text text-white text-center">{{ "Kilogramo kaina " . number_format($item->price, 2, ',', '.') }} &euro; </h5>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection