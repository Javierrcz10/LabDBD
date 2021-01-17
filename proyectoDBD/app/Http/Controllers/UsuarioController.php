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
        $usuario = Usuario::all()->where('estado',true);
        if($usuario != NULL){
            return response()->json($usuario);
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
        $usuario = new Usuario();
        $usuario->nombreUsuario = $request->nombreUsuario;
        $usuario->apodoUsuario = $request->apodoUsuario;
        $usuario->contraseniaUsuario = $request->contraseniaUsuario;
        $usuario->emailUsuario = $request->emailUsuario;
        $usuario->reputacionUsuario = 0.0;
        $usuario->estado = true;
        $usuario->save();
        return response()->json(["message" => "Usuario creado","id" => $usuario->id],202);
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
        if($usuario == NULL){
            return response()->json(["message" => "usuario no existe"],404);
        }
        if($usuario->estado == true){
            return response()->json($usuario);
        }
        return response()->json(["message" => "usuario se encuentra borrado"],404);
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
        $usuario = Usuario::find($id);
        if($request->nombreUsuario != NULL){
            $usuario->nombreUsuario = $request->nombreUsuario;
        }
        if($request->apodoUsuario != NULL){
            $usuario->apodoUsuario = $request->apodoUsuario;
        }
        if($request->contraseniaUsuario != NULL){
            $usuario->contraseniaUsuario = $request->contraseniaUsuario;
        }
        if($request->emailUsuario != NULL){
            $usuario->emailUsuario = $request->emailUsuario;
        }
        if($request->reputacionUsuario != NULL){
            $usuario->reputacionUsuario = $request->reputacionUsuario;
        }
        $usuario->save();
        return response()->json(["message" => "usuario actualizado","id" => $id],201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return response()->json(["message" => "el usuario ha sido borrado","id" => $id],201);
    }

        //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $usuario=Usuario::find($id);
        if($usuario!=NULL){
            $usuario->estado = false;
             $usuario->save();
             return response()->json([
                "message"=> "SoftDelete a usuario",
                "id"=>$usuario->id
             ]);
          }
        return response()->json([
            "message"=>"No se encontró el usuario"
        ],404);
    }
}

