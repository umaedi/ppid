<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img
        src="{{ asset('assets/img/logo-bumd.jpeg') }}"
        alt="Tulang Bawang Jaya Logo"
        class="d-inline-block align-top"
        />
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
        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Tentang Kami
        </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('web.tugas-fungsix') }}">Tugas dan Fungsi Pokok BUMD</a></li>
        <li><a class="dropdown-item" href="{{ route('web.profil') }}">Profil perusahaan</a></li>
        <li><a class="dropdown-item" href="{{ route('web.biodata-komisaris') }}">Biodata komisaris</a></li>
        <li><a class="dropdown-item" href="{{ route('web.biodata-direktur') }}">Biodata direktur</a></li>
        <li><a class="dropdown-item" href="{{ route('web.lhkpn') }}">LHKPN</a></li>
        </ul>
    </li>
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('web.dokumen') }}">Dokumen</a> --}}
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#tentang">Publikasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#layanan">PPID</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak Kami</a>
        </li>
        </ul>
    </div>
    </div>
</nav>