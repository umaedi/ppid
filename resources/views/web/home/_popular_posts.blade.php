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
