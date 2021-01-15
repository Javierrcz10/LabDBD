<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UsuarioProducto;
class UsuarioProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioProducto = UsuarioProducto::all();
        return response()->json($usuarioProducto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioProducto = new UsuarioProducto();
        $usuarioProducto->idUsuario = $request->idUsuario;
        $usuarioProducto->idProducto = $request->idProducto;
        $usuarioProducto->save();
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
        $usuarioProducto = UsuarioProducto::find($id);
        return response()->json($usuarioProducto);
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
        $usuarioProducto = UsuarioProducto::find($id);
        if($request->idUsuario != NULL){
            $usuarioProducto->idUsuario = $request->idUsuario;
        }
        if($request->idProducto){
            $usuarioProducto->idProducto = $request->idProducto;
        }
        $usuarioProducto->save();
        return response()->json(["message" = "usuario producto actualizado"],201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioProducto = UsuarioProducto::find($id);
        $usuarioProducto->delete();
        return response()->json(["message" = "el usuario producto ha sido borrado"],201);
    }
}
