<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(Request $request){
        
        $donos = User::all();
        
        $mensagem = $request->session()->get('mensagem');

        $search = request('search');
        if($search){
            $imoveis = DB::table('imoveis')
            ->where('tipo', $search)
            ->orWhere('endereco', $search)
            ->get(); 

        }else{
    
            $imoveis = Imovel::all();
        }
        
        
        return view('home.index',
            compact('imoveis','donos'),
            ['mensagem' => $mensagem, 'search' => $search]
            );
    }

    public function store(Request $request){

        $dono = $request->validate([
            'dono_email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        $imovel = new Imovel();

        $imovel->dono_email = $request->dono_email;
        $imovel->venda = $request->venda;
        $imovel->endereco = $request->endereco;
        $imovel->tipo = $request->tipo;
        $imovel->valor = $request->valor;

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $imovel->image = $imageName;
        }
        

        $imovel->save();
       $request->session()->flash(
        'mensagem', 
        "Imovel adicionado com sucesso!!!" 
        );
        
        return redirect('/home');
    }


    public function criar(){
        
        return view('home.criar_imoveis');
    }
}