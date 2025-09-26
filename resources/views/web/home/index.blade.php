@extends('web.layouts.app')
@section('content')
     <!-- Hero Section -->
    <section id="home" class="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1>Membangun Daerah, Melayani Masyarakat</h1>
            <p class="lead">
              Tulang Bawang Jaya hadir sebagai mitra terpercaya dalam
              pembangunan daerah dengan layanan berkualitas dan inovasi
              berkelanjutan.
            </p>
            <div class="d-flex gap-3 flex-wrap cta">
              <a href="#layanan" class="btn btn-primary">Pelajari Layanan</a>
              <a href="#kontak" class="btn btn-outline-primary">Hubungi Kami</a>
            </div>
          </div>
          <div class="col-lg-6">
            <img
              src="{{ asset('assets/img/bumd-pertama-tulangbawang.jpeg') }}"
              alt="Ilustrasi Pelayanan BUMD"
              class="img-fluid rounded"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-2 tentang">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-3">
            <h2 class="section-title">Tentang Kami</h2>
            <p class="section-subtitle">
              Visi dan Misi yang Menginspirasi Kemajuan Daerah
            </p>
          </div>
        </div>
        <div class="row align-items-center visi-misi">
          <div class="col-lg-6">
            <h3 class="mb-4">Visi</h3>
            <p class="mb-4">
              Terwujudnya PT. Tulang Bawang Jaya (Perseroda) sebagai Badan Usaha Milik Daerah (BUMD) yang terbaik, Unggul, Profesional dan bermanfaat bagi masyarakat banyak
            </p>

            <h3 class="mb-4">Misi</h3>
            <ul class="list-unstyled">
              <li class="mb-3">
                <i class="bi bi-check-circle-fill text-primary me-3"></i>
                Memberikan sumbangan bagi peningkatan Perekonomian Daerah, melalui peningkatan investasi yang signifikan dan menguntungkan.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle-fill text-primary me-3"></i>
                Menyelenggarakan berbagai kegiatan Usaha yang bermanfaat bagi masyarakat banyak.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle-fill text-primary me-3"></i>
               Menjadi perintis kegiatan yang belum dapat dilaksanakan oleh sektor usaha mikro, kecil, dan koperasi.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle-fill text-primary me-3"></i>
               Membantu memberikan bimbingan secara aktif kepada pengusaha golongan ekonomi lemah, koperasi, dan kelompok-kelompok usaha kecil lainnya.
              </li>
              <li class="mb-3">
                <i class="bi bi-check-circle-fill text-primary me-3"></i>
               Memberikan pelayanan prima atas usaha jasa, penyediaan produk-produk berkualitas dan kompetitif demi kepuasan pelanggan dan masyarakat.
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <img
              src="{{ asset('assets/img/tim-tulangbawangjaya.jpeg') }}"
              alt="Tim Tulang Bawang Jaya"
              class="img-fluid rounded"
              width="100%"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h2 class="section-title">Layanan Kami</h2>
            <p class="section-subtitle">
              Solusi Komprehensif untuk Kebutuhan Daerah
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-card">
              <div class="icon">
                <i class="bi bi-building"></i>
              </div>
              <h4 class="mb-3">Pengelolaan Aset</h4>
              <p class="text-muted mb-4">
                Mengelola dan mengoptimalkan aset daerah untuk memberikan nilai
                maksimal bagi pembangunan daerah.
              </p>
              <a href="#" class="btn btn-outline-primary">Detail</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-card">
              <div class="icon">
                <i class="bi bi-people"></i>
              </div>
              <h4 class="mb-3">Pelayanan Publik</h4>
              <p class="text-muted mb-4">
                Menyediakan layanan publik berkualitas yang mudah diakses dan
                sesuai kebutuhan masyarakat.
              </p>
              <a href="#" class="btn btn-outline-primary">Detail</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-card">
              <div class="icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <h4 class="mb-3">Investasi & Pengembangan</h4>
              <p class="text-muted mb-4">
                Mengembangkan investasi strategis untuk meningkatkan
                perekonomian dan kesejahteraan daerah.
              </p>
              <a href="#" class="btn btn-outline-primary">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Statistik Section -->
    <section id="statistik" class="py-5 stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h2 class="section-title text-white">Pencapaian Kami</h2>
            <p class="section-subtitle text-white-50">
              Angka yang Membanggakan
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-item">
              <span class="stat-number" data-target="15000">0</span>
              <div class="stat-label">Pelanggan Terlayani</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-item">
              <span class="stat-number" data-target="250">0</span>
              <div class="stat-label">Proyek Selesai</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-item">
              <span class="stat-number" data-target="45">0</span>
              <div class="stat-label">% Peningkatan PAD</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-item">
              <span class="stat-number" data-target="2006">0</span>
              <div class="stat-label">Tahun Berdiri</div>
            </div>
          </div>
        </div>
      </div>
    </section>

       <!-- Galeri Section -->
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

        <!-- Kontak Section -->
    <section id="kontak" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h2 class="section-title">Hubungi Kami</h2>
            <p class="section-subtitle">
              Siap Melayani dan Bekerja Sama dengan Anda
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="contact-form">
              <form action="/contact" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nama" class="form-label">Nama Lengkap *</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nama"
                      name="nama"
                      required
                    />
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      required
                    />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="instansi" class="form-label"
                    >Instansi/Perusahaan</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="instansi"
                    name="instansi"
                  />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan *</label>
                  <textarea
                    class="form-control"
                    id="pesan"
                    name="pesan"
                    rows="5"
                    required
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                  Kirim Pesan
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-info">
              <h4 class="mb-4">Informasi Kontak</h4>

              <div class="contact-item mb-4">
                <h5>
                  <i class="bi bi-geo-alt-fill text-primary me-2"></i>Alamat
                </h5>
                <p class="text-muted">
                  JL. Lintas Timur Sumatera Kel. Menggala Selatan, Kec. Menggala, Tulang Bawang Lampung 34611
                </p>
              </div>

              <div class="contact-item mb-4">
                <h5>
                  <i class="bi bi-telephone-fill text-primary me-2"></i>Telepon
                </h5>
                <p class="text-muted">+6282145637241</p>
              </div>

              <div class="contact-item mb-4">
                <h5>
                  <i class="bi bi-envelope-fill text-primary me-2"></i>Email
                </h5>
                <p class="text-muted">helpdesk.tulangbawangjaya.com</p>
              </div>

              <div class="contact-item mb-4">
                <h5>
                  <i class="bi bi-clock-fill text-primary me-2"></i>Jam
                  Operasional
                </h5>
                <p class="text-muted">
                  Senin - Jumat: 08.00 - 16.00
                </p>
              </div>

              <!-- Google Maps Embed -->
              <div class="map-container mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d881.730069522493!2d105.268297280473!3d-4.440448632290079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f3b005a3eba4f%3A0x54ef45925a2e6701!2sPertamina!5e0!3m2!1sid!2sid!4v1757688391510!5m2!1sid!2sid" 
                 width="100%"
                  height="150"
                  frameborder="0"
                  style="border: 0; border-radius: 8px"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                  title="Lokasi Tulang Bawang Jaya">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection