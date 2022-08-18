<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required'
        ]);

       $data = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'mensagem' => $request->mensagem
       );

        Mail::to(config('mail.from.address'))
        ->send(new SendMail($data));     
        
        return redirect()->back()->with('success','Obrigado por nos contactar');
    }
}