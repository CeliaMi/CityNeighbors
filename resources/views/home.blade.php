@extends('layouts.app')

@section('content')
@if(Auth::check()&& Auth::user()->isAdmin)
<div class="d-flex align-items justify-content-center">
    <button class="btn btn-secondary justify-content-center" type="button">
        <a class="link-light" href="{{ route('createSpecie') }}">+ New Specie</a>
    </button>
</div>
@endif()
    @foreach ($species as $specie)
        <section class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $specie->img }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $specie->name }}</h5>
                    <p class="card-text">{{$specie->description}}</p>
                    <div class="d-inline d-md-flex justify-content-center">
                        @if(Auth::check()&& Auth::user()->isAdmin)
                        <form action="{{ route('deleteSpecie', ['id'=> $specie->id]) }}" method="post">
                        @method('delete')
                        @csrf
                            <button type="submit" class="btn btn-danger bt-adm m-1 d-flex justify-content-center align-items-center" onclick="return confirm('¿Estas seguro de querer elimnar esta Especie? {{ $specie->name }} - ID {{ $specie->id }}')"> Eliminar</button>
                            <button class="btn btn-primary justify-content-center" type="button">
                                <a class="link-light" href="{{ route('editSpecie', ['id' => $specie->id]) }}">Edit</a>
                            </button>
                        @endif()
                            <button class="btn btn-primary justify-content-center" type="button">
                                <a class="link-light" href="{{ route('showSpecie', ['id' => $specie->id]) }}">Show</a>
                            </button>

                            <button class="btn btn-secondary justify-content-center" type="button">
                                <a class="link-light" href="{{ route('sighting', ['id' => $specie->id]) }}">avistado</a>
                            </button>

                        </form>
                    <div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
