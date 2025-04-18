@extends('layout/plantilla')

@section('titulo','Crud Con Laravel')

@section('contenido')


    @auth
      <div>
        <h1><i class="bi bi-journal-bookmark"></i> Hoja de Vida  <l-helix
          size="25"
          speed="2.0"
          color=#0b9ead 
        ></l-helix></h1>
      </div>
          <hr>
      <p  class="card-text">
        <div class="table table-responsive">
          <p>
           
          </p><br>
            @php
            //print_r($hvdato);
            @endphp
           
          

            <table id="Lista" class="table table-sm table-bordered">
              <thead>
                <th>Hoja de vida Nº</th>
                <th>Equipo Nº</th>
                <th>TipoEquipo</th>
                <th>Fecha de Compra</th>
                <th>Fecha de Garantia</th>
                <th>Actualizar Hoja de Vida</th>

                  
                
                
              </thead>
              <tbody>

                @forelse($hvdato as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->idEquipo}}</td>
                        <td>{{$item->tipo_equipo}}</td>
                        <td>{{$item->fecha_compra}}</td>
                        <td>{{$item->fecha_garantia}}</td>
                        <td>
                          <form action="{{ route('hojadvida.hvedit', $item->id)}}" method="GET">

                            <button id="btnmod" class="btn btn-warning btn-sm"><i class="bi bi-database-gear"></i></button>

                        </form>
                        </td>
                        
                  @empty


                      </tr> 
                @endforelse
                
                
              </tbody>
            </table>
          </div>
        </p>
          
      <p  class="card-text"> 
        <div class="table table-responsive">
            <table id="Lista" class="table table-sm table-bordered">
              <thead>
                
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Número Serie</th>
                <th>Registro  Invima</th>
                <th>Estado de la Garantia</th>
                <th>Fecha y Hora Creaciòn</th>

              </thead>


              <tbody>

                @forelse($hvdato as $item)   
                   <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->modelo}}</td>
                        <td>{{$item->numero_serie}}</td>
                        <td>{{$item->registro_invima}}</td>
                        <td>{{$item->estado_garantia}}</td>
                        <td>{{$item->created_at}}</td>
                        
                        


                    </tr> 
                    @empty
                 

                    @endforelse

                
              </tbody>
            </table>
            <hr>
            <a href="{{route('equiposmedicos.index')}}" id="btncrear" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
            <hr>
          </div>
          
        </p>

      




      

    @endauth

        

@endsection