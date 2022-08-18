@extends('layout')
@section('conteudo')
<form method="POST" action="/home/criar" enctype="multipart/form-data">
    @csrf

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
    
    <div class="form-group"> 
        <p for="tipo"> Tipo do Imovel: 
        <select type="text" name="tipo"> 
            <option value="Apartamento"> Apartamento </option> 
            <option value="Terreno"> Terreno </option> 
            <option value="Casa"> Casa </option> 
            <option value="Fazenda"> Fazenda </option> 
        </select> 
        </p> 
    </div>
 
    <div class="form-group"> 
        <p for="venda"> Tipo do Negocio: 
        <select type="text" name="venda"> 
            <option value="Alugar">Alugar</option> 
            <option value="Vender">Vender</option> 
        </select> 
        </p> 
    </div>
    

    <div class="form-group"> 
        <label for="endereco">Endereço: </label> 
        <input type="text" class="form-control" name="endereco"> 
    </div> 
    
    <div class="form-group"> 
        <label for="valor">Valor:</label> 
        <input type="text" class="form-control" name="valor"> 
    </div>

     <div class="form-group"> 
        <label for="image">Imagem:</label> 
        <input type="file" class="from-control-file" name="image"> 
    </div>

    <div class="form-group">
        <label for="dono_email">E-mail:</label>
        <input name="dono_email" type="text" required class="form-control" placeholder="Seu E-mail" >
    </div>
    <div class="form-group">
        <label for="password">Senha:</label>
        <input name="password" min="5" type="password" class="form-control" placeholder="Sua senha" >
    </div>

    <button type="submit" class="btn btn-secondary mt-3">add</button>

</form>
@endsection