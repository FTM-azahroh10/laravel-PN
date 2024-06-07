@extends('layouts.landingpage')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <span class="fs-1 fw-bold">Lapor ! Indonesia</span>
            <ul class="nav nav-underline ms-4">
                <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page">Beranda / <span class="text-danger"> Lapor ! Indonesia </span></a>
                </li>
            </ul>
            <div class="card border border-0 border-top">
                <div class="my-4 ms-auto me-auto" style="width: 50%">
                    <div class="card text-bg-danger mb-3">
                        <div class="card-header fs-3 fw-bold">Sampaikan Laporan Anda</div>
                        <div class="card-body bg-white text-dark">
                            <p class="card-text">Pilih Klasifikasi Laporan</p>
                            <div class="btn-group w-100 mb-4" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="options-base" id="option1" autocomplete="off">
                                <label class="btn btn-outline-danger d-grid" for="option1">PENGADUAN</label>
                                <input type="radio" class="btn-check" name="options-base" id="option2" autocomplete="off">
                                <label class="btn btn-outline-danger d-grid" for="option2">ASPIRASI</label>
                                <input type="radio" class="btn-check" name="options-base" id="option3" autocomplete="off">
                                <label class="btn btn-outline-danger d-grid" for="option3">PERMINTAAN INFORMASI</label>
                            </div>
                            <p class="text-center my-3">
                                Perhatikan Cara Menyampaikan Permintaan Informasi Yang Baik dan Benar
                                <i class="bi bi-question-circle-fill text-danger"></i>
                            </p>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Ketik Judul Laporan Anda *" aria-label="judul">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Ketik Isi Laporan Anda *" id="isi" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Ketik Asal Pelapor *</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Ketik Instansi Tujuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kategori Laporan Anda</option>
                                </select>
                            </div>
                            <div class="my-4 mx-2 row">
                                <div class="col-4 text-start">
                                    <input class="form-control d-none" type="file" id="lampiran" name="lampiran">
                                    <a class="text-dark" href="#" id="upload-link">
                                        <i class="bi bi-paperclip"></i> Upload Lampiran
                                    </a>
                                </div>
                                <div class="col-8 text-end">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Anonim</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Rahasia</label>
                                    </div>
                                    <button class="btn btn-danger" style="width: 08rem">Lapor</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between ms-auto me-auto align-items-center" style="width : 80%">
                    <div class="text-center">
                        <i class="bi bi-circle-fill fs-3 text-primary"></i>
                        <p class="fw-bold">Tulisan Laporan</p>
                        <p>Laporkan keluhan atau <br>
                            aspirasi anda dengan jelas <br>
                            dan lengkap</p>
                    </div>
                    <hr class="flex-grow-1 border-primary border-2 mx-2">
                    <div class="text-center">
                        <i class="bi bi-circle fs-3 text-secondary"></i>
                        <p class="fw-bold">Proses Verifikasi</p>
                        <p>Dalam 3 hari, laporan Anda <br>
                            akan diverifikasi dan <br>
                            diteruskan kepada instansi <br>
                            berwenang</p>
                    </div>
                    <hr class="flex-grow-1 border-secondary border-2 mx-2">
                    <div class="text-center">
                        <i class="bi bi-circle fs-3 text-secondary"></i>
                        <p class="fw-bold">Proses Tindak Lanjut</p>
                        <p>Dalam 5 hari, instansi akan <br>
                            menindaklanjuti dan <br>
                            membalas laporan Anda</p>
                    </div>
                    <hr class="flex-grow-1 border-secondary border-2 mx-2">
                    <div class="text-center">
                        <i class="bi bi-circle fs-3 text-secondary"></i>
                        <p class="fw-bold">Beri Tanggapan</p>
                        <p>Anda dapat menanggapi <br>
                            kembali balasan yang <br>
                            diberikan oleh instansi <br>
                            dalam waktu 10 hari</p>
                    </div>
                    <hr class="flex-grow-1 border-secondary border-2 mx-2">
                    <div class="text-center">
                        <i class="bi bi-circle fs-3 text-secondary"></i>
                        <p class="fw-bold">Selesai</p>
                        <p>Laporan Anda akan terus <br>
                            ditindaklanjuti hingga <br>
                            terselesaikan</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('upload-link').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('lampiran').click();
            });
        </script>
    @endsection
