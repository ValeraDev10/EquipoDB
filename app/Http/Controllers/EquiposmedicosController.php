<?php

namespace App\Http\Controllers;
use App\Models\Hojadvida;
use App\Models\Equiposmedicos;
use Illuminate\Http\Request;

class EquiposmedicosController extends Controller
{
   
    public function index()
    {
        $datos = Equiposmedicos::orderBy('id','desc')->paginate(5);
        return view('welcome',compact('datos'));
    }

    
    public function create()
    {
        return view('crear');
    }

    
    public function store(Request $request)
    {
        $equiposmedicos = new Equiposmedicos();
        $equiposmedicos->id = $request->post('id');
        $equiposmedicos->tipo_equipo = $request->post('tipo_equipo');
        $equiposmedicos->nombre = $request->post('nombre');
        $equiposmedicos->marca= $request->post('marca');
        $equiposmedicos->modelo = $request->post('modelo');
        $equiposmedicos->numero_serie = $request->post('numero_serie');
        $equiposmedicos->save();


        $hvdato = new Hojadvida();
        $hvdato->id = $request->post(0000);
        $hvdato->idEquipo = $request->post('id');
        $hvdato->tipo_equipo = $request->post('tipo_equipo');
        $hvdato->nombre = $request->post('nombre');
        $hvdato->marca = $request->post('marca');
        $hvdato->modelo = $request->post('modelo');
        $hvdato->numero_serie = $request->post('numero_serie');
        $hvdato->fecha_compra = $request->post('fecha_compra');
        $hvdato->fecha_garantia = $request->post('fecha_garantia');
        $hvdato->registro_invima = $request->post('registro_invima');
        $hvdato->estado_garantia = $request->post('estado_garantia');
        
        

        $hvdato->save();

       
       return redirect()->route("equiposmedicos.index")->with("success","Equipo Creado Con Exito !!!");

    }

    
    public function show($id)
    {
        $equiposmedicos = Equiposmedicos::find($id);
        return view("eliminar", compact('equiposmedicos'));
    }

   
    public function edit($id)
    {
        $equiposmedicos = Equiposmedicos::find($id);
        return view("actualizar", compact('equiposmedicos'));
    }

   
    public function update(Request $request, $id)
    {
        $equiposmedicos = Equiposmedicos::find($id);
        
        $equiposmedicos->id = $request->post('id');
        $equiposmedicos->tipo_equipo = $request->post('tipo_equipo');
        $equiposmedicos->nombre = $request->post('nombre');
        $equiposmedicos->marca= $request->post('marca');
        $equiposmedicos->modelo = $request->post('modelo');
        $equiposmedicos->numero_serie = $request->post('numero_serie');
        $equiposmedicos->save();
        return redirect()->route("equiposmedicos.index")->with("success1","Equipo Actualizado Con Exito !!!");
    }

    
    public function destroy($id)
    {
        $equiposmedicos = Equiposmedicos::find($id);
        $equiposmedicos->delete();
        return redirect()->route("equiposmedicos.index")->with("success2","Equipo Eliminado Con Exito !!!");
    }
}
