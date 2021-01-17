<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UnidadMedida;
class UnidadMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidadMedida = UnidadMedida::all();
        return response()->json($unidadMedida);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidadMedida = new UnidadMedida();
        $unidadMedida->tipoUnidad = $request->tipoUnidad;
        $unidadMedida->estado = true;
        $unidadMedida->save();
        return response()->json(["message" = "unidad creada"],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unidadMedida = UnidadMedida::find($id);
        return response()->json($unidadMedida);
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
        $unidadMedida = UnidadMedida::find($id);

        if($request->tipoUnidad != NULL){
            $unidadMedida->tipoUnidad = $request->tipoUnidad;
        }
        $unidadMedida->save();
        return response()->json(["message" = "unidad medida actualizada"],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidadMedida = UnidadMedida::find($id);
        $unidadMedida->delete();
        return response()->json(["message" = "la unidad medida ha sido borrado"],201);
    }
}


    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $unidadMedida=UnidadMedida::find($id);
        if($unidadMedida!=NULL){
            $unidadMedida->estado = false;
            $unidadMedida->save();
            return response()->json([
                "message"=> "SoftDelete a unidadMedida",
                "id"=>$unidadMedida->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el unidadMedida"
        ],404);
    }
}
