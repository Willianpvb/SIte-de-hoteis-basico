@extends('layout')
@section('titulo')
Registrar
@endsection
@section('conteudo')

<div class="row">
    <div class="col-md-6 jumbotrom mx-auto">
        <form method="POST" action="/registrar">
            @csrf  
             <div class="form-group">
                <h2> Registre-se Aqui:</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
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

            <button type="submit" class="btn btn-secondary mt-3">Registrar</button>
        </form>
    </div>
</div>

@endsection