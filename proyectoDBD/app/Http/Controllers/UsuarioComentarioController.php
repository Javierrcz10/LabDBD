<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UsuarioComentario;
class UsuarioComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioComentario = UsuarioComentario::all();
        if($usuarioComentario != NULL){
            return response()->json($usuarioComentario);
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
        $usuarioComentario = new UsuarioComentario();
        $usuarioComentario->idUsuario = $request->idUsuario;
        $usuarioComentario->idComentario = $request->idComentario;
        $usuarioComentario->save();
        return response()->json(["message" => "relacion creada","id" => $usuarioComentario->id],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioComentario = UsuarioComentario::find($id);
        if($usuarioComentario != NULL){
            return response()->json($usuarioComentario);
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
        $usuarioComentario = UsuarioComentario::find($id);
        if($request->idUsuario != NULL){
            $usuarioComentario->idUsuario = $request->idUsuario;
        }

        if($request->idComentario != NULL){
            $usuarioComentario->idComentario = $request->idComentario;
        }

        $usuarioComentario->save();
        return response()->json(["message" => "usuario comentario actualizado","id" => $id],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioComentario = UsuarioComentario::find($id);
        $usuarioComentario->delete();
        return response()->json(["message" => "el usuario comentario ha sido borrado","id" => $id],201);
    }
}
