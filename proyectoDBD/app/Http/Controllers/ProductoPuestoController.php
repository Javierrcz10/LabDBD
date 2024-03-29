<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\PuestoFeria;
use App\Models\Feria;
use App\Models\Usuario;
use App\Models\UsuarioPuesto;
use App\Models\ProductoPuesto;
use Illuminate\Support\Facades\DB;
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
        $productoPuesto = ProductoPuesto::all();

        return view('productosPuesto',compact('productoPuesto'));
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
            'idPuesto'=> ['required'],
        ]);
        $productoPuesto = new ProductoPuesto();
        $productoPuesto->cantidad = $request->cantidad;
        $productoPuesto->idProducto = $request->idProducto;
        $productoPuesto->idPuesto = $request->idPuesto;
        $productoPuesto->estado = true;
        $productoPuesto->save();
        return response()->json([
            "message"=>"Se ha creado un productoPuesto",
            "id"=>$productoPuesto->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idUsuario,$id)
    {

        $puestoFerias = PuestoFeria::find($id);
        $usuarios = Usuario::join('usuario_puestos','usuario_puestos.idUsuario','=','usuarios.id')
            ->where('usuarios.estado', true)
            ->where('usuario_puestos.idPuesto', $id)
            ->get();
        $productos = Producto::join('producto_puestos','producto_puestos.idProducto','=','productos.id')
            ->where('producto_puestos.idPuesto', $id)
            ->get();
        
        return view('productosPuesto',compact('puestoFerias','productos','usuarios'))->with('idUsuario',$idUsuario)->with('id',$id);
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
        $productoPuesto= ProductoPuesto::find($id);
        if($productoPuesto!=NULL){
            if($request->cantidad!=NULL){
                $productoPuesto->cantidad = $request->cantidad;
            }
            if($request->idProducto!=NULL){
                $productoPuesto->idProducto = $request->idProducto;
            }
            if($request->idPuesto!=NULL){
                $productoPuesto->idPuesto = $request->idPuesto;
            }
            $productoPuesto->save();
            return response()->json($productoPuesto);
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
        $productoPuesto=productoPuesto::find($id);
        if($productoPuesto!=NULL){
            $productoPuesto->delete();
            return response()->json([
                "message"=>"Delete a productoPuesto",
                "id"=>$productoPuesto->id
            ],202);
        }
        return response()->json([
            "message"=>"No se encontró el productoPuesto"
        ],404);
    }


    //-------softDelete(id)-----------------------------------------
    public function softdestroy($id)
    {
        $productoPuesto=ProductoPuesto::find($id);
        if($productoPuesto!=NULL){
            $productoPuesto->estado = false;
            $productoPuesto->save();
            return response()->json([
                "message"=> "SoftDelete a productoPuesto",
                "id"=>$productoPuesto->id
            ]);
        }
        return response()->json([
            "message"=>"No se encontró el productoPuesto"
        ],404);
    }
}
