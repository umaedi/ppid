@extends('web.layouts.app')
@push('css')
    <style>
        .service-entry img {
            border-radius: 30px
        }
    </style>
@endpush
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                @section('page_title', $halaman->judul)
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $halaman->judul }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item"><a href="/halaman">halaman</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ Str::limit($halaman->judul, 30, '...') }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="service-sidebar">
                <div class="service-catagery-list wow fadeInUp">
                    <h3>Halaman lainnya</h3>
                    <ul>
                        @foreach ($halamanTerbaru as $item)
                            <li><a href="{{ $item->slug }}">{{ $item->judul }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="service-single-content">
                <div class="service-entry">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        {!! $halaman->konten !!}
                    </p>

                    @if ($berkas->isNotEmpty())
                        <table class="table table-bordered table-striped w-100">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Berkas</th>
                                    <th scope="col">Tanggal Unggah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($berkas as $key =>  $tb)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $tb->nama_berkas }}</td>
                                        <td>{{ $tb->created_at->format('d-m-Y') }}</td>
                                        <td class="d-flex gap-1">
                                            <a href="{{ route('dokumen', ['filename' => $tb->berkas ?? '-']) }}"
                                                class="badge bg-primary"><i class='fa fa-download'></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <div class="mt-2 text-center">
                                                <div class="pt-3 pb-3">
                                                    <div class="empty">
                                                        <div class="empty-img">
                                                            <svg style="width: 96px; height: 96px"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-database-off"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path
                                                                    d="M12.983 8.978c3.955 -.182 7.017 -1.446 7.017 -2.978c0 -1.657 -3.582 -3 -8 -3c-1.661 0 -3.204 .19 -4.483 .515m-2.783 1.228c-.471 .382 -.734 .808 -.734 1.257c0 1.22 1.944 2.271 4.734 2.74">
                                                                </path>
                                                                <path
                                                                    d="M4 6v6c0 1.657 3.582 3 8 3c.986 0 1.93 -.067 2.802 -.19m3.187 -.82c1.251 -.53 2.011 -1.228 2.011 -1.99v-6">
                                                                </path>
                                                                <path
                                                                    d="M4 12v6c0 1.657 3.582 3 8 3c3.217 0 5.991 -.712 7.261 -1.74m.739 -3.26v-4">
                                                                </path>
                                                                <line x1="3" y1="3" x2="21"
                                                                    y2="21"></line>
                                                            </svg>
                                                        </div>
                                                        <p class="empty-title">Tidak ada data yang tersedia</p>
                                                        <div class="empty-action">
                                                            <button onclick="loadData()" class="btn btn-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-refresh"
                                                                    width="18" height="18" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none">
                                                                    </path>
                                                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4">
                                                                    </path>
                                                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4">
                                                                    </path>
                                                                </svg>
                                                                Refresh
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
