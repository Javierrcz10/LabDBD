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
        $boleta = Boleta::all();
        return response()-> json($boleta);
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
        $boleta->save();
        return response()->json([
            "message"=> "boleta creada"
            "id"=> $boleta->id
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
        $boleta = Boleta::find($id);
        return response()-> json($boleta);
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
