<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Tulang Bawang Jaya - Badan Usaha Milik Daerah yang berkomitmen memberikan pelayanan terbaik untuk pembangunan dan kemajuan daerah."
    />

    <!-- Open Graph Meta Tags -->
    <meta
      property="og:title"
      content="Tulang Bawang Jaya - Pelayanan Terbaik untuk Daerah"
    />
    <meta
      property="og:description"
      content="BUMD terpercaya dengan layanan berkualitas untuk pembangunan dan kemajuan daerah."
    />
    <meta property="og:image" content="{{ asset('assets/img/og_image.png') }}" />
    <meta property="og:type" content="website" />
    
    <title>Tulang Bawang Jaya - Landing Page</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"
    />
    @vite(['resources/css/app.css'])
    @stack('css')
  </head>

  <body>
    <!-- Navbar -->
    @include('web.layouts.navbar')

   @yield('content')

    <!-- Footer -->
    @include('web.layouts.footer')

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Navbar scroll effect
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      });

      // Smooth scrolling for navigation links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            target.scrollIntoView({
              behavior: "smooth",
              block: "start",
            });
          }
        });
      });

      // Counter animation for statistics
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

      // Initialize counter animation when stats section is visible
      const observerOptions = {
        threshold: 0.5,
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll(".stat-number");
            counters.forEach((counter) => {
              const target = parseInt(counter.getAttribute("data-target"));
              animateCounter(counter, target);
            });
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      const statsSection = document.querySelector("#statistik");
      if (statsSection) {
        observer.observe(statsSection);
      }

      // Gallery modal functionality
      const galleryItems = document.querySelectorAll(".gallery-item");
      const modalImage = document.getElementById("modalImage");

      galleryItems.forEach((item) => {
        item.addEventListener("click", function () {
          const imageSrc = this.getAttribute("data-bs-image");
          modalImage.src = imageSrc;
        });
      });

      // Form validation enhancement
      const contactForm = document.querySelector("#kontak form");
      if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
          e.preventDefault();

          // Basic validation
          const nama = document.getElementById("nama").value;
          const email = document.getElementById("email").value;
          const pesan = document.getElementById("pesan").value;

          if (!nama || !email || !pesan) {
            alert("Mohon lengkapi semua field yang wajib diisi.");
            return;
          }

          // Email validation
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
            alert("Format email tidak valid.");
            return;
          }

          // If validation passes, show success message
          alert(
            "Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda."
          );

          // In real implementation, form would be submitted to server
          // this.submit();
        });
      }

      // Auto-hide carousel controls on mobile
      function handleCarouselControls() {
        const carousel = document.getElementById("testimonialCarousel");
        const controls = carousel.querySelectorAll(
          ".carousel-control-prev, .carousel-control-next"
        );

        if (window.innerWidth < 768) {
          controls.forEach((control) => (control.style.display = "none"));
        } else {
          controls.forEach((control) => (control.style.display = "flex"));
        }
      }

      window.addEventListener("resize", handleCarouselControls);
      handleCarouselControls();

      // Initialize tooltips if needed
      const tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    </script>
  </body>
</html>
