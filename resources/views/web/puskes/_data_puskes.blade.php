<div class="row project-item-boxes">
    @forelse ($table as $item)
        <div class="col-md-4 project-item-box my-2 {{ $item->kategori }}">
            <div class="box-step-item shadow-sm p-2 rounded wow fadeInUp">
                <div class="box-item-number">
                    <img src="{{ asset($item->photo_kepala_opd) }}" alt="Foto Kepala OPD" class="img-opd">
                </div>
                <div class="box-item-content">
                    <h6 class="fw-bold ellipsis">{{ $item->nama_opd }}</h6>
                    <p class="fw-bold ellipsis"><i class="fas fa-user-tie text-dark"></i> {{ $item->nama_kepala_opd }}</p>
                    <p class="fst-italic"><i class="fas fa-link text-dark"></i> {{$item->subdomain}}.tulangbawangkab.go.id</p>

                    <div class="d-flex gap-2">
                        <!-- Button Website -->
                        <button class="btn btn-visit"
                            onclick="window.location.href='https://{{ $item->subdomain }}.tulangbawangkab.go.id'">
                            <i class="fas fa-globe"></i>
                        </button>
                        <!-- Button Facebook -->
                        <button class="btn btn-visit"
                            onclick="window.location.href='{{ $item->facebook }}'">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <!-- Button Instagram -->
                        <button class="btn btn-visit"
                            onclick="window.location.href='{{ $item->instagram }}'">
                            <i class="fab fa-instagram"></i>
                        </button>
                        <!-- Button YouTube -->
                        <button class="btn btn-visit"
                            onclick="window.location.href='{{ $item->youtube }}'">
                            <i class="fab fa-youtube"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <div class="blog-item text-center wow fadeInUp">
                <h5>Data Tidak Ditemukan</h5>
            </div>
        </div>
    @endforelse
</div>