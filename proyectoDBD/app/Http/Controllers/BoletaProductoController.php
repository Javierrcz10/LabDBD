<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoletaProducto;
class BoletaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletaProductoProducto = BoletaProducto::all();
        return response()-> json($boletaProductoProducto);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boletaProductoProducto = new BoletaProducto();
        $boletaProductoProducto->idBoleta = $request->idBoleta;
        $boletaProductoProducto->idProducto = $request->idProducto;
        $boletaProductoProducto->save();
        return response()->json([
            "message"=> "relacion creada"
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boletaProductoProducto = BoletaProducto::find($id);
        return response()-> json($boletaProductoProducto);
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

        $boletaProductoProducto = BoletaProducto::find($id);
        if($request ->idBoleta !=NULL){
            $boletaProductoProducto->idBoleta = $request->idBoleta;
        }
        if($request ->idProducto !=NULL){
            $boletaProductoProducto->idProducto = $request->idProducto;
        }
        $boletaProductoProducto->save();
        return response()->json($boletaProductoProducto);
            
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boletaProductoProducto=BoletaProducto::find($id);
        if($boletaProductoProducto!=NULL){
            $boletaProductoProducto->delete();
            return response()->json([
                "message"=>"Delete a boletaProductoProducto",
                "id"=>$boletaProductoProducto->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró la boletaProductoProducto"
        ],404);
    }
}

