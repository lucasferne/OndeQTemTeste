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
            @if ($search)
            <h1 style="text-align: center">Buscando por: {{ $search }}</h1>
            @else
            <h1 style="text-align: center">Busque um produto</h1>
            @endif
            <form action="/produtos" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar item">
            </form>
        </div>

        <div class="row" style="margin:0; align-items: center">
            @foreach ($events as $event)
                <div class="card col-md-3" style="align-content: center;">
                    <img class="img-responsive" src="img\produtos\{{ $event->image }}" alt="Imagem"
                        id="prodImage">
                    <div class="box card-body" style="align-items: center">
                        <h5 class="card-text" style="text-align: center">{{ $event->title }}</h5>
                        <p class="card-text" style="text-align: center">{{ $event->desc }}</p>
                        <h6 class="card-text" style="text-align: center">{{ $event->local }}</h6>
                        <p class="card-text" ><small class="text-muted" style="text-align: center">R${{ $event->preco }}</small></p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
