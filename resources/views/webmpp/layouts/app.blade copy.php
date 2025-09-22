<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MPP Tulang Bawang</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="https://tulangbawangkab.go.id/img/logo/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->

 
  <link href="{{ asset('webmpp') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   
  <link href="{{ asset('webmpp') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('webmpp') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('webmpp') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('webmpp') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('webmpp') }}/assets/css/main.css" rel="stylesheet">

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
            <script src="{{ asset('webmpp') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="{{ asset('webmpp') }}/assets/vendor/php-email-form/validate.js"></script>
            <script src="{{ asset('webmpp') }}/assets/vendor/aos/aos.js"></script>
            <script src="{{ asset('webmpp') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="{{ asset('webmpp') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="{{ asset('webmpp') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>

            <!-- Main JS File -->
            <script src="{{ asset('webmpp') }}/assets/js/main.js"></script>

            <script>
            document.addEventListener("DOMContentLoaded", function () {
                const faqItems = document.querySelectorAll(".faq-item");
                const faqImage = document.querySelector(".faq-arrow");

                const images = [
                "https://plus.unsplash.com/premium_photo-1737659254845-d52fe134d589?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", 
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
                            faqImage.innerHTML = `<img src="${images[index]}" alt="FAQ Image" width="400" height="auto">`; 
                        }
                    });
                });
            });
            </script>
        </main>
    </body>
</html>