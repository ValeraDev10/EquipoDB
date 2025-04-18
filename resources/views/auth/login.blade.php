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
    <title>Login</title>
</head>
<body-->
     
    @extends('layouts.auth-master')
   
    @section('content')

     <form id="Formlogin"  action="/login" method="POST">
        @csrf
        <h1><i class="bi bi-door-open-fill"></i> Login</h1><br>
        @include('layouts.partials.messages')
        
            <div class="mb-3">
                    <label id="int3"  for="exampleInputEmail1" class="form-label">Usuario / E-Mail:</label>
                    <input id="int2" type="text" name="username" class="form-control" id="logintxt" aria-describedby="emailHelp">
                    
            </div>

            <div class="mb-3">
                    <label id="int3" for="exampleInputPassword1" class="form-label">Password:</label>
                    <input id="int2" type="password" name="password" class="form-control" id="logintxt">
            </div><br>
            
                
            
            <div class="mb-3">
                
                <a id="btncrear" class="btn btn-primary" href="/register"><i class="bi bi-person-square"></i> Crear Usuario Nuevo</a>
            </div>
            
            <button id="btncrear"  type="submit" class="btn btn-primary"><i class="bi bi-door-open-fill"></i> Login</button>

      </form>
@endsection
