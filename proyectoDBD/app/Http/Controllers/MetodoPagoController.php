<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodoPago;
use App\Models\Boleta;
use \App\Models\UsuarioBoleta;
use App\Models\BoletaProducto;
use \App\Models\UsuarioProducto;
use Illuminate\Support\Facades\DB;
class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodoPago = MetodoPago::all()->where('estado', true);
        if($metodoPago!=NULL){
            return response()-> json($metodoPago);
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
        $metodoPago = new MetodoPago();
        $metodoPago->tipoPago = $request->tipoPago;
        $metodoPago->totalPago = $request->totalPago;
        $metodoPago->nombreBanco = $request->nombreBanco;
        $metodoPago->ultimosDigitos = $request->ultimosDigitos;
        $metodoPago->estado = true;
        $metodoPago->idUsuario = $request->idUsuario;
        $metodoPago->save();
        $boleta = new Boleta();
        $boleta->precioTotal = $request->totalPago;
        $boleta->fecha = date('Y-m-d G:i:s');
        $boleta->idPago = $metodoPago->id;
        $boleta->estado = true;
        $boleta->save();
        $usuarioBoleta = new UsuarioBoleta();
        $usuarioBoleta->idUsuario = $request->idUsuario;
        $usuarioBoleta->idBoleta = $boleta->id;
        $usuarioBoleta->save();
        //se obtienen productos del carrito
        $Producto = DB::table('usuario_productos')
            ->join('productos','usuario_productos.idProducto','=','productos.id')
            ->get()
            ->where('estado' , true)
            ->where('idUsuario' , $request->idUsuario);
        foreach($Producto as $producto){
            $boletaProducto = new BoletaProducto();
            $boletaProducto->idBoleta = $boleta->id;
            $boletaProducto->idProducto = $producto->idProducto;
            $boletaProducto->save();
        }
       


        return redirect()->action([BoletaController::class, 'show'], ['idUsuario' => $request->idUsuario, 'id' => $boleta->id]);
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
        if($metodoPago!=NULL){
            return response()-> json($metodoPago);
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
 
            $metodoPago = MetodoPago::find($id);
            if($metodoPago!=NULL){
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
                if($request ->idUsuario !=NULL){
                    $metodoPago->idUsuario = $request->idUsuario;
                }

                $metodoPago->save();
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
        $metodoPago=MetodoPago::find($id);
        if($metodoPago!=NULL){
            $metodoPago->delete();
            return response()->json([
                "message"=>"Delete al metodo de pago",
                "id"=>$metodoPago->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el metodo de pago"
        ],404);
    }
     //-------softDelete(id)-----------------------------------------
     public function softdestroy($id)
     {
         $metodoPago=MetodoPago::find($id);
         if($metodoPago!=NULL){
             $metodoPago->estado = false;
             $metodoPago->save();
             return response()->json([
                 "message"=> "SoftDelete a metodoPago",
                 "id"=>$metodoPago->id
             ]);
         }
         return response()->json([
             "message"=>"No se encontró el metodoPago"
         ],404);
     }
}

