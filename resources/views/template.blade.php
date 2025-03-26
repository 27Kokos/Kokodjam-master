<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kokodjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-primary{
            background-color: #ea3458;
            color: white;
            border: #f08d90;
        }
        .btn-primary:hover{
            background-color: #f08d90;
            color: white;
            border: #ea3458 ;
        }
    </style>
</head>
<body class="bg-dark">
<nav class="navbar bg-dark navbar-expand-md" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: #f08d90;" href="/">Kokodjam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/programmers">Программисты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
            </ul>
            <a class="btn btn-secondary" href="/profile">Профиль</a>
        </div>
    </div>
</nav>
@yield('content')
<footer class="container py-5 text-center text-light">
    <p>Copyright © 2025 Kokodjam Company. All rights reserved.
    </p>
    <p>Design: Kokodjam</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
