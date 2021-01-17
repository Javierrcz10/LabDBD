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
        $calle = Calle::all()->where('estado', true);
        if($calle!=NULL){
            return response()-> json($calle);
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
        $calle = new Calle();
        $calle->nombreCalle = $request->nombreCalle;
        $calle->idComuna = $request->idComuna;
        $calle->estado = true;
        $calle->save();
        return response()->json([
            "message"=> "calle creada",
            "id"=> $calle->id

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
        if($calle!=NULL){
            return response()-> json($calle);
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

            $calle =Calle::find($id);
            if($calle!=NULL){
                if($request ->nombreCalle !=NULL){
                    $calle->nombreCalle = $request->nombreCalle;
                }
                if($request ->idComuna !=NULL){
                    $calle->idComuna = $request->idComuna;
                }
                $calle->save();
                return response()->json($calle);
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
        $calle=Calle::find($id);
        if($calle!=NULL){
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

   
