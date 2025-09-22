<div class="col-md-8">
    <div class="tuba-our-testimonial">
        <div class="row align-items-center">
            <div class="testimonial-slider">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($postsRecentSlider as $tb)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="post-item wow fadeInUp">
                                        <!-- Post Featured Image Start -->
                                        <div class="post-featured-image">
                                            <a href="#" class="image-anime">
                                                <figure>
                                                    <img lazy="loading"
                                                        src="{{ route('thumbnail', ['year' => $tb->created_at->format('Y'), 'filename' => $tb->thumbnail, 'type' => 'utama']) }}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Post Featured Image End -->

                                        <!-- Post Item Body Start -->
                                        <div class="post-item-body">
                                            <!-- Post Meta Start -->
                                            <div class="post-meta">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            @if ($tb->created_at->isToday())
                                                                {{ $tb->created_at->locale('id')->diffForHumans() }}
                                                            @else
                                                                {{ \Carbon\Carbon::parse($tb->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post-item-content">
                                                <h3><a href="#">{{ Str::limit($tb->judul, 255, '...') }}</a>
                                                </h3>
                                            </div>
                                            <!-- Post Content End -->
                                        </div>
                                        <!-- Post Item Body End -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($postsRecent as $pr)
    <div class="col-lg-4 col-md-6">
        <!-- Blog Item Start -->
        <div class="blog-item wow fadeInUp">
            <!-- Blog Featured Image Start -->
            <div class="blog-featured-image">
                <a href="#" class="image-anime" data-cursor-text="View">
                    <figure>
                        <img lazy="loading"
                            src="{{ route('thumbnail', ['year' => $pr->created_at->format('Y'), 'filename' => $pr->thumbnail, 'type' => 'sidebar']) }}"
                            alt="{{ $pr->judul }}">
                    </figure>
                </a>
            </div>
            <!-- Blog Featured Image End -->

            <!-- Blog Item Body Start -->
            <div class="blog-item-body">
                <!-- Blog Meta Start -->
                <div class="blog-meta">
                    <ul>
                        @if ($pr->created_at->isToday())
                            <li><a href="#">{{ $pr->created_at->locale('id')->diffForHumans() }}</a></li>
                        @else
                            <li><a href="#">
                                    {{ \Carbon\Carbon::parse($pr->created_at)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</a>
                            </li>
                        @endif
                        <li><a href="#">{{ $pr->user->name ?? 'Admin' }}</a></li>
                    </ul>
                </div>
                <!-- Blog Meta End -->

                <!-- Blog Content Start -->
                <div class="blog-content text-break">
                    <h3><a href="/berita/{{ $pr->slug }}">{{ $pr->judul }}</a></h3>
                </div>
                <!-- Blog Content End -->
            </div>
            <!-- Blog Item Body End -->
        </div>
        <!-- Blog Item End -->
    </div>
@endforeach
