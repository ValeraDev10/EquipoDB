


    

<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Electrolize&family=Orbitron:wght@700&display=swap" rel="stylesheet">
        <link href="{{ public_path('css/app.css')}}" rel="stylesheet" type="text/css"> 

    <title>@yield("titulo")</title>
    
     
        
    
  </head>
  <h2>EQUIPOS MEDICOS DB</h2>
  <h1> Hoja de Vida Equipo Medico</h1>
  <body id="pdf">
      <hr><hr>
      <br>

      <div class="table table-responsive">
        <table id="Lista" class="table table-striped table-bordered">
              <thead>
                <th>Hoja de vida Nº</th>
                <th>Equipo Nº</th>
                <th>TipoEquipo</th>
                <th>Fecha de Compra</th>
              </thead>
              <tbody>
                      <tr>
                        <td>{{$hv1->id}}</td>
                        <td>{{$hv1->idEquipo}}</td>
                        <td>{{$hv1->tipo_equipo}}</td>
                        <td>{{$hv1->fecha_compra}}</td>
                      </tr> 
              </tbody>
            </table>
            </div>
            <hr>

            <div class="table table-responsive">
              <table id="Lista" class="table table-striped table-bordered">
                    <thead>
                      <th>Registro  Invima</th>
                      <th>Estado de la Garantia</th>
                      <th>Fecha de Garantia</th>
                      <th>Fecha y Hora Creaciòn</th>
                    </thead>
                    <tbody>
                            <tr>
                              <td>{{$hv1->registro_invima}}</td>
                              <td>{{$hv1->estado_garantia}}</td>
                              <td>{{$hv1->fecha_garantia}}</td>
                              <td>{{$hv1->created_at}}</td>
                            </tr> 
                    </tbody>
                  </table>
                  </div>
                  <hr>
          
          
      



        
            <div class="table table-responsive">
              <table id="Lista" class="table table-striped table-bordered">
              <thead>
                
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Número Serie</th>
                
                

              </thead>


              <tbody>
               
                   
                   <tr>
                        <td>{{$hv1->nombre}}</td>
                        <td>{{$hv1->marca}}</td>
                        <td>{{$hv1->modelo}}</td>
                        <td>{{$hv1->numero_serie}}</td>
                        
                        
                    </tr> 
                                                       
              
                
              </tbody>
            </table>
          </div>
            <hr>
            <h3>Elaborado Por:</h3>
            <a class="nav-link"  href="#" id="Respons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
              {{auth()->user()->name ?? auth()->user()->username }} {{auth()->user()->username}} 
           </a> 
</body>
</html>
