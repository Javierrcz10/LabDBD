<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\SubCategoria;
use App\Models\Categoria;
use App\Models\ProductoPuesto;
use App\Models\PuestoFeria;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;
use \App\Models\UsuarioProducto;
use Illuminate\Support\Facades\DB;
class UsuarioProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioProducto = UsuarioProducto::all();
        if($usuarioProducto != NULL){
            return response()->json($usuarioProducto);
        }
        return response()->json(['message' => 'no existen datos'],404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioProducto = new UsuarioProducto();
        $usuarioProducto->idUsuario = $request->idUsuario;
        $usuarioProducto->idProducto = $request->idProducto;
        $usuarioProducto->save();
        $productoPuesto = DB::table('puesto_ferias')
        ->join('producto_puestos','producto_puestos.idPuesto','=','puesto_ferias.id')
        ->get()
        ->where('estado' , true)
        ->where('idProducto' , $request->idProducto);
        $producto = Producto::find($request->idProducto);
        $unidadMedida = UnidadMedida::find($producto->idUnidad);
        return view('producto')
        ->with('producto' , $producto)
        ->with('productoPuesto', $productoPuesto)
        ->with('unidadMedida', $unidadMedida)
        ->with('id',$request->idProducto)
        ->with('idUsuario',$request->idUsuario)
        ->with('message',"se agrego al carrito exitosamente");
        return response()->json(["message" => "relacion creada","id" => $usuarioProducto->id],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$usuarioProducto = UsuarioProducto::find($id);
        $usuarioProducto = DB::table('usuario_productos')
            ->join('productos','usuario_productos.idProducto','=','productos.id')
            ->get()
            ->where('estado' , true)
            ->where('idUsuario' , $id);
        //$usuarioProducto = UsuarioProducto::all()->where('idProducto', $id);
        if($usuarioProducto != NULL){
            return view('carritoCompra')
                ->with('usuarioProducto' , $usuarioProducto)
                ->with('id',$id);
        }
        return response()->json(['message' => 'no existen datos'],404);
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
        $usuarioProducto = UsuarioProducto::find($id);
        if($request->idUsuario != NULL){
            $usuarioProducto->idUsuario = $request->idUsuario;
        }
        if($request->idProducto){
            $usuarioProducto->idProducto = $request->idProducto;
        }
        $usuarioProducto->save();
        return response()->json(["message" => "usuario producto actualizado","id" => $id],201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioProducto = UsuarioProducto::find($id);
        $usuarioProducto->delete();
        return response()->json(["message" => "el usuario producto ha sido borrado","id" => $id],201);
    }

    public function show2($id)
    {
        //$usuarioProducto = UsuarioProducto::find($id);
        $usuarioProducto = DB::table('usuario_productos')
            ->join('productos','usuario_productos.idProducto','=','productos.id')
            ->get()
            ->where('estado' , true)
            ->where('idUsuario' , $id);
        //$usuarioProducto = UsuarioProducto::all()->where('idProducto', $id);
        $precioTotal = 0;
        foreach ($usuarioProducto as $precio){
            $precioTotal = $precioTotal + $precio->precioProducto;
        }
        if($usuarioProducto != NULL){
            return view('debito')
                ->with('usuarioProducto' , $usuarioProducto)
                ->with('id',$id)
                ->with('total',$precioTotal);

        }
        return response()->json(['message' => 'no existen datos'],404);
    }

    public function show3($id)
    {
        //$usuarioProducto = UsuarioProducto::find($id);
        $usuarioProducto = DB::table('usuario_productos')
            ->join('productos','usuario_productos.idProducto','=','productos.id')
            ->get()
            ->where('estado' , true)
            ->where('idUsuario' , $id);
        //$usuarioProducto = UsuarioProducto::all()->where('idProducto', $id);
        $precioTotal = 0;
        foreach ($usuarioProducto as $precio){
            $precioTotal = $precioTotal + $precio->precioProducto;
        }
        if($usuarioProducto != NULL){
            return view('credito')
                ->with('usuarioProducto' , $usuarioProducto)
                ->with('id',$id)
                ->with('total',$precioTotal);

        }
        return response()->json(['message' => 'no existen datos'],404);
    }
}
