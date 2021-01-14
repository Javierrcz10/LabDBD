<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolPermiso = RolPermiso::all()->where('estado', true);
        if($rolPermiso != NULL){
            return response()-> json($rolPermiso);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $validated = $request->validate([
            'idRol' => ['required'],
            'idPermiso'=> ['required'],

        ]);
        $rolPermiso = new RolPermiso();
        $rolPermiso->idRol = $request->idRol;
        $rolPermiso->idPermiso = $request->idPermiso;
        $rolPermiso->estado = true;
        $rolPermiso->save();
        return response()->json([
            "message"=>"Se ha creado un usuario",
            "id"=>$rolPermiso->id
        ]);
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
