@extends('web.layouts.app')

@push('css')
@endpush

@section('content')
<link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">

    <div class="container">
        <div class="header-saran">
            <h3 class="text-center mt-5">SURVEI KEPUASAN MASYARAKAT <i class="fas fa-clipboard-check fa-2x text-center" style="color:#114A43;"></i></h3>
            <p class="text-center">Kami sangat menghargai setiap masukan yang Anda berikan. Silakan tinggalkan pendapat Anda mengenai kepuasan masyarakat pada survei di bawah ini.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container-saran">
                    <h5 class="text-center mb-2">Tinggalkan Saran atau Aduan</h5>
                    <form>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Umur</label>
                                <input type="number" class="form-control mb-2" placeholder="Masukkan Umur Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Jenis Kelamain</label>
                                <select class="form-select" required>
                                <option selected disabled>Pilih Jenis</option>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" placeholder="Masukkan Pendidikan Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Anda" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label">Jenis layanan yang di terima</label>
                                <input type="text" class="form-control" placeholder="Masukkan Jenis Layanan" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan nya?</label>
                            <select class="form-select" required>
                                <option selected disabled>Pilih Jenis</option>
                                <option>Tidak sesuai</option>
                                <option>Kurang sesuai</option>
                                <option>Sesuai</option>
                                 <option>Sangat sesuai</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana  pendapat saudara tentang kewajaran biaya\tarif dalam pelayanan?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Sangat Mahal</option>
                                <option>Cukup Mahal</option>
                                <option>Murah</option>
                                <option>Gratis</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana pendapat saudara  tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan denga hasil yang diberikan?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Tidak sesuai</option>
                                <option>Kurang sesuai</option>
                                <option>Sesuai</option>
                                <option>Sangat sesuai</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana pendapat saudara  tentang kompetensi\ kemampuan petugas dalam memberikan pelayanan?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Tidak kompeten</option>
                                <option>Kurang kompeten</option>
                                <option>Kompeten</option>
                                <option>Sangat kompeten</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana pendapat saudara tentang kemudahan prosedur pelayanan pada unit ini?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Tidak mudah</option>
                                <option>Kurang mudah</option>
                                <option>Mudah</option>
                                <option>Sangat mudah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana  pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Tidak cepat</option>
                                <option>Kurang cepat</option>
                                <option>Cepat</option>
                                <option>Sangat cepat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana  pendapat saudara tentang penanganan pengaduan pengguna layanan?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Tidak ada</option>
                                <option>Ada tapi tidak berfungsi</option>
                                <option>Berfungsi kurang maksimal</option>
                                <option>Berjalan dengan baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bagaimana  pendapat saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Tidak sopan</option>
                                <option>Kurang sopan</option>
                                <option>Sopan</option>
                                <option>Sangat sopan</option>
                            </select>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Bagaimana  pendapat saudara tentang kualitas sarana dan prasarana?</label>
                            <select class="form-select" required>
                                <option selected>Pilih Jenis</option>
                                <option>Buruk</option>
                                <option>Cukup</option>
                                <option>Baik</option>
                                <option>Sangat baik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kritik dan Saran</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis kritik dan saran Anda di sini..." required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn-default-saran me-2">
                                <!-- Save Icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6" width="20" height="20">
                                    <path fill-rule="evenodd"
                                        d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6Zm1.5 1.5a.75.75 0 0 0-.75.75V16.5a.75.75 0 0 0 1.085.67L12 15.089l4.165 2.083a.75.75 0 0 0 1.085-.671V5.25a.75.75 0 0 0-.75-.75h-9Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Simpan
                            </button>
                            <button type="reset" class="btn-default-saran btn-custom"
                                style="color:white;background-color: var(--bs-body-color);">
                                <!-- Cancel Icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.854 4.146a.5.5 0 0 1 .708 0L8 5.793l.438-.438a.5.5 0 0 1 .708.707L8.707 6.5l.438.438a.5.5 0 0 1-.707.707L8 7.207l-.438.438a.5.5 0 0 1-.708-.707L7.293 6.5l-.438-.438a.5.5 0 0 1 0-.708z" />
                                </svg>
                                Batal
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
