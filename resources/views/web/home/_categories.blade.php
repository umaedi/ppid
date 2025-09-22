  @foreach ($postsKategori as $kategori)
      <a href="/kategori/{{ $kategori->slug }}">
          <li><b>{{ $kategori->nama_kategori ?? 'tanpa katagori' }}</b>
            <span class="baru-circle">{{ $kategori->posts_count }}</span>
          </li>
      </a>
  @endforeach
