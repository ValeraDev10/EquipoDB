<!--!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Home, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Electrolize&family=Orbitron:wght@700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet"> 
    <title>Crear Usuario Nuevo</title>
    </head>
  <body>

    <!--form action="/register" method="POST">
        @csrf
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <input type="submit" value="Registrar">

    </form-->

@extends('layouts.auth-master')
   
@section('content')



    <form id="Formregister" action="/register" method="POST">
     @csrf
      <h1>Crear Usuario</h1><br>
      
      @include('layouts.partials.messages')

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
                
            <a id="btncrear" class="btn btn-primary" href="/login">Login</a>
        </div>
          
                <button id="btncrear" type="submit" class="btn btn-primary">Crear</button>
        </form>
@endsection      
 