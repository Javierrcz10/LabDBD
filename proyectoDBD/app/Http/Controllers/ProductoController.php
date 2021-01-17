<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all()->where('estado', true);
        if($producto != NULL){
            return response()-> json($producto);
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
            'nombreProducto' => ['required'],
            'descripcionProducto'=> ['required'],
            'precioProducto'=> ['required'],
            'idSubCategoria'=> ['required'],
            'idUnidad'=> ['required'],
        ]);
        $producto = new Producto();
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcionProducto = $request->descripcionProducto;
        $producto->precioProducto = $request->precioProducto;
        $producto->idSubCategoria = $request->idSubCategoria;
        $producto->idUnidad = $request->idUnidad;
        $producto->estado = true;
        $producto->save();
        return response()->json([
            "message"=>"Se ha creado un producto",
            "id"=>$producto->id
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
        $producto = Producto::find($id);
        if($producto != NULL){
            return response()-> json($producto);
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
        $producto= Producto::find($id);
        if($producto!=NULL){
            if($request->nombreProducto!=NULL){
                $producto->nombreProducto = $request->nombreProducto;
            }
            if($request->descripcionProducto!=NULL){
                $producto->descripcionProducto = $request->descripcionProducto;
            }
            if($request->precioProducto!=NULL){
                $producto->precioProducto = $request->precioProducto;
            }
            if($request->idSubCategoria!=NULL){
                $producto->idSubCategoria = $request->idSubCategoria;
            }
            if($request->idSubCategoria!=NULL){
                $producto->idUnidad = $request->idUnidad;
            }
            $producto->save();
            return response()->json($producto);
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
        $producto=Producto::find($id);
        if($producto!=NULL){
            $producto->delete();
            return response()->json([
                "message"=>"Delete a producto",
                "id"=>$producto->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el producto"
        ],404);
    }
}

    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $producto=Producto::find($id);
        if($producto!=NULL){
            $producto->estado = false;
            $producto->save();
            return response()->json([
                "message"=> "SoftDelete a producto",
                "id"=>$producto->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el producto"
        ],404);
    }
}
