<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta name="keywords" content="MPP MPP Kabupaten Tulang bawang">
  <meta name="author" content="Tim IT Dinas Komunikasi dan Informatika Kab. Tulang Bawang, Haldian">
  <meta name="google-site-verification" content="3JKKZ-jUla7DpoeJ85EfdaXjnCaPxDwQkohd0LYHHlw" />
  <title>MPP Kabupaten Tulang bawang</title>
  <meta name="title" content="MPP Kabupaten Tulang bawang" />
  <meta name="description" content="Portal informasi MPP Kabupaten Tulang bawang">

  <meta itemprop="name" content="MPP Kabupaten Tulang bawang" />
  <meta itemprop="description" content="Portal informasi MPP Kabupaten Tulang bawang" />
  <meta itemprop="image" content="https://tulangbawangkab.go.id/img/kabupaten_tulang_bawang.png" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@" />
  <meta name="twitter:title" content="MPP Kabupaten Tulang bawang" />
  <meta name="twitter:description" content="Portal informasi MPP Kabupaten Tulang bawang" />
  <meta name="twitter:creator" content="@" />
  
  <meta name="twitter:image" content="https://tulangbawangkab.go.id/img/kabupaten_tulang_bawang.png" />
  
  <meta name="twitter:image:src" content="https://tulangbawangkab.go.id/img/kabupaten_tulang_bawang.png" />
  <meta property="og:title" content="MPP Kabupaten Tulang bawang" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://tulangbawangkab.go.id" />
  <meta property="og:image" content="https://tulangbawangkab.go.id/img/kabupaten_tulang_bawang.png" />
  <meta property="og:description" content="Portal informasi MPP Kabupaten Tulang bawang" />
  <meta property="og:site_name" content="tulangbawangkab.go.id" />


  <!-- Favicons -->
  <link href="https://tulangbawangkab.go.id/img/logo/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->

 
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">   
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>


<html>
    <body class="index-page">
        <main class="main">
            <!-- Header Start -->
            @include('webmpp.layouts.navbar')
            <!-- Header End -->

            @yield('content')

            <!-- Footer Start -->
            @include('webmpp.layouts.footer')
            <!-- Footer End -->

            <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('vendor/aos/aos.js') }}"></script>
            <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

            <!-- Main JS File -->
            <script src="{{ asset('js/main.js') }}"></script>

            <script>
            document.addEventListener("DOMContentLoaded", function () {
                const faqItems = document.querySelectorAll(".faq-item");
                const faqImage = document.querySelector(".faq-arrow");

                const images = [
                "https://images.unsplash.com/photo-1739639845916-6bfcaec516ba?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", 
                "https://images.unsplash.com/photo-1739582814657-10931286d7a5?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "https://images.unsplash.com/photo-1739639845916-6bfcaec516ba?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", 
                "https://images.unsplash.com/photo-1739761613270-a48d0d1190ba?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "https://images.unsplash.com/photo-1739382122868-841cb1e669df?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", 
                "https://images.unsplash.com/photo-1737467034151-16e643c905c7?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"  
                ];

                faqItems.forEach((item, index) => {
                    item.addEventListener("click", function () {
                    
                        faqItems.forEach(faq => faq.classList.remove("faq-active"));

                        item.classList.add("faq-active");

                        if (faqImage) {
                            faqImage.innerHTML = `
                                <div class="card" style="border-radius: 10px; overflow: hidden; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);">
                                    <img src="${images[index]}" alt="FAQ Image" style="width: 100%; height: 530px; display: block;">
                                </div>
                            `;
                        }

                    });
                });
            });
            </script>
        </main>
    </body>
</html>