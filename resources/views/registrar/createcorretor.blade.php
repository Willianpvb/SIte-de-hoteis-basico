@extends('layout')
@section('titulo')
Corretores - Criando NOvo Corretor
@endsection
@section('conteudo')

<div class="row">
    <div class="col-md-6 jumbotrom mx-auto">
        <form method="POST" action="/registrarCorretor" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nome:</label>
                <input name="name" type="text" 
                required class="form-control" placeholder="Seu Nome" >
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input name="email" type="text" 
                required class="form-control" placeholder="Seu E-mail" >
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input name="password" min="5" type="password" 
                required class="form-control" placeholder="Sua Senha" >
            </div>
        
            <div class="form-group"> 
                <label for="image">Imagem:</label> 
                <input type="file" class="from-control-file" name="image"> 
            </div>
            
            <button type="submit" class="btn btn-secondary mt-3">Registra Corretor</button>

        </form>
    </div>
</div>
    
@endsection