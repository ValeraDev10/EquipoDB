@extends('layout/plantilla')

@section('titulo','Crud Con Laravel')

@section('contenido')


    @auth
      <div>
        <h1><i class="bi bi-tools"></i> Equipos Medicos <l-helix
          size="25"
          speed="2.0"
          color=#0b9ead 
        ></l-helix></h1>
      </div>

      




      <div id="ListaEquipos" class="card">
        <h5 class="card-header text-center"><i class="bi bi-database-check"></i> Lista de Equipos</h5>
         
          <div class="card-body">
            
            <h5 class="card-title text-center"></h5><br>
            <p>
              <a id="btncrear" href="{{route('equiposmedicos.create')}}" class="btn btn-primary">
                <i class="bi bi-database-add"></i>  Crear Equipo Nuevo</a>
            </p><br>

            <div class="row">
              <div class="col-sm-12">
                  @if ($mensaje = Session::get('success'))
                      <div id="M" class="alert alert-success" role="alert"><i class="bi bi-clipboard2-check"></i>
                          {{ $mensaje }}
                      </div>
                  @endif 
                  @if ($mensaje = Session::get('success1'))
                      <div id="M" class="alert alert-warning" role="alert"><i class="bi bi-clipboard2-check"></i>
                          {{ $mensaje }}
                      </div>
                  @endif 
                  @if ($mensaje = Session::get('success2'))
                      <div id="M" class="alert alert-danger" role="alert"><i class="bi bi-clipboard2-check"></i>
                          {{ $mensaje }}
                      </div>
                  @endif             
              
              
                </div>
          </div>
          
        

      <p  class="card-text">
          <div class="table table-responsive">
              <table id="Lista" class="table table-sm table-bordered">
                <thead>
                  <th>id Equipo</th>
                  <th>Tipo Equipo</th>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Número Serie</th>
                  <th>Actualizar</th>
                  <th>Hoja De vida</th>
                  <th>Eliminar</th>
                  
                </thead>
                <tbody>

                  @foreach ($datos as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->tipo_equipo}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->modelo}}</td>
                        <td>{{$item->numero_serie}}</td>
                       
                        <td>
                          <form action="{{ route('equiposmedicos.edit', $item->id)}}" method="GET">

                            <button id="btnmod" class="btn btn-warning btn-sm"><i class="bi bi-database-gear"></i></button>

                        </form>
                        </td>

                        <td>
                          <form action="{{ route('hojadvida.hvshow', $item->id)}}" method="GET">

                            <button id="btnmod" class="btn btn-danger btn-sm"><i class="bi bi-journal-bookmark"></i></button>                          
            
                          </form>
                        </td>

                        <td>
                          <form action="{{ route('equiposmedicos.show', $item->id)}}" method="GET">

                            <button id="btnmod" class="btn btn-danger btn-sm"><i class="bi bi-database-dash"></i></button>                          
            
                          </form>
                        </td>

                        


                    </tr> 
                  @endforeach
                </tbody>
              </table>
              <a id="btncrear" class="btn btn-primary" href="/home" ><i class="bi bi-menu-button-wide-fill"></i> Menu Principal</a>
              <hr>
            </div>
            <div id="paginacion" class="row">
              <div id="paginacion2"  class="col-sm-12">
                  {{$datos->links()}}
              </div>
            </div>
          </p>
          
      </div>
    </div>
      

    @endauth

        @guest
            <h1>Proyecto</h1>
            <h1>Equipos Medicos DB </h1>
            <h2>Para ver el contenido debe iniciar sesión</h2>
            <a href="/login" id="MenuPrincipal" class="btn btn-primary"><i class="bi bi-person-circle"></i>   Iniciar Sesión</a>
        @endguest 


@endsection


        
        
