@extends('layout/plantilla')

@section("tituloPagina","Crear Equipo Nuevo")

@section('contenido')
  
<div>
    <h1><i class="bi bi-file-earmark-text-fill"></i> Actualizar Hoja de Vida <l-helix
      size="25"
      speed="2.0"
      color=#0b9ead 
    ></l-helix></h1>
  </div>
  <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/grid.js"></script>
 

  <div id="FormCrear" class="card">
  
    <h5 class="card-header text-center"><i class="bi bi-file-earmark-text-fill"></i>  Completar Datos Hoja de Vida</h5>
   
    <div class="card-body">
      <p class="card-text">
          
        <form action="{{ route('hojadvida.hvupdate',$hv1->id)}}" method="POST">
            @csrf
            @method ("PUT")
          <section class="layout2">
           <div class="A">
            <label for="">id HV:</label>
            <input readonly id="int" type="text" name="id" class="form-control" required value="{{$hv1->id}}">
            <label  for="">id Equipo:</label>
            <input readonly id="int" type="text" name="idEquipo" class="form-control" required value="{{$hv1->idEquipo}}">
            <label  for="">Tipo Equipo:</label>
            <input id="int" type="text" name="tipo_equipo" class="form-control" required value="{{$hv1->tipo_equipo}}">
            <label for="">Nombre:</label>
            <input id="int" type="text" name="nombre" class="form-control" required value="{{$hv1->nombre}}">
            <label for="">Marca:</label>
            <input id="int" type="text" name="marca" class="form-control" required value="{{$hv1->marca}}">
            <label for="">Modelo:</label>
            <input id="int" type="text" name="modelo" class="form-control" required value="{{$hv1->modelo}}">
            </div>

            <div class="A">
            <label for="">Numero Serie:</label>
            <input id="int" type="text" name="numero_serie" class="form-control" required value="{{$hv1->numero_serie}}">
            <label for="">Fecha Compra:</label>
            <input id="int" type="date" name="fecha_compra" class="form-control" required value="{{$hv1->fecha_compra}}">
            <label for="">Fecha Garantia:</label>
            <input id="int" type="date" name="fecha_garantia" class="form-control" required value="{{$hv1->fecha_garantia}}">
            <label for="">Registro Invima:</label>
            <input id="int" type="text" name="registro_invima" class="form-control" required value="{{$hv1->registro_invima}}">
            <label for="">Estado Garantia:</label>

            <!--input id="int" type="select" name="estado_garantia" class="form-control" required-->

            <select id="int" class="form-select" name="estado_garantia" aria-label="Default select example" required value="{{$hv1->estado_garantia}}">
              <option value="1">Vigente</option>
              <option value="2">Caducada</option>
              
            </select> 
          </div>
          
            <!--label for="">Fecha de Creación:</label>
            <input id="int" type="date" name="created_at" class="form-control" required value="{{$hv1->created_at}}"-->

          </section>
            <br>
            <button id="btncrear2HV" class="btn btn-primary"><i class="bi bi-file-earmark-text-fill"></i> Actualizar</button>
            
            <hr>
            
            <a href="{{route('hojadvida.hvshow',$hv1->idEquipo)}}" id="btncrear" class="btn btn-info"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
          
        </form>
      
      </p>
      
    </div>
  
  </div>
 


@endsection