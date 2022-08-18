<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrarController extends Controller
{
   public function create(){
        return view('registrar.create');
    }

    public function store(Request $req){
 

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->image = "#";
        $user->corretores = false;
        
        $user->save();
        #$user = User::create($data);
        
        Auth::login($user);
        
        return redirect()->route('principal');


    }
}