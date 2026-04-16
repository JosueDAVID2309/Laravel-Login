<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("login", ["error" => null]);
    }

    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');
        $remember = $request->has('recuerdame');
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect("/inicio");
        } else {
            return back()->withErrors([ 'email' => 'Credenciales inválidas'])->withInput();
        }
    }

    public function register(){
        return view("register");
    }

    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'user' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'user' => $request->user,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect("/inicio");
    }

    public function editProfile(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'user' => 'required|string|max:255',
        ]);

        $request->user()->update(
            $validated
        );

        return redirect("/inicio")->with('success', 'Perfil actualizado exitosamente');

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }

    public function inicio(Request $request){
        $user = Auth::user();
        return view("inicio", compact('user'));
    }
}