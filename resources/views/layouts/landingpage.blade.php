<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .footer {
            margin-top: auto;
        }

        .nav-underline .nav-link.active,
        .nav-underline .show>.nav-link {
            font-weight: 700;
            color: var(--bs-nav-underline-link-active-color);
            border-bottom-color: red;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <div class="row w-100">
                    <div class="col-3"></div>
                    <div class="col-6 text-center">
                        <a class="navbar-brand fs-1 fw-bold" href="{{ url('/') }}">
                            PROFILNEGERI.<span class="text-danger">GO</span>.<span class="text-danger">ID</span>
                        </a>
                    </div>
                    <div class="col-3 text-end">
                        @if (Route::has('login'))
                            <li class="nav-item btn btn-danger mx-1">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item btn btn-outline-danger">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                            </li>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <div class="row bg-white justify-content-center">
            <div class="col-6 mb-3">
                <form class="d-flex">
                    <div class="input-group rounded">
                        <input class="form-control flex-grow-1" type="search" placeholder="Search" aria-label="Search">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row bg-white justify-content-center mb-4">
            <div class="col-6 text-center">
                <a href="/beranda" class="btn btn-outline-danger border-0 rounded-pill mr-1 fw-bold">Beranda</a>
                <a href="/profil" class="btn btn-outline-danger border-0 rounded-pill mr-1 fw-bold">Profil</a>
                <a href="/kabinet" class="btn btn-outline-danger border-0 rounded-pill mr-1 fw-bold">Kabinet</a>
                <a href="https://www.bps.go.id/id" class="btn btn-outline-danger border-0 rounded-pill mr-1 fw-bold">Statistik</a>
                <a href="/lapor" class="btn btn-outline-danger border-0 rounded-pill mr-1 fw-bold">Lapor !</a>
            </div>
        </div>

        @yield('content')


    </div>
</body>
<footer class="footer mt-auto py-3" style="background: url({{ asset('img/bg-footer.jpeg') }}) no-repeat center center; background-size: cover;">
    <div class="container text-center pt-3">
        <span class=" text-white">©2023 ProfilNegeri.go.id. All rights reserved</span>
    </div>
</footer>

</html>
