@extends('plantillas.plantilla')
@section('titulo')
    Crear Libro
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
    <form name="crear" action="{{route('libros.store')}}" method="POST">
        @csrf
        <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Título" name="titulo" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="ISBN" maxlength="13" name="isbn" required>
        </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="number" class="form-control" placeholder="PVP(€)" name="pvp" step="0.10" min="0" required>
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Stock" name="stock" min="0" step="1">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="ta">Sinopsis</label>
                <textarea name="sinopsis" class="form-control" id="a" rows="3" placeholder="Escriba la sinopsis..." required></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="submit" class="btn btn-success normal" value="Crear">
                <input type="reset" class="ml-3 btn btn-warning normal" value="Limpiar">
            <a href="{{route('libros.listado')}}" class="ml-3 btn btn-info normal">Volver</a>
            </div>
        </div>
    </form>
@endsection