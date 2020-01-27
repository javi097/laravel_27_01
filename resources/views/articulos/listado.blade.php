@extends('plantillas.plantilla')
@section('titulo')
    Listado de Articulos
@endsection
@section('cabecera')
    ARTICULOS DISPONIBLES
@endsection
@section('contenido')
@if(Session::has("mensaje"))
  <div class=" normal container mt-3 mb-3 alert-success">
  <p>{{session("mensaje")}}</p>
  </div>
@endif
<a href="#" class="normal btn btn-success mt-2 mb-2">Nuevo Articulo</a>
    <table class="table table-striped table-dark normal">
        <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio (€)</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articulos as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombre}}</td>
            <td><img src="{{$item->imagen}}" alt=""></td>
            <td>{{$item->pvp}}</td>
            <td>
                <form name="borrar" action="{{route("articulos.destroy", $item)}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <input type="submit" class="btn btn-danger" name="btnBorrar" value="Borrar">
                </form>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$articulos->links()}} 
@endsection