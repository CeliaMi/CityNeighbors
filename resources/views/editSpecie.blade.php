@extends('layouts.app')

@section('content')

<div class="containerCreate">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <h2 class="cardTitle">Edit an Specie</h2>
                    <form class="justify-content-center" action="{{route('updateSpecie', $specie->id)}}" method="POST">
                    @method('PATCH')
                    @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$specie->name}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Individuals</span>
                            <input type="text" name="individuals" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$specie->individuals}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                            <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$specie->description}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Areas</span>
                            <input type="text" name="areas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$specie->areas}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                            <input type="text" name="img" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$specie->img}}">
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('home') }}">Volver</a>
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
