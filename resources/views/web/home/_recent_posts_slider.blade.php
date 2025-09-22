 @foreach ($postsRecentSlider as $key => $tb)
     <div class="carousel-item @if ($key == 0) active @endif">
         <div class="testimonial-item">
             <div class="post-item wow fadeInUp">
                 <div class="post-featured-image">
                     <a href="/berita/{{ $tb->slug }}" class="image-anime">
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
                         <h3><a href="/berita/{{ $tb->slug }}">{{ Str::limit($tb->judul, 255, '...') }}</a>
                         </h3>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endforeach
