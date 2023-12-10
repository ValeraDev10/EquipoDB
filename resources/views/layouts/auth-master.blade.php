<!DOCTYPE html>
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

        <title>Home</title>

        <style>
            body{
                width: 100%;
                height: 100%vh;
                display: flex;
                align-items: center;
                justify-content: center;
                
            }
            .form-container{
                width: 500px;
            }
        </style>
        
    </head>
    <body>
       
        <main class="form-container">
            @yield('content')
        </main>

        <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/grid.js"></script>
        
    </body>
    </html>
