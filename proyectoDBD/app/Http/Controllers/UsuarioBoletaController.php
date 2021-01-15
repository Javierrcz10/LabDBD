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
        return response()->json($usuarioBoleta);
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
        $usuarioBoleta = UsuarioBoleta::find($id);
        return response()->json($usuarioBoleta);
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
        return response()->json(["message" = "usuario boleta actualizado"],201);

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
        return response()->json(["message" = "el usuario boleta ha sido borrado"],201);
    }
}
