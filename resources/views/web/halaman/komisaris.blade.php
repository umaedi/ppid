@extends('web.layouts.app')
@push('css')
     <style>
      .hero-banner {
        background: linear-gradient(
          135deg,
          #2c5282 0%,
          #3182ce 50%,
          #4299e1 100%
        );
        color: white;
        margin-top: 65px;
        padding: 60px;
        position: relative;
        overflow: hidden;
      }

      .hero-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><radialGradient id="a" cx="50%" cy="50%" r="50%"><stop offset="0%" stop-color="white" stop-opacity="0.1"/><stop offset="100%" stop-color="white" stop-opacity="0"/></radialGradient></defs><circle cx="10" cy="10" r="1" fill="url(%23a)"/><circle cx="30" cy="15" r="1" fill="url(%23a)"/><circle cx="50" cy="5" r="1" fill="url(%23a)"/><circle cx="70" cy="12" r="1" fill="url(%23a)"/><circle cx="90" cy="8" r="1" fill="url(%23a)"/></svg>');
        opacity: 0.3;
      }

      .hero-content {
        position: relative;
        z-index: 2;
      }

      .hero-title {
        font-size: 3rem;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        margin-bottom: 1rem;
      }

      .hero-subtitle {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: 2rem;
      }

      .services-section {
        padding: 80px 0;
        background-color: #f8f9fa;
      }

      .service-card {
        background: white;
        border-radius: 15px;
        padding: 30px 25px;
        height: 100%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: none;
        position: relative;
        overflow: hidden;
      }

      .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      }

      .service-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #3182ce, #4299e1);
        border-radius: 15px 15px 0 0;
      }

      .service-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #3182ce, #4299e1);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 20px;
        position: relative;
      }

      .service-icon::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: inherit;
        opacity: 0.3;
        transform: scale(1.2);
        z-index: -1;
      }

      .service-title {
        color: #2d3748;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
      }

      .service-content {
        max-height: 300px;
        overflow-y: auto;
        padding-right: 10px;
      }

      .service-content::-webkit-scrollbar {
        width: 6px;
      }

      .service-content::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
      }

      .service-content::-webkit-scrollbar-thumb {
        background: #3182ce;
        border-radius: 10px;
      }

      .service-content::-webkit-scrollbar-thumb:hover {
        background: #2c5282;
      }

      .service-item {
        padding: 8px 0;
        border-bottom: 1px solid #e2e8f0;
        color: #4a5568;
        line-height: 1.6;
      }

      .service-item:last-child {
        border-bottom: none;
      }

      .service-time {
        color: #3182ce;
        font-weight: 600;
      }

      .badge-custom {
        background: linear-gradient(135deg, #3182ce, #4299e1);
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        margin: 2px;
      }

      @media (max-width: 768px) {
        .hero-title {
          font-size: 2rem;
        }
        .service-card {
          margin-bottom: 30px;
        }
        .services-section {
          padding: 50px 0;
        }
      }
    </style>
@endpush
@section('content')
    <!-- Hero Banner Section -->
    <section class="hero-banner">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8 hero-content">
            <h1 class="hero-title">
              <i class="fas fa-hospital-user me-3"></i>
             {{ $title }}
            </h1>
            {{-- <div class="d-flex justify-content-center gap-3 flex-wrap">
              <span class="badge badge-custom">
                <i class="fas fa-clock me-1"></i> Latar belakang
              </span>
              <span class="badge badge-custom">
                <i class="fas fa-user-md me-1"></i> Visi & Misi
              </span>
              <span class="badge badge-custom">
                <i class="fas fa-heart me-1"></i> Maksud dan Tujuan
              </span>
              <span class="badge badge-custom">
                <i class="fas fa-heart me-1"></i> Struktur Organisasi
              </span>
              <span class="badge badge-custom">
                <i class="fas fa-heart me-1"></i> Sumber Daya Manusia
              </span>
              <span class="badge badge-custom">
                <i class="fas fa-heart me-1"></i> Permodalan 
              </span>
              <span class="badge badge-custom">
                <i class="fas fa-heart me-1"></i> Bidang Usaha 
              </span>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <section class="services-section">
      <div class="container">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('assets/img/foto-komisaris.jpeg') }}" class="img-fluid rounded-start" alt="Foto komisaris" width="100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p><strong>Nama:</strong> Drs. Tamami Akip - <span class="text-muted">komisaris</span></p>
                
                <p>
                  Lahir di kota Menggala pada tahun 1958. <br>
                  Diangkat sebagai Komisaris PT. Tulang Bawang Jaya pada tanggal 03 Juli 2019 
                  dan diperpanjang pada tanggal 03 Juli 2023.
                </p>

                <p><strong>Perjalanan Karir:</strong></p>
                <ol>
                  <li>Kadis PU Bina Marga Kab. Tulang Bawang (2007–2008).</li>
                  <li>Kepala Bandiklatda Kab. Tuba (2008–2013).</li>
                  <li>Asisten Bidang Administrasi Sekdakab Tuba (2013–2016).</li>
                  <li>Asisten Bidang Umum Sekdakab Tuba (2016–2017).</li>
                  <li>Asisten Bidang Pengembangan Ekonomi Sekdakab Tuba (2017–2019).</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

