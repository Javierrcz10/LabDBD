<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UbicacionUsuario;
class UbicacionUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicacionUsuario = UbicacionUsuario::all();
        return response()->json($ubicacionUsuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ubicacionUsuario = new UbicacionUsuario();
        $ubicacionUsuario->idUbicacion = $request->idUbicacion;
        $ubicacionUsuario->idUsuario = $request->idUsuario;
        $ubicacionUsuario->save();
        return response()->json(["message" = "relacion creada"],202); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacionUsuario = UbicacionUsuario::find($id);
        return response()->json($ubicacionUsuario);
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
        $ubicacionUsuario = UbicacionUsuario::find($id);

        if($request->idUbicacion != NULL){
            $ubicacionUsuario->idUbicacion = $request->idUbicacion;
        }

        if($request->idUsuario != NULL){
            $ubicacionUsuario->idUsuario = $request->idUsuario;
        }
        $ubicacionUsuario->save();
        return response()->json(["message" = "ubicacion usuario actualizado"],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubicacionUsuario = UbicacionUsuario::find($id);
        $ubicacionUsuario->delete();
        return response()->json(["message" = "la ubicacion usuario ha sido borrado"],201);
    }
}
