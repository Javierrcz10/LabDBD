<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calle;
class CalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calle = Calle::all();
        return response()-> json($calle);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calle = new Calle();
        $calle->nombre = $request->nombre;
        $calle->idComuna = $request->idComuna;
        $calle->save();
        return response()->json([
            "message"=> "calle creada"
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calle = Calle::find($id);
        return response()-> json($calle);
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

            $calle =Calle::find($id);
            if($request ->nombre !=NULL){
                $calle->nombre = $request->nombre;
            }
            if($request ->idComuna !=NULL){
                $calle->idComuna = $request->idComuna;
            }
            $calle->save();
            return response()->json($calle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calle=Calle::find($id);
        if($permiso!=NULL){
            $calle->delete();
            return response()->json([
                "message"=>"Delete a calle",
                "id"=>$calle->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró la calle"
        ],404);
    }
}

    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $calle=Calle::find($id);
        if($calle!=NULL){
            $calle->estado = false;
            $calle->save();
            return response()->json([
                "message"=> "SoftDelete a calle",
                "id"=>$calle->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el calle"
        ],404);
    }
}
