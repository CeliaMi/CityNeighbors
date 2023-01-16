@extends('layouts.app')

@section('content')
    @foreach ($species as $specie)
        <section class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $specie->img }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $specie->name }}</h5>
                    <p class="card-text">{{$specie->description}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </section>
    @endforeach
@endsection
