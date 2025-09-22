@if ($postsTerbaru)
    <div class="mb-2 col-lg-8 ">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <span class="pip"></span>
                <strong class="fs-5" style="color:#0b1f1c">Berita Terbaru</strong>
                <div id="latest-posts-container"></div>
            </div>
            <a href="/berita" class="text-decoration-none fw-semibold fs-6" style="color:#114A43; display: inline-block;">
                Lihat lainnya
                <svg xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
@endif