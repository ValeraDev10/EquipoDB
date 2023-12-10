@extends('layout/plantilla')

@section("tituloPagina","Eliminar Equipo")

@section('contenido')

<div>
    <h1>Eliminar Equipo <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
</div>
<div id="ListaEquipos" class="card">
    <h5 class="card-header text-center"><i class="bi bi-database-dash"></i> Eliminar Equipo de la lista </h5>
    <div class="card-body">
      
      <p class="card-text">

        <div class="alert alert-danger" role="alert"><i class="bi bi-exclamation-circle"></i>
            Se Eliminara El Registro, Esta Seguro ???
            <br><br>
            <table class="table table-sm table-hover">
                <thead>
                    <th>id Equipo</th>
                    <th>Tipo Equipo</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Número Serie</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$equiposmedicos->id}}</td>
                        <td>{{$equiposmedicos->tipo_equipo}}</td>
                        <td>{{$equiposmedicos->nombre}}</td>
                        <td>{{$equiposmedicos->marca}}</td>
                        <td>{{$equiposmedicos->modelo}}</td>
                        <td>{{$equiposmedicos->numero_serie}}</td>
                    </tr> 
                </tbody>
              </table>
              <hr>
              <form action="{{route('equiposmedicos.destroy',$equiposmedicos->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('equiposmedicos.index')}}" id="btncrear" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
                <button id="btncrear3" class="btn btn-danger"><i class="bi bi-database-dash"></i> Eliminar</button>
                

              </form>

          </div>

      </p>
      
    </div>
  </div>


@endsection