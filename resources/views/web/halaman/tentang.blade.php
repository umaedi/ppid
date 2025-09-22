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
              Profil Perusahaan
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
              <p>PT. Tulang Bawang Jaya (Perseroda) merupakan Badan Usaha Milik Daerah (BUMD) Kabupaten Tulang Bawang yang didirikan dalam bentuk Perseroan Terbatas (PT) dengan Landasan Hukum sebagai berikut :</p>
              <ol>
                <li>Undang - Undang No. 1 Tahun 1995 yang telah diperbaharui dengan Undang-Undang No. 40 Tahun 2007 tentang Perseroan Terbatas (PT).</li>
                <li>Peraturan Pemerintah Republik Indonesia No. 54 Tahun 2017 tentang Badan Usaha Milik Daerah.</li>
                <li>Peraturan Menteri Dalam Negeri Republik Indonesia No. 118 Tahun 2018 tentang Rencana Bisnis, Rencana Kerja, dan Anggaran, serta Tata Cara Pembinaan Badan Usaha Milik Daerah.</li>
                <li>Peraturan Daerah Kabupaten Tulang Bawang Nomor 4 Tahun 2006 tanggal 12 Juni 2006, tentang Badan Usaha Milik Daerah Kabupaten Tulang Bawang.</li>
                <li>Peraturan Bupati Tulang Bawang Nomor 24 Tahun 2006 tanggal 14 Agustus 2006, tentang Pembentukan Badan Usaha Milik Daerah dalam bentuk PT. Tulang Bawang Jaya.</li>
                <li>Peraturan Bupati Tulang Bawang Nomor 35 Tahun 2006 tanggal 12 Oktober 2006, tentang ketentuan – ketentuan Dewan Pengawas, Direksi, dan Kepegawaian Badan Usaha Milik Daerah PT. Tulang Bawang Jaya Kabupaten Tulang Bawang.</li>
                <li>Akta Pendirian Perseroan Terbatas (PT) Tulang Bawang Jaya Nomor 09 tanggal 14 Desember 2006 yang dibuat dihadapan Notaris Cahya Witri Dediyah, yang telah beberapa kali mengalami perubahan terakhir dengan Akta Notaris Ridzki Ardhiati Syihab, M.Kn., S.H., Nomor 04 tanggal 05 Oktober 2023 mengenai Pernyataan Keputusan Rapat PT. Tulang Bawang Jaya.</li>
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
                   Visi & Misi
                  </h2>
                </div>
              </div>
              <p>
                Pada dasarnya pembentukan BUMD PT. Tulang Bawang Jaya (Perseroda) dilakukan dengan maksud/tujuan agar dapat mengakses kegiatan-kegiatan yang bersifat komersial dalam rangka ikut membantu Pemkab Tulang Bawang meningkatkan PAD, mendorong pertumbuhan ekonomi, dan meningkatkan kesejahteraan masyrakat Tulang Bawang. Karena itu, ditetapkan Visi dan Misi sebagai berikut :
              </p>
              <h3>Visi</h3>
              <p>“terwujudnya PT. Tulang Bawang Jaya (Perseroda) sebagai Badan Usaha Milik Daerah (BUMD) yang terbaik, Unggul, Profesional dan bermanfaat bagi masyarakat banyak.”</p>
              <h3>Misi</h3>
              <ol>
                <li>Memberikan sumbangan bagi peningkatan Perekonomian Daerah, melalui peningkatan investasi yang signifikan dan menguntungkan.</li>
                <li>Menyelenggarakan berbagai kegiatan Usaha yang bermanfaat bagi masyarakat banyak.</li>
                <li>Menjadi perintis kegiatan yang belum dapat dilaksanakan oleh sektor usaha mikro, kecil, dan koperasi.</li>
                <li>Membantu memberikan bimbingan secara aktif kepada pengusaha golongan ekonomi lemah, koperasi, dan kelompok-kelompok usaha kecil lainnya.</li>
                <li>Memberikan pelayanan prima atas usaha jasa, penyediaan produk-produk berkualitas dan kompetitif demi kepuasan pelanggan dan masyarakat.</li>
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
                   Maksud dan Tujuan
                  </h2>
                </div>
              </div>
              <ol>
                <li>Mencari laba (profit oriented) dan ikut memberikan kontribusi yang signifikan dalam peningkatan Pendapatan Asli Daerah (PAD).</li>
                <li>Menggali, mengolah, dan mengembangkan seluruh potensi sumber daya alam dan sumber daya manusia yang ada, sebagai aset daerah untuk diberdayakan secara optimal sesuai dengan adat dan budaya setempat.</li>
                <li>Menciptakan lapangan pekerjaan dan menyerap tenaga lokal untuk mengurangi pengangguran dan kemiskinan.</li>
               </ol>
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
                <img src="{{ asset('assets/img/struktur-organisasi.png') }}" alt="" width="100%">
              </picture>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-4">
          <div class="col-12">
            <div class="main-card">
              <div class="mb-4">
                <div class="col-12">
                  <h2 class="display-6 fw-bold text-dark mb-2">
                   Sumber Daya Manusia
                  </h2>
                </div>
              </div>
              <p>
                Pada tahun 2025formasi dan kondisi SDM PT. Tulang Bawang Jaya (Perseroda) adalah sebagai berikut 
              </p>
              <ol>
                <li>Dewan Komisaris: 1 Orang</li>
                <li>Direksi: 1 Orang</li>
                <li>Pegawai Tetap: 7 Orang</li>
                <li>Pegawai SPBU: 21 Orang</li>
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
                   Permodalan
                  </h2>
                </div>
              </div>
              <p>
                Pada Tahun 2011-2025 PT. Tulang Bawang Jaya (Perseroda) tidak mendapatkan penyertaan Modal lagi.
                Adapun rincian penyertaan modal yang sudah diterima PT. Tulang Bawang Jaya adalah sebagai berikut :
              </p>
              <ul class="list-group">
                <li class="list-group-item">Penyertaan modal yang diterima s.d.2009  sebesar Rp.18.181.000.000,-</li>
                <li class="list-group-item">Penyertaan modal tambahan tahun 2010 Rp.1.000.000.000,-</li>
                <li class="list-group-item">Total penyertaan modal diterima	Rp.19.181.000.000,-</li>
                </ul>
                <p class="mt-3">
                    Modal ini terbagi dalam 1.918.100 lembar saham @ Rp. 10.000,- yang terdiri dari :
                </p>
                <ol>
                    <li>Pemkab Tulang Bawang 1.918.000 lembar saham	Rp.19.180.000.000,-</li>
                    <li>Koperasi Sai Bumi Nengah Nyepur, 100 lembar saham Rp.1.000.000,-</li>
                    <li>Total Rp.19.181.000.000,-</li>
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
                   Bidang Usaha 
                  </h2>
                </div>
              </div>
              <p>
                Berdasarkan Anggaran Dasar dan Anggaran Rumah Tangga (AD-ART) PT. Tulang Bawang Jaya (Perseroda), bahwa Kegiatan Usaha Perusahaan meliputi bidang usaha diantaranya:
              </p>
              <ol>
                <li>Pertanian, Kehutanan, dan Perikanan.</li>
                <li>Pertambangan dan Penggalian.</li>
                <li>Pengadaan Listrik, Gas, Uap/Air Panas dan Udara Dingin.</li>
                <li>Perdagangan Besar dan Eceran; Reparasi dan Perawatan Mobil dan Sepeda Motor.</li>
                <li>Pengangkutan dan Pergudangan.</li>
                <li>Kesenian, Hiburan, dan Rekreasi.</li>
                </ol>
                <p>
                    Akan tetapi untuk sementara waktu, saat ini PT. Tulang Bawang Jaya bergerak di Bidang Perdagangan Eceran bahan bakar minyak berupa Unit Usaha SPBU.
                    Demikian Profil BUMD PT. Tulang Bawang Jaya (Perseroda) tahun 2025.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

