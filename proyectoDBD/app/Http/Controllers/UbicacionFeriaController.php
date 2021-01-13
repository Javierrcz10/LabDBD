<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UbicacionFeria;

class UbicacionFeriaController extends Controller
{
    /**
     * mostrar todos los datos de una tabla(get)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicacionFeria = UbicacionFeria::all();
        return response()->json($ubicacionFeria);
    }

    /**
     * crear una nueva tupla(post)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * obtener una tupla especifica de una tabla(get)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacionFeria = UbicacionFeria::find($id);
        return response()->json($ubicacionFeria);
    }


    /**
     * Cambia una tupla especifica(put)
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
     * borrar una tupla especifica()
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
