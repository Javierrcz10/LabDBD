<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\SubCategoria;
use App\Models\Categoria;
use App\Models\ProductoPuesto;
use App\Models\PuestoFeria;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $categoria = $request->get('categoria');
        $subCategoria = $request->get('subCategoria');
        $categorias = Categoria::all()->where('estado', true);
        $subCategorias = SubCategoria::all()->where('estado', true);
        if($subCategoria !=NULL and $categoria == NULL){
            $productos = Producto::join('sub_categorias','sub_categorias.id','=','productos.idSubCategoria')
                ->join('producto_puestos','producto_puestos.idProducto','=','productos.id')
                ->where('productos.estado', true)
                ->where('productos.idSubCategoria',"$subCategoria")
                ->get();
            return view('filtrarProducto',compact('productos','categorias','subCategorias'))->with('id',$id);
        }
        elseif($subCategoria ==NULL and $categoria !=NULL){
            $productos = Producto::join('sub_categorias','sub_categorias.id','=','productos.idSubCategoria')
                ->join('producto_puestos','producto_puestos.idProducto','=','productos.id')
                ->where('productos.estado', true)
                ->where('sub_categorias.idCategoria', "$categoria")
                ->get();
                
            
            return view('filtrarProducto',compact('productos','categorias','subCategorias'))->with('id',$id);
        }
        elseif($subCategoria !=NULL and $categoria !=NULL){
            $productos = Producto::join('sub_categorias','sub_categorias.id','=','productos.idSubCategoria')
                ->join('producto_puestos','producto_puestos.idProducto','=','productos.id')
                ->where('productos.estado', true)
                ->where('productos.idSubCategoria',"$subCategoria")
                ->where('sub_categorias.idCategoria',"$categoria")
                ->get();
            return  view('filtrarProducto',compact('productos','subCategorias','categorias'))->with('id',$id);
        }
        $productos = Producto::join('producto_puestos','producto_puestos.idProducto','=','productos.id')
            ->where('productos.estado', true)
            ->get();
        if($productos != NULL){

            return view('filtrarProducto',compact('productos','categorias','subCategorias'))->with('id',$id);
        }
        return response(404);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        /*
        $validated = $request->validate([
            'nombreProducto' => ['required'],
            'descripcionProducto'=> ['required'],
            'precioProducto'=> ['required'],
            'idSubCategoria'=> ['required'],
            'idUnidad'=> ['required'],
        ]);
            */
        $producto = new Producto();
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcionProducto = $request->descripcionProducto;
        $producto->precioProducto = $request->precioProducto;
        $producto->idSubCategoria = 1;
        $producto->idUnidad = $request->idUnidad;
        $producto->estado = true;
        $producto->save();
        $productoPuesto = new ProductoPuesto();
        $productoPuesto->cantidad = $request->cantidad;
        $productoPuesto->idProducto = $producto->id;
        $productoPuesto->idPuesto = $request->idPuesto;
        $productoPuesto->estado = true;
        $productoPuesto->save();
        return view('inicio2')->with('id',$id)->with('message',"se creo el producto con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idUsuario,$id)
    {
        $productoPuesto = DB::table('puesto_ferias')
            ->join('producto_puestos','producto_puestos.idPuesto','=','puesto_ferias.id')
            ->get()
            ->where('estado' , true)
            ->where('idProducto' , $id);
        $producto = Producto::find($id);
        $unidadMedida = UnidadMedida::find($producto->idUnidad);
        //$productoPuesto = productoPuesto::find($producto->idProducto)->first();
        /*
        $lista = array();
        print_r($lista);
        foreach ($productoPuesto as &$valor) {
            array_push($lista, $valor->idPuesto);
        }
        print_r($lista);
        $lista2 = array();
        foreach ($productoPuesto as &$primer1) {
            foreach ($puestoFeria as &$primer2){
                if($primer1->idPuesto == $primer2->id){
                    array_push($lista2, $primer2);
                }
            }
        }
        
        $myJSON = json_encode($lista2);
        print_r($myJSON);
        print_r("\n");
        print_r($puestoFeria);
        */
        //$puestoFeria2 = PuestoFeria::all()->where('estado' , true)->whereIn('id' , $lista);
        //print_r($productoPuesto);
        if($producto != NULL and $productoPuesto != Null){
            return view('producto')
            ->with('producto' , $producto)
            ->with('productoPuesto', $productoPuesto)
            ->with('unidadMedida', $unidadMedida)
            ->with('id',$id)
            ->with('idUsuario',$idUsuario)
            ->with('message',null);
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

    public function vistaCreacion($id)
    {
        $usuarioPuestos = DB::table('usuario_puestos')
            ->join('puesto_ferias','puesto_ferias.id','=','usuario_puestos.idPuesto')
            ->get()
            ->where('idUsuario', $id);
        $unidadMedida = UnidadMedida::all()->where('estado', true);
        return view('crearProducto')
            ->with('usuarioPuestos',$usuarioPuestos)
            ->with('unidadMedida',$unidadMedida)
            ->with('id', $id);
    }
}
