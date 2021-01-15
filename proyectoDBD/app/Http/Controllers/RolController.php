<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = rol::all()->where('estado', true);
        if($rol != NULL){
            return response()-> json($rol);
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
            'nombreRol' => ['required'],
            'descripcionRol'=> ['required'],

        ]);
        $rol = new Rol();
        $rol->nombreRol = $request->nombreRol;
        $rol->descripcionRol = $request->descripcionRol;
        $rol->estado = true;
        $rol->save();
        return response()->json([
            "message"=>"Se ha creado un rol",
            "id"=>$rol->id
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
        $rol = rol::find($id);
        if($rol != NULL){
            return response()-> json($rol);
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
        $rol= Rol::find($id);
        if($rol!=NULL){
            if($request->nombreRol!=NULL){
                $rol->nombreRol = $request->nombreRol;
            }
            if($request->descripcionRol!=NULL){
                $rol->descripcionRol = $request->descripcionRol;
            }
            $rol->save();
            return response()->json($rol);
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
        $rol=Rol::find($id);
        if($rol!=NULL){
            $rol->delete();
            return response()->json([
                "message"=>"Delete a rol",
                "id"=>$rol->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el rol"
        ],404);
    }
}
