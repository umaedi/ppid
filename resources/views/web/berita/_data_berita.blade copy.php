@isset($search)
    <h3 class="mb-5">Hasil Pencarian dari "{{ $search }}"</h3>
@endisset
@forelse($posts as $item)
    <div class="col-md-6">
        <!-- Blog Item Start -->
        <div class="blog-item wow fadeInUp">
            <!-- Blog Featured Image Start -->
            <div class="blog-featured-image">
                @if($item->subdomain !== env('APP_DOMAIN'))
                    <a href="{{ env('APP_HTTPS') . $item->subdomain . '.' . env('APP_DOMAIN') . '/berita/' .$item->slug }}"
                        target="_blank" class="image-anime">
                    @else
                        <a href="{{ route('berita.show', $item->slug) }}" class="image-anime">
                @endif
                <figure>
                    <img src="{{ route('thumbnail', ['year' => $item->created_at->format('Y'), 'filename' => $item->thumbnail, 'type' => 'utama']) }}"
                        alt="" lazy="loading">
                </figure>
                </a>
            </div>
            <!-- Blog Featured Image End -->

            <!-- Blog Item Body Start -->
            <div class="blog-item-body">
                <!-- Blog Meta Start -->
                <div class="blog-meta">
                    <ul>
                        <li><a href="#">
                                @if($item->created_at->isToday())
                                    {{ $item->created_at->locale('id')->diffForHumans() }}
                                @else
                                    {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('D MMM YYYY') }}
                                @endif
                            </a></li>
                        <li><a href="#">{{ $item->user->name ?? 'Admin' }}</a></li>
                    </ul>
                </div>
                <!-- Blog Meta End -->

                <!-- Blog Content Start -->
                <div class="blog-content">
                    <h3 class="text-break"><a href="/berita/{{ $item->slug }}">{{ $item->judul }}</a></h3>
                </div>
                <!-- Blog Content End -->

                <!-- Blog Read More Btn Start -->
                <div class="blog-btn">
                    <a href="#" class="readmore-btn"><img
                            src="{{ asset('img/logo/favicon.png') }}" alt=""></a>
                </div>
                <!-- Blog Read More Btn End -->
            </div>
            <!-- Blog Item Body End -->
        </div>
        <!-- Blog Item End -->
    </div>

@empty
    <div class="col-md-6">
        <div class="blog-item wow fadeInUp">
            <h5>Data Tidak Ditemukan</h5>
        </div>
    </div>
@endforelse
{{-- {{ $posts->links('components.pagination') }} --}}