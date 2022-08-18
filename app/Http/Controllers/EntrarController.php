<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EntrarController extends Controller
{
    public function index(){
        return view('entrar.index');
    }

    public function entrar(Request $req){
        $credenciais = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        if(!Auth::attempt($credenciais)){
            return redirect()->back()
            ->with('danger','Email e/ou Senha incorretos!');
        }

        $req->session()->regenerate();

        return redirect()->route('principal');

    }
}