<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- awesomeIcons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css da aplicação-->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="./js/scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <div class="navbar" alt="prev">
                        <img src="/img/icone.png">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/produtos">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Meus produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lucas
                                Aplication</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- individual content-->
    <main>
        <div class="container">
            <div class="row">
              @if (session('msg'))
                <p class="msg"> {{  session('msg')  }} </p>   
              @endif
                @yield('content')
            </div>
        </div>

    </main>
    <!--footer-->
    <footer class="text-center text-lg-start" style="background-color: #212529;">
        <div class="container d-flex justify-content-center py-5">
            <a href="https://www.facebook.com/people/Lucas-Ferreira/100011522139400/" target="_blank"
                rel="noreferrer noopener">
                <button type="button" class="btn btn-light btn-lg btn-floating mx-2" style="background-color: #23861a;">
                    <i class="fab fa-facebook" style="fill-opacity: 100%"></i>
            </a>
            </button>
            <a href="https://www.youtube.com/channel/UCok5XK_YSdaesDT6N6PCK0w" target="_blank"
                rel="noreferrer noopener">
                <button type="button" class="btn btn-light btn-lg btn-floating mx-2" style="background-color: #23861a;">
                    <i class="fab fa-youtube"></i>
                </button>
            </a>
            <a href="https://www.instagram.com/lucsferne/" target="_blank" rel="noreferrer noopener">
                <button type="button" class="btn btn-light btn-lg btn-floating mx-2" style="background-color: #23861a;">
                    <i class="fab fa-instagram"></i>
            </a>
            </button>
            <a href="https://mobile.twitter.com/lucsferne" target="_blank" rel="noreferrer noopener">
                <button type="button" class="btn btn-light btn-lg btn-floating mx-2" style="background-color: #23861a;">
                    <i class="fab fa-twitter"></i>
                </button>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center text-white p-3 fixed-botom" style="background-color: rgba(0, 0, 0, 0.2);">
            <p><a class="text-white" href="https://github.com/lucasferne" target="_blank"
                    rel="noreferrer noopener">Lucas Ferreira</a> &copy; 2021 </p>
        </div>
        <!-- Copyright -->
    </footer>

    </div>
    <!-- End of .container -->

    <!-- Icons -->
    <!-- Icons Bootstrap5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
