<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Template Padrão</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-auto mr-lg-0" href="#">Web II</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/template">Template <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pagina2">Página 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pagina3">Página 3</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main role="main" class="container" style="margin-top: 60px;">

        @hasSection('titulo')
            <div class="jumbotron">
                @yield('titulo')
            </div>
        @endif

        <div>
            @yield('conteudo')
        </div>
    </main>
</body>
</html>
