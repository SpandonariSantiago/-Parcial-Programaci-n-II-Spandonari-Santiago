<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function AltaUsuario(Request $request){
        try {

            User::create([
                'name' => $request -> post("usuario"),
                'email' => $request -> post("email"),
                'password' => Hash::make($request -> post("password"))
            ]);
            
            return view("Registro",[ "Error" => False]);

        } catch (\Throwable $th) {

            return view("Registro",[ "Error" => True]);

        }
    }
}
