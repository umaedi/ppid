<section class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                {{-- <div class="card-body"> --}}
                <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Loop untuk menampilkan setiap item dalam slider -->
                        @foreach ($postsRecentSlider as $key => $tb)
                            <div class="carousel-item @if ($key == 0) active @endif">
                                <div class="testimonial-item">
                                    <div class="post-item wow fadeInUp">
                                        <div class="post-featured-image">
                                            <a href="/berita/{{ $tb->slug }}" class="image-anime">
                                                <figure style="height: 467px;">
                                                    <img lazy="loading"
                                                        src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="post-item-body">
                                            <div class="post-meta">
                                                <ul>
                                                    <li><a href="/berita/{{ $tb->slug }}">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            @if ($tb->tanggal_publish->isToday())
                                                                {{ $tb->tanggal_publish->locale('id')->diffForHumans() }}
                                                            @else
                                                                {{ \Carbon\Carbon::parse($tb->tanggal_publish)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="post-item-content">
                                                <h3><a
                                                        href="/berita/{{ $tb->slug }}">{{ Str::limit($tb->judul, 255, '...') }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                {{-- </div> --}}
            </div>
        </div>


        <div class="col-md-4">
            <div class="card border-0 shadow-sm trending">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="pip"></span>
                        <strong class="fs-5">Trending</strong>
                    </div>
                    <a href="/berita" class="text-decoration-none fw-semibold" style="color:#114A43">Lihat lainnya
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="card-body height-content">
                    @foreach ($postsPopular as $populer)
                        <a href="/berita/{{ $populer->slug }}" class="text-dark">
                            <div class="d-flex gap-1">
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold text-break" style="font-size: 14px;">{{ ucwords(strtolower($populer->judul)) }}</h6>
                                    <div class="d-flex align-items-center text-muted small fw-semibold">
                                        <i class="far fa-clock me-1"></i>
                                        @if ($populer->tanggal_publish->isToday())
                                            {{ $populer->tanggal_publish->locale('id')->diffForHumans() }}
                                        @else
                                            {{ \Carbon\Carbon::parse($populer->tanggal_publish)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                        @endif
                                        <div class="text-end ms-2">
                                            <i class="fa fa-eye"></i> {{ $populer->views }}
                                        </div>
                                    </div>
                                </div>
                                <img class="thumbnail"
                                    src="{{ route('thumbnail', ['year' => $populer->created_at->format('Y'), 'filename' => $populer->thumbnail, 'type' => 'utama']) }}"
                                    alt="gambar">
                            </div>
                            <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@if ($subdomain->kategori == 'puskesmas')
    <!-- Services Information Section -->
    <div class="card mt-4 raunded-2 border-0">
        <section class="services-section p-3">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main-card">
                    <div class="row">
                        <!-- Jam Operasional Dokter -->
                        <div class="col-lg-3 col-md-6 service-column">
                        <h3 class="service-title">Jam Praktik Dokter</h3>
                        <div class="service-content">
                            <div class="service-item">
                            <strong>Dokter Umum</strong><br />
                            <span class="service-time"
                                >Senin - Jumat: 08:00 - 14:00</span
                            ><br />
                            <span class="service-time">Sabtu: 08:00 - 12:00</span>
                            </div>
                            <div class="service-item">
                            <strong>Dokter Spesialis Anak</strong><br />
                            <span class="service-time"
                                >Selasa & Kamis: 13:00 - 16:00</span
                            ><br />
                            <span class="service-time">Sabtu: 09:00 - 12:00</span>
                            </div>
                            <div class="service-item">
                            <strong>Dokter Gigi</strong><br />
                            <span class="service-time"
                                >Senin, Rabu, Jumat: 08:00 - 12:00</span
                            ><br />
                            <span class="service-time"
                                >Selasa, Kamis: 13:00 - 17:00</span
                            >
                            </div>
                            <div class="service-item">
                            <strong>Dokter Kandungan</strong><br />
                            <span class="service-time">Rabu: 08:00 - 14:00</span
                            ><br />
                            <span class="service-time">Jumat: 13:00 - 17:00</span>
                            </div>
                            <div class="service-item">
                            <strong>Dokter Mata</strong><br />
                            <span class="service-time"
                                >Senin & Kamis: 14:00 - 17:00</span
                            >
                            </div>
                        </div>
                        </div>

                        <!-- Layanan Unggulan -->
                        <div class="col-lg-3 col-md-6 service-column">
                        <h3 class="service-title">Layanan Unggulan</h3>
                        <div class="service-content">
                            <div class="service-item">
                            <strong>Pemeriksaan Kesehatan Umum</strong><br />
                            Konsultasi dan pemeriksaan kesehatan menyeluruh
                            </div>
                            <div class="service-item">
                            <strong>Imunisasi & Vaksinasi</strong><br />
                            Program imunisasi rutin untuk bayi, anak, dan dewasa
                            </div>
                            <div class="service-item">
                            <strong>Kesehatan Ibu & Anak (KIA)</strong><br />
                            Pemeriksaan kehamilan, persalinan, dan perawatan bayi
                            </div>
                            <div class="service-item">
                            <strong>Program Keluarga Berencana</strong><br />
                            Konseling dan pelayanan kontrasepsi
                            </div>
                            <div class="service-item">
                            <strong>Pengobatan Penyakit Kronis</strong><br />
                            Diabetes, hipertensi, dan penyakit kronis lainnya
                            </div>
                            <div class="service-item">
                            <strong>Pelayanan Gawat Darurat</strong><br />
                            Siaga 24 jam untuk kasus emergency
                            </div>
                            <div class="service-item">
                            <strong>Laboratorium</strong><br />
                            Pemeriksaan darah, urine, dan tes kesehatan lainnya
                            </div>
                        </div>
                        </div>

                        <!-- Fasilitas & Penunjang -->
                        <div class="col-lg-3 col-md-6 service-column">
                        <h3 class="service-title">Fasilitas & Penunjang</h3>
                        <div class="service-content">
                            <div class="service-item">
                            <strong>Ruang Tunggu Ber-AC</strong><br />
                            Ruang tunggu nyaman dengan fasilitas lengkap
                            </div>
                            <div class="service-item">
                            <strong>Apotek</strong><br />
                            <span class="service-time"
                                >Senin - Sabtu: 07:30 - 20:00</span
                            ><br />
                            <span class="service-time">Minggu: 08:00 - 15:00</span>
                            </div>
                            <div class="service-item">
                            <strong>Laboratorium Klinik</strong><br />
                            <span class="service-time"
                                >Senin - Sabtu: 07:00 - 16:00</span
                            ><br />
                            Hasil lab siap dalam 2-4 jam
                            </div>
                            <div class="service-item">
                            <strong>Ruang Observasi</strong><br />
                            Fasilitas rawat inap sementara untuk observasi pasien
                            </div>
                            <div class="service-item">
                            <strong>Ambulance</strong><br />
                            Layanan ambulance 24 jam untuk rujukan
                            </div>
                            <div class="service-item">
                            <strong>Parkir Luas</strong><br />
                            Area parkir yang aman dan nyaman
                            </div>
                            <div class="service-item">
                            <strong>WiFi Gratis</strong><br />
                            Akses internet gratis untuk pasien dan keluarga
                            </div>
                        </div>
                        </div>

                        <!-- Informasi Penting -->
                        <div class="col-lg-3 col-md-6 service-column">
                        <h3 class="service-title">Informasi Penting</h3>
                        <div class="service-content">
                            <div class="service-item">
                            <strong>Pendaftaran Online</strong><br />
                            Daftar melalui aplikasi mobile atau website resmi
                            </div>
                            <div class="service-item">
                            <strong>Persyaratan Berobat</strong><br />
                            • KTP/KK<br />
                            • Kartu BPJS (jika ada)<br />
                            • Surat rujukan (untuk spesialis)
                            </div>
                            <div class="service-item">
                            <strong>Tarif Pelayanan</strong><br />
                            • Konsultasi Umum: Rp 15.000<br />
                            • Konsultasi Spesialis: Rp 50.000<br />
                            • Pemeriksaan Lab: Sesuai jenis tes
                            </div>
                            <div class="service-item">
                            <strong>Kontak Darurat</strong><br />
                            <span class="service-time">Hotline: 119</span><br />
                            <span class="service-time">WhatsApp: 0812-3456-7890</span>
                            </div>
                            <div class="service-item">
                            <strong>Program Khusus</strong><br />
                            • Posyandu setiap Rabu<br />
                            • Penyuluhan kesehatan setiap Jumat<br />
                            • Pemeriksaan gratis untuk lansia
                            </div>
                            <div class="service-item">
                            <strong>Jam Operasional</strong><br />
                            <span class="service-time"
                                >Senin - Sabtu: 07:00 - 21:00</span
                            ><br />
                            <span class="service-time">Minggu: 08:00 - 15:00</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>    
@endif


<section class="container mt-2">
    @if ($postsTerbaru)
        <div class="mb-2 col-lg-8 " style="padding: 0px 10px;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <span class="pip"></span>
                    <strong class="fs-5" style="color:#0b1f1c">Berita Terbaru</strong>
                    <div id="latest-posts-container"></div>
                </div>
                <a href="/berita" class="text-decoration-none fw-semibold fs-6"
                    style="color:#173633; display: inline-block;">
                    Lihat lainnya
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6">
                        <path fill-rule="evenodd"
                            d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-8">

            <div class="baru-news-section">
                @foreach ($postsTerbaru->take(4) as $tb)
                    <a href="/berita/{{ $tb->slug }}" class="text-dark">
                        <div class="baru-news-item">
                            <img lazy="loading"
                                src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                alt="{{ $tb->judul }}" class="baru-editor-image">
                            <div class="baru-news-content">
                                <div class="d-flex justify-content-start align-items-center">
                                    <span
                                        class="badge bg-kustom me-2">{{ $tb->category->nama_kategori ?? 'tanpa kategori' }}</span>
                                    <div class="text-start me-3">
                                        <i class="fa fa-eye"></i> {{ $tb->views }}
                                    </div>
                                </div>
                                <div class="baru-news-title text-break">{{ $tb->judul }}</div>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-muted me-2">{{ $tb->user->name ?? 'Admin' }}</span>
                                    <span class="text-muted">
                                        <i class="far fa-clock me-1"></i>
                                        @if ($tb->tanggal_publish->isToday())
                                            {{ $tb->tanggal_publish->locale('id')->diffForHumans() }}
                                        @else
                                            {{ \Carbon\Carbon::parse($tb->tanggal_publish)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="col-lg-4">
            <div class="baru-categories">
                <div class="d-flex align-items-center">
                    <span class="pip"></span>
                    <strong class="fs-5" style="color:#0b1f1c">Kategori</strong>
                </div>
                <ul class="baru-categories-list">

                    @foreach ($postsKategori as $kategori)
                        <a href="/kategori/{{ $kategori->slug }}">
                            <li><b>{{ $kategori->nama_kategori ?? 'tanpa katagori' }}</b><span
                                    class="baru-circle">{{ $kategori->posts_count }}</span>
                            </li>

                        </a>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>