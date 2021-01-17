<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UsuarioBoleta;
class UsuarioBoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioBoleta = UsuarioBoleta::all();
        if($usuarioBoleta != NULL){
            return response()->json($usuarioBoleta);
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
        $usuarioBoleta = new UsuarioBoleta();
        $usuarioBoleta->idUsuario = $request->idUsuario;
        $usuarioBoleta->idBoleta = $request->idBoleta;
        $usuarioBoleta->save();
        return response()->json(["message" => "relacion creada","id" => $usuarioBoleta->id],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioBoleta = UsuarioBoleta::find($id);
        if($usuarioBoleta != NULL){
            return response()->json($usuarioBoleta);
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
        $usuarioBoleta = UsuarioBoleta::find($id);
        if($request->idUsuario != NULL){
            $usuarioBoleta->idUsuario = $request->idUsuario;
        }

        if($request->idBoleta != NULL){
            $usuarioBoleta->idBoleta = $request->idBoleta;
        }
        $usuarioBoleta->save();
        return response()->json(["message" => "usuario boleta actualizado","id" => $id],201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioBoleta = UsuarioBoleta::find($id);
        $usuarioBoleta->delete();
        return response()->json(["message" => "el usuario boleta ha sido borrado","id" => $id],201);
    }
}
