@extends('layout')
@section('titulo')
Corretores
@endsection
@section('conteudo')

<div class="col-md-6 d-auto container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      @for($i = 0; $i < count($corretores); $i++)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i + 1}}" aria-label="Slide {{ $i + 1 }}"></button>
      @endfor 
    </div>

    <div class="carousel-inner bg-black">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
          <img src="https://th.bing.com/th/id/OIP.x3mZjdyiFLwxsuothUWiogHaLH?w=118&h=180&c=7&r=0&o=5&pid=1.7"
          class="img-fluid d-block" width="300" height="200">
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5><strong>Corretora MLW</strong></h5>
          <p><strong>Contato: mlw@gmail.com.br</strong></p>
        </div>
      </div>

      @foreach($corretores as $corretor)    
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <img src="img/corretores/{{ $corretor->image }}"
            class="img-fluid d-block" width="300" height="200" >
          </div>
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-25">
            <h5><strong>Corretor(a): {{$corretor->name}}</strong></h5>
            <p><strong>Contato: {{$corretor->email}} {{$corretor->password}}</strong></p>           
          </div>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


@endsection