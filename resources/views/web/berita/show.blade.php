@extends('web.layouts.app')
@push('css')
    <style>
        .post-entry img {
            border-radius: 30px;
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
                @section('page_title', $post->judul)
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $post->judul }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item"><a href="/berita">berita</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ Str::limit($post->judul, 30, '...') }}
                            </li>
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
                <!-- Post Featured Image Start -->
                @section('page_image', route('thumbnail', ['year' => $post->created_at->format('Y'), 'filename' =>
                    $post->thumbnail, 'type' => 'sidebar']))
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ route('thumbnail', ['year' => $post->created_at->format('Y'), 'filename' => $post->thumbnail, 'type' => 'utama']) }}"
                                alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            {!! $post->body !!}
                        </div>


                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-3">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="//www.facebook.com/sharer.php?u={{ url($post->slug) }}"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a
                                                    href="//api.whatsapp.com/send?phone=&amp;text={{ $post->judul }}%20%2D%20{{ url($post->slug) }}"><i
                                                        class="fa-brands fa-whatsapp"></i></a></li>
                                            <li><a href="https://t.me/share/url?url={{ url($post->slug) }}"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
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
                                <input type="text" name="search" class="tuba-form-control form-control"
                                    placeholder="Cari informasi...">
                                <button class="tuba-btn-default" type="submit">Cari</button>
                            </div>
                        </div>
                        <!-- Sidebar Cta Box End -->

                        <!-- Service Categories List Start -->
                        {{-- <div class="service-catagery-list wow fadeInUp">
                            <h3>Kategori</h3>
                            <ul>
                                <li><a href="{{ url('/berita') }}">Semua</a></li>
                                @foreach ($categories as $item)
                                    <li><a href="{{ url('/kategori/' . $item->slug) }}">{{ $item->nama_kategori }}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}

                        <div class="service-catagery-list wow fadeInUp">
                            <h3>Kategori</h3>
                            <ul class="category-list">
                                <li><a href="{{ url('/berita') }}">Semua</a></li>
                                @foreach ($categories as $item)
                                    <li><a href="{{ url('/berita/' . $item->slug) }}">{{ $item->nama_kategori }}</a></li>
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
