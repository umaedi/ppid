@extends('webmpp.layouts.app')
@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <nav class="breadcrumbs">
            <h1>Tentang MPP</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Tentang MPP</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="container my-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="maklumat" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Maklumat Pelayanan</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="tugasdanfungsi" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Tugas dan Fungsi</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="sejarah" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Sejarah</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="visimisi" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Visi dan Misi</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="selendangpandang" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Selendang Pandang</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="moto" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Moto Mal Pelayanan Publik</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="programkerja" class="text-decoration-none">
                            <div class="card border border-3 border-success shadow-sm d-flex align-items-center p-3">
                                <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                                <span class="fw-bold ms-2 text-dark">Program Kerja</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                     
        </div>
    </section>


@endsection