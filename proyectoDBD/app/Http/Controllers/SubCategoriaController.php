<?php

namespace App\Http\Controllers;
use App\Models\SubCategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategoria = SubCategoria::all()->where('estado', true);
        if($subCategoria != NULL){
            return response()-> json($subCategoria);
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
            'nombreCategoria' => ['required'],

        ]);
        $subCategoria = new SubCategoria();
        $subCategoria->nombreCategoria = $request->nombreCategoria;
        $subCategoria->estado = true;
        $subCategoria->save();
        return response()->json([
            "message"=>"Se ha creado un subCategoria",
            "id"=>$subCategoria->id
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
        $subCategoria = SubCategoria::find($id);
        if($subCategoria != NULL){
            return response()-> json($subCategoria);
        }
        return response('ERROR 404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $subCategoria= SubCategoria::find($id);
        if($subCategoria!=NULL){
            if($request->nombreCategoria!=NULL){
                $subCategoria->nombreCategoria = $request->nombreCategoria;
            }
            $subCategoria->save();
            return response()->json($subCategoria);
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
        $subCategoria=SubCategoria::find($id);
        if($subCategoria!=NULL){
            $subCategoria->delete();
            return response()->json([
                "message"=>"Delete a subCategoria",
                "id"=>$subCategoria->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el subCategoria"
        ],404);
    }



    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $subCategoria=SubCategoria::find($id);
        if($subCategoria!=NULL){
            $subCategoria->estado = false;
            $subCategoria->save();
            return response()->json([
                "message"=> "SoftDelete a subCategoria",
                "id"=>$subCategoria->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el subCategoria"
        ],404);
    }
}
