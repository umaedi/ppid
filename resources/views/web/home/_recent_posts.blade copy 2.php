<div class="content-wrapper mb-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Konten Utama -->
            <div class="col-lg-8 col-md-7 col-sm-12 d-flex flex-column">
                <div class="tuba-our-testimonial mb-4">
                    <div class="row align-items-center">
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach($postsRecentSlider as $tb)
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="post-item wow fadeInUp">
                                                    <div class="post-featured-image">
                                                        <a href="#" class="image-anime">
                                                            <figure>
                                                                <img lazy="loading"
                                                                    src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                                                    alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <div class="post-item-body">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li><a href="#">
                                                                        <i class="fa-solid fa-calendar-days"></i>
                                                                        <blade
                                                                            if|%20(%24tb-%3Ecreated_at-%3EisToday())%0D>
                                                                            {{ $tb->created_at->locale('id')->diffForHumans() }}
                                                                        @else
                                                                            {{ \Carbon\Carbon::parse($tb->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-item-content">
                                                            <h3><a
                                                                    href="#">{{ Str::limit($tb->judul, 255, '...') }}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="baru-news-section">
                    @foreach($postsTerbaru as $tb)
                        <a href="/berita/{{ $tb->slug }}" class="text-dark">
                            <div class="baru-news-item">
                                <img lazy="loading"
                                    src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                    alt="{{ $tb->judul }}" class="baru-editor-image">
                                <div class="baru-news-content">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge bg-kustom me-2">{{ $tb->category->nama_kategori }}</span>
                                        <span class="text-muted me-2">{{ $tb->user->name }}</span>
                                        <span class="text-muted">
                                            <i class="far fa-clock me-1"></i>
                                            @if($tb->created_at->isToday())
                                                {{ $tb->created_at->locale('id')->diffForHumans() }}
                                            @else
                                                {{ \Carbon\Carbon::parse($tb->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                            @endif

                                        </span>
                                    </div>
                                    <div class="baru-news-title text-break">{{ $tb->judul }}</div>
                                    <div class="text-start">
                                        <i class="fa fa-eye"></i> {{ $tb->views }}
                                    </div>
                                </div>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-5 col-sm-12 mb-4">
                <div class="sidebar-baru h-100 d-flex flex-column">
                    <div class="baru-trending mb-4">
                        <div class="baru-trending-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="icon-small">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                            Trending
                        </div>
                        <ul class="baru-trending-list ">
                            @foreach($postsPopular as $populer)
                                <li><b>{{ $populer->judul }}</b></li>
                                <span class="text-muted">
                                    <i class="far fa-clock me-1"></i>
                                    @if($populer->created_at->isToday())
                                        {{ $populer->created_at->locale('id')->diffForHumans() }}
                                    @else
                                        {{ \Carbon\Carbon::parse($populer->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                    @endif
                                </span>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                    <div class="baru-categories">
                        <div class="baru-categories-title">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="icon-small">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                            </svg>
                            Kategori
                        </div>
                        <ul class="baru-categories-list">
                            @foreach($postsKategori as $kategori)
                                <li><b>{{ $kategori->nama_kategori }}</b><span
                                        class="baru-circle">{{ $kategori->posts_count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container mt-5">

                <!-- Carousel -->
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($postsRecentSlider as $key => $tb)
                            <div
                                class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <img class="d-block w-100"
                                    src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                    alt="{{ $tb->judul }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ Str::limit($tb->judul, 255, '...') }}</h5>
                                    <p>
                                        @if($tb->created_at->isToday())
                                            {{ $tb->created_at->locale('id')->diffForHumans() }}
                                        @else
                                            {{ \Carbon\Carbon::parse($tb->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target=".carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target=".carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Berita Terbaru -->
                <div class="baru-news-section mt-4">
                    @foreach($postsTerbaru as $tb)
                        <a href="/berita/{{ $tb->slug }}" class="text-dark">
                            <div class="baru-news-item d-flex mb-3">
                                <img lazy="loading"
                                    src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                    alt="{{ $tb->judul }}" class="baru-editor-image me-3"
                                    style="width: 120px; height: 80px; object-fit: cover;">
                                <div class="baru-news-content">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge bg-kustom me-2">{{ $tb->category->nama_kategori }}</span>
                                        <span class="text-muted me-2">{{ $tb->user->name }}</span>
                                        <span class="text-muted">
                                            <i class="far fa-clock me-1"></i>
                                            @if($tb->created_at->isToday())
                                                {{ $tb->created_at->locale('id')->diffForHumans() }}
                                            @else
                                                {{ \Carbon\Carbon::parse($tb->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="baru-news-title text-break">{{ $tb->judul }}</div>
                                    <div class="text-start">
                                        <i class="fa fa-eye"></i> {{ $tb->views }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>




<!-- Konten Utama -->
@if(count($postsRecentSlider) > 4)
    <div class="baru-text-center mt-4">
        <a href="/berita" class="btn-default btn-signup">Lihat Semua</a>
    </div>
    {{-- 21 Januari 2025 --}}
@endif
</div>