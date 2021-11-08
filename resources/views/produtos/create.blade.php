@extends('layout.main')

@section('title', 'Create')

@section('content')

    <div id="product-create-container" class="col-md-6 offset-md-3">
        <!--titulo do formulário-->
        <h1 style="text-align: center; padding-top: 5px; padding-bottom: 5px">Crie o seu produto</h1>
        
        <!--formulário-->
        <form action="/products" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Produto:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do produto">
            </div>

            <div class="form-group">
                <label for="desc">Descrição:</label>
                <textarea class="form-control" name="desc" id="desc"
                    placeholder="Descrição do produto"></textarea>
            </div>

            <div class="form-group">
                <label for="local">Loja:</label>
                <input type="text" class="form-control" id="local" name="local" placeholder="Nome da loja">
            </div>

            <div class="form-group" style="width: 25%">
                <label for="preco">Preço:</label>
                <input type="double" class="form-control" id="preco" name="preco" placeholder="Preço do produto">
            </div>

            <!--Botão do formulário-->
            <div style="text-align: center; padding-top: 5px">
                <input type="submit" class="btn btn-light btn-floating mx-2" value="Criar produto" style="background-color: #23861a; color: #fff;">
            </div>
        </form>
    </div>

@endsection
