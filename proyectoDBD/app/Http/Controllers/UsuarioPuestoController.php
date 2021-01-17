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
        if($usuarioPuesto != NULL){
            return response()->json($usuarioPuesto);
        }
        return response()->json(['message' => 'no existen datos'],404);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioPuesto = new UsuarioPuesto();
        $usuarioPuesto->idUsuario = $request->idUsuario;
        $usuarioPuesto->idPuesto = $request->idPuesto;
        $usuarioPuesto->save();
        return response()->json(["message" => "relacion creada","id" => $usuarioPuesto->id],202);
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
        if($usuarioPuesto != NULL){
            return response()->json($usuarioPuesto);
        }
        return response()->json(['message' => 'no existen datos'],404);
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
        return response()->json(["message" => "usuario puesto actualizado","id" => $id],201);
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
        return response()->json(["message" => "el usuario puesto ha sido borrado","id" => $id],201);
    }
}
