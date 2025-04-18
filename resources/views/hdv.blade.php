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

          <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div id="M" class="alert alert-success" role="alert"><i class="bi bi-clipboard2-check"></i>
                        {{ $mensaje }}
                    </div>
                @endif 
                @if ($mensaje = Session::get('success1'))
                    <div id="M" class="alert alert-warning" role="alert"><i class="bi bi-file-earmark-check-fill"></i></i>
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
                <th>Opciones Hoja de Vida</th>

                  
                
                
              </thead>
              <tbody>

              
                      <tr>
                            
                        <td>{{$hv1->id}}</td>
                        <td>{{$hv1->idEquipo}}</td>
                        <td>{{$hv1->tipo_equipo}}</td>
                        <td>{{$hv1->fecha_compra}}</td>
                        <td>{{$hv1->fecha_garantia}}</td>
                        <td>
                          <form action="{{ route('hojadvida.hvedit', $hv1->id)}}" method="GET">

                            <button id="btnmodHV" class="btn btn-warning btn-sm"><i class="bi bi-file-earmark-text-fill"></i> Actualizar</button-->

                          </form>

                          <form action="{{ route('hojadvida.HVPDF', $hv1->id)}}" method="GET">

                            <button id="btnmodHV" class="btn btn-warning btn-sm"><i class="bi bi-file-earmark-pdf-fill"></i> Pdf</button-->
 
                          </form>


                        </td>
                        
                


                      </tr> 
              
                
                
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
               
                   
                   <tr>
                        <td>{{$hv1->nombre}}</td>
                        <td>{{$hv1->marca}}</td>
                        <td>{{$hv1->modelo}}</td>
                        <td>{{$hv1->numero_serie}}</td>
                        <td>{{$hv1->registro_invima}}</td>
                        <td>{{$hv1->estado_garantia}}</td>
                        <td>{{$hv1->created_at}}</td>
                        
                        


                    </tr> 
                                                       
              
                
              </tbody>
            </table>
            <hr>
            <a href="{{route('equiposmedicos.index')}}" id="btncrear" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
            
            <hr>
          </div>
          
        </p>

      




      

    @endauth

        

@endsection