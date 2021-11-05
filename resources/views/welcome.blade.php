<!-- Padronização do main-->

@extends('layout.main')

@section('title', 'Lucas')

@section('content')

    <!-- Carrossel de imagens -->
    <div class="container">
        <div style="padding-bottom: 3%">
            <h1 style="text-align: center">Busque um produto</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            </form>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/slide1.jpg" class="d-block w-100" alt="label2">
                </div>
                <div class="carousel-item">
                    <img src="./img/slide2.jpg" class="d-block w-100" alt="label2">
                </div>
                <div class="carousel-item">
                    <img src="./img/slide3.jpg" class="d-block w-100" alt="label2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
        <!-- Titulo e parágrafo 1-->
        <h1 class="titCenter">Bem vindo!</h1>
        <p class="parCenter"> Esse site foi feito com base no framework Laravel a fim de se entender como funciona o
            ambiente de programação e as organizações de todo o projeto. Apesar das páginas não terem ligação em questão de
            conteúdo, cada uma estará suportando parte do meu aprendizado para com esse framework</p>

        <div class="container d-flex justify-content-center py-5">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div style="width: 200px; padding-left: 35%; padding-right: 50%; padding-bottom: 5% img-fluid">
                        <img src="./img/laravel.png" />
                    </div>
                </div>
                <div class="col-md-8 col-xs-12 right-content">
                    <h1 class="titCenter">O Laravel</h1>
                    <p class="parCenter">Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell
                        para o desenvolvimento de sistemas web que utilizam o padrão MVC</p>
                </div>
            </div>
        </div>
    </div>

@endsection
