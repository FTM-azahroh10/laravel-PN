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
        .red-checkbox:checked {
            background-color: red;
            border-color: red;
        }
    </style>
</head>

<body style="background: url({{ asset('img/garuda.png') }}) no-repeat center center fixed; background-size: 45%;">
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-lg-center pt-4 mb-4 fw-bold">Registrasi Akun</h3>
                                <h5 class="mb-4 ms-3 fw-bold">Informasi Pengguna</h5>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label ms-3">Nama</label>
                                        <div class="col-md-7">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label ms-3">Email</label>
                                        <div class="col-md-7">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                                autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nik" class="col-md-4 col-form-label ms-3">NIK</label>
                                        <div class="col-md-7">
                                            <input id="nik" type="nik" class="form-control" name="nik" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label ms-3">Kata Sandi</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <button id="togglePassword" type="button" class="btn btn-outline-secondary"><i class="bi bi-eye-fill"></i></button>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label ms-3">Konfirmasi Kata Sandi</label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                <button id="togglePassword-confirm" type="button" class="btn btn-outline-secondary"><i class="bi bi-eye-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-md-12 ms-3">
                                            <div class="form-check">
                                                <input class="form-check-input red-checkbox" type="checkbox" value="" id="setuju">
                                                <label class="form-check-label" for="setuju">
                                                    <p class="text-secondary">Dengan mendaftar, saya setuju bahwa saya berusia lebih dari 17 tahun, menyetujui Persyaratan Layanan dan Kebijakan
                                                        Privasi, serta
                                                        Penggunaan Cookie.
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                    </div>
                                    <div class="mb-3">
                                        <a href="/login" class="btn btn-outline-secondary">Kembali</a>
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const togglePassword_confirm = document.querySelector('#togglePassword-confirm');
        const password = document.querySelector('#password');
        const password_confirm = document.querySelector('#password-confirm');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('bi-eye-fill');
            this.querySelector('i').classList.toggle('bi-eye-slash-fill');
        });

        togglePassword_confirm.addEventListener('click', function(e) {
            const type = password_confirm.getAttribute('type') === 'password' ? 'text' : 'password';
            password_confirm.setAttribute('type', type);
            this.querySelector('i').classList.toggle('bi-eye-fill');
            this.querySelector('i').classList.toggle('bi-eye-slash-fill');
        });
    </script>
</body>

</html>
