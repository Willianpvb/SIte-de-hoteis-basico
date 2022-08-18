@extends('layout')
@section('titulo')
  Home- Pagina Inical
@endsection

@section('conteudo')

<div id="top" class="row">
  <h1>Imoveis Disponiveis: {{count($imoveis)}}</h1>
  <form method="GET" action="/home">
    <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button for="search" class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>

@if($search)
  <h2>Resultados da procura por: {{ $search }}</h2>
  <h2>Total de Imoveis encontrados:  {{count($imoveis)}} </h2>
@endif

@if(count($imoveis) == 0 && $search)
  <p>Não foi possivel encontrar nenhum imovel sob estas credenciais</p>
@elseif(count($imoveis) == 0)
  <div class="alert alert-danger" role="alert">
    <strong>Não há IMOVEIS Disponiveis!</strong>
  </div>
@endif


@if($mensagem != null)
  @if(!empty('mensagem'))
    <div class="alert alert-success" role="alert">
      {{ $mensagem }}
    </div>
  @endif
@endif

@auth 
  <div class="d-flex justify-content-end">
    <a href="{{ route('criar_imovel')}}" class="btn btn-primary mb-2">Adicionar imovel</a>
  </div>

@endauth 



<div class="mt-2" id="cards">
  <div class="row row-cols-md-4 justify-content-md-center g-4">
    @foreach($imoveis as $imovel)
    <div class="card-group">    
      <ul class="col m-1" >
        <div class="card border-success border-2">
          <img height="200" src="img/events/{{ $imovel->image }}" 
            class="card-img-top" alt="{{$imovel->id}}">

          <div class="card-body">
          @foreach($donos as $dono)
            @if($dono->email == $imovel->dono_email)
              <p class="card-title">Proprietário:<strong> {{ $dono->name }}</strong></p>
            @endif
          @endforeach  
          </div>

          <ul class="list-group list-group-flush">
              <li class="list-group-item">Endereço: {{$imovel->endereco}}</li>
              <li class="list-group-item">Tipo do imovel: {{$imovel->tipo}}</li>
              <li class="list-group-item">Tipo de Négocio: {{$imovel->venda}}</li>
              <li class="list-group-item text-danger">Valor: $ {{$imovel->valor}}</li>
          </ul>
      </ul>
    </div>      

    @endforeach
    </div>
  </div>
</div>
@endsection