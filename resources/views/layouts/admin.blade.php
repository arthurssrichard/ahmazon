<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/styles_admin.css">
        <script src="/js/script.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand"><img src="https://www.pngall.com/wp-content/uploads/15/Amazon-Logo-White-Transparent.png" alt="logo"></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link"><p>Olá user</p></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="row">
        <div class="col-2" id="lateral-bar">
            <nav>
                <ul>
                    <li><a href="/admin/products">Produtos</a></li>
                    <li><a href="/admin/categories">Categorias</a></li>
                    <li><a href="">Usuários</a></li>
                    <li><a href="">Pedidos</a></li>
                    <li><a href="">Estatísticas</a></li>
                </ul>
            </nav>
        </div>

        <div class="col-10" id="main-area">
            @yield('content') {{-- Aqui vai o conteúdo --}}

        </div>
</main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>