<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodoPago;
class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodoPago = MetodoPago::all();
        return response()-> json($metodoPago);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $metodoPago = new MetodoPago();
        $metodoPago->tipoPago = $request->tipoPago;
        $metodoPago->totalPago = $request->totalPago;
        $metodoPago->nombreBanco = $request->nombreBanco;
        $metodoPago->ultimosDigitos = $request->ultimosDigitos;
        $metodoPago->save();
        return response()->json([
            "message"=> "metodo de pago creado"
            "id"=> $metodoPago->id
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
        $metodoPago = MetodoPago::find($id);
        return response()-> json($metodoPago);
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
 
            $metodoPago = MetodoPago::find($id);
            if($request ->tipoPago !=NULL){
                $metodoPago->tipoPago = $request->tipoPago;
            }
            if($request ->totalPago !=NULL){
                $metodoPago->totalPago = $request->totalPago;
            }
            if($request ->nombreBanco !=NULL){
                $metodoPago->nombreBanco = $request->nombreBanco;
            }
            if($request ->ultimosDigitos !=NULL){
                $metodoPago->ultimosDigitos = $request->ultimosDigitos;
            }

            $metodoPago->save();
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
        //
    }
}
