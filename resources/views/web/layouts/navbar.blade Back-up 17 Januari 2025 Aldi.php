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
                            {{-- Start Pagination  --}}
                            @php
                                $menuCounter = 0;
                                $extraMenus = [];
                            @endphp
                            {{-- End Pagination  --}}
                            <!-- Strat code Menu untuk tampilan desktop -->
                            @foreach ($menus as $menu)
                                @if ($menuCounter < 5)
                                    @if ($menu->submenu->isEmpty())
                                        <li class="nav-item navbar-nav d-none d-lg-block">
                                            <a class="nav-link" href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item submenu navbar-nav d-none d-lg-block">
                                            <a class="nav-link" href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                            <ul>
                                                @foreach ($menu->submenu as $submenu)
                                                    <li><a href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    @php $extraMenus[] = $menu; @endphp
                                @endif
                                @php $menuCounter++; @endphp
                            @endforeach
                            <!-- End code  Menu untuk tampilan desktop -->

                            <!-- Strat code  Menu untuk tampilan mobile dan tablet -->
                            <ul class="navbar-nav d-lg-none">
                                @foreach ($menus as $menu)
                                    @if ($menu->submenu->isEmpty())
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item submenu">
                                            <a class="nav-link" href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                            <ul>
                                                @foreach ($menu->submenu as $submenu)
                                                    <li><a
                                                            href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <!-- End code  Menu untuk tampilan mobile dan tablet -->

                            <!-- Start Trigger Modal untuk Menu Lainnya di Desktop -->
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#extraMenusModal">Lainnya</a>
                            </li>
                            <!-- End Trigger Modal untuk Menu Lainnya di Desktop -->

                            <!-- Start Modal untuk Menu Lainnya -->
                            <div class="modal fade" id="extraMenusModal" tabindex="-1"
                                aria-labelledby="extraMenusModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="extraMenusModalLabel">Menu Lainnya</h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            @foreach ($extraMenus as $menu)
                                                @if ($menu->submenu->isEmpty())
                                                    <li class="nav-item">
                                                        <a class="nav-link text-dark"
                                                            href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                                    </li>
                                                @else
                                                    <li class="nav-item submenu">
                                                        <a class="nav-link text-dark"
                                                            href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                                        <ul class="ps-3">
                                                            <!-- Menambahkan padding kiri untuk submenu -->
                                                            @foreach ($menu->submenu as $submenu)
                                                                <li><a class="text-dark"
                                                                        href="{{ $submenu->link }}">{{ $submenu->nama_submenu }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal untuk Menu Lainnya -->



                            {{-- start code untuk tampilan mobile --}}
                            <li class="nav-item  nav-menu-wrapper mobile-only">
                                @auth
                                    <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                                @else
                                    <a href="/login" class="btn-default btn-signup">Login</a>
                                @endauth
                            </li>
                            {{-- end code untuk tampilan mobile --}}

                        </ul>
                    </div>
                    {{-- start code untuk tampilan desktop dan tablete --}}
                    <!-- Header Btn Start -->
                    <div class="header-btn d-inline-flex">
                        @auth
                            <a href="/cms/dashboard" class="btn-default btn-signup">CMS</a>
                        @else
                            <a href="/login" class="btn-default btn-signup">Login</a>
                        @endauth
                    </div>
                    <!-- Header Btn End -->
                    {{-- end code untuk tampilan desktop dan tablete --}}
                </div>

                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
