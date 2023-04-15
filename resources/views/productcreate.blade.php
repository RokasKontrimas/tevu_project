@extends('layouts.app')

@section('content')
<div class="row mt-3">
    <a href="{{route('products.index')}}"  class="btn btn-success text-white">Grįžti į prekių sarašą</a>

</div>
<div class="row mt-3 ">
    <div class="col-12  col-sm-6 col-xl-4 mx-auto">

        <div class="card mb-3">
            <img src="https://www.socialstudies.org/sites/default/files/media/2018/Apr/adsize300-200.png" class="card-img-top h1 text-center text-white" alt="{{('Image')}}">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="file" name="image" class="text-white">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-white">Pavadinimas:</label>
                        <input type="text" id="name" name="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="price" class="text-white">Kaina:</label>
                        <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}" step="0.1" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Pridėti produktą</button>
                </div>
            </form>
            <!-- <h3 class="card-title text-center text-white"> {{('Pavadinimas')}}</h3>
                <h5 class="card-text text-white text-center">{{ "Kilogramo kaina " }} &euro; </h5> -->

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection