<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boleta;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boleta = Boleta::all()->where('estado', true);
        if($boleta !=NULL){
            return response()-> json($boleta);
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
        $boleta = new Boleta();
        $boleta->precioTotal = $request->precioTotal;
        $boleta->fecha = $request->fecha;
        $boleta->idPago = $request->idPago;
        $boleta->estado = true;
        $boleta->save();
        return response()->json([
            "message"=> "boleta creada",
            "id"=> $boleta->id
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idUsuario, $id)
    {
        $boleta = Boleta::find($id);
        if($boleta != NULL){
            return view('boleta')->with('boleta',$boleta)->with('id',$idUsuario);
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
        $boleta = Boleta::find($id);
        if($boleta != NULL){
            if($request ->precioTotal !=NULL){
                $boleta->precioTotal = $request->precioTotal;
            }
            if($request ->fecha !=NULL){
                $boleta->fecha = $request->fecha;
            }
            if($request ->idPago !=NULL){
                $boleta->idPago = $request->idPago;
            }
            $boleta->save();
            return response()->json($boleta);
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
        $boleta=Boleta::find($id);
        if($boleta!=NULL){
            $boleta->delete();
            return response()->json([
                "message"=>"Delete a boleta",
                "id"=>$boleta->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró la boleta"
        ],404);
    }
    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $boleta=Boleta::find($id);
        if($boleta!=NULL){
            $boleta->estado = false;
            $boleta->save();
            return response()->json([
                "message"=> "SoftDelete a boleta",
                "id"=>$boleta->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el boleta"
        ],404);
    }

    public function store2(Request $request)
    {
        $boleta = new Boleta();
        $boleta->precioTotal = $request->precioTotal;
        $boleta->fecha = $request->fecha;
        $boleta->idPago = $request->idPago;
        $boleta->estado = true;
        $boleta->save();
        return response()->json([
            "message"=> "boleta creada",
            "id"=> $boleta->id
        ],202);
    }
}

    

