<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Usuario;
use \App\Models\Rol;
use App\Models\PuestoFeria;
use \App\Models\UsuarioRol;
use Illuminate\Support\Facades\DB;

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
        return redirect('/')->with('message',"Registro exitoso");
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
        $usuarioRoles = DB::table('usuario_rols')
            ->join('rols','rols.id','=','usuario_rols.idRol')
            ->get()
            //->select('usuario_rols.*','rols.nombreRol');
            ->where('idUsuario', $id);
            //->where('estado', true);
        //$usuarioRoles = UsuarioRol::all()->where('idUsuario', $id);
        //$roles = Rol::all()->where('estado', true);
        $roles = DB::table('rols')
            ->distinct(['nombreRol'])
            ->get()
            ->where('estado', true);
        $puestoFerias = PuestoFeria::all();

        $usuarioPuestos = DB::table('usuario_puestos')
            ->join('puesto_ferias','puesto_ferias.id','=','usuario_puestos.idPuesto')
            ->get()
            ->where('idUsuario', $id);
        //verificar si el usuario esta borrado o no
        if($usuario == NULL){
            return response()->json(["message" => "usuario no existe"],404);
        }
        if($usuario->estado == true){
            return view('perfil')
            ->with('usuario',$usuario)
            ->with('roles',$roles)
            ->with('roles2',$roles)
            ->with('usuarioRoles',$usuarioRoles)
            ->with('usuarioPuestos',$usuarioPuestos)
            ->with('puestoFerias',$puestoFerias)
            ->with('usuarioRoles2',$usuarioRoles);
        }
        return response()->json(["message" => "usuario se encuentra borrado"],404);
    }

    public function editar($id)
    {
        $usuario = Usuario::find($id);
        
        if($usuario == NULL){
            return response()->json(["message" => "usuario no existe"],404);
        }
        if($usuario->estado == true){
            return view('editarPerfil')
                ->with('usuario',$usuario);
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
        $usuarioRoles = DB::table('usuario_rols')
            ->join('rols','rols.id','=','usuario_rols.idRol')
            ->get()
            //->select('usuario_rols.*','rols.nombreRol');
            ->where('idUsuario', $id)       
            ->where('estado', true);
        //$usuarioRoles = UsuarioRol::all()->where('idUsuario', $id);
        $roles = Rol::all()->where('estado', true);
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
        return view('perfil')
        ->with('usuario',$usuario)
        ->with('roles',$roles)
        ->with('usuarioRoles',$usuarioRoles);

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
    public function show2(Request $request)
    {
        $usuario = Usuario::all()->where('estado',true)
        ->where('apodoUsuario',$request->apodoUsuario)
        ->where('contraseniaUsuario',$request->contraseniaUsuario)->first();
            
        if($usuario == NULL){
            return redirect('/inicioSesion');
        }
        return view('inicio2')->with('id',$usuario->id);
    }
}

