@extends('plantillas.plantilla')
@section('titulo')
    Editar Libro
@endsection
@section('cabecera')
    Nuevo Libro
@endsection
@section('contenido')
    <div class="container mb-3 mt-3">
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
    <form name="crear" action="{{route('libros.update', $libro)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col">
            <input type="text" class="form-control" value="{{$libro->titulo}}" name="titulo" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" value="{{$libro->isbn}}" maxlength="13" name="isbn" required>
        </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="number" class="form-control" value="{{$libro->pvp}}" name="pvp" step="0.10" min="0" required>
            </div>
            <div class="col">
                <input type="number" class="form-control" value="{{$libro->stock}}" name="stock" min="0" step="1">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="ta">Sinopsis</label>
                <textarea name="sinopsis" class="form-control" id="a" rows="3"  required>{{$libro->sinopsis}}</textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="submit" class="btn btn-success normal" value="Editar">
            <a href="{{route('libros.listado')}}" class="ml-3 btn btn-info normal">Volver</a>
            </div>
        </div>
    </form>
@endsection