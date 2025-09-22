@extends('web.layouts.app')
@push('css')
    <style>
        .text-break {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endpush
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                @section('page_title', $title)
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $title }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Berita</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Blog Start -->
<div class="page-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row" id="dataTable"></div>
            </div>

            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                <div class="service-sidebar">
                    <!-- Sidebar Cta Box Start -->
                    <div class="sidebar-cta-box wow fadeInUp mb-4" data-wow-delay="0.25s">
                        <!-- Cta Content Start -->
                        <div class="sidebar-cta-content">
                            <h3>Cari Berita</h3>
                        </div>
                        <!-- Cta Content End -->

                        <div class="input-group">
                            <input type="text" name="search" id="search" class="tuba-form-control form-control"
                                placeholder="Cari informasi...">
                            <button class="tuba-btn-default" type="submit">Cari</button>
                        </div>
                    </div>
                    <!-- Sidebar Cta Box End -->

                    <!-- Service Categories List Start -->
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>Filter berita</h3>
                        <label for="tanggal_awal">Tanggal awal</label>
                        <div class="input-group mb-3">
                            <input type="date" name="tanggal_awal" id="tanggal_awal"
                                class="tuba-form-control form-control">
                        </div>
                        <label for="tanggal_awal">Tanggal akhir</label>
                        <div class="input-group mb-3">
                            <input type="date" name="tanggal_awal" id="tanggal_akhir"
                                class="tuba-form-control form-control">
                        </div>
                        <label for="tanggal_awal">Jumlah berita</label>
                        <div class="input-group mb-3">
                            <input type="number" name="tanggal_awal" id="jumlah_berita"
                                class="tuba-form-control form-control">
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn-default w-100" id="filter">Tampilkan</button>
                        </div>
                    </div>
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>Kategori</h3>
                        <ul>
                            <li><a href="{{ url('/berita') }}">Semua</a></li>
                            @foreach ($categories as $item)
                                <li><a href="{{ url('/kategori/' . $item->slug) }}">{{ $item->nama_kategori }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Service Categories List End -->
                </div>
                <!-- Service Sidebar End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Blog End -->
@endsection
@push('js')
<script type="text/javascript">
    var search = '{{ \request()->search }}';
    var tangga_awal = "";
    var tangga_akhir = "";
    var jumlah_berita = 8;

    $('#dataTable').html(make_skeleton());
    $(document).ready(function() {
        loadTable();

        $('#search').on('keypress', function(e) {
            if (e.which == 13) {
                filterTable();
                return false;
            }
        });
    });

    $('#filter').click(function() {
        filterTable();
    });

    function filterTable() {
        search = $('#search').val();
        tangga_awal = $('#tanggal_awal').val();
        tangga_akhir = $('#tanggal_akhir').val();
        jumlah_berita = $('#jumlah_berita').val();
        loadTable();
    }

    async function loadTable() {
        var param = {
            url: '{{ url()->current() }}',
            method: 'GET',
            data: {
                load: 'table',
                search: search,
                tanggal_awal: tangga_awal,
                tanggal_akhir: tangga_akhir,
                limit: jumlah_berita
            }
        }

        await transAjax(param).then((result) => {
            $('#dataTable').html(result);
        }).catch((err) => {
            console.log(err);
        })
    }

    function loadPaginate(to) {
        page = to
        filterTable()
    }

    function make_skeleton() {
        var output = '';
        for (var count = 0; count < 3; count++) {
            output += '<h5 class="card-title placeholder-glow">';
            output += '<span class="placeholder col-6"></span>';
            output += '</h5>';
            output += '<p class="card-text placeholder-glow">';
            output += '<span class="placeholder col-7"></span>';
            output += '</p>';
        }
        return output;
    }
</script>
@endpush
