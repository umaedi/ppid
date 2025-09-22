 <!-- Header Start -->
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('mpp.index') }}#hero" class="active">Home</a></li>
            <li><a href="{{ route('mpp.index') }}#about">Tentang MPP</a></li>
            <li><a href="{{ route('mpp.index') }}#features">Layanan</a></li>
            <li><a href="{{ route('mpp.index') }}#instansi">Instansi</a></li>
            <li><a href="{{ route('mpp.index') }}#services">Fasilitas</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Galleri</a></li>
            <li><a href="{{ route('mpp.index') }}#contact">Kontak</a></li>
        </ul>
        
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @auth
        <a href="/cms/dashboard" class="btn-getstarted">CMS</a>
      @else
        <a href="/login" class="btn-getstarted">Login</a>
      @endauth
    </div>
  </header>
<!-- Header End -->