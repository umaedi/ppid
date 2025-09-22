<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="keywords" content="Kabupaten Tulang bawang">
    <meta name="author" content="Tim IT Dinas Komunikasi dan Informatika Kab. Tulang Bawang">
    <meta name="google-site-verification" content="3JKKZ-jUla7DpoeJ85EfdaXjnCaPxDwQkohd0LYHHlw" />
    <title>@yield('page_title', 'Kabupaten Tulang Bawang')</title>
    <meta name="title" content="@yield('page_title', 'Kabupaten Tulang Bawang')" />
    <meta name="description" content="@yield('page_description', 'Portal informasi kabupaten Tulang Bawang')">

    <meta itemprop="name" content="@yield('page_title', 'Kabupaten Tulang Bawang')" />
    <meta itemprop="description" content="@yield('page_description', 'Portal informasi kabupaten Tulang Bawang')" />
    <meta itemprop="image" content="@yield('page_image', asset('img/kabupaten_tulang_bawang.png'))" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@" />
    <meta name="twitter:title" content="@yield('page_title', 'Kabupaten Tulang Bawang')" />
    <meta name="twitter:description" content="@yield('page_description', 'Portal informasi kabupaten Tulang Bawang')" />
    <meta name="twitter:creator" content="@" />
    {{-- Twitter Summary card images must be at least 120x120px --}}
    <meta name="twitter:image" content="@yield('page_image', asset('img/kabupaten_tulang_bawang.png'))" />
    {{-- Twitter summary card with large image must be at least 280x150px --}}
    <meta name="twitter:image:src" content="@yield('page_image', asset('img/kabupaten_tulang_bawang.png'))" />
    <meta property="og:title" content="@yield('page_title', 'Kabupaten Tulang Bawang')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="@yield('page_image', asset('img/kabupaten_tulang_bawang.png'))" />
    <meta property="og:description" content="@yield('page_description', 'Portal informasi kabupaten Tulang Bawang')" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Onest:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('css/tuba.css') }}">
    <link rel="stylesheet" href="{{ asset('css/placeholder-loading.min.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @stack('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<html>
<body>

    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('img/logo/favicon.png') }}" alt=""></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Header Start -->
    @include('web.layouts.navbar')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    @include('web.layouts.footer')
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    {{-- <script src="{{ asset('js/validator.min.js') }}"></script> --}}
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Isotop js file -->
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/magiccursor.js') }}"></script> --}}
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}"></script>
    {{-- <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script> --}}
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}"></script>
    {{-- <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> --}}



    <script>
        // Pastikan widget diinisialisasi
        window.onload = function() {
            if (typeof loadKominfoWidget === 'function') {
                loadKominfoWidget(); // Ganti dengan fungsi sebenarnya jika ada
            }
        };
    </script>

    <script>
        async function transAjax(data) {
            html = null;
            data.headers = {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            await $.ajax(data).done(function(res) {
                    html = res;
                })
                .fail(function() {
                    return false;
                })
            return html
        }
    </script>


    {{-- start code js 17 januari 2025 --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggle-more-menu');
            if (toggleButton) {
                toggleButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const extraMenu = document.getElementById('extra-menu');
                    if (extraMenu.style.display === 'none' || !extraMenu.style.display) {
                        extraMenu.style.display = 'block';
                        toggleButton.innerHTML = 'Lainnya ▲';
                    } else {
                        extraMenu.style.display = 'none';
                        toggleButton.innerHTML = 'Lainnya ▼';
                    }
                });
            }
        });
    </script>
    {{-- End code js 17 januari 2025 --}}
    {{-- <script>
        const swiper = new Swiper('.banner__swiper', {
            loop: true,
            spaceBetween: 32,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script> --}}

    {{-- 23 Januari 2025 carousel Hlaman utama --}}
    <script>
        const swiper = new Swiper('#carouselControls', {
            loop: true,
            spaceBetween: 32,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            slidesPerView: 1,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>
    {{-- 23 Januari 2025 carousel Hlaman utama --}}

    @stack('js')

</body>
</html>
