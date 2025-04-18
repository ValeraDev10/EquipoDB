@extends('layouts.app-master') 
   
@section('content')

@auth

<div>
    <h1><i class="bi bi-person-fill-add"></i> Modificar Información Usuario <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
  </div>

  @php
      //print_r($users);
  @endphp





  <form id="Formregister" action="{{route('users.usupdate',$users->id)}}" method="POST">
     @csrf
     @method("PUT")

       <div class="form-floating mb-3">

                       
               <input id="int2" type="text" placeholder="Tipo Usuario" name="name" class="form-control" required value="{{$users->name}}" id="usertxt" aria-describedby="emailHelp">
               <label id="int3" for="exampleInputEmail1" class="form-label">Tipo Usuario</label>

       </div>
     
     
         <div class="form-floating mb-3">

               
               <input id="int2" type="email" placeholder="E-Mail" name="email" class="form-control" required value="{{$users->email}}" id="usertxt" aria-describedby="emailHelp">
               <label id="int3" for="exampleInputEmail1" class="form-label">E-Mail</label>

         </div>

         <div class="form-floating mb-3">

               <input id="int2" type="text" placeholder="Usuario" name="username" class="form-control" required value="{{$users->username}}" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Usuario</label>
         </div>

         <div class="form-floating mb-3">

               
               <input id="int2" type="date" placeholder="Fecha Actualización" name="updated_at" class="form-control" required value="{{$users->updated_at}}" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Fecha Actualización</label>
         </div>









         <!--div class="form-floating mb-3">

               
               <input id="int2" type="password" placeholder="Password" name="password" class="form-control" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Password</label>
         </div>

         <div class="form-floating mb-3">

               
               <input id="int2" type="password" placeholder="Confirmar Password" name="password_confirmation" class="form-control" id="usertxt">
               <label id="int3" for="exampleInputPassword1" class="form-label">Confirmar Password</label-->
         </div>

         <div class="mb-3">
               
            <a href="/Usuarios" id="btncrearR" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
       </div>
         
               <button href="/Usuarios" id="btncrearR" type="submit" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Modificar</button>
               
       </form>

       



  @endauth

  @endsection 