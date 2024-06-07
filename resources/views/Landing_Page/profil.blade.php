@extends('layouts.landingpage')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <span class="fs-1 fw-bold">Profil Indonesia</span>
            <ul class="nav nav-underline ms-4">
                <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" >Beranda / <span class="text-danger"> Profil Indonesia </span></a>
                </li>
            </ul>
            <div class="card ms-4 border border-0 border-top">
                <div class="card-body">
                    <div class="row mx-3">
                        <div class="col-2  my-3 mx-3 text-center">
                            <img src="{{ asset('img/Profil-SukuBangsa.png') }}" class="img-fluid" alt="Profil-SukuBangsa">
                            <p class="mt-2 fw-bold">Suku Bangsa</p>
                        </div>
                        <div class="col-2 my-3 mx-3 text-center">
                            <img src="{{ asset('img/Profil-Agama.png') }}" class="img-fluid" alt="Profil-Agama">
                            <p class="mt-2 fw-bold">Agama</p>
                        </div>
                        <div class="col-2 my-3 mx-3 text-center">
                            <img src="{{ asset('img/Profil-Peta.png') }}" class="img-fluid" alt="Profil-Peta">
                            <p class="mt-2 fw-bold">Peta Indonesia</p>
                        </div>
                        <div class="col-2 my-3 mx-3 text-center">
                            <img src="{{ asset('img/Profil-Presiden.png') }}" class="img-fluid" alt="Profil-Presiden">
                            <p class="mt-2 fw-bold">Presiden dan Wakil Presiden</p>
                        </div>
                        <div class="col-2 my-3 mx-3 text-center">
                            <img src="{{ asset('img/Profil-Peraturan.png') }}" class="img-fluid" alt="Profil-Peraturan">
                            <p class="mt-2 fw-bold">Peraturan</p>
                        </div>
                    </div>
                    <div class="row mx-3">
                        <div class="col-2 my-3 mx-3 text-center">
                            <img src="{{ asset('img/Profil-Lembaga.png') }}" class="img-fluid" alt="Profil-Lembaga">
                            <p class="mt-2 fw-bold">Konstitusi, Lembaga Negara,
                                Lagu Kebangsaan dan Bahasa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
