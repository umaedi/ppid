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
    <div class="informasi mt-4">
        <div class="container">
            <div class="row" id="recentPosts">

            </div>
        </div>
    </div>

    {{-- Start Code untuk Web Tuba yang utma bukan yang opd 20 Januari 2025 --}}
    {{-- <div class="card">
        <div class="swiper-container banner__swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="w-full aspect-w-3 aspect-h-1 rounded-lg overflow-hidden">
                        <a href="#" target="_blank" title="Informasi Layanan Publik Terbaru">
                            <img lazy="loading"
                                src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690943199-Infografis-banner-mob-20823.png"
                                alt="Informasi Layanan Publik Terbaru" class="w-full h-full object-cover bg-gray-200">
                        </a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="w-full aspect-w-3 aspect-h-1 rounded-lg overflow-hidden">
                        <a href="#" target="_blank" title="Aduan Warga">
                            <img lazy="loading"
                                src="https://dvgddkosknh6r.cloudfront.net/live/media/img/infographic-banners/1711340576-compressed_Slide-PJ-Aduan-1.png"
                                alt="Aduan Warga" class="w-full h-full object-cover bg-gray-200">
                        </a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="w-full aspect-w-3 aspect-h-1 rounded-lg overflow-hidden">
                        <a href="#" target="_blank" title="Sosialisasi Sampah Kita">
                            <img lazy="loading"
                                src="https://dvgddkosknh6r.cloudfront.net/live/media/img/infographic-banners/1731415280-compressed_Banner-Sampah_Slide-PJ-Web.jpg"
                                alt="Sosialisasi Sampah Kita" class="w-full h-full object-cover bg-gray-200">
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="baru-container">
        <div class="baru-text-center mb-4">
            <h1>Layanan Khusus</h1>
            <p>Memberikan pelayanan di setiap langkah hidup Anda</p>
        </div>


        <div class="baru-row d-flex flex-row flex-wrap justify-content-center">
            <div class="baru-col">
                <div class="baru-card mb-3" style="max-width: 625px;">
                    <div class="baru-row g-0">
                        <div class="baru-col-md-4 baru-flex-container">
                            <img src="https://file.jabarprov.go.id/live/media/img/life-events/events/Administrasi.svg"
                                class="baru-img-fluid rounded-start" alt="Kelahiran">
                            <h5 class="baru-card-title">Kelahiran</h5>
                        </div>
                        <div class="baru-col-md-8">
                            <div class="baru-card-body">
                                <p class="baru-card-text">Dapatkan informasi seputar layanan kelahiran dari pendaftaran
                                    hingga dokumen penting untuk kenyamanan Anda dan keluarga.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="baru-col">
                <div class="baru-card mb-3" style="max-width: 625px;">
                    <div class="baru-row g-0">
                        <div class="baru-col-md-4 baru-flex-container">
                            <img src="https://file.jabarprov.go.id/live/media/img/life-events/events/Administrasi.svg"
                                class="baru-img-fluid rounded-start" alt="Sekolah">
                            <h5 class="baru-card-title">Sekolah</h5>
                        </div>
                        <div class="baru-col-md-8">
                            <div class="baru-card-body">
                                <p class="baru-card-text">Temukan informasi pendidikan anak usia dini hingga sekolah dasar,
                                    menengah, dan atas sesuai kriteria yang Anda cari.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="baru-col">
                <div class="baru-card mb-3" style="max-width: 625px;">
                    <div class="baru-row g-0">
                        <div class="baru-col-md-4 baru-flex-container">
                            <img src="https://file.jabarprov.go.id/live/media/img/life-events/events/Administrasi.svg"
                                class="baru-img-fluid rounded-start" alt="Pelatihan & Sertifikasi">
                            <h5 class="baru-card-title">Pelatihan & Sertifikasi</h5>
                        </div>
                        <div class="baru-col-md-8">
                            <div class="baru-card-body">
                                <p class="baru-card-text">Dapatkan informasi seputar ragam pelatihan dan sertifikasi yang
                                    sudah diakui untuk menunjang karier Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="baru-col">
                <div class="baru-card mb-3" style="max-width: 625px;">
                    <div class="baru-row g-0">
                        <div class="baru-col-md-4 baru-flex-container">
                            <img src="https://file.jabarprov.go.id/live/media/img/life-events/events/Administrasi.svg"
                                class="baru-img-fluid rounded-start" alt="Membangun Usaha">
                            <h5 class="baru-card-title">Membangun Usaha</h5>
                        </div>
                        <div class="baru-col-md-8">
                            <div class="baru-card-body">
                                <p class="baru-card-text">Mulai bisnis Anda dengan langkah yang tepat melalui ragam panduan
                                    dan dukungan dalam membangun usaha dari nol.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="baru-col">
                <div class="baru-card mb-3" style="max-width: 625px;">
                    <div class="baru-row g-0">
                        <div class="baru-col-md-4 baru-flex-container">
                            <img src="https://file.jabarprov.go.id/live/media/img/life-events/events/Administrasi.svg"
                                class="baru-img-fluid rounded-start" alt="Mendapatkan Hunian">
                            <h5 class="baru-card-title">Mendapatkan Hunian</h5>
                        </div>
                        <div class="baru-col-md-8">
                            <div class="baru-card-body">
                                <p class="baru-card-text">Dapatkan informasi lengkap tentang ragam layanan yang membantu
                                    Anda untuk mendapatkan hunian impian.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="baru-col">
                <div class="baru-card mb-3" style="max-width: 625px;">
                    <div class="baru-row g-0">
                        <div class="baru-col-md-4 baru-flex-container">
                            <img src="https://file.jabarprov.go.id/live/media/img/life-events/events/Administrasi.svg"
                                class="baru-img-fluid rounded-start" alt="Kegiatan Bermasyarakat">
                            <h5 class="baru-card-title">Kegiatan Bermasyarakat</h5>
                        </div>
                        <div class="baru-col-md-8">
                            <div class="baru-card-body">
                                <p class="baru-card-text">Temukan ragam pilihan kegiatan sosial yang bisa Anda ikuti untuk
                                    berkontribusi ke masyarakat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="baru-text-center mt-4">
            <a href="/layanan" class="btn btn-success">Lihat Semua Layanan</a>
        </div>
    </div> --}}
    {{-- End Code untuk Web Tuba yang utma bukan yang opd 20 Januari 2025 --}}








    <!-- Our FAQs Section Start -->
    <div class="our-faqs bg-section mb-5">
        <div class="container">
            <div class="row section-row text-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Informasi</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Akses Layanan Publik</h2>
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
                                <div class="swiper-slide">
                                    <div class="client-logo">
                                        <figure>
                                            <img lazy="loading" src="{{ asset('img/logo/layanan/mpp-digital.webp') }}"
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
                                <img loading="lazy" src="{{ asset('img/kepala_opd.png') }}" alt="Kepala OPD">
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
                url: '/api/instagram/{{ \request()->subdomain }}',
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

        // function skeleton_recent_post() {
        //     var output = '';
        //     for (var count = 0; count < 3; count++) {
        //         output += '<div class="col-12 col-md-12">';
        //         output += '<div class="ph-item">';
        //         output += '<div class="ph-picture"></div>';
        //         output += '</div>';
        //         output += '</div>';
        //     }
        //     return output;
        // }

        function skeleton_recent_post() {
            var output = '';
            for (var count = 0; count < 3; count++) {
                output += '<div class="col-12 col-md-12 mb-3">';
                output += '    <div class="ph-item">';
                output += '        <div class="ph-col-4">';
                output += '            <div class="ph-picture"></div>';
                output += '        </div>';
                output += '        <div class="ph-col-8">';
                output += '            <div class="ph-row">';
                output += '                <div class="ph-col-12"></div>';
                output += '                <div class="ph-col-8"></div>';
                output += '                <div class="ph-col-4 empty"></div>';
                output += '                <div class="ph-col-6"></div>';
                output += '                <div class="ph-col-6 empty"></div>';
                output += '            </div>';
                output += '        </div>';
                output += '    </div>';
                output += '</div>';
            }
            return output;
        }
    </script>
    {{-- <script>
        function reportIssue() {
            alert("Terima kasih telah melaporkan masalah. Kami akan segera menindaklanjutinya.");
        }
    </script> --}}
@endpush
