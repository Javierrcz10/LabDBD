<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria;
class FeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feria = Feria::all();
        return response()-> json($feria);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feria = new Feria();
        $feria->nombre = $request->nombre;
        $feria->descripcion = $request->descripcion;
        $feria->save();
        return response()->json([
            "message"=> "feria creada"
            "id"=> $feria->id
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
        $feria = Feria::find($id);
        return response()-> json($feria);
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

        $feria = Feria::find($id);
        if($request ->nombre !=NULL){
            $feria->nombre = $request->nombre;
        }
        if($request ->descripcion !=NULL){
            $feria->descripcion = $request->descripcion;
        }
        $feria->save();
        return response()->json($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feria=Feria::find($id);
        if($feria!=NULL){
            $feria->delete();
            return response()->json([
                "message"=>"Delete a feria",
                "id"=>$feria->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró la feria"
        ],404);
    }
}

    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $feria=Feria::find($id);
        if($feria!=NULL){
            $feria->estado = false;
            $feria->save();
            return response()->json([
                "message"=> "SoftDelete a feria",
                "id"=>$feria->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró la feria"
        ],404);
    }
}
