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
        <section class="header-main border-bottom bg-white">
            <div class="container-fluid">
                <h1 style="text-align: center;">Meus produtos</h1>
                <a href="produtos/create">
                    <div class="text-center" style="padding-bottom: 5px">
                        <button type="button" class="btn btn-light btn-floating mx-2"
                            style="text-alling: center;background-color: #f0974c; color: #fff;">Crie</button>
                    </div>
                </a>
            </div>
    </header>
    <!--Navbar col-lg-3 col-md-6 mb-4 mb-lg-0 para responsividade do container de colunas-->

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <div class="row" style="margin:0; align-items: start">
            @foreach ($events as $event)
                <div class="card" style="align-content: start;">
                    <div class="box card-body" style="align-items: start">
                        <h5 class="card-text" style="text-align: start">{{ $event->title }}</h5>
                        <p class="card-text" style="text-align: start">{{ $event->desc }}</p>
                        <h6 class="card-text" style="text-align: start">{{ $event->local }}</h6>
                        <p class="card-text text-muted" style="text-align: start">R${{ $event->preco }}</p>

                        <form action="/produtos/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                style="text-alling: center; color: #fff;">Deletar {{ $event->title }}</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/listaproduto.js"></script>


    <footer class="text-center text-lg-start text-white mt-5" style="background-color: #FFB04F;">
        <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright: OndeQTem, by Equipe 3

        </div>

    </footer>
</body>

</html>
