<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all()->where('estado', true);
        if($categoria!=NULL){
            return response()-> json($categoria);
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
        $categoria = new Categoria();
        $categoria->nombreCategoria = $request->nombreCategoria;
        $categoria->estado = true;
        $categoria->save();
        return response()->json([
            "message"=> "categoria creada",
            "id"=> $categoria->id
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
        $categoria = Categoria::find($id);
        if($categoria!=NULL){
            return response()-> json($categoria);
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

        $categoria =Categoria::find($id);
        if($categoria!=NULL){
            if($request ->nombreCategoria !=NULL){
                $categoria->nombreCategoria = $request->nombreCategoria;
            }
            $categoria->save();
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
        $categoria=Categoria::find($id);
        if($categoria!=NULL){
            $categoria->delete();
            return response()->json([
                "message"=>"Delete a categoria",
                "id"=>$categoria->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró la categoria"
        ],404);
    }
    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $categoria=Categoria::find($id);
        if($categoria!=NULL){
            $categoria->estado = false;
            $categoria->save();
            return response()->json([
                "message"=> "SoftDelete a categoria",
                "id"=>$categoria->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el categoria"
        ],404);
    }
}

   