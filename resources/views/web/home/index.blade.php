@extends('web.layouts.app')
@section('content')
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
        <h2 class="section-title text-center">Visi & Visi</h2>
        <p class="text-center mb-3">
          Visi dan Misi Pejabat Pengelola Informasi dan Dokumentasi (PPID)
          adalah terwujudnya pelayanan informasi publik yang transparan,
          akuntabel, dan efektif, sementara misinya meliputi peningkatan
          pengelolaan informasi, pengembangan sistem layanan informasi,
          peningkatan kualitas SDM, dan penyediaan informasi yang cepat dan
          tepat sesuai amanat Undang-Undang Keterbukaan Informasi Publik.
        </p>
        <div class="row">
          <div class="col-lg-6 mb-4">
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
          <div class="col-lg-6 mb-4">
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
@endsection