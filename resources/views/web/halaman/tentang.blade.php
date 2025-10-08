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
          </div>
        </div>
      </div>
    </section>
    <section class="services-section">
      <div class="container">
        <div class="row justify-content-center mb-4">
          <div class="col-12">
            <div class="main-card">
              <div class="mb-4">
                <div class="col-12">
                  <h2 class="display-6 fw-bold text-dark mb-2">
                    Latar Belakang
                  </h2>
                </div>
              </div>
              <p>
                Pembentukan PPID (Pejabat Pengelola Informasi dan Dokumentasi) adalah tindakan suatu Badan Publik untuk menunjuk pejabat yang bertanggung jawab atas penyimpanan, pendokumentasian, penyediaan, dan pelayanan informasi kepada masyarakat sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP). Pembentukan ini dilakukan melalui penerbitan Surat Keputusan (SK) atau peraturan oleh pimpinan Badan Publik (misalnya Rektor, Gubernur, atau Menteri) dan bertujuan untuk mewujudkan pemerintahan yang transparan serta mempermudah akses masyarakat terhadap informasi publik. 
                Dasar Hukum dan Tujuan
                Amanat UU KIP: Dasar utama pembentukan PPID adalah UU KIP yang mewajibkan setiap Badan Publik untuk menyediakan informasi dan melayani permintaan informasi secara cepat, tepat waktu, dan sederhana. 
                Meningkatkan Transparansi: Keberadaan PPID menciptakan mekanisme yang lebih terstruktur untuk penyampaian informasi, sehingga badan publik dapat lebih transparan dan akuntabel. 
                Mempermudah Akses Informasi: PPID berfungsi sebagai "pintu tunggal" bagi masyarakat yang ingin mengajukan permohonan informasi, sehingga prosesnya menjadi lebih mudah dan efisien. 
                Proses Pembentukan PPID
                Penerbitan Aturan Internal: Pimpinan badan publik, seperti menteri, gubernur, atau rektor, menerbitkan Surat Keputusan (SK) atau peraturan (misalnya, Peraturan Rektor atau Peraturan Gubernur). 
                Menunjuk Pejabat: SK tersebut kemudian berisi penunjukan pejabat yang akan bertanggung jawab sebagai PPID. 
                Pembentukan Unit Kerja: Seringkali, PPID juga merujuk pada unit kerja atau organisasi yang dibentuk secara khusus untuk mengelola informasi dan dokumentasi Badan Publik. 
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-4">
          <div class="col-12">
            <div class="main-card">
              <div class="mb-4">
                <div class="col-12">
                  <h2 class="display-6 fw-bold text-dark mb-2">
                   Visi & Misi
                  </h2>
                </div>
              </div>
              <p>
                Visi Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah terwujudnya pelayanan informasi publik yang transparan, akuntabel, dan efektif, sementara misinya meliputi peningkatan pengelolaan informasi, pengembangan sistem layanan informasi, peningkatan kualitas SDM, dan penyediaan informasi yang cepat dan tepat sesuai amanat Undang-Undang Keterbukaan Informasi Publik. 
              </p>
              <h3>Visi</h3>
              <p>
                Visi PPID pada umumnya adalah sebagai berikut:
                Terwujudnya pelayanan informasi publik yang transparan dan akuntabel: untuk memenuhi hak masyarakat atas informasi. 
                Menciptakan keterbukaan informasi: sebagai wujud peningkatan partisipasi masyarakat dan transparansi pemerintahan. 
                Mewujudkan institusi yang transparan dan profesional: melalui pelayanan informasi publik yang berkualitas dan bermanfaat. 
              </p>
              <h3>Misi</h3>
              <p>Untuk mencapai visi tersebut, PPID memiliki beberapa misi, yaitu:</p>
              <ol>
                <li>Meningkatkan pengelolaan informasi dan dokumentasi: agar tertib, profesional, dan akuntabel. </li>
                <li>Mengembangkan dan membangun sistem: penyediaan dan layanan informasi yang efisien dan mudah diakses.</li>
                <li>Meningkatkan kualitas dan kompetensi sumber daya manusia (SDM): dalam bidang pelayanan informasi. </li>
                <li>Menyediakan dan memberikan informasi publik yang benar, cepat, akurat, dan mudah: diakses oleh masyarakat.</li>
                <li>Menjamin dan memberikan kepastian: dalam proses layanan informasi publik sesuai ketentuan perundang-undangan. </li>
                <li>Mengelola informasi secara baik, efisien, serta mudah diakses: untuk melengkapi sarana prasarana yang mendukung.</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-4">
          <div class="col-12">
            <div class="main-card">
              <div class="mb-4">
                <div class="col-12">
                  <h2 class="display-6 fw-bold text-dark mb-2">
                   Tugas dan Fungsi PPID 
                  </h2>
                </div>
              </div>
              <p>Menyimpan dan mengelola informasi dan dokumentasi yang dimiliki Badan Publik.
Menyediakan dan melayani permintaan informasi dari masyarakat.
Memastikan informasi yang diberikan akurat, kredibel, dan mudah diakses.
Dengan adanya PPID, diharapkan layanan informasi publik dapat berjalan lebih baik dan masyarakat lebih mudah dalam mendapatkan informasi yang dibutuhkan untuk berbagai keperluan.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-4">
          <div class="col-12">
            <div class="main-card">
              <div class="mb-4 text-center">
                <div class="col-12">
                  <h2 class="display-6 fw-bold text-dark mb-2">
                   Struktur Organisasi
                  </h2>
                </div>
              </div>
              <picture>
                <img src="{{ asset('assets/img/STRUKTUR PPID_page-0001.png') }}" alt="" width="100%">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

