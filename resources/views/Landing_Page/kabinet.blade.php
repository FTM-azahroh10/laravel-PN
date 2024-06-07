@extends('layouts.landingpage')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-4">
                <h1 class="display-4 fw-bold">Kabinet Indonesia Maju</h1>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page">Beranda / <span class="text-danger">Profil Indonesia</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="card-title text-center mb-4">Presiden dan Wakil Presiden</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Presiden</td>
                                    <td>Ir. H. Joko Widodo</td>
                                    <td class="text-center">
                                        <img src="{{ asset('img/Presiden.jpg') }}" alt="Joko Widodo" class="img-fluid rounded shadow" style="max-width: 100px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wakil Presiden</td>
                                    <td>K.H. Ma’ruf Amin</td>
                                    <td class="text-center">
                                        <img src="{{ asset('img/wakil.jpg') }}" alt="K.H. Ma’ruf Amin" class="img-fluid rounded shadow" style="max-width: 100px;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h2 class="card-title text-center mt-5 mb-4">Dasar Pembentukan, Masa Bakti, dan Jumlah Kementerian</h2>
                        <div class="mb-4">
                            <h4 class="fw-bold">Dasar Pembentukan</h4>
                            <p class="lead">Keputusan Presiden Nomor 113/P Tahun 2019 (23 Oktober 2019)</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="fw-bold">Masa Bakti</h4>
                            <p class="lead">23 Oktober 2019 s.d. sekarang</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="fw-bold">Jumlah Kementerian</h4>
                            <p class="lead">34 Kementerian</p>
                        </div>

                        <div class="accordion" id="kabinetAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Anggota Kabinet
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#kabinetAccordion">
                                    <div class="accordion-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Pejabat</th>
                                                    <th scope="col">Mulai Menjabat</th>
                                                    <th scope="col">Selesai Menjabat</th>
                                                    <th scope="col">Keppres</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Menteri Koordinator Bidang Politik, Hukum, dan Keamanan</td>
                                                    <td>Mohammad Mahfud MD<br>Hadi Tjahjanto</td>
                                                    <td>23 Oktober 2019<br>21 Februari 2024</td>
                                                    <td>2 Februari 2024<br>–</td>
                                                    <td>Keppres No. 34/P Tahun 2024<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Menteri Koordinator Bidang Perekonomian</td>
                                                    <td>Airlangga Hartarto</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Menteri Koordinator Bidang Pembangunan Manusia dan Kebudayaan</td>
                                                    <td>Muhadjir Effendy</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Menteri Koordinator Bidang Kemaritiman dan Investasi</td>
                                                    <td>Luhut Binsar Pandjaitan</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Menteri Sekretaris Negara</td>
                                                    <td>Pratikno</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Menteri Dalam Negeri</td>
                                                    <td>Muhammad Tito Karnavian</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Menteri Luar Negeri</td>
                                                    <td>Retno Lestari Priansari Marsudi</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Menteri Pertahanan</td>
                                                    <td>Prabowo Subianto</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Menteri Agama</td>
                                                    <td>Fachrul Razi<br>Yaqut Cholil Qoumas</td>
                                                    <td>23 Oktober 2019<br>23 Desember 2020</td>
                                                    <td>23 Desember 2020<br>–</td>
                                                    <td>Keppres No. 133/P Tahun 2020<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Menteri Hukum dan Hak Asasi Manusia</td>
                                                    <td>Yasonna H. Laoly</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Menteri Keuangan</td>
                                                    <td>Sri Mulyani Indrawati</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Menteri Pendidikan dan Kebudayaan<br>Menteri Pendidikan, Kebudayaan, Riset dan Teknologi</td>
                                                    <td>Nadiem Anwar Makarim<br>Nadiem Anwar Makarim</td>
                                                    <td>23 Oktober 2019<br>28 April 2021</td>
                                                    <td>28 April 2021<br>–</td>
                                                    <td>Keppres No. 72/P Tahun 2021<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Menteri Kesehatan</td>
                                                    <td>Terawan Agus Putranto<br>Budi Gunadi Sadikin</td>
                                                    <td>23 Oktober 2019<br>23 Desember 2020</td>
                                                    <td>23 Desember 2020<br>–</td>
                                                    <td>Keppres No. 133/P Tahun 2020<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Menteri Sosial</td>
                                                    <td>Juliari P. Batubara<br>Tri Rismaharini</td>
                                                    <td>23 Oktober 2019<br>23 Desember 2020</td>
                                                    <td>23 Desember 2020<br>–</td>
                                                    <td>Keppres No. 133/P Tahun 2020<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Menteri Ketenagakerjaan</td>
                                                    <td>Ida Fauziyah</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Menteri Perindustrian</td>
                                                    <td>Agus Gumiwang Kartasasmita</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Menteri Perdagangan</td>
                                                    <td>Agus Suparmanto<br>Muhammad Lutfi<br>Zulkifli Hasan</td>
                                                    <td>23 Oktober 2019<br>23 Desember 2020<br>15 Juni 2022</td>
                                                    <td>23 Desember 2020<br>15 Juni 2022<br>–</td>
                                                    <td>Keppres No. 133/P Tahun 2020<br>Keppres 64/P Tahun 2022<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>Menteri Energi dan Sumber Daya Mineral</td>
                                                    <td>Arifin Tasrif</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Menteri Pekerjaan Umum dan Perumahan Rakyat</td>
                                                    <td>Mochamad Basuki Hadimuljono</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Menteri Perhubungan</td>
                                                    <td>Budi Karya Sumadi</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Menteri Komunikasi dan Informatika</td>
                                                    <td>Johnny Gerard Plate<br>Budi Arie Setiadi</td>
                                                    <td>23 Oktober 2019<br>17 Juli 2023</td>
                                                    <td>17 Mei 2023<br>–</td>
                                                    <td>Keppres No. 62/P Tahun 2023<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>Menteri Pertanian</td>
                                                    <td>Syahrul Yasin Limpo<br>Andi Amran Sulaiman</td>
                                                    <td>23 Oktober 2019<br>25 Oktober 2023</td>
                                                    <td>5 Oktober 2023<br>–</td>
                                                    <td>Keppres No. 101/P Tahun 2023<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>Menteri Lingkungan Hidup dan Kehutanan</td>
                                                    <td>Siti Nurbaya</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Menteri Kelautan dan Perikanan</td>
                                                    <td>Edhy Prabowo<br>Sakti Wahyu Trenggono</td>
                                                    <td>23 Oktober 2019<br>23 Desember 2020</td>
                                                    <td>23 Desember 2020<br>–</td>
                                                    <td>Keppres No. 133/P Tahun 2020<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi</td>
                                                    <td>A. Halim Iskandar</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>Menteri Agraria dan Tata Ruang/Kepala Badan Pertanahan Nasional</td>
                                                    <td>Sofyan A. Djalil<br>Hadi Tjahjanto<br>Agus Harimurti Yudhoyono</td>
                                                    <td>23 Oktober 2019<br>15 Juni 2022<br>21 Februari 2024</td>
                                                    <td>15 Juni 2022<br>21 Februari 2024<br>–</td>
                                                    <td>Keppres 64/P Tahun 2022<br>Keppres No. 34/P Tahun 2024<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>Menteri Perencanaan Pembangunan Nasional/Kepala Badan Perencanaan Pembangunan Nasional</td>
                                                    <td>Suharso Monoarfa</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi</td>
                                                    <td>Tjahjo Kumolo<br>Abdullah Azwar Anas</td>
                                                    <td>23 Oktober 2019<br>8 September 2022</td>
                                                    <td>1 Juli 2022<br>–</td>
                                                    <td>Keppres 91/P Tahun 2022<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>Menteri Badan Usaha Milik Negara</td>
                                                    <td>Erick Thohir</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>Menteri Koperasi dan Usaha Kecil dan Menengah</td>
                                                    <td>Teten Masduki</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>Menteri Pariwisata dan Ekonomi Kreatif/Kepala Badan Pariwisata dan Ekonomi Kreatif</td>
                                                    <td>Wishnutama Kusubandio<br>Sandiaga Salahuddin Uno</td>
                                                    <td>23 Oktober 2019<br>23 Desember 2020</td>
                                                    <td>23 Desember 2020<br>–</td>
                                                    <td>Keppres No. 133/P Tahun 2020<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>Menteri Pemberdayaan Perempuan dan Perlindungan Anak</td>
                                                    <td>I Gusti Ayu Bintang Darmawati</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>Menteri Riset dan Teknologi/Kepala Badan Riset dan Inovasi Nasional</td>
                                                    <td>Bambang Brodjonegoro</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>28 April 2021</td>
                                                    <td>(Digabung menjadi Menteri Pendidikan, Kebudayaan, Riset dan Teknologi)</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>Menteri Pemuda dan Olahraga</td>
                                                    <td>Zainudin Amali<br>Ario Bimo Nandito Ariotedjo</td>
                                                    <td>23 Oktober 2019<br>3 April 2023</td>
                                                    <td>13 Maret 2023<br>–</td>
                                                    <td>Keppres No. 26/P Tahun 2023<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>Kepala Badan Koordinasi Penanaman Modal<br>Menteri Investasi/Kepala Badan Koordinasi Penanaman Modal (BKPM)</td>
                                                    <td>Bahlil Lahadalia<br>Bahlil Lahadalia</td>
                                                    <td>23 Oktober 2019<br>28 April 2021</td>
                                                    <td>28 April 2021<br>–</td>
                                                    <td>Keppres No. 117/P Tahun 2019<br>Keppres No. 72/P Tahun 2021</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>Sekretaris Kabinet</td>
                                                    <td>Pramono Anung Wibowo</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>Keppres No. 115/P Tahun 2019</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>Jaksa Agung</td>
                                                    <td>ST Burhanuddin</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>Keppres No. 114/P Tahun 2019</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>Panglima Tentara Nasional Indonesia</td>
                                                    <td>Marsekal TNI Hadi Tjahjanto<br>Jenderal TNI Andika Perkasa<br>Laksamana Yudo Margono<br>Jenderal TNI Agus Subiyanto</td>
                                                    <td>23 Oktober 2019<br>17 November 2021<br>19 Desember 2022<br>22 November 2023</td>
                                                    <td>17 November 2021<br>19 Desember 2022<br>–</td>
                                                    <td>Keppres No. 106/TNI/2021<br>Keppres No. 91/TNI/2022<br>Keppres No. 102/TNI/2023</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>Kepala Kepolisian Republik Indonesia</td>
                                                    <td>Jenderal Pol. Idham Azis<br>Jenderal Pol. Listyo Sigit Prabowo</td>
                                                    <td>1 November 2019<br>27 Januari 2021</td>
                                                    <td>27 Januari 2021<br>–</td>
                                                    <td>Keppres No. 5/Polri Tahun 2021<br>–</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>Kepala Staf Kepresidenan</td>
                                                    <td>Moeldoko</td>
                                                    <td>23 Oktober 2019</td>
                                                    <td>–</td>
                                                    <td>Keppres No. 116/P Tahun 2019</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="agendaAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Agenda Kabinet
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#agendaAccordion">
                                        <div class="accordion-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <h5>1. Mempercepat dan melanjutkan pembangunan infrastruktur</h5>
                                                    <p>Interkoneksi infrastruktur dengan kawasan, industri kecil, kawasan ekonomi, khusus, pariwisata, persawahan, perkebunan dan perikanan.</p>
                                                </li>
                                                <li class="list-group-item">
                                                    <h5>2. Pembangunan Sumber Daya Manusia (SDM)</h5>
                                                    <ul>
                                                        <li>Menjamin kesehatan Ibu hamil dan anak usia sekolah;</li>
                                                        <li>Meningkatkan kualitas pendidikan dan manajemen talenta.</li>
                                                    </ul>
                                                </li>
                                                <li class="list-group-item">
                                                    <h5>3. Undang investasi seluas-luasnya untuk membuka lapangan kerja</h5>
                                                    <p>Memangkas hambatan investasi.</p>
                                                </li>
                                                <li class="list-group-item">
                                                    <h5>4. Reformasi Birokrasi</h5>
                                                    <ul>
                                                        <li>Kecepatan melayani dan memberi izin;</li>
                                                        <li>Menghapus pola pikir linier, monoton dan terjebak di zona nyaman;</li>
                                                        <li>Adaptif produktif, inovatif dan kompetitif.</li>
                                                    </ul>
                                                </li>
                                                <li class="list-group-item">
                                                    <h5>5. APBN yang fokus dan tepat sasaran</h5>
                                                    <p>APBN dipastikan harus memiliki manfaat ekonomi dan meningkatkan kesejahteraan rakyat.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
