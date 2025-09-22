@extends('web.layouts.app')
@push('css')
    <style>
        .text-break {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

            text-overflow: ellipsis;
        }
    </style>
@endpush
@section('content')
    <div class="informasi mt-5">
        <div class="container">
            <div class="row" id="recentPosts">

            </div>
            {{-- <div class="baru-editor-section">
                <div class="baru-editor-header">⭐ Pilihan Editor</div>
                <div class="baru-editor-items">
                    <div class="baru-editor-item">
                        <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                            alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        <div class="baru-editor-content">
                            <div class="baru-editor-title">Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial</div>
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1"></i>
                                    05 Jan 2025
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="baru-editor-item">
                        <div class="baru-editor-image">
                            <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                                alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        </div>
                        <div class="baru-editor-content">
                            <div class="baru-editor-title">Cara Mengubah Artikel Blog Menjadi Carousel Instagram</div>
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1"></i>
                                    05 Jan 2025
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="baru-editor-item">
                        <div class="baru-editor-image">
                            <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                                alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        </div>
                        <div class="baru-editor-content">
                            <div class="baru-editor-title">Panduan Membuat Artikel yang Disukai Google</div>
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1"></i>
                                    05 Jan 2025
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="baru-header">Berita Terbaru</div> --}}
            <div class="baru-content">
                <div class="baru-news-section">
                    <div class="baru-news-item">
                        <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                            alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        <div class="baru-news-content">
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-blue-circle">
                                    Konten Kreator
                                </span>
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1"></i>
                                    05 Jan 2025
                                </span>
                            </div>
                            <div class="baru-news-title">Google Maps Scraper: Alat Mengumpulkan Data Google Maps</div>
                            <div class="baru-news-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                    <div class="baru-news-item">
                        <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                            alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        <div class="baru-news-content">
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-blue-circle">
                                    Konten Kreator
                                </span>
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1"></i>
                                    <span class="clock-trending">05 Jan 2025</span>
                                </span>
                            </div>
                            <div class="baru-news-title">Cursor AI: Asisten Coding Cerdas Berbasis AI</div>
                            <div class="baru-news-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                    <div class="baru-news-item">
                        <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                            alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        <div class="baru-news-content">
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-blue-circle">
                                    Konten Kreator
                                </span>
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1"></i>
                                    <span class="clock-trending">05 Jan 2025</span>
                                </span>
                            </div>
                            <div class="baru-news-title">Cara Memaksimalkan Niche yang Tepat untuk Konten Kreator Pemula
                            </div>
                            <div class="baru-news-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                    <div class="baru-news-item">
                        <img src="https://cdn1-production-images-kly.akamaized.net/DxAnlTJY1OMCI0Xn4rrqsYLNDMU=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4383868/original/053319600_1680667983-329393.jpg"
                            alt="Cara Mudah Mengubah Blog Post Jadi Konten Media Sosial" class="baru-editor-image">
                        <div class="baru-news-content">
                            <div class="baru-flex baru-items-center baru-space-x-4 baru-mb-4">
                                <span class="baru-blue-circle">
                                    Konten Kreator
                                </span>
                                <span class="baru-news-meta">
                                    Admin
                                </span>
                                <span class="baru-timestamp">
                                    <i class="far fa-clock baru-ml-1 "></i>
                                    <span class="clock-trending">05 Jan 2025</span>
                                </span>
                            </div>
                            <div class="baru-news-title">Bahaya Pakai Video China untuk Affiliate Marketing</div>
                            <div class="baru-news-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baru-sidebar">
                    <div class="baru-trending">
                        <div class="baru-trending-title">Trending</div>
                        <ul class="baru-trending-list">
                            <li><b>Google Maps Scraper: Alat Mengumpulkan Data Google Maps</b></li>
                            <span class="baru-timestamp-trending">
                                <i class="far fa-clock baru-ml-1"></i>
                                <span class="clock-trending">05 Jan 2025</span>
                            </span>
                            <li><b>Cursor AI: Asisten Coding Cerdas Berbasis AI</b></li>
                            <span class="baru-timestamp-trending">
                                <i class="far fa-clock baru-ml-1"></i>
                                <span class="clock-trending">05 Jan 2025</span>
                            </span>
                            <li><b>Cara Memaksimalkan Niche yang Tepat untuk Konten Kreator Pemula</b></li>
                            <span class="baru-timestamp-trending">
                                <i class="far fa-clock baru-ml-1"></i>
                                <span class="clock-trending">05 Jan 2025</span>
                            </span>
                            <li><b>Bahaya Pakai Video China untuk Affiliate Marketing</b></li>
                            <span class="baru-timestamp-trending">
                                <i class="far fa-clock baru-ml-1"></i>
                                <span class="clock-trending">05 Jan 2025</span>
                            </span>
                            <li><b>SEO untuk Pemilik Usaha Panduan Lengkap untuk Memulai</b></li>
                            <span class="baru-timestamp-trending">
                                <i class="far fa-clock baru-ml-1"></i>
                                <span class="clock-trending">05 Jan 2025</span>
                            </span>
                        </ul>
                    </div>
                    <div class="baru-categories">
                        <div class="baru-categories-title">Kategori</div>
                        <ul class="baru-categories-list">
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                            <li><b>Digital Marketing</b> <span class="baru-circle">11</span></li>
                            <li><b>Copywriting</b> <span class="baru-circle">9</span></li>
                            <li><b>Teknologi</b> <span class="baru-circle">5</span></li>
                            <li><b>Social Media</b> <span class="baru-circle">4</span></li>
                            <li><b>Website</b> <span class="baru-circle">3</span></li>
                            <li><b>Konten Kreator</b> <span class="baru-circle">2</span></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="baru-pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">Next</a>
            </div>
        </div>
    </div>

    <!-- Our FAQs Section Start -->
    <div class="our-faqs bg-section mb-5">
        <div class="container">
            <div class="row section-row text-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Informasi</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Akses Layanan Terkait</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- FAQs Client Slider Start -->
                    <div class="faqs-client-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/kpk.png') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/span.png') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/oss.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/lpse.png') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/sipd.png') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Client Slide End -->

                                <!-- Client Slide Start -->
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/sicantik.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Box Start -->
    <div class="cta-box bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-1 order-2">
                    <!-- CTA Box Image Start -->
                    <div class="cta-box-image">
                        @if (!$pengaturan)
                            <figure>
                                <img lazy="loading" src="{{ asset('img/kepala_opd.png') }}" alt="Kepala OPD">
                            </figure>
                        @else
                            <figure>
                                <img lazy="loading"
                                    src="{{ route('photo-pimpinan', ['filename' => $pengaturan->photo_kepala_opd]) }}"
                                    alt="{{ $pengaturan->nama_kepala_opd }}">
                            </figure>
                        @endif

                    </div>
                    <!-- CTA Box Image End -->
                </div>

                <div class="col-lg-7 order-lg-2 order-1">
                    <!-- CTA Box Content Start -->
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Sambutan</h3>
                            @if ($pengaturan)
                                <h2 class="text-anime-style-3" data-cursor="-opaque">
                                    {{ $pengaturan->jabatan . ' ' . $pengaturan->nama_opd }} Kab. Tulang Bawang</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">
                                    {{ $pengaturan->sambutan_kepala_opd ?? '-' }}</p>
                            @else
                                -
                            @endif
                        </div>
                        <!-- Section Title End -->

                        <!-- CTA Box Button Start -->
                        <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-highlighted btn-cta-1">Selengkapnya</a>
                        </div>
                        <!-- CTA Box Button End -->
                    </div>
                    <!-- CTA Box Content End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Secton Start -->
    <div class="why-choose-us mt-5">
        <div class="container">
            <div class="row section-row text-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        {{-- <h3 class="wow fadeInUp">Temukan kami di</h3> --}}
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Galeri kegiatan</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row" id="media-center">

            </div>
        </div>
    </div>
    <x-modal modal_id="modal-ig" modal_title="Detail Postingan" modal_body="modal-content" />
@endsection
@push('js')
    <script type="text/javascript">
        $('#recentPosts').html(skeleton_recent_post());
        $('#media-center').html(make_skeleton());
        $(document).ready(function() {
            loadPosts();
            loadInstagram();
        });

        async function loadPosts() {
            var param = {
                method: 'GET',
                url: '{{ url()->current() }}',
                data: {
                    load: 'recentPosts',
                }
            }
            await transAjax(param).then((result) => {
                $('#recentPosts').html(result)
            }).catch((err) => {
                console.log(err);
            });
        }

        async function loadInstagram() {
            var param = {
                method: 'GET',
                url: '/api/instagram',
                data: {
                    load: 'table',
                }
            }
            await transAjax(param).then((result) => {
                $('#media-center').html(result)
            }).catch((err) => {
                console.log(err);
            });
        }

        function make_skeleton() {
            var output = '';
            for (var count = 0; count < 6; count++) {
                output += '<div class="col-12 col-md-4">';
                output += '<div class="ph-item">';
                output += '<div class="ph-picture"></div>';
                output += '</div>';
                output += '</div>';
            }
            return output;
        }

        function skeleton_recent_post() {
            var output = '';
            for (var count = 0; count < 1; count++) {
                output += '<div class="col-12 col-md-12">';
                output += '<div class="ph-item">';
                output += '<div class="ph-picture"></div>';
                output += '</div>';
                output += '</div>';
            }
            return output;
        }
    </script>
@endpush
