<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Open Graph Meta Tags -->
    <meta
      property="og:title"
      content="PPID Tulang Bawang Jaya"
    />
    <meta
      property="og:description"
      content="Pejabat Pengelola Informasi dan Dokumentasi berkomitmen memberikan pelayanan informasi publik yang transparan dan akuntabel."
    />
    <meta property="og:image" content="{{ asset('assets/img/og_image.png') }}" />
    <meta property="og:type" content="website" />

    <title>PPID - Pejabat Pengelola Informasi dan Dokumentasi</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <style>
      :root {
        --primary-color: #2c5282;
        --secondary-color: #3182ce;
        --accent-color: #e53e3e;
        --text-dark: #2d3748;
        --text-light: #718096;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        color: var(--text-dark);
      }

      .navbar-brand {
        font-weight: bold;
        color: var(--primary-color) !important;
      }

      .hero-banner {
        background: linear-gradient(
          135deg,
          var(--primary-color) 0%,
          var(--secondary-color) 100%
        );
        color: white;
        padding: 100px 0;
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
        background: rgba(0, 0, 0, 0.1);
        z-index: 1;
      }

      .hero-content {
        position: relative;
        z-index: 2;
      }

      .hero-banner h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
      }

      .hero-banner p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
        opacity: 0.9;
      }

      .section-title {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 3rem;
        position: relative;
      }

      .section-title::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: var(--accent-color);
        border-radius: 2px;
      }

      .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      }

      .info-card {
        border-left: 4px solid var(--secondary-color);
      }

      .info-card.berkala {
        border-left-color: #38a169;
      }

      .info-card.serta-merta {
        border-left-color: #e53e3e;
      }

      .info-card.setiap-saat {
        border-left-color: #d69e2e;
      }

      .btn-primary {
        background: var(--primary-color);
        border-color: var(--primary-color);
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 25px;
        transition: all 0.3s ease;
      }

      .btn-primary:hover {
        background: var(--secondary-color);
        border-color: var(--secondary-color);
        transform: translateY(-2px);
      }

      .btn-outline-primary {
        border-color: var(--primary-color);
        color: var(--primary-color);
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 25px;
        transition: all 0.3s ease;
      }

      .btn-outline-primary:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        transform: translateY(-2px);
      }

      .form-control {
        border-radius: 10px;
        padding: 15px;
        border: 2px solid #e2e8f0;
        transition: border-color 0.3s ease;
      }

      .form-control:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 0.2rem rgba(49, 130, 206, 0.25);
      }

      .footer {
        background: var(--text-dark);
        color: white;
        padding: 50px 0 30px;
      }

      .footer h5 {
        color: var(--secondary-color);
        margin-bottom: 20px;
      }

      .footer a {
        color: #cbd5e0;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .footer a:hover {
        color: var(--secondary-color);
      }

      .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: var(--secondary-color);
        color: white;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        transition: all 0.3s ease;
      }

      .social-icons a:hover {
        background: var(--accent-color);
        transform: translateY(-3px);
      }

      .table thead th {
        background: var(--primary-color);
        color: white;
        border: none;
        font-weight: 600;
      }

      .badge {
        font-size: 0.8rem;
        padding: 8px 12px;
      }

      .news-card {
        border-radius: 15px;
        overflow: hidden;
      }

      .news-card img {
        height: 200px;
        object-fit: cover;
      }

      .navbar-nav .nav-link {
        font-weight: 500;
        color: var(--text-dark) !important;
        padding: 8px 16px !important;
        border-radius: 20px;
        transition: all 0.3s ease;
      }

      .navbar-nav .nav-link:hover {
        background: var(--secondary-color);
        color: white !important;
      }

      @media (max-width: 768px) {
        .hero-banner h1 {
          font-size: 2.5rem;
        }

        .hero-banner p {
          font-size: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- Header / Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm"
    >
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#beranda">
          <span>PPID TULANG BAWANG JAYA</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#regulasi">Regulasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#informasi-publik">Informasi Publik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#permohonan">Permohonan Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Banner -->
    <section id="beranda" class="hero-banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="hero-content">
              <h1>Keterbukaan Informasi Publik</h1>
              <p>
                Mewujudkan transparansi dan akuntabilitas pemerintahan melalui
                pelayanan informasi publik yang berkualitas
              </p>
              <div class="d-flex flex-wrap gap-3">
                <a href="#informasi-publik" class="btn btn-primary btn-lg">
                  <i class="fas fa-search me-2"></i>Cari Informasi
                </a>
                <a href="#permohonan" class="btn btn-outline-light btn-lg">
                  <i class="fas fa-file-alt me-2"></i>Ajukan Permohonan
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <i
              class="fas fa-shield-alt"
              style="font-size: 8rem; opacity: 0.3"
            ></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Profil PPID -->
    <section id="profil" class="py-5">
      <div class="container">
        <h2 class="section-title text-center">Profil PPID</h2>
        <p class="text-center mb-3">
          Visi dan Misi Pejabat Pengelola Informasi dan Dokumentasi (PPID)
          adalah terwujudnya pelayanan informasi publik yang transparan,
          akuntabel, dan efektif, sementara misinya meliputi peningkatan
          pengelolaan informasi, pengembangan sistem layanan informasi,
          peningkatan kualitas SDM, dan penyediaan informasi yang cepat dan
          tepat sesuai amanat Undang-Undang Keterbukaan Informasi Publik.
        </p>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i
                  class="fas fa-eye text-primary mb-3"
                  style="font-size: 3rem"
                ></i>
                <h4>Visi</h4>
                <p>
                  Visi PPID pada umumnya adalah sebagai berikut: Terwujudnya
                  pelayanan informasi publik yang transparan dan akuntabel:
                  untuk memenuhi hak masyarakat atas informasi. Menciptakan
                  keterbukaan informasi: sebagai wujud peningkatan partisipasi
                  masyarakat dan transparansi pemerintahan. Mewujudkan institusi
                  yang transparan dan profesional: melalui pelayanan informasi
                  publik yang berkualitas dan bermanfaat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i
                  class="fas fa-bullseye text-success mb-3"
                  style="font-size: 3rem"
                ></i>
                <h4>Misi</h4>
                <ul class="list-unstyled text-start">
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Meningkatkan
                    pengelolaan informasi dan dokumentasi: agar tertib,
                    profesional, dan akuntabel.
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>Mengembangkan
                    dan membangun sistem: penyediaan dan layanan informasi yang
                    efisien dan mudah diakses.
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>
                    Meningkatkan kualitas dan kompetensi sumber daya manusia
                    (SDM): dalam bidang pelayanan informasi.
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>
                    Menyediakan dan memberikan informasi publik yang benar,
                    cepat, akurat, dan mudah: diakses oleh masyarakat.
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>
                    Menjamin dan memberikan kepastian: dalam proses layanan
                    informasi publik sesuai ketentuan perundang-undangan.
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-check text-success me-2"></i>
                    Mengelola informasi secara baik, efisien, serta mudah
                    diakses: untuk melengkapi sarana prasarana yang mendukung.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i
                  class="fas fa-users text-warning mb-3"
                  style="font-size: 3rem"
                ></i>
                <h4>Struktur Organisasi</h4>
                <div class="text-start">
                  <p><strong>PPID Utama:</strong> Kepala Instansi</p>
                  <p><strong>PPID Pelaksana:</strong> Sekretaris</p>
                  <p><strong>PPID Pembantu:</strong></p>
                  <ul class="list-unstyled ps-3">
                    <li>• Kepala Bagian Umum</li>
                    <li>• Kepala Bagian Hukum</li>
                    <li>• Kepala Bagian Keuangan</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Regulasi -->
    <section id="regulasi" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title text-center">Regulasi</h2>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5>
                  <i class="fas fa-gavel text-primary me-2"></i>UU No. 14 Tahun
                  2008
                </h5>
                <p>Tentang Keterbukaan Informasi Publik</p>
                <a href="#" class="btn btn-sm btn-outline-primary"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5>
                  <i class="fas fa-file-alt text-primary me-2"></i>PP No. 61
                  Tahun 2010
                </h5>
                <p>Tentang Pelaksanaan UU Keterbukaan Informasi Publik</p>
                <a href="#" class="btn btn-sm btn-outline-primary"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5>
                  <i class="fas fa-book text-primary me-2"></i>Peraturan KI No.
                  1 Tahun 2021
                </h5>
                <p>Tentang Standar Layanan Informasi Publik</p>
                <a href="#" class="btn btn-sm btn-outline-primary"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h5>
                  <i class="fas fa-clipboard-list text-primary me-2"></i>SOP
                  Pelayanan Informasi
                </h5>
                <p>Standar Operasional Prosedur PPID Tulang Bawang Jaya</p>
                <a href="#" class="btn btn-sm btn-outline-primary"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Daftar Informasi Publik -->
    <section id="informasi-publik" class="py-5">
      <div class="container">
        <h2 class="section-title text-center">Daftar Informasi Publik</h2>

        <!-- Tab Navigation -->
        <ul
          class="nav nav-pills justify-content-center mb-5"
          id="infoTabs"
          role="tablist"
        >
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active me-2"
              id="berkala-tab"
              data-bs-toggle="pill"
              data-bs-target="#berkala"
              type="button"
            >
              <i class="fas fa-calendar-alt me-2"></i>Informasi Berkala
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link me-2"
              id="serta-merta-tab"
              data-bs-toggle="pill"
              data-bs-target="#serta-merta"
              type="button"
            >
              <i class="fas fa-bolt me-2"></i>Serta Merta
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="setiap-saat-tab"
              data-bs-toggle="pill"
              data-bs-target="#setiap-saat"
              type="button"
            >
              <i class="fas fa-clock me-2"></i>Setiap Saat
            </button>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="infoTabsContent">
          <!-- Informasi Berkala -->
          <div class="tab-pane fade show active" id="berkala" role="tabpanel">
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="card info-card berkala">
                  <div class="card-body">
                    <h5>
                      <i class="fas fa-chart-bar text-success me-2"></i>Laporan
                      Keuangan
                    </h5>
                    <p>Laporan keuangan tahunan dan triwulanan</p>
                    <span class="badge bg-success">Tersedia</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card info-card berkala">
                  <div class="card-body">
                    <h5><i class="fas fa-tasks text-success me-2"></i>LAKIP</h5>
                    <p>Laporan Akuntabilitas Kinerja Instansi Pemerintah</p>
                    <span class="badge bg-success">Tersedia</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card info-card berkala">
                  <div class="card-body">
                    <h5>
                      <i class="fas fa-clipboard-list text-success me-2"></i
                      >Rencana Kerja
                    </h5>
                    <p>Rencana kerja dan anggaran tahunan</p>
                    <span class="badge bg-success">Tersedia</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card info-card berkala">
                  <div class="card-body">
                    <h5>
                      <i class="fas fa-handshake text-success me-2"></i
                      >Kontrak/Tender
                    </h5>
                    <p>Informasi kontrak dan hasil tender</p>
                    <span class="badge bg-success">Tersedia</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Informasi Serta Merta -->
          <div class="tab-pane fade" id="serta-merta" role="tabpanel">
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="card info-card serta-merta">
                  <div class="card-body">
                    <h5>
                      <i
                        class="fas fa-exclamation-triangle text-danger me-2"
                      ></i
                      >Informasi Darurat
                    </h5>
                    <p>Informasi yang berkaitan dengan keadaan darurat</p>
                    <span class="badge bg-warning">Standby</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card info-card serta-merta">
                  <div class="card-body">
                    <h5>
                      <i class="fas fa-shield-virus text-danger me-2"></i
                      >Kesehatan Masyarakat
                    </h5>
                    <p>Informasi yang mengancam kesehatan masyarakat</p>
                    <span class="badge bg-warning">Standby</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card info-card serta-merta">
                  <div class="card-body">
                    <h5>
                      <i class="fas fa-leaf text-danger me-2"></i>Lingkungan
                      Hidup
                    </h5>
                    <p>Informasi kerusakan atau pencemaran lingkungan</p>
                    <span class="badge bg-warning">Standby</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card info-card serta-merta">
                  <div class="card-body">
                    <h5>
                      <i class="fas fa-balance-scale text-danger me-2"></i
                      >Penegakan Hukum
                    </h5>
                    <p>Informasi mengenai penangkapan tersangka</p>
                    <span class="badge bg-warning">Standby</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Informasi Setiap Saat -->
          <div class="tab-pane fade" id="setiap-saat" role="tabpanel">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Informasi</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Profil Instansi</td>
                    <td>Visi, misi, struktur organisasi</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Lihat</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Data Statistik</td>
                    <td>Data statistik sektoral</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Lihat</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Regulasi Internal</td>
                    <td>Peraturan dan kebijakan internal</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Lihat</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Prosedur Pelayanan</td>
                    <td>SOP dan maklumat pelayanan</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-primary">Lihat</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Form Permohonan Informasi -->
    <section id="permohonan" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title text-center">Permohonan Informasi</h2>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body p-4">
                <form id="permohonanForm">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="nama" class="form-label"
                        >Nama Lengkap *</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="nama"
                        required
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="nik" class="form-label">NIK *</label>
                      <input
                        type="text"
                        class="form-control"
                        id="nik"
                        maxlength="16"
                        required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">Email *</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        required
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="telepon" class="form-label"
                        >No. Telepon</label
                      >
                      <input type="tel" class="form-control" id="telepon" />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea
                      class="form-control"
                      id="alamat"
                      rows="3"
                    ></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="kebutuhan" class="form-label"
                      >Kebutuhan Informasi *</label
                    >
                    <textarea
                      class="form-control"
                      id="kebutuhan"
                      rows="4"
                      placeholder="Jelaskan informasi yang Anda butuhkan secara detail..."
                      required
                    ></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="tujuan" class="form-label"
                      >Tujuan Penggunaan Informasi *</label
                    >
                    <select class="form-control" id="tujuan" required>
                      <option value="">Pilih tujuan penggunaan</option>
                      <option value="penelitian">Penelitian/Akademik</option>
                      <option value="jurnalistik">
                        Kepentingan Jurnalistik
                      </option>
                      <option value="hukum">Kepentingan Hukum</option>
                      <option value="bisnis">Kepentingan Bisnis</option>
                      <option value="pribadi">Kepentingan Pribadi</option>
                      <option value="lainnya">Lainnya</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="format" class="form-label"
                      >Format Informasi yang Diinginkan</label
                    >
                    <select class="form-control" id="format">
                      <option value="">Pilih format</option>
                      <option value="hardcopy">Hard Copy (Cetak)</option>
                      <option value="softcopy">Soft Copy (Digital)</option>
                      <option value="keduanya">Keduanya</option>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                      <i class="fas fa-paper-plane me-2"></i>Kirim Permohonan
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Berita / Pengumuman -->
    <section id="galeri" class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h2 class="section-title">Galeri</h2>
            <p class="section-subtitle">
              Galeri kegiatan BUMD Tulang Bawang Jaya
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="gallery-item"
              data-bs-toggle="modal"
              data-bs-target="#galleryModal"
              data-bs-image="{{ asset('assets/img/berita/berita1.jpeg') }}"
            >
              <img src="{{ asset('assets/img/berita/berita1.jpeg') }}" alt="Kegiatan 1" class="img-fluid" />
              <h6 class="mt-3">
                Kunjungan silaturahmi Direktur BUMD PT. Tulang Bawang Jaya
              </h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="gallery-item"
              data-bs-toggle="modal"
              data-bs-target="#galleryModal"
              data-bs-image="{{ asset('assets/img/berita/berita2.jpg') }}"
            >
              <img src="{{ asset('assets/img/berita/berita2.jpg') }}" alt="Kegiatan 2" class="img-fluid" />
              <h6 class="mt-3">
                PT.Tulang Bawang Jaya Menandatangani MOU Dengan Kejaksaan Negeri
                Tulang Bawang
              </h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="gallery-item"
              data-bs-toggle="modal"
              data-bs-target="#galleryModal"
              data-bs-image="{{ asset('assets/img/berita/berita3.jpg') }}"
            >
              <img src="{{ asset('assets/img/berita/berita3.jpg') }}" alt="Kegiatan 3" class="img-fluid" />
              <h6 class="mt-3">
                Hasil Udang Vaname 805 Petambak Dibeli BUMD Tulang Bawang Jaya
              </h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="gallery-item"
              data-bs-toggle="modal"
              data-bs-target="#galleryModal"
              data-bs-image="{{ asset('assets/img/berita/kegiatan1.jpeg') }}"
            >
              <img src="{{ asset('assets/img/berita/kegiatan1.jpeg') }}" alt="Kegiatan 3" class="img-fluid" />
              <h6 class="mt-3">
                Kegiatan hari pertama Bimtek BUMD PT. Tulang Bawang Jaya oleh Tim dari BPKP  Perwakilan Prov. Lampung
              </h6>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Modal -->
    <div
      class="modal fade"
      id="galleryModal"
      tabindex="-1"
      aria-labelledby="galleryModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <img id="modalImage" src="" alt="Gallery Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer id="kontak" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <h5 class="text-white fw-bold">PPID Tulang Bawang Jaya</h5>
            <p>
              Pejabat Pengelola Informasi dan Dokumentasi berkomitmen memberikan
              pelayanan informasi publik yang transparan dan akuntabel.
            </p>
            <div class="social-icons">
              <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <h5 class="text-white fw-bold">Kontak Kami</h5>
            <div class="mb-3">
              <i class="fas fa-map-marker-alt me-2"></i>
              <strong>Alamat:</strong><br />
              JL. Lintas Timur Sumatera Kel. Menggala Selatan, Kec. Menggala, Tulang Bawang Lampung 34611<br />
            </div>
            <div class="mb-3">
              <i class="fas fa-phone me-2"></i>
              <strong>Telepon:</strong><br />
              +6282145637241
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <h5 class="text-white fw-bold">Informasi Pelayanan</h5>
            <div class="mb-3">
              <i class="fas fa-envelope me-2"></i>
              <strong>Email:</strong><br />
              helpdesk.tulangbawangjaya.com
            </div>
            <div class="mb-3">
              <i class="fas fa-clock me-2"></i>
              <strong>Jam Pelayanan:</strong><br />
              Senin - Jumat: 08:00 - 16:00 WIB<br />
              Istirahat: 12:00 - 13:00 WIB
            </div>
            <div class="mb-3">
              <i class="fas fa-calendar-check me-2"></i>
              <strong>SLA Pelayanan:</strong><br />
              Maksimal 10 hari kerja
            </div>
          </div>
        </div>
        <hr class="my-4" style="border-color: #4a5568" />
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="mb-0">&copy; 2025 PPID Tulang Bawang Jaya. Hak Cipta Dilindungi.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <a href="#" class="me-3">Kebijakan Privasi</a>
            <a href="#" class="me-3">Syarat & Ketentuan</a>
            <a href="#beranda" class="btn btn-sm btn-outline-light">
              <i class="fas fa-arrow-up me-1"></i>Kembali ke Atas
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
      // Smooth scrolling for navigation links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
              top: offsetTop,
              behavior: "smooth",
            });
          }
        });
      });

      // Active navigation highlight
      window.addEventListener("scroll", function () {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        let current = "";
        sections.forEach((section) => {
          const sectionTop = section.offsetTop - 100;
          const sectionHeight = section.clientHeight;
          if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute("id");
          }
        });

        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
          }
        });
      });

      // Form submission handler
      document
        .getElementById("permohonanForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();

          // Get form data
          const formData = {
            nama: document.getElementById("nama").value,
            nik: document.getElementById("nik").value,
            email: document.getElementById("email").value,
            telepon: document.getElementById("telepon").value,
            alamat: document.getElementById("alamat").value,
            kebutuhan: document.getElementById("kebutuhan").value,
            tujuan: document.getElementById("tujuan").value,
            format: document.getElementById("format").value,
            tanggal: new Date().toISOString().split("T")[0],
          };

          // Basic validation
          if (
            !formData.nama ||
            !formData.nik ||
            !formData.email ||
            !formData.kebutuhan ||
            !formData.tujuan
          ) {
            alert("Mohon lengkapi semua field yang wajib diisi (*)");
            return;
          }

          // NIK validation
          if (formData.nik.length !== 16 || !/^\d+$/.test(formData.nik)) {
            alert("NIK harus berupa 16 digit angka");
            return;
          }

          // Email validation
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(formData.email)) {
            alert("Format email tidak valid");
            return;
          }

          // Store form data (in real implementation, this would be sent to backend)
          console.log("Form Data:", formData);

          // Show success message
          alert(
            "Permohonan informasi berhasil dikirim!\n\n" +
              "No. Registrasi: PPID-" +
              Date.now() +
              "\n" +
              "Status: Dalam Proses\n\n" +
              "Kami akan memproses permohonan Anda dalam waktu maksimal 10 hari kerja. " +
              "Konfirmasi akan dikirim ke email yang Anda daftarkan."
          );

          // Reset form
          this.reset();

          // Scroll to top of form
          document
            .getElementById("permohonan")
            .scrollIntoView({ behavior: "smooth" });
        });

      // NIK input formatter (numbers only)
      document.getElementById("nik").addEventListener("input", function (e) {
        this.value = this.value.replace(/\D/g, "");
      });

      // Phone number input formatter (numbers only)
      document
        .getElementById("telepon")
        .addEventListener("input", function (e) {
          this.value = this.value.replace(/\D/g, "");
        });

      // Auto-hide alerts after 5 seconds
      setTimeout(function () {
        const alerts = document.querySelectorAll(".alert");
        alerts.forEach((alert) => {
          if (!alert.classList.contains("alert-info")) {
            alert.style.transition = "opacity 0.5s";
            alert.style.opacity = "0";
            setTimeout(() => alert.remove(), 500);
          }
        });
      }, 5000);

      // Initialize tooltips if any
      const tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });

      // Loading animation for cards
      const cards = document.querySelectorAll(".card");
      const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      };

      const observer = new IntersectionObserver(function (entries) {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        });
      }, observerOptions);

      cards.forEach((card) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
        observer.observe(card);
      });

       // Gallery modal functionality
      const galleryItems = document.querySelectorAll(".gallery-item");
      const modalImage = document.getElementById("modalImage");

      galleryItems.forEach((item) => {
        item.addEventListener("click", function () {
          const imageSrc = this.getAttribute("data-bs-image");
          modalImage.src = imageSrc;
        });
      });
    </script>
  </body>
</html>
