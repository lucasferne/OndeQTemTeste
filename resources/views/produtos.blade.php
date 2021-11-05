@extends('layout.main')

@section('title', 'Produtos')

@section('content')
    <div class="container">
        <div style="padding-bottom: 3%">
            <h1 style="text-align: center">Busque outro produto</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar outro item">
            </form>
        </div>

        <div class="prod row align-items-start">
            @foreach ($events as $event)
                    <div class="card col-md-4" style="align-items: center">
                        <img src="img\produtos\CasaCachoro.jpg" alt="Casa Cachorro">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-desc" style="text-align: initial">{{ $event->desc }}</p>
                        <h6 class="card-local">{{ $event->local }}</h6>
                    </div>
            @endforeach
        </div>

    </div>

@endsection
