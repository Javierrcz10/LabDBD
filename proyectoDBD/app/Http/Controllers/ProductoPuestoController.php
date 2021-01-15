<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoPuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productoPuestro = Producto::all()->where('estado', true);
        if($productoPuestro != NULL){
            return response()-> json($productoPuestro);
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
            'cantidad' => ['required'],
            'idProducto'=> ['required'],
            'idpuesto'=> ['required'],
        ]);
        $productoPuesto = new ProductoPuesto();
        $productoPuesto->cantidad = $request->cantidad;
        $productoPuesto->idProducto = $request->idProducto;
        $productoPuesto->idPuesto = $request->idPuesto;
        $productoPuesto->estado = true;
        $productoPuesto->save();
        return response()->json([
            "message"=>"Se ha creado un usuario",
            "id"=>$productoPuesto->id
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
        $productoPuestroPuesto = ProductoPuesto::find($id);
        if($productoPuestroPuesto != NULL){
            return response()-> json($productoPuestroPuesto);
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
