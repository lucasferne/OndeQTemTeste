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
            @foreach ($events as $event)
                <div class="card col-md-4" style="align-items: center;  margin: 0.1%; flex: 0 0 24%">
                    <img src="img\produtos\{{ $event->image }}" style="padding-top: 10px" alt="Imagem">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-desc" style="text-align: center">{{ $event->desc }}</p>
                    <h6 class="card-local">{{ $event->local }}</h6>
                    <p class="card-price"><small class="text-muted">R${{$event->preco}}</small></p>
                </div>
            @endforeach
        </div>

    </div>

@endsection
