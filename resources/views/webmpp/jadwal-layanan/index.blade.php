@extends('webmpp.layouts.app')
@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <nav class="breadcrumbs">
            <h1>JADWAL PIKET LAYANAN</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Jadwal Layanan</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="container mt-5">
        
                <div class="table-responsive mt-4">
                    <table class="table table-bordered text-center">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Instansi</th>
                                <th>Hari</th>
                                <th>Jam Layanan</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-start">Dinas Kependudukan dan Pencatatan Sipil</td>
                                <td>Senin s.d Jum'at</td>
                                <td>08.00 - 15.30</td>
                                <td class="text-start">
                                    Untuk saat ini layanan dilakukan secara online, dimulai pada tanggal 07-09 Juli 2021 dan akan kembali dibuka secara tatap muka pada tanggal 12 Juli 2021.
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-start">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</td>
                                <td>Senin s.d Jum'at</td>
                                <td>08.00 - 15.30</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-center mt-3 fw-bold text-danger">Istirahat : 12.00 - 13.00</p>
            </div>
        </div>
    </section>


@endsection