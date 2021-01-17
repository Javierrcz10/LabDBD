<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UsuarioRol;
class UsuarioRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioRol = UsuarioRol::all();
        if($usuarioRol != NULL){
            return response()->json($usuarioRol);
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
        $usuarioRol = new UsuarioRol();
        $usuarioRol->idUsuario = $request->idUsuario;
        $usuarioRol->idRol = $request->idRol;
        $usuarioRol->save();
        return response()->json(["message" => "relacion creada","id" => $usuarioRol->id],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioRol = UsuarioRol::find($id);
        if($usuarioRol != NULL){
            return response()->json($usuarioRol);
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
        $usuarioRol = UsuarioRol::find($id);
        if($request->idUsuario != NULL){
            $usuarioRol->idUsuario = $request->idUsuario;
        }
        if($request->idRol != NULL){
            $usuarioRol->idRol = $request->idRol;
        }

        $usuarioRol->save();
        return response()->json(["message" => "usuario rol actualizado","id" => $id],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioRol = UsuarioRol::find($id);
        $usuarioRol->delete();
        return response()->json(["message" => "el usuario rol ha sido borrado","id" => $id],201);
    }
}
