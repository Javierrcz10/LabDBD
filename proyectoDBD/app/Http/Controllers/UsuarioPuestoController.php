<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UsuarioPuesto;
class UsuarioPuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioPuesto = UsuarioPuesto::all();
        return response()->json($usuarioPuesto);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioPuesto new UsuarioPuesto();
        $usuarioPuesto->idUsuario = $request->idUsuario;
        $usuarioPuesto->idPuesto = $request->idPuesto;
        $usuarioPuesto->save();
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
        $usuarioPuesto = UsuarioPuesto::find($id);
        return response()->json($usuarioPuesto);
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
        $usuarioPuesto = UsuarioPuesto::find($id);
        if($request->idUsuario != NULL){
            $usuarioPuesto->idUsuario = $request->idUsuario;
        }
        if($request->idPuesto != NULL){
            $usuarioPuesto->idPuesto = $request->idPuesto;
        }

        $usuarioPuesto->save();
        return response()->json(["message" = "usuario puesto actualizado"],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioPuesto = UsuarioPuesto::find($id);
        $usuarioPuesto->delete();
        return response()->json(["message" = "el usuario puesto ha sido borrado"],201);
    }
}
