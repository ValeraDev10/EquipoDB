@extends('layouts.app-master') 
   
@section('content')


@auth
      <div>
        <h1><i class="bi bi-people-fill"></i> Gestion De Usuarios  <l-helix
          size="25"
          speed="2.0"
          color=#0b9ead 
        ></l-helix></h1>
      </div>



     @csrf
      
     @php
        //print_r($usser)
     @endphp

      


        <div id="ListaEquiposUS" class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item" >
                             <a class="nav-link active" id='ListaUS3' aria-current="true"><i class="bi bi-people"></i> Lista Usuarios</a>
                                    
                            </li><br><br> 
                                <p class="card-text">
                                    <div class="table table-responsive">
                                        <table  class="table table-sm table-bordered">
                                        <thead>
                                            <tr id="ListaUS">
                                            <th id="ListaUS">Codigo</th>
                                            <th id="ListaUS">Tipo Usuario</th>
                                            <th id="ListaUS">E-Mail</th>
                                            <th id="ListaUS">Nombre de Usuario</th>
                                            <!--th id="ListaUS">Password</th-->
                                            <th id="ListaUS">Fecha De Creación</th>
                                            <th id="ListaUS">Ultima Actualización</th>
                                            <th id="ListaUS">Actualizar</th>
                                            <th id="ListaUS">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($usser as $item)
                                                
                                            
                                            <tr>
                                                <td id='ListaUS2'>{{$item->id}}</td>
                                                <td id='ListaUS2'>{{$item->name}}</td>
                                                <td id='ListaUS2'>{{$item->email}}</td>
                                                <td id='ListaUS2'>{{$item->username}}</td>
                                                <!--td id='ListaUS2'>*******</td-->
                                                <td id='ListaUS2'>{{$item->created_at}}</td>
                                                <td id='ListaUS2'>{{$item->updated_at}}</td>
                                               
                                                <td id='ListaUS2'>

                                                    <form action="{{ route("users.usedit",$item->id)}}" method="GET">

                                                        <button id="btnmod" class="btn btn-warning btn-sm"><i class="bi bi-person-lines-fill"></i></button>
                            
                                                    </form>
                                                </td>

                                                <td id='ListaUS2'>

                                                    <form action="{{ route("users.usshow",$item->id)}}" method="GET">

                                                        <button id="btnmod" class="btn btn-danger btn-sm"><i class="bi bi-person-fill-slash"></i></button>                          
                                        
                                                      </form>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    </div>
                                    
                                    
                        </ul>
                            
                    </div>
                <div class="card-body">

                    <!--a id="btncrear" class="btn btn-primary" href="{{route('users.uscreate')}}"><i class="bi bi-person-fill-add"></i> Crear Usuario</a-->
                
                    <a id="btncrear" class="btn btn-primary"  href="/home" ><i class="bi bi-menu-button-wide-fill"></i> Menu Principal</a>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            @if ($mensaje = Session::get('success'))
                                <div id="M" class="alert alert-success" role="alert"><i class="bi bi-person-badge-fill"></i>
                                    {{ $mensaje }}
                                </div>
                            @endif 
                            @if ($mensaje = Session::get('success1'))
                                <div id="M" class="alert alert-warning" role="alert"><i class="bi bi-person-badge-fill"></i>
                                    {{ $mensaje }}
                                </div>
                            @endif 
                            @if ($mensaje = Session::get('success2'))
                                <div id="M" class="alert alert-danger" role="alert"><i class="bi bi-person-badge-fill"></i>
                                    {{ $mensaje }}
                                </div>
                            @endif             
                        
                        
                          </div>
                    </div>
                    
                    <div id="paginacion" class="row">
                        <div id="paginacion2"  class="col-sm-12">
                            {{$usser->links()}}
                        </div>
                      </div>
                </p>
                </div>
        </div>
      
        @endauth

        
      
@endsection      