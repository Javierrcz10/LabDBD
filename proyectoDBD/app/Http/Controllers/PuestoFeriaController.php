<?php

namespace App\Http\Controllers;
use App\Models\PuestoFeria;
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
            "message"=>"Se ha creado un puestoFeria",
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $puestoFeria= PuestoFeria::find($id);
        if($puestoFeria!=NULL){
            if($request->nombrePuesto!=NULL){
                $puestoFeria->nombrePuesto = $request->nombrePuesto;
            }
            if($request->descripcionPuesto!=NULL){
                $puestoFeria->descripcionPuesto = $request->descripcionPuesto;
            }
            if($request->idFeria!=NULL){
                $puestoFeria->idFeria = $request->idFeria;
            }
            $puestoFeria->save();
            return response()->json($puestoFeria);
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
        $puestoFeria=PuestoFeria::find($id);
        if($puestoFeria!=NULL){
            $puestoFeria->delete();
            return response()->json([
                "message"=>"Delete a puestoFeria",
                "id"=>$puestoFeria->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el puestoFeria"
        ],404);
    }


    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $puestoFeria=PuestoFeria::find($id);
        if($puestoFeria!=NULL){
            $puestoFeria->estado = false;
            $puestoFeria->save();
            return response()->json([
                "message"=> "SoftDelete a puestoFeria",
                "id"=>$puestoFeria->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el puestoFeria"
        ],404);
    }
}

