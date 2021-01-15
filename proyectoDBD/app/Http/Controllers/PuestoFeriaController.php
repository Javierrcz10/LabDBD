<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuestoFeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestoFeria = PuestoFeria::all()->where('estado', true);
        if($puestoFeria != NULL){
            return response()-> json($puestoFeria);
        }
        return response(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombrePuesto' => ['required'],
            'descripcionPuesto'=> ['required'],
            'idFeria'=> ['required'],
        ]);
        $puestoFeria = new PuestoFeria();
        $puestoFeria->nombrePuesto = $request->nombrePuesto;
        $puestoFeria->descripcionPuesto = $request->descripcionPuesto;
        $puestoFeria->idFeria = $request->idFeria;
        $puestoFeria->estado = true;
        $puestoFeria->save();
        return response()->json([
            "message"=>"Se ha creado un usuario",
            "id"=>$puestoFeria->id
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
        $puestoFeria = PuestoFeria::find($id);
        if($puestoFeria != NULL){
            return response()-> json($puestoFeria);
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
