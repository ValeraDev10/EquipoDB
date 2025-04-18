@extends('layouts.app-master') 
   
@section('content')

@auth

<div>
    <h1><i class="bi bi-person-fill-add"></i> Crear Usuario <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
  </div>


  <!--form id="Formregister" action="/register" method="POST"-->

      <form id="Formregister" action="{{route('users.usstore')}}" method="POST">
    
    
      @csrf

      @include('layouts.partials.messages')
     
     <!--@include('layouts.partials.messages')-->

       <div class="form-floating mb-3">

                       
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
         </div>

         <div class="mb-3">
               
            <a href="/Usuarios" id="btncrearR" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
       </div>
         
               <button  id="btncrearR" type="submit" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Crear</button>
               
       </form>

       



  @endauth

  @endsection 