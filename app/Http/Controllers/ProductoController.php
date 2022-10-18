<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function AltaProducto(Request $request){
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

    public function ListarProducto(Producto $producto)
    {
        $Productos = Producto::all();
        return view('Inicio',["Productos" => $Productos]);
    }
}
