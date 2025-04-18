@extends('layout/plantilla')

@section("tituloPagina","Actualizar Equipo")

@section('contenido')
<div>
    <h1>Actualizar Equipo <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
</div>
<div id="FormCrear" class="card">
    <h5 class="card-header text-center"><i class="bi bi-database-gear"></i></i> Actualice los datos del Equipo</h5>
    <div class="card-body">
       
      <p class="card-text">
            <form action="{{ route('equiposmedicos.update',$equiposmedicos->id)}}" method="POST">
                @csrf 
                @method ("PUT")
                <label for="">id Equipo:</label>
                <input readonly id="int" type="text" name="id" class="form-control" required value="{{$equiposmedicos->id}}">
                <label for="">Tipo Equipo:</label>
                <input id="int" type="text" name="tipo_equipo" class="form-control" required value="{{$equiposmedicos->tipo_equipo}}">
                <label for="">Nombre:</label>
                <input id="int" type="text" name="nombre" class="form-control" required value="{{$equiposmedicos->nombre}}">
                <label for="">Marca:</label>
                <input id="int" type="text" name="marca" class="form-control" required value="{{$equiposmedicos->marca}}">
                <label for="">Modelo:</label>
                <input id="int" type="text" name="modelo" class="form-control" required value="{{$equiposmedicos->modelo}}">
                <label for="">Numero Serie:</label>
                <input id="int" type="text" name="numero_serie" class="form-control" required value="{{$equiposmedicos->numero_serie}}">
                <br>
                <button id="btncrear" class="btn btn-warning"><i class="bi bi-database-gear"></i></i> Actualizar</button>
                <hr>
                <a href="{{route('equiposmedicos.index')}}" id="btncrear" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>

            </form>

      </p>
      
    </div>
  </div>


@endsection