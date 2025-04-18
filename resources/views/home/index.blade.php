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
        <link href="/css/app.css" rel="stylesheet"--> 
@extends('layouts.app-master')  
    
@section('content')


       

        @auth

        
            <h2><i class="bi bi-person-fill-check"></i> Bienvenido {{auth()->user()->username }}, al Menu Principal Equipos Medicos</h2>
            <h1><i class="bi bi-menu-button-wide-fill"></i> Menu Principal <l-grid size="60"speed="1.5"color= #0b9ead></l-grid></h1>
       
        
                    
            
               <section class="layout">
                <div class="a">
                    <a href="/" id="MenuPrincipal" class="btn btn-primary">
                    <i class="bi bi-tools"></i> Mantenimiento</a>
                    <br>
                    <a href="/" id="MenuPrincipal" class="btn btn-primary">
                    <i class="bi bi-card-checklist"></i> Inventario</a>
                    <br>
                    
                    <a href="/Usuarios" id="MenuPrincipal" class="btn btn-primary">
                        <i class="bi bi-people"></i> Gestión Usuarios</a>
                    <br>
                    <a href="/logout" id="MenuPrincipal" class="btn btn-primary">
                        <i class="bi bi-escape"></i> Salir</a>
                </div>

                <div class="b">
                    <i id="MenuLogo" class="bi bi-prescription2"></i>
                    
                  
                </div>
               </section>
             
            
              
             
            

        @endauth
        
        @guest
            <p>Para ver el contenido debe <a href="/login">Iniciar Sesión</a></p>
          
               

                
        @endguest
@endsection

