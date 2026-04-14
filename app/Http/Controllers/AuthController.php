<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function login(){
        return view("login");
    }

    public function postLogin(Request $request){
        $correo = $request->post('correo');
        $password = $request->post('clave');
        
        $user = User::where('email','=', $correo)->first();
        if($user){
            $user->password = bcrypt($password);
            $user->save();
            return redirect('')->with('success','');
        }
        return redirect('')->with('error','');
    }

    public function register(){
        return view("register");
    }

    public function postRegister(Request $request){
        return redirect("/inicio");
    }

    public function inicio(){
        return view("inicio");
    }
}