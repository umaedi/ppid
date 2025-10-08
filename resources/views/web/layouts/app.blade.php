<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Open Graph Meta Tags -->
    <meta
      property="og:title"
      content="PPID Tulang Bawang Jaya"
    />
    <meta
      property="og:description"
      content="Pejabat Pengelola Informasi dan Dokumentasi berkomitmen memberikan pelayanan informasi publik yang transparan dan akuntabel."
    />
    <meta property="og:image" content="{{ asset('assets/img/og_image.png') }}" />
    <meta property="og:type" content="website" />

    <title>PPID - Pejabat Pengelola Informasi dan Dokumentasi</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <style>
      :root {
        --primary-color: #2c5282;
        --secondary-color: #3182ce;
        --accent-color: #e53e3e;
        --text-dark: #2d3748;
        --text-light: #718096;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        color: var(--text-dark);
      }

      .navbar-brand {
        font-weight: bold;
        color: var(--primary-color) !important;
      }

      .hero-banner {
        background: linear-gradient(
          135deg,
          var(--primary-color) 0%,
          var(--secondary-color) 100%
        );
        color: white;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
      }

      .hero-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.1);
        z-index: 1;
      }

      .hero-content {
        position: relative;
        z-index: 2;
      }

      .hero-banner h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
      }

      .hero-banner p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
        opacity: 0.9;
      }

      .section-title {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 3rem;
        position: relative;
      }

      .section-title::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: var(--accent-color);
        border-radius: 2px;
      }

      .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      }

      .info-card {
        border-left: 4px solid var(--secondary-color);
      }

      .info-card.berkala {
        border-left-color: #38a169;
      }

      .info-card.serta-merta {
        border-left-color: #e53e3e;
      }

      .info-card.setiap-saat {
        border-left-color: #d69e2e;
      }

      .btn-primary {
        background: var(--primary-color);
        border-color: var(--primary-color);
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 25px;
        transition: all 0.3s ease;
      }

      .btn-primary:hover {
        background: var(--secondary-color);
        border-color: var(--secondary-color);
        transform: translateY(-2px);
      }

      .btn-outline-primary {
        border-color: var(--primary-color);
        color: var(--primary-color);
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 25px;
        transition: all 0.3s ease;
      }

      .btn-outline-primary:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        transform: translateY(-2px);
      }

      .form-control {
        border-radius: 10px;
        padding: 15px;
        border: 2px solid #e2e8f0;
        transition: border-color 0.3s ease;
      }

      .form-control:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 0.2rem rgba(49, 130, 206, 0.25);
      }

      .footer {
        background: var(--text-dark);
        color: white;
        padding: 50px 0 30px;
      }

      .footer h5 {
        color: var(--secondary-color);
        margin-bottom: 20px;
      }

      .footer a {
        color: #cbd5e0;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .footer a:hover {
        color: var(--secondary-color);
      }

      .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: var(--secondary-color);
        color: white;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        transition: all 0.3s ease;
      }

      .social-icons a:hover {
        background: var(--accent-color);
        transform: translateY(-3px);
      }

      .table thead th {
        background: var(--primary-color);
        color: white;
        border: none;
        font-weight: 600;
      }

      .badge {
        font-size: 0.8rem;
        padding: 8px 12px;
      }

      .news-card {
        border-radius: 15px;
        overflow: hidden;
      }

      .news-card img {
        height: 200px;
        object-fit: cover;
      }

      .navbar-nav .nav-link {
        font-weight: 500;
        color: var(--text-dark) !important;
        padding: 8px 16px !important;
        border-radius: 20px;
        transition: all 0.3s ease;
      }

      .navbar-nav .nav-link:hover {
        background: var(--secondary-color);
        color: white !important;
      }

      @media (max-width: 768px) {
        .hero-banner h1 {
          font-size: 2.5rem;
        }

        .hero-banner p {
          font-size: 1rem;
        }
      }
    </style>
     @vite(['resources/css/app.css'])
     @stack('css')
  </head>
  <body>
    <!-- Header / Navbar -->
    @include('web.layouts.navbar')

    @yield('content')

    <!-- Footer -->
    @include('web.layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
      // Smooth scrolling for navigation links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
              top: offsetTop,
              behavior: "smooth",
            });
          }
        });
      });

      // Active navigation highlight
      window.addEventListener("scroll", function () {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        let current = "";
        sections.forEach((section) => {
          const sectionTop = section.offsetTop - 100;
          const sectionHeight = section.clientHeight;
          if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute("id");
          }
        });

        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
          }
        });
      });

      // Form submission handler
      document
        .getElementById("permohonanForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();

          // Get form data
          const formData = {
            nama: document.getElementById("nama").value,
            nik: document.getElementById("nik").value,
            email: document.getElementById("email").value,
            telepon: document.getElementById("telepon").value,
            alamat: document.getElementById("alamat").value,
            kebutuhan: document.getElementById("kebutuhan").value,
            tujuan: document.getElementById("tujuan").value,
            format: document.getElementById("format").value,
            tanggal: new Date().toISOString().split("T")[0],
          };

          // Basic validation
          if (
            !formData.nama ||
            !formData.nik ||
            !formData.email ||
            !formData.kebutuhan ||
            !formData.tujuan
          ) {
            alert("Mohon lengkapi semua field yang wajib diisi (*)");
            return;
          }

          // NIK validation
          if (formData.nik.length !== 16 || !/^\d+$/.test(formData.nik)) {
            alert("NIK harus berupa 16 digit angka");
            return;
          }

          // Email validation
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(formData.email)) {
            alert("Format email tidak valid");
            return;
          }

          // Store form data (in real implementation, this would be sent to backend)
          console.log("Form Data:", formData);

          // Show success message
          alert(
            "Permohonan informasi berhasil dikirim!\n\n" +
              "No. Registrasi: PPID-" +
              Date.now() +
              "\n" +
              "Status: Dalam Proses\n\n" +
              "Kami akan memproses permohonan Anda dalam waktu maksimal 10 hari kerja. " +
              "Konfirmasi akan dikirim ke email yang Anda daftarkan."
          );

          // Reset form
          this.reset();

          // Scroll to top of form
          document
            .getElementById("permohonan")
            .scrollIntoView({ behavior: "smooth" });
        });

      // NIK input formatter (numbers only)
      document.getElementById("nik").addEventListener("input", function (e) {
        this.value = this.value.replace(/\D/g, "");
      });

      // Phone number input formatter (numbers only)
      document
        .getElementById("telepon")
        .addEventListener("input", function (e) {
          this.value = this.value.replace(/\D/g, "");
        });

      // Auto-hide alerts after 5 seconds
      setTimeout(function () {
        const alerts = document.querySelectorAll(".alert");
        alerts.forEach((alert) => {
          if (!alert.classList.contains("alert-info")) {
            alert.style.transition = "opacity 0.5s";
            alert.style.opacity = "0";
            setTimeout(() => alert.remove(), 500);
          }
        });
      }, 5000);

      // Initialize tooltips if any
      const tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });

      // Loading animation for cards
      const cards = document.querySelectorAll(".card");
      const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      };

      const observer = new IntersectionObserver(function (entries) {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        });
      }, observerOptions);

      cards.forEach((card) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
        observer.observe(card);
      });

       // Gallery modal functionality
      const galleryItems = document.querySelectorAll(".gallery-item");
      const modalImage = document.getElementById("modalImage");

      galleryItems.forEach((item) => {
        item.addEventListener("click", function () {
          const imageSrc = this.getAttribute("data-bs-image");
          modalImage.src = imageSrc;
        });
      });
    </script>
  </body>
</html>
