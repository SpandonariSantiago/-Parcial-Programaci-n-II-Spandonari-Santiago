<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function AltaUsuario(Request $request){
        try {

            User::create([
                'name' => $request -> post("usuario"),
                'email' => $request -> post("email"),
                'password' => Hash::make($request -> post("password"))
            ]);
            
            return redirect ("/");

        } catch (\Throwable $th) {

            return view("Registro",[ "Error" => True]);

        }
    }

    public function Login(Request $request){
        $credentials = $request -> only("name","password");
        if(!Auth::attempt($credentials)){
            return view ("Login",[ 'ErrorAutenticacion' => True]);
        }
        return redirect ("/");
    }

    public function Logout(Request $request){
        Auth::logout();

        return redirect ("/Login");
    }
}
