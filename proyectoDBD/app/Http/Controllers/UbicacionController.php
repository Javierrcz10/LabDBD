<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicacion = Ubicacion::all()->where('estado', true);
        if($ubicacion != NULL){
            return response()-> json($ubicacion);
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
            'numeroDireccion' => ['required'],
            'idCalle'=> ['required'],
        ]);
        $ubicacion = new Ubicacion();
        $ubicacion->numeroDireccion = $request->numeroDireccion;
        $ubicacion->idCalle = $request->idCalle;
        $ubicacion->estado = true;
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
        $ubicacion = Ubicacion::find($id);
        if($ubicacion != NULL){
            return response()-> json($ubicacion);
        }
        return response('ERROR 404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
