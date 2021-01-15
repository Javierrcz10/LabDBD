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
        return response()->json($usuarioRol);
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
        $usuarioRol = UsuarioRol::find($id);
        return response()->json($usuarioRol);
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
        return response()->json(["message" = "usuario rol actualizado"],201);
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
        return response()->json(["message" = "el usuario rol ha sido borrado"],201);
    }
}
