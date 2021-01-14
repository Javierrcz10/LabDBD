<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoletaProducto;
class BoletaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletaProducto = BoletaProducto::all();
        return response()-> json($boletaProducto);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boletaProducto = new BoletaProducto();
        $boletaProducto->idBoleta = $request->idBoleta;
        $boletaProducto->idProducto = $request->idProducto;
        $boletaProducto->save();
        return response()->json([
            "message"=> "relacion creada"
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
        $boletaProducto = BoletaProducto::find($id);
        return response()-> json($boletaProducto);
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
