<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permiso = Permiso::all()->where('estado', true);
        if($permiso != NULL){
            return response()-> json($permiso);
        }
        return response(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombrePermiso' => ['required'],
            'descripcionPermiso'=> ['required'],

        ]);
        $permiso = new Usuario();
        $permiso->nombrePermiso = $request->nombrePermiso;
        $permiso->descripcionPermiso = $request->descripcionPermiso;
        $permiso->estado = true;
        $usuario->save();
        return response()->json([
            "message"=>"Se ha creado un usuario",
            "id"=>$usuario->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permiso = Permiso::find($id);
        if($permiso != NULL){
            return response()-> json($permiso);
        }
        return response('ERROR 404');
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
        $permiso= Permiso::find($id);
        if($permiso!=NULL){
            if($request->nombrePermiso!=NULL){
                $permiso->nombrePermiso = $request->nombrePermiso;
            }
            if($request->descripcionPermiso!=NULL){
                $permiso->descripcionPermiso = $request->descripcionPermiso;
            }
            $usuario->save();
            return response()->json($usuario);
        }
        return response('ERROR 404');
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
