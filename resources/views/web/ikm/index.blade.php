@extends('web.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/summernote/summernote-bs5.min.css') }}">
    <script src="{{ asset('assets/summernote/summernote-bs5.min.js') }}"></script>
@endpush

@section('content')
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
    <div id="ikm" class="container">
        <div class="header-saran">
            <h3 class="text-center mt-5">Indeks Kepuasan Masyarakat (IKM) <i class="fas fa-clipboard-check fa-2x text-center"
                    style="color:#114A43;"></i></h3>
            <p class="text-center">Mengetahui Tingkat Kepuasan Masyarakat Terhadap pelayanan yang diterima guna meningkatkan
                mutu dan efektivitas layanan publik. </p>
        </div>
        <div class="row">
            <div class="form-container-saran">
                <!-- Progress Bar -->
                <div class="progress mb-4">
                    <div id="progress-bar" class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <form id="multiStepForm">
                    @csrf
                    <div id="step-1">
                        <h5 class="mb-2 mt-0">Step 1: Data Pengguna</h5>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Masukkan Nama Anda">
                            <small class="d-block text-danger"id="error-nama"></small>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamain</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" >
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            <small class="d-block text-danger"id="error-jenis_kelamin"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Masukkan Alamat Anda"></textarea>
                            <small class="d-block text-danger"id="error-alamat"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-select" >
                                <option selected disabled>Pilih Pendidikan</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pekerjaan</label>
                            <select name="pekerjaan" id="pekerjaan" class="form-select" >
                                <option selected disabled>Pilih Pekerjaan</option>
                                <option value="PNS/POLRI">PNS/POLRI</option>
                                <option value="SWASTA">SWASTA</option>
                                <option value="WIRAUSAHA">WIRAUSAHA</option>
                                <option value="MAHASISWA">MAHASISWA</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Layanan</label>
                            <select name="jenis_layanan" id="jenis_layanan" class="form-select" >
                                <option selected disabled>Pilih Layanan</option>
                                <option value="LAYANAN PERIZINAN">LAYANAN PERIZINAN</option>
                                <option value="LAYANAN PENGADUAN">LAYANAN PENGADUAN</option>
                                <option value="LAYANAN LAINNYA">LAYANAN LAINNYA</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Telpon</label>
                            <input name="no_hp" id="no_hp" type="number" class="form-control"
                                placeholder="Masukkan Nomor Anda" >
                            <small class="d-block text-danger"id="error-no_hp"></small>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a class="btn-default-saran me-2" href="javascript:void(0)" onclick="nextStep()"  >
                                <!-- Save Icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                    fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Selanjutnya
                            </a>
                            <button type="reset" class="btn-default-saran btn-custom"
                                style="color:white;background-color: var(--bs-body-color);">
                                <!-- Cancel Icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Batal
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Pertanyaan Survei -->
                    <div id="step-2" class="hidden">
                        <h5 class="mb-3 mt-0">Step 2: Pertanyaan Survei</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="overflow-x: auto;">
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Sesuai</th>
                                        <th>Kurang Sesuai</th>
                                        <th>Sesuai</th>
                                        <th>Sangat Sesuai</th>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_1"></small>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan
                                            dengan jenis
                                            pelayanannya?</td>
                                        <td class="text-center align-middle"><input type="radio" name="pertanyaan_1"
                                                value="Tidak Sesuai" required></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_1"
                                                value="Kurang Sesuai" ></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_1"
                                                value="Sesuai" required>
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_1"
                                                value="Sangat Sesuai" required></td>
                                    </tr>
                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Mudah</th>
                                        <th>Kurang Mudah</th>
                                        <th>Mudah</th>
                                        <th>Sangat Mudah</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan unit
                                            ini?</td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_2"
                                                value="Tidak Mudah"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_2"
                                                value="Kurang Mudah"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_2"
                                                value="Mudah">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_2"
                                                value="Sangat Mudah"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_2"></small>

                                </tbody>

                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Cepat</th>
                                        <th>Kurang Cepat</th>
                                        <th>Cepat</th>
                                        <th>Sangat Cepat</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan
                                            pelayanan ?
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_3"
                                                value="Tidak Cepat"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_3"
                                                value="Kurang Cepat"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_3"
                                                value="Cepat">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_3"
                                                value="Sangat Cepat"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_3"></small>

                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Mahal</th>
                                        <th>Kurang Mahal</th>
                                        <th>Murah</th>
                                        <th>Gratis</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan
                                            ?</td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_4"
                                                value="Tidak Mahal"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_4"
                                                value="Kurang Mahal"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_4"
                                                value="Murah">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_4"
                                                value="Gratis">
                                        </td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_4"></small>

                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Sesuai</th>
                                        <th>Kurang Sesuai</th>
                                        <th>Sesuai</th>
                                        <th>Sangat Sesuai</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara
                                            yang
                                            tercantum dalam standar pelayanan dengan hasil yang diberikan ? </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_5"
                                                value="Tidak Sesuai"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_5"
                                                value="Kurang Sesuai"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_5"
                                                value="Sesuai">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_5"
                                                value="Sangat Sesuai"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_5"></small>

                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Kompeten</th>
                                        <th>Kurang Kompeten</th>
                                        <th>Kompeten</th>
                                        <th>Sangat Kompeten</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang kopetensi/kemampuan petugas dalam
                                            pelayanan ?
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_6"
                                                value="Tidak Kompeten"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_6"
                                                value="Kurang Kompeten"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_6"
                                                value="Kompeten"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_6"
                                                value="Sangat Kompeten"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_6"></small>

                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Sopan dan Ramah </th>
                                        <th>Kurang Sopan dan Ramah</th>
                                        <th>Sopan dan Ramah</th>
                                        <th>Sangat Sopan dan Ramah</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara prilaku petugas dalam pelayanan terkait
                                            kesopanan dan
                                            keramahan ?</td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_7"
                                                value="Tidak Sopan dan Ramah"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_7"
                                                value="Kurang Sopan dan Ramah"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_7"
                                                value="Sopan dan Ramah"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_7"
                                                value="Sangat Sopan dan Ramah"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_7"></small>

                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Buruk</th>
                                        <th>Cukup</th>
                                        <th>Baik</th>
                                        <th>Sangat Baik</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana ? </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_8"
                                                value="Buruk">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_8"
                                                value="Cukup">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_8"
                                                value="Baik">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_8"
                                                value="Sangat Baik"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_8"></small>

                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Ada </th>
                                        <th>Ada Tapi Tidak Berfungsi </th>
                                        <th>Berfungsi Kurang Maksimal </th>
                                        <th>Dikelola Dengan Baik</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan
                                            ?</td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_9"
                                                value="Tidak Ada	"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_9"
                                                value="Ada Tapi Tidak Berfungsi">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_9"
                                                value="Berfungsi Kurang Maksimal">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_9"
                                                value="Dikelola Dengan Baik"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_9"></small>
                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Ada </th>
                                        <th>Ada Tapi Tidak Berfungsi </th>
                                        <th>Berfungsi Kurang Maksimal </th>
                                        <th>Dikelola Dengan Baik</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang transparansi Pelayanan</td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_10"
                                                value="Tidak Ada	"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_10"
                                                value="Ada Tapi Tidak Berfungsi">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_10"
                                                value="Berfungsi Kurang Maksimal">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_10"
                                                value="Dikelola Dengan Baik"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_10"></small>
                                </tbody>
                                <thead class="table-light fs-custom text-center align-middle">
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <th>Tidak Ada </th>
                                        <th>Ada Tapi Tidak Berfungsi </th>
                                        <th>Berfungsi Kurang Maksimal </th>
                                        <th>Dikelola Dengan Baik</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-custom align-middle">
                                    <tr>
                                        <td>Bagaimana pendapat Saudara tentang Integritas Petugas Pelayanan</td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_11"
                                                value="Tidak Ada	"></td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_11"
                                                value="Ada Tapi Tidak Berfungsi">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_11"
                                                value="Berfungsi Kurang Maksimal">
                                        </td>
                                        <td class="text-center"><input type="radio" name="pertanyaan_11"
                                                value="Dikelola Dengan Baik"></td>
                                    </tr>
                                    <small class="d-block text-danger"id="error-pertanyaan_10"></small>
                                </tbody>
                            </table>
                            <div class="mb-3">
                                <label class="form-label">Saran</label>
                                <textarea class="form-control" id="saran" name="saran" rows="4"
                                    placeholder="Silahkan Masuk Saran atau Kritik Anda..." required></textarea>
                                <small class="d-block text-danger"id="error-saran"></small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="prevStep()">Kembali</button>

                            <button style="position: relative;  display: inline-block;" id="btnLoading"
                                class="btn btn-primary d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Tunggu...
                            </button>
                            <button type="submit" class="btn-default-saran" id="btnSubmit">Kirim
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 16px" viewBox="0 0 24 24"
                                    fill="currentColor" class="size-6">
                                    <path
                                        d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                                </svg>
                            </button>

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script>
        function nextStep() {
            document.getElementById('step-1').classList.add('hidden');
            document.getElementById('step-2').classList.remove('hidden');
            document.getElementById('progress-bar').style.width = "100%";
        }

        function prevStep() {
            document.getElementById('step-2').classList.add('hidden');
            document.getElementById('step-1').classList.remove('hidden');
            document.getElementById('progress-bar').style.width = "50%";
        }

        $(document).ready(function() {
            $('#multiStepForm').submit(async function(e) {
                e.preventDefault();
                loadingsubmit(true, 'btnSubmit', 'btnLoading');

                let param = {
                    url: '/ikm/store',
                    method: 'POST',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false
                }

                await transAjax(param).then((res) => {
                    swal({
                        title: 'Success',
                        text: res.message,
                        icon: 'success',
                        timer: 3000,
                    }).then(() => {
                        loadingsubmit(true, 'btnSubmit', 'btnLoading');
                        window.location.href = '/ikm';
                    });
                }).catch((err) => {
                    loadingsubmit(false, 'btnSubmit', 'btnLoading');
                    if (err.responseJSON && err.responseJSON.errors) {
                        let errors = err.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            let errorElement = $('#error-' + key);
                            if (errorElement.length) {
                                errorElement.html(value[0]);
                            }
                        });
                    } else {
                        swal({
                            text: "Internal Server Error!",
                            icon: 'error',
                        });
                    }
                    swal({
                        text: err.responseJSON.message,
                        icon: 'error',
                    });
                });
            });

            function loadingsubmit(isLoading, btnSubmit, btnLoading) {
                if (isLoading) {
                    $('#' + btnSubmit).addClass('d-none');
                    $('#' + btnLoading).removeClass('d-none');
                } else {
                    $('#' + btnSubmit).removeClass('d-none');
                    $('#' + btnLoading).addClass('d-none');
                }
            }
        });
    </script>
@endpush
