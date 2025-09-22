@extends('webmpp.layouts.app')
@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <nav class="breadcrumbs ">
            <h1 class="fw-bold">JADWAL PIKET LAYANAN</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Jadwal Layanan</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">    
            <div class="container mt-4">
               
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-success" >
                            <tr>
                                <th>No</th>
                                <th>OPD Kabupaten/Kota</th>
                                <th>Nomor</th>
                                <th>Jenis Layanan</th>
                                <th>Total Layanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dinas Kependudukan dan Pencatatan Sipil</td>
                                <td>1</td>
                                <td>Biodata Penduduk</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>2</td>
                                <td>Penerbitan Kartu Keluarga</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>3</td>
                                <td>Perekaman dan Penerbitan KTP-el dan KIA</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</td>
                                <td>1</td>
                                <td>Persetujuan Bangunan Gedung (PBG)</td>
                                <td>117</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>2</td>
                                <td>Izin Penyelenggaraan Reklame (PR)</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>3</td>
                                <td>Sertifikat Laik Fungsi (SLF)</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Polres Tulang Bawang</td>
                                <td>1</td>
                                <td>Sidik Jari</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>2</td>
                                <td>SKCK</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kejar Tulang Bawang</td>
                                <td>1</td>
                                <td>Layanan Konsultasi Hukum</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kementerian Agama Kantor Kab Tulang Bawang</td>
                                <td>1</td>
                                <td>Pengambilan Perangkat Administrasi NR</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dinas Sosial</td>
                                <td>1</td>
                                <td>Bantuan Sosial Tunai</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dinas Kesehatan</td>
                                <td>1</td>
                                <td>Pelayanan Kesehatan Gratis</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Dinas Perhubungan</td>
                                <td>1</td>
                                <td>Uji Kendaraan Bermotor</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>BPJS Kesehatan</td>
                                <td>1</td>
                                <td>Pendaftaran dan Perubahan Data Peserta</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>BPJS Ketenagakerjaan</td>
                                <td>1</td>
                                <td>Klaim JHT dan Jaminan Kematian</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dinas Pendidikan</td>
                                <td>1</td>
                                <td>Beasiswa Pendidikan</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>PT PASPEN</td>
                                <td>1</td>
                                <td>Pelayanan Dana Pensiun</td>
                                <td>30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@endsection