<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand"><img src="https://www.pngall.com/wp-content/uploads/15/Amazon-Logo-White-Transparent.png" alt="logo"></a>
                    <div class="d-flex align-items-center">
                        <ion-icon name="location-outline"></ion-icon>
                        <div class="ms-2">
                            <p class="mb-0">Enviar para user</p>
                            <p class="mb-0">Vitória 29999999</p>  
                        </div>
                    </div>
                    <form id="search-form" action="/" method="GET">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                    </form>
                    <ul class="navbar-nav">
                    @auth
                        <li class="nav-item"><a href="/user" class="nav-link"><p>Olá <b>{{$user->name}}</b> <br>Gerenciar conta</p></a></li>
                    @endauth
                    @guest
                        <li class="nav-item"><a href="/login" class="nav-link"><p>Login/p></a></li>
                    @endguest
                        <li class="nav-item"><a href="/events/create" class="nav-link"><ion-icon name="cart-outline"></ion-icon><p>Carrinho</p></a></li>

                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light" id="sub-nav">
                <ul class="navbar-nav d-flex justify-content-around w-100">
                    <li class="nav-item">Mais vendidos</li>
                    <li class="nav-item">Decoração</li>
                    <li class="nav-item">Limpeza</li>
                    <li class="nav-item">Cozinha</li>
                    <li class="nav-item">Eletrônicos</li>
                    <li class="nav-item">Móveis</li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
        <footer>
            <p>AHMAZON &copy; 2024</p>
    
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>