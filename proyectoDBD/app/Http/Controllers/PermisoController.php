<?php

namespace App\Http\Controllers;
use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permiso = Permiso::all()->where('estado', true);
        if($permiso != NULL){
            return response()-> json($permiso);
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
            'nombrePermiso' => ['required'],
            'descripcionPermiso'=> ['required'],

        ]);
        $permiso = new Permiso();
        $permiso->nombrePermiso = $request->nombrePermiso;
        $permiso->descripcionPermiso = $request->descripcionPermiso;
        $permiso->estado = true;
        $permiso->save();
        return response()->json([
            "message"=>"Se ha creado un permiso",
            "id"=>$permiso->id
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
        $permiso = Permiso::find($id);
        if($permiso != NULL){
            return response()-> json($permiso);
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
        $permiso = Permiso::find($id);
        if($permiso!=NULL){
            if($request->nombrePermiso!=NULL){
                $permiso->nombrePermiso = $request->nombrePermiso;
            }
            if($request->descripcionPermiso!=NULL){
                $permiso->descripcionPermiso = $request->descripcionPermiso;
            }
            $permiso->save();
            return response()->json($permiso);
        }
        return response()->json("no se encontro");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso=Permiso::find($id);
        if($permiso!=NULL){
            $permiso->delete();
            return response()->json([
                "message"=>"Delete a permiso",
                "id"=>$permiso->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el permiso"
        ],404);
    }
    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $permiso=Permiso::find($id);
        if($permiso!=NULL){
            $permiso->estado = false;
            $permiso->save();
            return response()->json([
                "message"=> "SoftDelete a permiso",
                "id"=>$permiso->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el permiso"
        ],404);
    }
}

