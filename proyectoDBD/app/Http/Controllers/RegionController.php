<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all()->where('estado', true);
        if($region != NULL){
            return response()-> json($region);
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
            'nombreRegion' => ['required'],
        ]);
        $region = new Region();
        $region->nombreRegion = $request->nombreRegion;
        $region->estado = true;
        $region->save();
        return response()->json([
            "message"=>"Se ha creado un region",
            "id"=>$region->id
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
        $region = Region::find($id);
        if($region != NULL){
            return response()-> json($region);
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
        $region= Region::find($id);
        if($region!=NULL){
            if($request->nombreRegion!=NULL){
                $region->nombreRegion = $request->nombreRegion;
            }
            $region->save();
            return response()->json($region);
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
        $region=Region::find($id);
        if($region!=NULL){
            $region->delete();
            return response()->json([
                "message"=>"Delete a region",
                "id"=>$region->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el region"
        ],404);
    }
}
