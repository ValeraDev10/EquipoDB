@extends('layout/plantilla')

@section("tituloPagina","Crear Equipo Nuevo")

@section('contenido')
  
<div>
    <h1>Crear Equipo <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
  </div>
  <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/grid.js"></script>
<div id="FormCrear" class="card">
    <h5 class="card-header text-center"><i class="bi bi-database-add"></i>  Ingrese los datos del Equipo</h5>
    <div class="card-body">
      
      <p class="card-text">
            
        <form action="{{route('equiposmedicos.store')}}" method="POST">
            @csrf
            <label for="">id Equipo:</label>
            <input id="int" type="text" name="id" class="form-control" required>
            <label  for="">Tipo Equipo:</label>
            <input id="int" type="text" name="tipo_equipo" class="form-control" required>
            <label  for="">Nombre:</label>
            <input id="int" type="text" name="nombre" class="form-control" required>
            <label for="">Marca:</label>
            <input id="int" type="text" name="marca" class="form-control" required>
            <label for="">Modelo:</label>
            <input id="int" type="text" name="modelo" class="form-control" required>
            <label for="">Numero Serie:</label>
            <input id="int" type="text" name="numero_serie" class="form-control" required>
            <br>
            <button id="btncrear2" class="btn btn-primary"><i class="bi bi-database-add"></i> Crear</button>
            <hr>
            <a href="{{route('equiposmedicos.index')}}" id="btncrear" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>

        </form>

      </p>
      
    </div>
  </div>


@endsection