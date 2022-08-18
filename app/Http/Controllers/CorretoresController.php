<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;



class CorretoresController extends Controller
{
    public function index() {

        $corretores = DB::table('users')
        ->where('corretores', true)->get(); 
      
        return view('corretores.index', compact('corretores'));

    }

    public function create(){

        return view('registrar.createcorretor');
    }

    public function store(Request $req){
        
        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->corretores = true;

        if($req->hasFile('image') && $req->file('image')->isValid()){

            $requestImage = $req->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/corretores'), $imageName);

            $user->image = $imageName;
        }

        $user->save();
       # $corretor = User::create($data);
        Auth::login($user);

        return redirect('/home');

    }

}