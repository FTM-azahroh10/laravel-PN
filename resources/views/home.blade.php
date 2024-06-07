@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4 mb-3">
        <img class="py-0" src="{{ asset('img/Profil_Negeri.png') }}" alt="Deskripsi Gambar">
    </div>
    <h2 class="text-center mt-4 mb-3 fw-bold">PEMERINTAHAN INDONESIA</h2>
    <div class="row justify-content-center py-4 mb-3">
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'presiden') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/presiden.jpg') }}" alt="Presiden">
            </a>
            <p class="mt-2 fw-bold">Presiden</p>
        </div>
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'wakil_presiden') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/wakil.jpg') }}" alt="Wakil Presiden">
            </a>
            <p class="mt-2 fw-bold">Wakil Presiden</p>
        </div>
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'mpr') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/mpr.png') }}" alt="MPR">
            </a>
            <p class="mt-2 fw-bold">MPR</p>
        </div>
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'ma') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/ma.png') }}" alt="MA">
            </a>
            <p class="mt-2 fw-bold">MA</p>
        </div>
    </div>
    <div class="row justify-content-center py-4 mb-3">
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'mk') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/mk.png') }}" alt="MK">
            </a>
            <p class="mt-2 fw-bold">MK</p>
        </div>
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'ky') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/ky.png') }}" alt="KY">
            </a>
            <p class="mt-2 fw-bold">KY</p>
        </div>
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'bpk') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/bpk.png') }}" alt="BPK">
            </a>
            <p class="mt-2 fw-bold">BPK</p>
        </div>
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'kementrian') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/garuda.png') }}" alt="KEMENTRIAN">
            </a>
            <p class="mt-2 fw-bold">KEMENTRIAN</p>
        </div>
    </div>
    <div class="row justify-content-center py-4 mb-3">
        <div class="col-3 text-center">
            <a href="{{ route('posts.show', 'pemerintahan_daerah') }}">
                <img class="img-fluid mt-4" style="height: 15rem" src="{{ asset('img/garuda.png') }}" alt="KEMENTRIAN DAERAH">
            </a>
            <p class="mt-2 fw-bold">PEMERINTAHAN DAERAH</p>
        </div>
    </div>
</div>
@endsection
