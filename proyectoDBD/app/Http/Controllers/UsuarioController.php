<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Usuario;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all()->where($usuario->estado,true);
        return response()->json($usuario);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombreUsuario = $request->nombreUsuario;
        $usuario->apodoUsuario = $request->apodoUsuario;
        $usuario->contraseniaUsuario = $request->contraseniaUsuario;
        $usuario->emailUsuario = $request->emailUsuario;
        $usuario->reputacionUsuario = 0.0;
        $usuario->estado = true;
        $usuario->save();
        return response()->json(['usuario creado'],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        //verificar si el usuario esta borrado o no
        if($usuario->estado == true){
            return response()->json($usuario);
        }
        return response()->json(['usuario se encuentra borrado'],404);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
