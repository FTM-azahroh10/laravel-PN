@extends('layouts.landingpage')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <img class="py-0" src="{{ asset('img/Profil_Negeri.png') }}" alt="Deskripsi Gambar">
        </div>
        <div class="mt-auto" style="background: url({{ asset('img/bg-footer.jpeg') }}) no-repeat center center; background-size: cover; height :4rem">
            <div class="container text-center pt-3">
                <span class="fs-3 fw-bold text-white">International</span>
            </div>
        </div>
        <div class="row justify-content-center py-4 mb-3">
            <div class="row mb-3">
                <div class="col-6">
                    <div class="card">
                        <img src="{{ asset('img/international-hibah.jpeg') }}" class="card-img-top" alt="international-hibah">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Hibah Rp50 Juta bagi Komunitas Penggerak
                                Literasi, Begini Cara Daftarnya</h2>
                            <p class="fs-6 text-secondary">Senin, 4 Maret 2024 | 07:01 WIB</p>
                            <p class="card-text fs-5">Hibah ditujukan untuk meningkatkan peran komunitas penggerak literasi
                                sebagai wadah yang bisa menumbuhkan minat baca-tulis dan
                                menggiatkan literasi masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-pendidikan.jpeg') }}" class="card-img-top" alt="international-pendidikan">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Syarat dan Cara
                                        Pendaftaran Politeknik…</h5>
                                    <p class="fs-6 text-secondary">Minggu, 3 Maret 2024 | 14:46 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-prakerja.jpeg') }}" class="card-img-top" alt="international-prakerja">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pendaftaran Kartu Prakerja
                                        Kembali Dibuka, Berikut…</h5>
                                    <p class="fs-6 text-secondary">Minggu, 3 Maret 2024 | 10:02 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-beasiswa.jpeg') }}" class="card-img-top" alt="international-beasiswa">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Syarat dan Cara Daftar
                                        Beasiswa S2 Luar Negeri d…</h5>
                                    <p class="fs-6 text-secondary">Kamis, 29 Februari 2024 | 10:48 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-mitigasi.jpeg') }}" class="card-img-top" alt="international-mitigasi">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Masuk Musim Peralihan,
                                        Waspada Bencana Cuaca</h5>
                                    <p class="fs-6 text-secondary">Kamis, 29 Februari 2024 | 08:32 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary" type="button">Lihat Selengkapnya</button>
                  </div>
            </div>
        </div>

        <div class="mt-auto" style="background: url({{ asset('img/bg-footer.jpeg') }}) no-repeat center center; background-size: cover; height :4rem">
            <div class="container text-center pt-3">
                <span class="fs-3 fw-bold text-white">Nasional</span>
            </div>
        </div>
        <div class="row justify-content-center py-4 mb-3">
            <div class="row mb-3">
                <div class="col-6">
                    <div class="card">
                        <img src="{{ asset('img/Nasional-industri.jpeg') }}" class="card-img-top" alt="Nasional-hibah">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Pertumbuhan Impresif Sektor Ilmate</h2>
                            <p class="fs-6 text-secondary">Selasa, 5 Maret 2024 | 07:12 WIB</p>
                            <p class="card-text fs-5">Pertumbuhan subsektor industri logam, mesin, alat transportasi, dan
                                elektronika (Ilmate) tercatat mengalami pertumbuhan double digit
                                sepanjang 2023.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Nasional-pendidikan.jpeg') }}" class="card-img-top" alt="Nasional-pendidikan">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Meningkatkan Perilaku Hidup
                                        Bersih dan Sehat di Sekolah</h5>
                                    <p class="fs-6 text-secondary">Selasa, 5 Maret 2024 | 07:01 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Nasional-energi.jpeg') }}" class="card-img-top" alt="Nasional-energi">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">17 Titik Sumber Hidrogen di
                                        Indonesia dan Prospeknya</h5>
                                    <p class="fs-6 text-secondary">Senin, 4 Maret 2024 | 07:36 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Nasional-wisata.jpeg') }}" class="card-img-top" alt="Nasional-wisata">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Mendongkrak Ekonomi
                                        Daerah dengan Wisata…</h5>
                                    <p class="fs-6 text-secondary">Sabtu, 2 Maret 2024 | 07:48 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Nasional-ikn.jpeg') }}" class="card-img-top" alt="Nasional-ikn">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Menyiapkan Kluster
                                        Perbankan di IKN</h5>
                                    <p class="fs-6 text-secondary">Jumat, 1 Maret 2024 | 12:43 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary" type="button">Lihat Selengkapnya</button>
                  </div>
            </div>
        </div>

        <div class="mt-auto" style="background: url({{ asset('img/bg-footer.jpeg') }}) no-repeat center center; background-size: cover; height :4rem">
            <div class="container text-center pt-3">
                <span class="fs-3 fw-bold text-white">Daerah</span>
            </div>
        </div>
        <div class="row justify-content-center py-4 mb-3">
            <div class="row mb-3">
                <div class="col-6">
                    <div class="card">
                        <img src="{{ asset('img/Daerah-Pariwisata.jpeg') }}" class="card-img-top" alt="Daerah-Pariwisata">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Menikmati Perpaduan Tiga Keindahan di
                                Waburi Park</h2>
                            <p class="fs-6 text-secondary">Selasa, 5 Maret 2024 | 07:31 WIB</p>
                            <p class="card-text fs-5">Destinasi wisata dengan panorama perpaduan pantai pasir putih dengan
                                laut biru kaca serta dinding tebing dapat ditemui di Waburi Park,
                                Kabupaten Buton Selatan, Provinsi Sulawesi Tenggara.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Daerah-Bahasa.jpeg') }}" class="card-img-top" alt="Daerah-Bahasa">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Melestarikan Bahasa
                                        Sebagai Warisan Bangsa</h5>
                                    <p class="fs-6 text-secondary">Sabtu, 2 Maret 2024 | 13:49 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Daerah-olahraga.jpeg') }}" class="card-img-top" alt="Daerah-olahraga">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">F1 Powerboat kembali Sapa
                                        Danau Toba</h5>
                                    <p class="fs-6 text-secondary">Sabtu, 2 Maret 2024 | 07:05 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Daerah-Museum.jpeg') }}" class="card-img-top" alt="Daerah-Museum">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Menyusuri Jejak Kerajaan
                                        Kutai Martadipura dan…</h5>
                                    <p class="fs-6 text-secondary">Rabu, 28 Februari 2024 | 07:22 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/Daerah-Pariwisata2.jpeg') }}" class="card-img-top" alt="Daerah-Pariwisata2">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Merasakan Denyut
                                        Samarinda dengan…</h5>
                                    <p class="fs-6 text-secondary">Sabtu, 24 Februari 2024 | 08:04 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary" type="button">Lihat Selengkapnya</button>
                  </div>
            </div>
        </div>

        <div class="mt-auto" style="background: url({{ asset('img/bg-footer.jpeg') }}) no-repeat center center; background-size: cover; height :4rem">
            <div class="container text-center pt-3">
                <span class="fs-3 fw-bold text-white">Layanan</span>
            </div>
        </div>
        <div class="row justify-content-center py-4 mb-3">
            <div class="row mb-3">
                <div class="col-6">
                    <div class="card">
                        <img src="{{ asset('img/international-hibah.jpeg') }}" class="card-img-top" alt="international-hibah">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Hibah Rp50 Juta bagi Komunitas Penggerak
                                Literasi, Begini Cara Daftarnya</h2>
                            <p class="fs-6 text-secondary">Senin, 4 Maret 2024 | 07:01 WIB</p>
                            <p class="card-text fs-5">Hibah ditujukan untuk meningkatkan peran komunitas penggerak literasi
                                sebagai wadah yang bisa menumbuhkan minat baca-tulis dan
                                menggiatkan literasi masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-pendidikan.jpeg') }}" class="card-img-top" alt="international-pendidikan">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Syarat dan Cara
                                        Pendaftaran Politeknik…</h5>
                                    <p class="fs-6 text-secondary">Minggu, 3 Maret 2024 | 14:46 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-prakerja.jpeg') }}" class="card-img-top" alt="international-prakerja">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Pendaftaran Kartu Prakerja
                                        Kembali Dibuka, Berikut…</h5>
                                    <p class="fs-6 text-secondary">Minggu, 3 Maret 2024 | 10:02 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-beasiswa.jpeg') }}" class="card-img-top" alt="international-beasiswa">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Syarat dan Cara Daftar
                                        Beasiswa S2 Luar Negeri d…</h5>
                                    <p class="fs-6 text-secondary">Kamis, 29 Februari 2024 | 10:48 WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-2">
                                <img src="{{ asset('img/international-mitigasi.jpeg') }}" class="card-img-top" alt="international-mitigasi">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Masuk Musim Peralihan,
                                        Waspada Bencana Cuaca</h5>
                                    <p class="fs-6 text-secondary">Kamis, 29 Februari 2024 | 08:32 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary" type="button">Lihat Selengkapnya</button>
                  </div>
            </div>
        </div>
    </div>
@endsection
