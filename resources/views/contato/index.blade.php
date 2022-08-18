@extends('layout')
@section('titulo')
Contato
@endsection
@section('conteudo')

<div class="row">
    <div class="col-md-6 jumbotrom mx-auto">
        <form method="POST" action="/contato">
            @csrf  
            <div class="form-group">
                <h2> Envie seu contato:</h2>
            </div>

            @if(count($errors) > 0 )
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Repreencha coretamente!</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                <ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

            @if($message = Session::get('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <strong>Obrigado!</strong>{{$message}}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

            @if($message = Session::get('error'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <strong>Obrigado!</strong>{{$message}}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input name="nome" type="text" class="form-control" placeholder="Seu Nome" >
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input name="email" type="text" class="form-control" placeholder="Seu E-mail" >
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" class="form-control" cols="10" rows="5" placeholder="Seu Mensangem" ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

@endsection