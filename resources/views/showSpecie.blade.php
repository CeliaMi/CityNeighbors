@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card" style="width: 60%;">
        <img src="{{  $specie->img }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h2>{{ $specie->name }}</h2>
            <h2>{{ $specie->individuals }} individuos</h2>
            <p class="card-text">{{ $specie->description }}</p>
            <p class="card-text">{{ $specie->areas }}</p>
            <p class="card-text"></p>
            <p class="card-text"></p>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('home') }}">Volver</a>
        </div>
    </div>
</div>    


@endsection