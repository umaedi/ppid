@extends('webmpp.layouts.app')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                <div class="company-badge mb-4">
                  <i class="bi bi-gear-fill me-2"></i>
                  Web Resmi MPP
                </div>
  
                <h1 class="mb-4">
                  Mal Pelayanan Publik
                  <span class="accent-text">Tulang Bawang</span>
                </h1>
  
                <p class="mb-4 mb-md-5">
                  Kami Siap Melayani Anda, Dengan Sepenuh Hati
                </p>
  
                <div class="hero-buttons">
                  <a href="https://tulangbawangkab.go.id/" class="btn btn-primary me-0 me-sm-2 mx-1">Tulang Bawang</a>
                  <a href="https://www.youtube.com/watch?v=7_G4bLYxZ6Q" class="btn btn-link mt-2 mt-sm-0 glightbox">
                    <i class="bi bi-play-circle me-1"></i>
                    Play Video
                  </a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                <img lazy="loading" src="{{ asset('img') }}/header-pic.png" alt="Hero Image" class="img-fluid">
  
                <div class="customers-badge">
                  <div class="customer-avatars">
                    <img lazy="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMhisyZ0cNYLjX11-ihxxDxXUSQHdecuhNxdP-1cbjB6pcY2e_OE76EEmh7b6hrOyGIgs&usqp=CAU" alt="Customer 1" class="avatar">
                    <img lazy="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMhisyZ0cNYLjX11-ihxxDxXUSQHdecuhNxdP-1cbjB6pcY2e_OE76EEmh7b6hrOyGIgs&usqp=CAU" alt="Customer 2" class="avatar">
                    <img lazy="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMhisyZ0cNYLjX11-ihxxDxXUSQHdecuhNxdP-1cbjB6pcY2e_OE76EEmh7b6hrOyGIgs&usqp=CAU" alt="Customer 3" class="avatar">
                    <img lazy="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMhisyZ0cNYLjX11-ihxxDxXUSQHdecuhNxdP-1cbjB6pcY2e_OE76EEmh7b6hrOyGIgs&usqp=CAU" alt="Customer 4" class="avatar">
                    <img lazy="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMhisyZ0cNYLjX11-ihxxDxXUSQHdecuhNxdP-1cbjB6pcY2e_OE76EEmh7b6hrOyGIgs&usqp=CAU" alt="Customer 5" class="avatar">
                    <span class="avatar more">12+</span>
                  </div>
                  <p class="mb-0 mt-2">433.000+ Kami Melayani Anda</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- /Hero Section -->
     
    <section class="count">
        <div class="container">
          <div class="row stats-row gy-4" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-3 col-md-6">
             <div class="card rounded-4">
              <div class="stats-item text-center w-100 h-100 shadow-sm p-4 rounded-3">
                <i class="bi bi-buildings" style="font-size: 40px;"></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter fw-bold" style="font-size: 40px;"></span>
                <p>Jumlah Instansi</p>
              </div>
             </div>
            </div>

            <!-- End Stats Item -->
            <div class="col-lg-3 col-md-6">
                <div class="card rounded-4">
                <div class="stats-item text-center w-100 h-100 shadow-sm p-4 rounded-3">
                  <i class="bi bi-person-fill-gear" style="font-size: 40px;"></i>
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter fw-bold" style="font-size: 40px;"></span>
                  <p>Jumlah Layanan</p>
                </div>
              </div>
            </div>
            <!-- End Stats Item -->
         
            <div class="col-lg-3 col-md-6">
                <div class="card rounded-4">
                    <div class="stats-item text-center w-100 h-100 shadow-sm p-4 rounded-3">
                        <i class="bi bi-person-rolodex" style="font-size: 40px;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter fw-bold" style="font-size: 40px;"></span>
                        <p>Jumlah Loket</p>
                    </div>
                </div>
            </div>

            <!-- End Stats Item -->
            <div class="col-lg-3 col-md-6">
                <div class="card rounded-4">
                    <div class="stats-item text-center w-100 h-100 shadow-sm p-4 rounded-3">
                        <i class="bi bi-people" style="font-size: 40px;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter fw-bold" style="font-size: 40px;"></span>
                        <p>Antrian Hari Ini</p>
                    </div>
                </div>
            </div>
            <!-- End Stats Item -->
        </div>
    </section>
      
    <!-- About Section -->
    <section id="about" class="about  section light-background">
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 align-items-center justify-content-between">
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
              <h2 class="about-title">
                Sekilas Tentang MPP <i class="bi bi-brightness-low-fill"></i>
              </h2>
              <p class="about-description">
                MPP dirancang oleh KEMENPAN RB sebagai bagian dari perbaikan menyeluruh dan transformasi tata kelola pelayanan publik. 
                Dengan menggabungkan berbagai jenis pelayanan dalam satu tempat, penyederhanaan prosedur, serta integrasi layanan, 
                Mal Pelayanan Publik (MPP) memudahkan akses masyarakat dalam memperoleh berbagai jenis layanan. Hal ini juga meningkatkan 
                kepercayaan masyarakat terhadap penyelenggara pelayanan publik.
              </p>
              <p class="about-description">
                MPP merupakan konsep layanan satu pintu yang memungkinkan masyarakat mendapatkan berbagai layanan dari berbagai instansi secara lebih efisien.
              </p>
              <div class="d-flex justify-content-center mb-4">
                <a href="/tentang-mpp" class="btn btn-success d-flex align-items-center">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 4h6v6h-6z"></path>
                      <path d="M14 4h6v6h-6z"></path>
                      <path d="M4 14h6v6h-6z"></path>
                      <circle cx="17" cy="17" r="3"></circle>
                  </svg>
                  <span class="ms-2">Lebih Lanjut</span>
                </a>
              </div>
            </div>
            
  
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
              <div class="image-wrapper">
                <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                  <img lazy="loading" src="{{ asset('img') }}/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                  <img lazy="loading" src="{{ asset('img') }}/Kantor_Bupati_Tulang_Bawang.jpg" alt="Team Discussion" class="img-fluid small-image rounded-4">
                </div>
                <div class="experience-badge floating">
                  <h3>2025</h3>
                  <p>Mall Pelayanan Publik</p>
                </div>
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- /About Section -->
  
    <!-- Features Section -->
    <section id="features" class="features section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Informasi Pelayanan</h2>
          <p>Kabupaten Tulang Bawang</p>
        </div><!-- End Section Title -->
  
        <div class="container">
          <div class="d-flex justify-content-center">
            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <h4>Pelayanan Online</h4>
                </a>
              </li><!-- End tab nav item -->
  
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <h4>Pelayanan Publik</h4>
                </a><!-- End tab nav item -->
  
              </li>
            </ul>
          </div>
  
          <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
  
            <div class="tab-pane fade active show" id="features-tab-1">
              <div class="row justify-content-center">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                  <h3>Pelayanan Online</h3>
                  <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 mt-2 d-flex justify-content-center justify-content-lg-end">
                      <a href="https://oss.go.id/" class="card-link">
                        <img lazy="loading" src="https://d290ny10omyv12.cloudfront.net/images/oss-og-fb.png" width="200px" alt="">
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 mt-2 d-flex justify-content-center justify-content-lg-start">
                      <a href="https://sicantik.go.id/sign-in" class="card-link">
                        <img lazy="loading" src="https://dpmptsp.tanjabbarkab.go.id/web/image/1016-9483de0f/SiCantik%202022%20%28Colorful%201%29.png" width="200px" alt="">
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 mt-2 d-flex justify-content-center justify-content-lg-end">
                      <a href="https://portalnpwp.pajak.go.id/login" class="card-link">
                        <img lazy="loading" src="https://static.pajak.go.id/assets/media/logos/Logo%20DJP.png" width="200px" height="100px" alt="">
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 mt-2 d-flex justify-content-center justify-content-lg-start">
                      <a href="https://djponline.pajak.go.id/account/login" class="card-link">
                        <img lazy="loading" src="https://www.pajak.go.id/sites/default/files/styles/max_650x650/public/2019-11/00%20ereg.jpg?itok=LT4Hxvxp" width="200px" alt="">
                      </a>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img lazy="loading" src="{{ asset('img') }}/features-illustration-1.webp" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->
  
            <div class="tab-pane fade" id="features-tab-2">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                  <h3>Pelayanan Publik</h3>
                  <div class="row">
                    <div class="col-lg-6 mt-2 d-flex justify-content-center text-center">
                      <a href="/jadwal-layanan" class="card-link">
                        <i class="layanan-icon bi bi-hourglass-top" ></i>
                        <p>Jadwal Layanan.</p>
                      </a>
                     
                    </div>
                   <div class="col-lg-6 mt-2 d-flex justify-content-center text-center">
                      <a href="#" class="card-link">
                        <i class="layanan-icon bi bi-buildings"></i>
                        <p>Pelayanan Instansi Vertikal.</p>
                      </a>
                    </div>
                   <div class="col-lg-6 mt-2 d-flex justify-content-center text-center">
                      <a href="#" class="card-link">
                        <i class="layanan-icon bi bi-bounding-box-circles"></i>
                        <p>SIMPPLE.</p>
                      </a>
                    </div>
                   <div class="col-lg-6 mt-2 d-flex justify-content-center text-center">
                      <a href="/daftar-layanan" class="card-link">
                        <i class="layanan-icon bi bi-list-task"></i>
                        <p>DAFTAR LAYANAN MPP.</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img lazy="loading" src="{{ asset('img') }}/features-illustration-2.webp" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->
          </div>
        </div>
    </section><!-- /Features Section -->
  
    <section id="instansi" class="layanan-9 layanan section light-background" id="layanan">
        <div class="container">
            <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        <h2>Instansi & Layanan MPP</h2>
        <p>Kabupaten Tulang Bawang</p>
        </div><!-- End Section Title -->
    
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Logo_Kementerian_Ketenagakerjaan_%282016%29.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">Dinas KETENAGA KERJAAN</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Logo_Kementerian_Pekerjaan_Umum_Republik_Indonesia.svg/1200px-Logo_Kementerian_Pekerjaan_Umum_Republik_Indonesia.svg.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">DINAS PUPR</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://disbudpar.batam.go.id/wp-content/uploads/sites/22/2020/01/Wonderful-1024x724@2x.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">DINAS PARIWISATA DAN BUDAYA</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Logo_Bappenas_Indonesia_%28National_Development_Planning_Agency%29.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">DINAS PENDAPATAN DAERAH</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Logo_Kementerian_Ketenagakerjaan_%282016%29.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">Dinas KETENAGA KERJAAN</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Logo_Kementerian_Pekerjaan_Umum_Republik_Indonesia.svg/1200px-Logo_Kementerian_Pekerjaan_Umum_Republik_Indonesia.svg.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">DINAS PUPR</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://disbudpar.batam.go.id/wp-content/uploads/sites/22/2020/01/Wonderful-1024x724@2x.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">DINAS PARIWISATA DAN BUDAYA</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 col-md-6 col-lg-3 mt-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded-5 h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Logo_Bappenas_Indonesia_%28National_Development_Planning_Agency%29.png" 
                         class="card-img-top mb-3 p-3" alt="Logo Instansi" 
                         style="height: 150px; object-fit: contain;">
                    <div class="card-body text-center d-flex flex-column justify-content-between" style="min-height: 180px;">
                        <div>
                            <h5 class="card-title">DINAS PENDAPATAN DAERAH</h5>
                            <p class="card-text text-muted">Pemerintahan Kabupaten Tulang Bawang</p>
                        </div>
                        <div>
                            <span class="badge bg-success">Online</span>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="layanan" class="btn btn-light w-50">Layanan</a>
                                <a href="antrian" class="btn btn-light w-50">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <div class="d-flex justify-content-center mt-4">
        <a href="/instansi" class="btn btn-success d-flex align-items-center">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 4h6v6h-6z"></path>
                <path d="M14 4h6v6h-6z"></path>
                <path d="M4 14h6v6h-6z"></path>
                <circle cx="17" cy="17" r="3"></circle>
            </svg>
            <span class="ms-2">Semua Instansi &amp; Layanan</span>
        </a>
        </div>
        </div>
    </section>
  
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row content justify-content-center align-items-center position-relative">
            <div class="col-lg-8 mx-auto text-center">
              <h2 class="display-4 mb-4">MELANYANI DENGAN SEPENUH HATI</h2>
              <p class="mb-4">MPP KABUPATEN TULANG BAWANG</p>
              <!-- <a href="#" class="btn btn-cta">Call To Action</a> -->
            </div>
  
            <!-- Abstract Background Elements -->
            <div class="shape shape-1">
              <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z" transform="translate(100 100)"></path>
              </svg>
            </div>
  
            <div class="shape shape-2">
              <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
              </svg>
            </div>
  
            <!-- Dot Pattern Groups -->
            <div class="dots dots-1">
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                </pattern>
                <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
              </svg>
            </div>
  
            <div class="dots dots-2">
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                </pattern>
                <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
              </svg>
            </div>
  
            <div class="shape shape-3">
              <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z" transform="translate(100 100)"></path>
              </svg>
            </div>
          </div>
  
        </div>
    </section><!-- /Call To Action Section -->
  
    <!-- Faq Section -->
    <section  id="services" class="faq-9 faq section light-background" id="faq">
  
        <div class="container">
          <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <h2 class="faq-title">Fasilitas</h2>
            <p class="faq-description">MPP Kabupaten Tulang Bawang</p>
          </div>
          
          <div class="row">
  
            <div class="col-lg-5" data-aos="fade-up">
              <div class="card faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200" style="border-radius: 10px; overflow: hidden; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);">
                <img lazy="loading" src="https://images.unsplash.com/photo-1739639845916-6bfcaec516ba?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="FAQ Image" class="faq-image" style="width: 100%; height: 530px; display: block;">
              </div>
            </div>
  
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
              <div class="faq-container">
  
                <div class="faq-item faq-active">
                  <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                  <div class="faq-content">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                  <div class="faq-content">
                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                  <div class="faq-content">
                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
              </div>
            </div>
  
          </div>
        </div>
    </section><!-- /Faq Section -->
  
    <!-- Contact Section -->
    <section id="contact" class="contact section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kontak</h2>
          <p>MPP Kabupaten Tulang Bawang</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
              <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                <h3>Kontak Info</h3>
                <p>MPP Kabupaten Tulang Bawang</p>
                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="content">
                    <h4>Lokasi</h4>
                    <p>Jl. Negara Jl. Lintas Sumatera No.KM 112, Tiuh Tohou, Menggala, Kabupaten Tulangbawang, Lampung 3469</p>
                  </div>
                </div>
  
                <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="content">
                    <h4>Nomer Handphone</h4>
                    <p>0726-7576615</p>
                  </div>
                </div>
  
                <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon-box">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="content">
                    <h4>Email</h4>
                    <p>mpptuba1@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-7">
              <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                <h3>Hubungi Kami</h3>
                <p>Untuk kontak lebih lanjut dari MPP Kabupaten Tulang Bawang.</p>
  
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">
  
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                    </div>
  
                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Email" required="">
                    </div>
  
                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                    </div>
  
                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                    </div>
  
                    <div class="col-12 text-center">
                      <div class="loading">Proses</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
  
                      <button type="submit" class="btn">Kirim Pesan</button>
                    </div>
  
                  </div>
                </form>
  
              </div>
            </div>
          </div>
        </div>
    </section><!-- /Contact Section -->
@endsection