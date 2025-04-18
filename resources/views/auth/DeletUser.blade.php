@extends('layouts.app-master') 
   
@section('content')

@auth

<div>
    <h1><i class="bi bi-person-fill-slash"></i> Eliminar Usuario <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
  </div>


  

    <p class="card-text" id='ListaUS3'>
    <div class="alert alert-danger" role="alert">
        <i class="bi bi-exclamation-octagon"></i> Se Eliminará El Usuario - Está Seguro ???
      <br><br>
          
      
     @include('layouts.partials.messages')

                <table  class="table table-sm table-bordered">
                    <thead>
                        <th>Tipo Usuario</th>
                        <th>E-Mail</th>
                        <th>Nombre Usuario</th>
                        <th>Fecha Creación</th>
                    </thead>
                    <tbody>
                        <td id="ListaUSD">{{$users->name}}</td>
                        <td id="ListaUSD">{{$users->email}}</td>
                        <td id="ListaUSD">{{$users->username}}</td>
                        <td id="ListaUSD">{{$users->created_at}}</td>
                    </tbody>
                </table>
        </div>
    </p>

       <!--div class="form-floating mb-3">

                       
               <input id="int2" type="text" placeholder="Tipo Usuario" name="name" class="form-control" id="usertxt" aria-describedby="emailHelp">
               <label id="int3" for="exampleInputEmail1" class="form-label">Tipo Usuario</label>

       </div>
     
     
         <div class="form-floating mb-3">

               
               <input id="int2" type="email" placeholder="E-Mail" name="email" class="form-control" id="usertxt" aria-describedby="emailHelp">
               <label id="int3" for="exampleInputEmail1" class="form-label">E-Mail</label>

         </div>

         <div class="form-floating mb-3">

               <input id="int2" type="text" placeholder="Usuario" name="username" class="form-control" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Usuario</label>
         </div>

         <div class="form-floating mb-3">

               
               <input id="int2" type="password" placeholder="Password" name="password" class="form-control" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Password</label>
         </div>

         <div class="form-floating mb-3">

               
               <input id="int2" type="password" placeholder="Confirmar Password" name="password_confirmation" class="form-control" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Confirmar Password</label>
         </div-->

         <form action="{{route('users.usdestroy',$users->id)}}" method="POST">
            @csrf
            @method('DELETE')
               
            <a href="/Usuarios" id="btncrearR" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
         
         
            <button id="btncrear3" class="btn btn-danger"><i class="bi bi-person-fill-slash"></i> Eliminar Usuario</button>

          </form>
               
       

       



  @endauth

  @endsection 