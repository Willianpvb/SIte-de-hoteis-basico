@extends('layout')
@section('titulo')
Entrar
@endsection
@section('conteudo')

<div class="row">
    <div class="col-md-6 jumbotrom mx-auto">
        @if($errors->any() )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ihhh Deu Merda!</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                <ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif
        @if(session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Repreencha coretamente!</strong>
                <ul>
                    <li>{{ session('danger') }}</li>
                <ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        <form method="POST" action="/entrar">
            @csrf  
             <div class="form-group">
                <h2>Preencha os dados requisitados para ENTRAR</h2>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input name="email" type="text" required class="form-control" placeholder="Seu E-mail" >
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input name="password" type="password" class="form-control" placeholder="Sua senha" >
            </div>
          
            <button type="submit" class="btn btn-primary mt-3">Entrar</button>

            <a href="/registrar" class="btn btn-secondary mt-3">Registrar-se</a>
            <a href="/registrarCorretor" class="btn btn-secondary mt-3">Registrar Corretor</a>
        </form>
    </div>
</div>

@endsection