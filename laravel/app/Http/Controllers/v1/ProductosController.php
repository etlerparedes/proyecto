<?php
 
namespace App\Http\Controllers\v1;
 
 use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class ProductosController extends Controller
{
   
    public function getAll()
    {
        $response = new \stdClass();

        $productos = producto::all();

        $response->data = $productos;
        $response->success=true;
        

        return response()->json($response,200);
    }

    public function getItem($id)
    {

         $response = new \stdClass();

        $producto = producto::find($id);

        $response->data = $Producto;
        $response->success=true;

        return response()->json($response,200);
    }
    public function store(request $request)
    {
        $response = new \stdclass();

        $producto =new producto();
        $producto->codigo=$request->codigo;
        $producto->nombre_producto=$request->nombre_producto;
        $producto->save();

        $response->data = $producto;
        $response->success=true;

        return response()->json($response,200);

    }

    public function updatePut(request $request,$id)
    {
        $response = new \stdclass();

        $producto =producto::find($id);
        $producto->codigo=$request->codigo;
        $producto->nombre_producto=$request->nombre_producto;
        $producto->save();

        $response->data = $producto;
        $response->success=true;
        return response()->json($response,200);
}
public function UpdatePatch(request $request,$id)
{
         $response = new \stdclass();
        $producto = producto::find($id);

        if($request->codigo!=null)
        {
             $producto->codigo=$request->codigo;
        }

        if($request->nombre_producto!=null)
        {
         $producto->nombre_producto=$request->nombre_producto;   
        }
        
        $producto->save();

        $response->data = $producto;
        $response->success=true;

        return response()->json($response,200);     
}

 public function delete($id)
    {
        $response = new \stdclass();

        $producto = producto::find($id);
        $producto->delete();

        $response->success=true;

        return response()->json($response,200);
    }
}