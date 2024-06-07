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
</head>

<body style="background: url({{ asset('img/garuda.png') }}) no-repeat center center fixed; background-size: 45%;" >
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-4 mb-4">
                                    <h1 class="fw-bold">PROFILNEGERI</h1>
                                </div>
                                <h4 class="text-center mb-4">Login Aplikasi</h4>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email / NIK</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                            placeholder="Masukan Kata Sandi">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <a href="/" class="btn btn-outline-secondary">Kembali</a>
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="btn text-danger" href="{{ route('password.request') }}">
                                                Lupa Kata Sandi
                                            </a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a class="btn text-danger" href="{{ route('register') }}">Buat Akun</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
