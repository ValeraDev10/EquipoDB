<?php

namespace App\Http\Controllers;

use App\Models\Equiposmedicos;
use App\Models\Hojadvida;
use App\hojadvida1;
use App\equipomedico1;
use PDF;
use Illuminate\Http\Request;

class HojadvidaController extends Controller
{
   
    public function index()
    {
        

        //$hvdato = Hojadvida::find($id);

        
        
        //$hvdato = Hojadvida::all();
        //return view('hindex',compact('hvdato'));
        
        //$equiposmedicos = Equiposmedicos::pluck('id');
        
        
        //$hvdato = Hojadvida::all();
        //$hvdato = Hojadvida::find($id);
        //$hvdato = Equiposmedicos::find($idEquipo);
       
       
        //return view('hindex');

    }

   
    public function create()
    {
        //
       
        return view('hcreate');
    }

    
    public function store(Request $request)
    {
        //$equiposmedicos = new Equiposmedicos();
        
    }

    
    public function hvshow($id)
    {
        //$item = Hojadvida::find($idEquipo);
        $eq = Equiposmedicos::find($id);
        $hv1 = $eq->hojadvida1;
        //$hv1= Hojadvida::all();
        //return view('hdv', compact('hv1'));
        return view("hdv", compact('hv1'));
        //echo $hv1;
        
       
    }

    
    public function hvedit($id)
    {
        //
        //return view('hcreate');
        $hv1 = Hojadvida::find($id);
        return view("hvupdate", compact('hv1'));
    }

    
    public function hvupdate(Request $request, $id)
    {
        //
        $hv1 = Hojadvida::find($id);
        $hv1->id = $request->post('id');
        $hv1->idEquipo = $request->post('idEquipo');
        $hv1->tipo_equipo = $request->post('tipo_equipo');
        $hv1->nombre = $request->post('nombre');
        $hv1->marca = $request->post('marca');
        $hv1->modelo = $request->post('modelo');
        $hv1->numero_serie = $request->post('numero_serie');
        $hv1->fecha_compra = $request->post('fecha_compra');
        $hv1->fecha_garantia = $request->post('fecha_garantia');
        $hv1->registro_invima = $request->post('registro_invima');
        $hv1->estado_garantia = $request->post('estado_garantia');
        
        $hv1->save();
        return redirect()->route('hojadvida.hvshow',$hv1->idEquipo)->with("success1","Hoja de Vida Actualizada Con Exito !!!");

      
        
    }

    
    public function destroy(Hojadvida $hojadvida)
    {
        //
    }

    public function HVPDF($id)
    {
        
        $hv1 = Hojadvida::find($id);
        //return view("hvpdf", compact('hv1'));
        
        
        $pdf = PDF::loadView('hvpdf',['hv1'=>$hv1])->setPaper('a4','landscape');
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

        
    }

}
