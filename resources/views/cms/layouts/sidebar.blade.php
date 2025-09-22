<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/cms/dashboard" class="app-brand-link">
            <img lazy="loading" src="{{ asset('img/logo/favicon.png') }}" alt="Logo" width="50px">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('cms-dashboard') ? 'active' : '' }}">
            <a href="/cms/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Berita</span>
        </li>
        <li class="menu-item  {{ Request::is('cms/berita*') ? 'active' : '' }}">
            <a href="/cms/berita" class="menu-link">
                <i class='menu-icon bx bx-news'></i>
                <div data-i18n="Basic">Berita</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/kategori*') ? 'active' : '' }}">
            <a href="/cms/kategori" class="menu-link">
                <i class='menu-icon bx bx-category'></i>
                <div data-i18n="Basic">Kategori berita</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://chatgpt.com/" target="_blank" class="menu-link">
                <i class='menu-icon bx bx-message'></i>
                <div data-i18n="Basic">Chat GPT</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" onclick="return confirm('Belum bisa digunakan!')" class="menu-link">
                <i class='menu-icon bx bx-station'></i>
                <div data-i18n="Basic">Statistik berita </div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" onclick="return confirm('Belum bisa digunakan!')" class="menu-link">
                <i class='menu-icon bx bx-conversation'></i>
                <div data-i18n="Basic">Komentar</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/menu*') ? 'active' : '' }}">
            <a href="/cms/menu" class="menu-link">
                <i class='menu-icon bx bx-food-menu'></i>
                <div data-i18n="Basic">Menu</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/halaman*') ? 'active' : '' }}">
            <a href="/cms/halaman" class="menu-link">
                <i class='menu-icon bx bx-receipt'></i>
                <div data-i18n="Basic">Halaman</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/saran*') ? 'active' : '' }}">
            <a href="/cms/saran" class="menu-link">
                <i class='menu-icon bx bx-comment-detail'></i>
                <div data-i18n="Basic">Saran dan Aduan</div>
            </a>
        </li> <li class="menu-item {{ Request::is('cms/ikm*') ? 'active' : '' }}">
            <a href="/cms/ikm" class="menu-link">
                <i class="menu-icon bx bx-pie-chart-alt-2"></i>
                <div data-i18n="Basic">IKM</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/berkas*') ? 'active' : '' }}">
            <a href="/cms/berkas" class="menu-link">
                <i class='menu-icon bx bx-file'></i>
                <div data-i18n="Basic">Berkas</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pengaturan</span>
        </li>
        <li class="menu-item {{ Request::is('cms/pengaturan*') ? 'active' : '' }}">
            <a href="/cms/pengaturan" class="menu-link">
                <i class='menu-icon bx bx-cog'></i>
                <div data-i18n="Basic">Pengaturan Web</div>
            </a>
    </ul>
</aside>
