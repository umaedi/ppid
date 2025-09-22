<header class="main-header" style="background: #114A43;">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="/">
                    <img lazy="loading" src="{{ asset('img/logo/favicon.png') }}" alt="Logo" width="40px">
                </a>
                <a href="{{ url('') }}">
                    <h4 class="text-white text-uppercase">{{ \request()->subdomain }}</h4>
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                            @foreach ($menus as $menu)
                                @if ($menu->submenu->isEmpty())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                    </li>
                                @else
                                    <li class="nav-item submenu"><a class="nav-link" href="{{ $menu->link }}">
                                            {{ $menu->nama_menu }}</a>
                                        <ul>
                                            @foreach ($menu->submenu as $submenu)
                                                <li><a href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                            <li class="nav-item"><a class="nav-link" href="/berita">Lainnya</a></li>
                        </ul>
                    </div>
                    <!-- Header Btn Start -->
                    <div class="header-btn d-inline-flex">
                        @auth
                            <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                        @else
                            <a href="/login" class="btn-default btn-signup">Login</a>
                        @endauth
                    </div>
                    <!-- Header Btn End -->
                </div>

                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
