@extends('layout.main')

@section('title', 'Produtos')

@section('content')

    </div>
    <div class="container" style="padding: 0">
        <div style="padding-bottom: 3%; padding-top: 3%">
            <a href="produtos/create">
                <button type="button" class="btn btn-light btn-floating mx-2"
                    style="text-alling: center;background-color: #23861a; color: #fff;">Crie</button>
            </a>
            <h1 style="text-align: center">Busque outro produto</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar outro item">
            </form>
        </div>

        <div class="prod row align-items-start" style="margin:0">
            <!-- imprime os produtos -->
            <div class="card-group" style="padding-bottom: 3%">
                @foreach ($events as $event)
                    <div class="card card-body" style="text-align: center;">
                        <img src="img\produtos\CasaCachoro.jpg" alt="Casa Cachorro" style="display: block; margin-left: auto; margin-right: auto;">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-desc">{{ $event->desc }}</p>
                        <h6 class="card-local"> {{$event->local}}</h6>
                        <p class="card-price"><small class="text-muted">R${{$event->preco}}</small></p>
                    </div>
                    <!--
                                <div class="card col-md-4" style="align-items: center;">
                                    <img src="img\produtos\CasaCachoro.jpg" alt="Casa Cachorro">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-desc" style="text-align: initial">{{ $event->desc }}</p>
                                    <h6 class="card-local">{{ $event->local }}</h6>
                                </div>
                            -->
                @endforeach
            </div>
        </div>

    </div>

@endsection
