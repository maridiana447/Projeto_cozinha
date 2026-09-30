<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: #BD2323">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-danger fw-bold" href="#">SESI | SENAI</a>
            <a class="navbar-brand fw-semibold" style="font-family: pacifico" href="#">Cozinha digital</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav position-absolute start-50 translate-middle-x">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ request()->routeIs('inicio') ? 'text-danger text-decoration-underline' : 'text-dark' }}" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ request()->routeIs('cardapio') ? 'text-danger text-decoration-underline' : 'text-dark' }}" href="#">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ request()->routeIs('dicas') ? 'text-danger text-decoration-underline' : 'text-dark' }}" href="#">Dicas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
