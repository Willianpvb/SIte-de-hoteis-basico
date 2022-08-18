@extends('layout')
@section('titulo')
Quem Somos
@endsection
@section('conteudo')

<div class="container justify-content-md-center">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        EMPRESARIO 1
      </button>
    </h2> 
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Luis Henrique</strong>
        <p> Sou o empresario responsavel pela parte de marketing da empresas e pela parte de finanças. </p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        EMPRESARIO 2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Willian Pereira</strong>
        <p> Sou o empresario responsavel pela parte do back-end de todo o site e diretor geral do negocio. </p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        EMPRESARIO 3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Mykael Leal<strong>
        <p> Sou o empresario responsavel pela parte do front-end do site e co-fundador da nossa marca. </p>
      </div>
    </div>
  </div>
  
  <div class="card mt-3">
    <div class="card-header">
      Informações sobre LMW
    </div>
    <div class="card-body">
      <p class="card-text">Nossa empressa é um imobiliaria cria e desenvolvida por 3 socios, onde cada um teve um papel importante para que el fosse o que é hoje. A imobiliaria tem como proposta vender terrenos, apartamentos e casas, tudo isso de forma facíl e rápida, acessosando nosso site o usuario podera fazer diversas ações desde se cadastrar até comprar uma das opções fornecidas por nos no site.</p>
    </div>
  </div>

</div>


@endsection