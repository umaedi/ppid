<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profil [NAMA_BUMD] - Sejarah, visi misi, struktur organisasi, dan pencapaian BUMD terpercaya untuk pembangunan daerah.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Profil [NAMA_BUMD] - Tentang Perusahaan">
    <meta property="og:description" content="Pelajari lebih lanjut tentang sejarah, visi misi, dan komitmen [NAMA_BUMD] dalam membangun daerah.">
    <meta property="og:image" content="[OG_IMAGE]">
    <meta property="og:type" content="website">
    
    <title>Profil Perusahaan - [NAMA_BUMD]</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0D46B4;
            --secondary-color: #0F6CF0;
            --accent-color: #FF6B35;
            --gray-color: #6c757d;
            --light-gray: #f8f9fa;
            --dark-gray: #495057;
            --gradient-primary: linear-gradient(135deg, #0D46B4 0%, #0F6CF0 100%);
            --gradient-accent: linear-gradient(135deg, #FF6B35 0%, #FF8E53 100%);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Navbar */
        .navbar {
            background: rgba(255,255,255,0.95) !important;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        
        .navbar-brand img {
            height: 45px;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-gray) !important;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 80%;
        }
        
        /* Hero Section */
        .hero-profile {
            background: var(--gradient-primary);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-profile::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><polygon points="0,20 50,40 100,35 150,50 200,48 250,20 300,40 350,35 400,50 450,48 500,20 550,40 600,35 650,50 700,48 750,20 800,40 850,35 900,50 950,48 1000,40 1000,100 0,100"/></svg>') repeat-x;
            background-size: 100px 50px;
            animation: wave 10s linear infinite;
        }
        
        @keyframes wave {
            0% { background-position-x: 0; }
            100% { background-position-x: 100px; }
        }
        
        .hero-profile h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        
        .hero-profile .lead {
            font-size: 1.4rem;
            font-weight: 400;
            opacity: 0.95;
            max-width: 600px;
        }
        
        /* Breadcrumb */
        .custom-breadcrumb {
            background: transparent;
            padding: 0;
        }
        
        .custom-breadcrumb .breadcrumb-item a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
        }
        
        .custom-breadcrumb .breadcrumb-item.active {
            color: white;
        }
        
        /* Section Styling */
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-accent);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: var(--gray-color);
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: var(--gradient-primary);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }
        
        .timeline-item {
            padding: 20px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            margin-bottom: 30px;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background: var(--primary-color);
            border: 4px solid white;
            top: 30px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 4px 15px rgba(13, 70, 180, 0.3);
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-item:nth-child(even)::after {
            left: -10px;
        }
        
        .timeline-content {
            padding: 30px;
            background: white;
            position: relative;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(13, 70, 180, 0.1);
            transition: all 0.3s ease;
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .timeline-year {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .timeline-title {
            color: var(--dark-gray);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        
        .timeline-desc {
            color: var(--gray-color);
            line-height: 1.6;
        }
        
        /* Responsive Timeline */
        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item::after {
                left: 21px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0%;
            }
        }
        
        /* Vision Mission Cards */
        .vision-mission-card {
            background: white;
            border-radius: 20px;
            padding: 50px 40px;
            text-align: center;
            box-shadow: 0 15px 50px rgba(0,0,0,0.08);
            border: 1px solid rgba(13, 70, 180, 0.1);
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }
        
        .vision-mission-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(13, 70, 180, 0.05), transparent);
            transition: left 0.6s ease;
        }
        
        .vision-mission-card:hover::before {
            left: 100%;
        }
        
        .vision-mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.15);
        }
        
        .vision-mission-icon {
            width: 100px;
            height: 100px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 2.5rem;
            color: white;
            box-shadow: 0 10px 30px rgba(13, 70, 180, 0.3);
        }
        
        .vision-mission-card h3 {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 25px;
        }
        
        /* Values Grid */
        .value-item {
            background: white;
            border-radius: 15px;
            padding: 40px 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(13, 70, 180, 0.1);
            height: 100%;
        }
        
        .value-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .value-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
        }
        
        .value-item h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        /* Organization Chart */
        .org-chart {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.08);
            border: 1px solid rgba(13, 70, 180, 0.1);
        }
        
        .org-level {
            margin-bottom: 40px;
        }
        
        .org-position {
            background: var(--gradient-primary);
            color: white;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            margin: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .org-position:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(13, 70, 180, 0.3);
        }
        
        .org-position.deputy {
            background: var(--gradient-accent);
        }
        
        .org-position.manager {
            background: linear-gradient(135deg, #28a745, #20c997);
        }
        
        .org-name {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .org-title {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Achievement Cards */
        .achievement-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid rgba(13, 70, 180, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .achievement-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .achievement-icon {
            width: 70px;
            height: 70px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: white;
        }
        
        .achievement-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 10px;
            display: block;
        }
        
        .achievement-label {
            color: var(--gray-color);
            font-weight: 500;
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
            color: white;
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
            margin: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: float 20s linear infinite;
        }
        
        @keyframes float {
            0% { transform: translate(0, 0); }
            100% { transform: translate(30px, 30px); }
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        
        .cta-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }
        
        .btn-cta {
            background: white;
            color: var(--primary-color);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }
        
        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            color: var(--primary-color);
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer h5 {
            color: var(--secondary-color);
            margin-bottom: 25px;
            font-weight: 600;
        }
        
        .footer a {
            color: #bdc3c7;
            text-decoration: none;
            transition: all 0.3s ease;
            line-height: 2;
        }
        
        .footer a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-icons a {
            display: inline-block;
            width: 45px;
            height: 45px;
            background: var(--gradient-primary);
            color: white;
            text-align: center;
            line-height: 45px;
            border-radius: 50%;
            margin-right: 15px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }
        
        .social-icons a:hover {
            background: var(--gradient-accent);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-profile h1 {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .vision-mission-card,
            .org-chart {
                padding: 30px 20px;
            }
            
            .cta-section {
                padding: 40px 20px;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
        }
        
        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }
        
        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/img/logo.png') }}" alt="[NAMA_BUMD] Logo" class="d-inline-block align-top">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-profile">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb custom-breadcrumb" data-aos="fade-down">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil Perusahaan</li>
                </ol>
            </nav>
            
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 data-aos="fade-up" data-aos-delay="100">Profil Perusahaan</h1>
                    <p class="lead" data-aos="fade-up" data-aos-delay="200">
                        Mengenal lebih dekat [NAMA_BUMD], sejarah perjalanan, visi misi, dan komitmen kami 
                        dalam membangun daerah yang lebih maju dan sejahtera.
                    </p>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <img src="{{ asset('assets/img/kantor-bumd-tulangbawangjaya.png') }}" 
                         alt="Kantor [NAMA_BUMD]" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Perusahaan -->
    <section id="tentang" class="py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Tentang BUMD Tulang Bawang Jaya</h2>
                <p class="section-subtitle">
                    didirikan sebagai instrumen pemerintah daerah dalam mengoptimalkan potensi ekonomi daerah. Dengan pengalaman lebih dari satu dekade, kami telah 
                    membuktikan komitmen dalam memberikan pelayanan terbaik kepada masyarakat.
                </p>
                <p class="section-subtitle mb-4">
                        Sebagai BUMD yang terus berkembang, kami mengutamakan prinsip good corporate 
                        governance, transparansi, dan akuntabilitas dalam setiap aspek operasional. 
                        Kami percaya bahwa kesuksesan perusahaan harus sejalan dengan kesejahteraan masyarakat.
                    </p>
            </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="vision-mission-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3>Visi</h3>
                        <p class="lead mb-4">
                            "Menjadi BUMD terdepan yang berkontribusi signifikan dalam pembangunan 
                            ekonomi daerah melalui pelayanan prima dan inovasi berkelanjutan."
                        </p>
                        <p class="text-muted">
                            Visi ini mencerminkan komitmen kami untuk terus berada di garis depan 
                            dalam mendorong pertumbuhan ekonomi daerah yang berkelanjutan.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="vision-mission-icon">
                            <i class="bi bi-target"></i>
                        </div>
                        <h3>Misi</h3>
                        <div class="text-start">
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Pelayanan Prima:</strong> Memberikan layanan berkualitas tinggi kepada masyarakat
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Usaha Berkelanjutan:</strong> Mengembangkan usaha yang menguntungkan dan berkelanjutan
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Peningkatan PAD:</strong> Berkontribusi dalam meningkatkan Pendapatan Asli Daerah
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Pertumbuhan Ekonomi:</strong> Mendorong pertumbuhan ekonomi lokal yang inklusif
                            </div>
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Inovasi Berkelanjutan:</strong> Mengembangkan inovasi untuk efisiensi dan efektivitas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tentang" class="py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Visi & Misi</h2>
                <p class="section-subtitle">
                    Fondasi yang mengarahkan setiap langkah [NAMA_BUMD] dalam mencapai tujuan 
                    dan memberikan dampak positif bagi pembangunan daerah.
                </p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="vision-mission-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3>Visi</h3>
                        <p class="lead mb-4">
                            "Menjadi BUMD terdepan yang berkontribusi signifikan dalam pembangunan 
                            ekonomi daerah melalui pelayanan prima dan inovasi berkelanjutan."
                        </p>
                        <p class="text-muted">
                            Visi ini mencerminkan komitmen kami untuk terus berada di garis depan 
                            dalam mendorong pertumbuhan ekonomi daerah yang berkelanjutan.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="vision-mission-icon">
                            <i class="bi bi-target"></i>
                        </div>
                        <h3>Misi</h3>
                        <div class="text-start">
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Pelayanan Prima:</strong> Memberikan layanan berkualitas tinggi kepada masyarakat
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Usaha Berkelanjutan:</strong> Mengembangkan usaha yang menguntungkan dan berkelanjutan
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Peningkatan PAD:</strong> Berkontribusi dalam meningkatkan Pendapatan Asli Daerah
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Pertumbuhan Ekonomi:</strong> Mendorong pertumbuhan ekonomi lokal yang inklusif
                            </div>
                            <div>
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <strong>Inovasi Berkelanjutan:</strong> Mengembangkan inovasi untuk efisiensi dan efektivitas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nilai-Nilai Perusahaan -->
    <section id="nilai" class="py-5 bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Nilai-Nilai Perusahaan</h2>
                <p class="section-subtitle">
                    Nilai-nilai fundamental yang menjadi pedoman dalam setiap aktivitas bisnis dan 
                    interaksi dengan stakeholder.
                </p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Integritas</h4>
                        <p class="text-muted">
                            Berkomitmen pada kejujuran, transparansi, dan etika bisnis yang tinggi 
                            dalam setiap aspek operasional.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4>Inovasi</h4>
                        <p class="text-muted">
                            Terus mengembangkan ide-ide kreatif dan solusi inovatif untuk 
                            meningkatkan kualitas layanan.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="value-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4>Profesional</h4>
                        <p class="text-muted">
                            Mengutamakan standar profesional tinggi dalam setiap pekerjaan 
                            dan layanan kepada stakeholder.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="value-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4>Kolaborasi</h4>
                        <p class="text-muted">
                            Membangun kerjasama yang solid dengan berbagai pihak untuk 
                            mencapai tujuan bersama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section id="struktur" class="py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Struktur Organisasi</h2>
                <p class="section-subtitle">
                    Struktur organisasi yang solid dengan pembagian tugas dan tanggung jawab yang jelas 
                    untuk mendukung efektivitas operasional.
                </p>
            </div>
            
            <div class="org-chart" data-aos="fade-up" data-aos-delay="200">
                <!-- Level 1: Direktur Utama -->
                <div class="org-level">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="org-position">
                                <div class="org-name">[NAMA_DIRUT]</div>
                                <div class="org-title">Direktur Utama</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Level 2: Direktur -->
                <div class="org-level">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="org-position deputy">
                                <div class="org-name">[NAMA_DIR_KEUANGAN]</div>
                                <div class="org-title">Direktur Keuangan</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="org-position deputy">
                                <div class="org-name">[NAMA_DIR_OPERASI]</div>
                                <div class="org-title">Direktur Operasional</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="org-position deputy">
                                <div class="org-name">[NAMA_DIR_PENGEMBANGAN]</div>
                                <div class="org-title">Direktur Pengembangan</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Level 3: Manager -->
                <div class="org-level">
                    <div class="row">
                        <div class="col-lg-2 col-md-4">
                            <div class="org-position manager">
                                <div class="org-name">[NAMA_MGR_KEUANGAN]</div>
                                <div class="org-title">Manajer Keuangan</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="org-position manager">
                                <div class="org-name">[NAMA_MGR_SDM]</div>
                                <div class="org-title">Manajer SDM</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="org-position manager">
                                <div class="org-name">[NAMA_MGR_OPERASI]</div>
                                <div class="org-title">Manajer Operasi</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="org-position manager">
                                <div class="org-name">[NAMA_MGR_PEMASARAN]</div>
                                <div class="org-title">Manajer Pemasaran</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="org-position manager">
                                <div class="org-name">[NAMA_MGR_TEKNIK]</div>
                                <div class="org-title">Manajer Teknik</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="org-position manager">
                                <div class="org-name">[NAMA_MGR_HUKUM]</div>
                                <div class="org-title">Manajer Hukum</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pencapaian -->
    <section id="pencapaian" class="py-5 bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Pencapaian & Prestasi</h2>
                <p class="section-subtitle">
                    Berbagai pencapaian yang membanggakan sebagai bukti komitmen dan dedikasi 
                    [NAMA_BUMD] dalam memberikan kontribusi terbaik.
                </p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="achievement-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="achievement-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <span class="achievement-number" data-target="15">0</span>
                        <div class="achievement-label">Penghargaan Nasional & Daerah</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="achievement-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="achievement-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <span class="achievement-number" data-target="25000">0</span>
                        <div class="achievement-label">Masyarakat Terlayani</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="achievement-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="achievement-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <span class="achievement-number" data-target="85">0</span>
                        <div class="achievement-label">% Peningkatan Kinerja</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="achievement-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="achievement-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <span class="achievement-number" data-target="350">0</span>
                        <div class="achievement-label">Proyek Berhasil Diselesaikan</div>
                    </div>
                </div>
            </div>
            
            <!-- Sertifikat dan Penghargaan -->
            <div class="row mt-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <h3 class="text-center mb-4">Sertifikat & Penghargaan</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/200x150?text=ISO+9001" 
                                     alt="Sertifikat ISO 9001" class="img-fluid rounded shadow mb-3">
                                <h5>ISO 9001:2015</h5>
                                <p class="text-muted">Sistem Manajemen Mutu</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/200x150?text=BUMD+Award" 
                                     alt="BUMD Award" class="img-fluid rounded shadow mb-3">
                                <h5>BUMD Awards 2023</h5>
                                <p class="text-muted">BUMD Terbaik Tingkat Nasional</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/200x150?text=Excellence+Award" 
                                     alt="Excellence Award" class="img-fluid rounded shadow mb-3">
                                <h5>Excellence Award</h5>
                                <p class="text-muted">Pelayanan Prima 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="cta-section" data-aos="zoom-in">
                <h2>Bergabunglah dengan Kami</h2>
                <p>
                    Mari bersama-sama membangun masa depan yang lebih baik untuk daerah kita. 
                    Hubungi kami untuk mengetahui lebih lanjut tentang peluang kerjasama.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#kontak" class="btn btn-cta">
                        <i class="bi bi-telephone me-2"></i>Hubungi Kami
                    </a>
                    <a href="#" class="btn btn-cta">
                        <i class="bi bi-download me-2"></i>Download Profile
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>[NAMA_BUMD]</h5>
                    <p class="mb-4">
                        Badan Usaha Milik Daerah yang berkomitmen memberikan pelayanan terbaik 
                        untuk kemajuan dan pembangunan daerah.
                    </p>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Perusahaan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#tentang">Tentang Kami</a></li>
                        <li><a href="#sejarah">Sejarah</a></li>
                        <li><a href="#visi-misi">Visi & Misi</a></li>
                        <li><a href="#struktur">Struktur Organisasi</a></li>
                        <li><a href="#pencapaian">Pencapaian</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Pengelolaan Aset</a></li>
                        <li><a href="#">Pelayanan Publik</a></li>
                        <li><a href="#">Investasi</a></li>
                        <li><a href="#">Konsultasi</a></li>
                        <li><a href="#">Pengembangan</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Pengumuman</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>Jl. Contoh No. 123</li>
                        <li><i class="bi bi-telephone me-2"></i>+62 21 1234 5678</li>
                        <li><i class="bi bi-envelope me-2"></i>info@[nama-bumd].co.id</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 [NAMA_BUMD]. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                    <a href="#" class="me-3">Sitemap</a>
                    <a href="#">Legal</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" onclick="scrollToTop()" aria-label="Scroll to top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Counter animation
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }

        // Initialize counter animation when achievement section is visible
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.achievement-number');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        animateCounter(counter, target);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const achievementSection = document.querySelector('#pencapaian');
        if (achievementSection) {
            observer.observe(achievementSection);
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Scroll to top functionality
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            const scrollTop = document.querySelector('.scroll-top');
            if (window.pageYOffset > 300) {
                scrollTop.classList.add('show');
            } else {
                scrollTop.classList.remove('show');
            }
        });

        // Navbar active link
        window.addEventListener('scroll', function() {
            let current = '';
            const sections = document.querySelectorAll('section[id]');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 120;
                const sectionHeight = section.clientHeight;
                
                if (window.pageYOffset >= sectionTop && 
                    window.pageYOffset < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Organization chart interaction
        document.querySelectorAll('.org-position').forEach(position => {
            position.addEventListener('click', function() {
                // Add click interaction if needed
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
            });
        });

        // Loading animation
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });

        // Intersection Observer for animations
        const animateElements = document.querySelectorAll('.timeline-item, .value-item, .achievement-card');
        const animateObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Apply initial styles and observe
        animateElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            animateObserver.observe(el);
        });
    </script>
</body>
{{-- </html>="section-title">Tentang [NAMA_BUMD]</h2>
                <p class="section-subtitle">
                    Badan Usaha Milik Daerah yang berkomitmen memberikan kontribusi terbaik 
                    untuk kemajuan dan pembangunan daerah melalui layanan prima dan inovasi berkelanjutan.
                </p>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-4">Sekilas Tentang Kami</h3>
                    <p class="mb-4">
                        [NAMA_BUMD] didirikan sebagai instrumen pemerintah daerah dalam mengoptimalkan 
                        potensi ekonomi daerah. Dengan pengalaman lebih dari satu dekade, kami telah 
                        membuktikan komitmen dalam memberikan pelayanan terbaik kepada masyarakat.
                    </p>
                    <p class="mb-4">
                        Sebagai BUMD yang terus berkembang, kami mengutamakan prinsip good corporate 
                        governance, transparansi, dan akuntabilitas dalam setiap aspek operasional. 
                        Kami percaya bahwa kesuksesan perusahaan harus sejalan dengan kesejahteraan masyarakat.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-event text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Tahun Berdiri</h6>
                                    <span class="text-muted">2010</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-people text-primary me-3" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Jumlah Karyawan</h6>
                                    <span class="text-muted">150+ Orang</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://via.placeholder.com/600x400?text=About+Us+Image" 
                         alt="Tentang [NAMA_BUMD]" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Perusahaan -->
    <section id="sejarah" class="py-5 bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Sejarah Perjalanan</h2>
                <p class="section-subtitle">
                    Perjalanan panjang [NAMA_BUMD] dalam membangun kepercayaan dan memberikan kontribusi nyata 
                    bagi pembangunan daerah.
                </p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2010</div>
                        <h4 class="timeline-title">Pendirian Perusahaan</h4>
                        <p class="timeline-desc">
                            [NAMA_BUMD] resmi didirikan berdasarkan Peraturan Daerah sebagai instrumen 
                            pemerintah daerah dalam mengoptimalkan potensi ekonomi daerah.
                        </p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2012</div>
                        <h4 class="timeline-title">Ekspansi Layanan</h4>
                        <p class="timeline-desc">
                            Perluasan bidang usaha dengan fokus pada pengelolaan aset daerah dan 
                            pengembangan infrastruktur untuk mendukung pertumbuhan ekonomi lokal.
                        </p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2015</div>
                        <h4 class="timeline-title">Sertifikasi ISO 9001</h4>
                        <p class="timeline-desc">
                            Meraih sertifikasi ISO 9001:2015 sebagai komitmen terhadap sistem manajemen 
                            mutu dan pelayanan prima kepada stakeholder.
                        </p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2018</div>
                        <h4 class="timeline-title">Transformasi Digital</h4>
                        <p class="timeline-desc">
                            Implementasi sistem digital terintegrasi untuk meningkatkan efisiensi 
                            operasional dan transparansi layanan kepada masyarakat.
                        </p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2020</div>
                        <h4 class="timeline-title">Penghargaan Nasional</h4>
                        <p class="timeline-desc">
                            Meraih penghargaan sebagai BUMD Terbaik tingkat nasional atas kontribusi 
                            dalam pembangunan daerah dan pelayanan publik.
                        </p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h4 class="timeline-title">Era Sustainability</h4>
                        <p class="timeline-desc">
                            Komitmen penuh terhadap praktik bisnis berkelanjutan dengan fokus pada 
                            Environmental, Social, and Governance (ESG) principles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi dan Misi -->
    <section id="visi-misi" class="py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
            </div>
        </div>
    </section>

    </html> --}}