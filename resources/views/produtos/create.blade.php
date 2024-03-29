<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/produtos.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

    <title>Produtos</title>
</head>

<body>
    <!--Navbar-->
    <!--Navbar Com usuario-->
    <header class="section-header" style="background-color: #f0974c;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/dashboard">Meus produtos</a>
                    </li>
                </ul>

                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item">
                        <div class="d-flex flex-row"> <img src="/img/pessoa.png" class="rounded-circle" width="30">
                        </div>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link d-flex align-items-center text-white"
                            data-abc="true"><span>Lucas Ferreira</span><i class='bx bxs-chevron-down'></i></a> </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- header-top-light.// -->
        <!--Navbar Com Usuario-->
    </header>
    <!--Navbar col-lg-3 col-md-6 mb-4 mb-lg-0 para responsividade do container de colunas-->

    <div id="product-create-container" class="col-md-6 offset-md-3">
        <!--titulo do formulário-->
        <h1 style="text-align: center; padding-top: 5px; padding-bottom: 5px">Crie o seu produto</h1>

        <!--formulário-->
        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="padding-bottom: 7px">
                <label for="image">Imagem do produto:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="title">Produto:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do produto">
            </div>

            <div class="form-group">
                <label for="desc">Descrição:</label>
                <textarea class="form-control" name="desc" id="desc" placeholder="Descrição do produto"></textarea>
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
                <input type="submit" class="btn btn-floating mx-2" value="Criar produto"
                    style="background-color: #f0974c; color: #fff;">
            </div>
        </form>
    </div>
    <footer class="text-center text-lg-start text-white mt-5" style="background-color: #FFB04F;">
        <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright: OndeQTem, by Equipe 3

        </div>

    </footer>
</body>

</html>
