
<style>
  /* Atur lebar dropdown */
  .dropdown-menu {
    min-width: 300px; /* bisa disesuaikan misal 250px, 400px, dst */
  }

  /* Ubah huruf awal setiap kata jadi kapital */
  .dropdown-item {
    text-transform: capitalize;
    white-space: normal; /* biar teks panjang bisa turun ke baris baru */
  }

  /* (Opsional) Tambahkan padding agar tampak lebih rapi */
  .dropdown-item {
    padding: 8px 16px;
  }
</style><nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
          <span>PPID TULANG BAWANG JAYA</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('web.tentang-kami') }}">Tentang Kami</a>
            </li>
       
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SOP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('web.sop') }}">SOP Layanan Informasi Publik</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('web.sopPenetapan') }}">SOP Penetapan Dan Pemutakhiran Daftar Informasi Publik</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('web.sopKeberatan') }}">SOP Penanganan Keberatan Informasi Publik</a></li>
            <li><a class="dropdown-item" href="{{ route('web.sopPengujian') }}">SOP Pengujian Konsekuensi</a></li>
            <li><a class="dropdown-item" href="{{ route('web.sopPendokumentasian') }}">SOP Pendokumentasian Informasi Publikasi</a></li>
          </ul>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="{{ route('web.tugasFungsi') }}">Tugas dan Fungsi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
    </div>
</nav>