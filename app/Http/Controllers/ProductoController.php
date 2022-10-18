<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function AltaProducto(Request $request)
    {
        try {

            $p = new Producto();
            $p -> Nombre = $request -> post("nombre");
            $p -> Marca = $request -> post("marca");
            $p -> Descripcion = $request -> post("descripcion");
            $p -> Stock = $request -> post("stock");
            $p -> save();

            return redirect ("/");

        } catch (\Throwable $th) {

            return view("AltaProducto",[ "Error" => True]);

        }
    }

    public function ListarProductos(Request $request)
    {
        $Productos = Producto::all();
        return view('Inicio',["Productos" => $Productos]);
    }

    public function ListarProducto(Request $request)
    {
        $Producto = Producto::findOrFail($request -> get("id"));
        return view('BajaProducto',["Producto" => $Producto]);
    }

    public function BajaProducto(Request $request)
    {
        $p = Producto::findOrFail($request -> get("id"));
        $p->delete();
        return redirect ("/");
    }
}
