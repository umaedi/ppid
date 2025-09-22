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
        <li class="menu-item {{ Request::is('cms/dashboard' ? 'active' : '') }}">
            <a href="/cms/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Menu</span>
        </li>
        <li class="menu-item  {{ Request::is('cms/instansi*') ? 'active' : '' }}">
            <a href="/cms/instansi" class="menu-link">
                <i class='menu-icon bx bx-buildings'></i>
                <div data-i18n="Basic">Instansi</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/kategori*') ? 'active' : '' }}">
            <a href="/cms/layanan" class="menu-link">
                <i class='menu-icon bx bx-category'></i>
                <div data-i18n="Basic">Layanan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/cms/fasilitas"  class="menu-link">
                <i class='menu-icon bx bxs-group'></i>
                <div data-i18n="Basic">Fasilitas</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('cms/ikm*') ? 'active' : '' }}">
            <a href="/cms/ikmmpp" class="menu-link">
                <i class="menu-icon bx bx-pie-chart-alt-2"></i>
                <div data-i18n="Basic">IKM</div>
            </a>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pengaturan</span>
        </li>
        <li class="menu-item {{ Request::is('cms/pengaturan*') ? 'active' : '' }}">
            <a href="https://wa.me/6288267987233" class="menu-link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="menu-icon size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
                <div data-i18n="Basic">Bantuan</div>
            </a>
        </li>
        
    </ul>
</aside>
