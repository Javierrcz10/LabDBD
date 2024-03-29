<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentario = Comentario::all()->where('estado', true);
        if($comentario!=NULL){
            return response()-> json($comentario);
        }
        return response('ERROR 404');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comentario = new Comentario();
        $comentario->contenido = $request->contenido;
        $comentario->calificacion = $request->calificacion;
        $comentario->idBoleta = $request->idBoleta;
        $comentario->estado = true;
        $comentario->save();
        return response()->json([
            "message"=> "comentario creado",
            "id"=> $comentario->id
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
        $comentario = Comentario::find($id);
        if($comentario!=NULL){
            return response()-> json($comentario);
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

        $comentario = Comentario::find($id);
        if($comentario!=NULL){
            if($request ->contenido !=NULL){
                $comentario->contenido = $request->contenido;
            }
            if($request ->calificacion !=NULL){
                $comentario->calificacion = $request->calificacion;
            }
            if($request ->idBoleta !=NULL){
                $comentario->idBoleta = $request->idBoleta;
            }
            $comentario->save();
            return response()->json($id);
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
        $comentario=Comentario::find($id);
        if($comentario!=NULL){
            $comentario->delete();
            return response()->json([
                "message"=>"Delete a comentario",
                "id"=>$comentario->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el comentario"
        ],404);
    }
     //-------softDelete(id)-----------------------------------------
     public function softdestroy($id)
     {
         $comentario=Comentario::find($id);
         if($comentario!=NULL){
             $comentario->estado = false;
             $comentario->save();
             return response()->json([
                 "message"=> "SoftDelete a comentario",
                 "id"=>$comentario->id
             ]);
         }
         return response()->json([
             "message"=>"No se encontró el comentario"
         ],404);
     }
}

