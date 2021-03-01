<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comuna;
class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comuna = Comuna::all()
            ->where('estado', true);
        if($comuna!=NULL){
            return view('filtroComuna',compact('comuna'));
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
        $comuna = new Comuna();
        $comuna->nombreComuna = $request->nombreComuna;
        $comuna->idRegion = $request->idRegion;
        $comuna->estado = true;
        $comuna->save();
        return response()->json([
            "message"=> "comuna creada",
            "id"=> $comuna->id
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
        $comuna = Comuna::find($id);
        if($comuna!=NULL){
            return response()-> json($comuna);
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

            $comuna = Comuna::find($id);
            if($comuna!=NULL){
                if($request ->nombreComuna !=NULL){
                    $comuna->nombreComuna = $request->nombreComuna;
                }
                if($request ->idRegion !=NULL){
                    $comuna->idRegion = $request->idRegion;
                }
                $comuna->save();
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
        $comuna=Comuna::find($id);
        if($comuna!=NULL){
            $comuna->delete();
            return response()->json([
                "message"=>"Delete a comuna",
                "id"=>$comuna->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró la comuna"
        ],404);
    }
     //-------softDelete(id)-----------------------------------------
     public function softdestroy($id)
     {
         $comuna=Comuna::find($id);
         if($comuna!=NULL){
             $comuna->estado = false;
             $comuna->save();
             return response()->json([
                 "message"=> "SoftDelete a comuna",
                 "id"=>$comuna->id
             ]);
         }
         return response()->json([
             "message"=>"No se encontró el comuna"
         ],404);
     }
}
