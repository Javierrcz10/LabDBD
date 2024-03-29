<?php

namespace App\Http\Controllers;
use App\Models\PuestoFeria;
use App\Models\Feria;
use App\Models\UbicacionFeria;
use App\Models\Ubicacion;
use App\Models\Calle;
use App\Models\Comuna;
use App\Models\ProductoPuesto;
use Illuminate\Http\Request;

class PuestoFeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestoFeria = PuestoFeria::all()->where('estado', true);
        if($puestoFeria != NULL){
            return response()-> json($puestoFeria);
        }
        return response(404);
    }

    public function  filtrarPuestos(Request $request,$id){
        $comunas = Comuna::all();
        $filtro = $request->get('comuna');
        
        if($filtro == NULL){
            $puestoFeria = PuestoFeria::all();
            return view('filtroComuna',compact('puestoFeria','comunas'))->with('id',$id);

        }
            
        $calles = Calle::all()->where('idComuna', $filtro);
        if($calles->isEmpty()){
            $puestoFeria = PuestoFeria::all()->where('nohaypuestos','nohaypuestos');
            return view('filtroComuna',compact('comunas','puestoFeria'))->with('id',$id);
        }
        foreach($calles as $calle){
            $ubicaciones = Ubicacion::all()->where('idCalle', $calle->id);
            
        }
        if($ubicaciones->isEmpty()){
            $puestoFeria = PuestoFeria::all()->where('nohaypuestos','nohaypuestos');
            return view('filtroComuna',compact('comunas','puestoFeria'))->with('id',$id);
        }
        foreach($ubicaciones as $ubicacion){
            $ubicacionFerias = UbicacionFeria::all()->where('idUbicacion',$ubicacion->id);
        }
        if($ubicacionFerias->isEmpty()){
            $puestoFeria = PuestoFeria::all()->where('nohaypuestos','nohaypuestos');
            return view('filtroComuna',compact('comunas','puestoFeria'))->with('id',$id);
        }
        foreach($ubicacionFerias as $ubicacionFeria){
            $ferias = Feria::all()->where('id',$ubicacionFeria->idFeria);
        }
        if($ferias->isEmpty()){
            $puestoFeria = PuestoFeria::all()->where('nohaypuestos','nohaypuestos');
            return view('filtroComuna',compact('comunas','puestoFeria'))->with('id',$id);
        }
        foreach($ferias as $feria){
            $puestoFeria = PuestoFeria::all()->where('idFeria', $feria->id);
        }
        return view('filtroComuna',compact('puestoFeria','comunas'))->with('id',$id);


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'NombrePuesto' => ['required'],
            'DescripcionPuesto'=> ['required'],
            'idFeria'=> ['required'],
        ]);
        $puestoFeria = new PuestoFeria();
        $puestoFeria->NombrePuesto = $request->NombrePuesto;
        $puestoFeria->DescripcionPuesto = $request->DescripcionPuesto;
        $puestoFeria->idFeria = $request->idFeria;
        $puestoFeria->estado = true;
        $puestoFeria->save();
        return response()->json([
            "message"=>"Se ha creado un puestoFeria",
            "id"=>$puestoFeria->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puestoFeria = PuestoFeria::find($id);
        $productoPuestos = ProductoPuesto::all()
            ->where('idPuesto',$puestoFeria->id);
        foreach($productoPuestos as $productoPuesto){
            $productos = Producto::all()
                ->where('id',$productoPuesto->idProducto);
        }
        
        return view('productoPuesto',compact('puestoFeria','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $puestoFeria= PuestoFeria::find($id);
        if($puestoFeria!=NULL){
            if($request->NombrePuesto!=NULL){
                $puestoFeria->NombrePuesto = $request->NombrePuesto;
            }
            if($request->DescripcionPuesto!=NULL){
                $puestoFeria->DescripcionPuesto = $request->DescripcionPuesto;
            }
            if($request->idFeria!=NULL){
                $puestoFeria->idFeria = $request->idFeria;
            }
            $puestoFeria->save();
            return response()->json($puestoFeria);
        }
        return response('ERROR 404');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $puestoFeria=PuestoFeria::find($id);
        if($puestoFeria!=NULL){
            $puestoFeria->delete();
            return response()->json([
                "message"=>"Delete a puestoFeria",
                "id"=>$puestoFeria->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el puestoFeria"
        ],404);
    }


    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $puestoFeria=PuestoFeria::find($id);
        if($puestoFeria!=NULL){
            $puestoFeria->estado = false;
            $puestoFeria->save();
            return response()->json([
                "message"=> "SoftDelete a puestoFeria",
                "id"=>$puestoFeria->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el puestoFeria"
        ],404);
    }
}

