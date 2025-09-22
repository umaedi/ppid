@extends('web.layouts.app')

@push('css')
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="header-saran">
            <h3 class="text-center mt-5">Saran dan Aduan <i class="fas fa-comment-dots fa-2x text-center"
                    style="color:#114A43;"></i></h3>
            <p class="text-center">Kami sangat menghargai setiap saran dan aduan yang Anda berikan. Silahkan tinggalkan
                saran
                atau aduan Anda di bawah ini.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container-saran">
                    <h5 class="text-center mb-2">Tinggalkan Saran atau Aduan</h5>
                    <form id="submitSaran">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Nama Anda</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan Nama Anda">
                                <small class="d-block text-danger"id="error-nama"></small>

                            </div>
                            <div class="col-md-6">
                                <label class="form-label">KTP/Passport</label>
                                <input type="number" name="ktp" id="ktp" class="form-control"
                                    placeholder="Masukkan KTP/Passport">
                                <small class="d-block text-danger"id="error-ktp"></small>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Masukkan e-mail anda">
                                <small class="d-block text-danger"id="error-email"></small>

                            </div>
                            <div class="col-md-6">
                                <label class="form-label">No Handphone</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control"
                                    placeholder="Masukkan no Handphone">
                                <small class="d-block text-danger"id="error-no_hp"></small>

                            </div>
                        </div>

                        <h5 class="text-center mt-4 mb-2">Pilih Jenis Saran/aduan/pertanyaan Serta Pelayanan yang dituju
                        </h5>

                        <div class="mb-3">
                            <label class="form-label">Jenis Saran/Aduan</label>
                            <select name="jenis" id="jenis" class="form-control" required>
                                <option value="Saran" {{ old('jenis') == 'Saran' ? 'selected' : '' }}>Saran</option>
                                <option value="Aduan" {{ old('jenis') == 'Aduan' ? 'selected' : '' }}>Aduan</option>
                                <option value="Pertanyaan" {{ old('jenis') == 'Pertanyaan' ? 'selected' : '' }}>Pertanyaan
                                </option>
                            </select>
                            <small class="d-block text-danger"id="error-jenis"></small>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pelayanan yang Ditujukan</label>
                            <select name="pelayanan" id="pelayanan" class="form-select" required>
                                <option value="Pendaftaran RSUD Menegala"
                                    {{ old('pelayanan') == 'Pendaftaran RSUD Menegala' ? 'selected' : '' }}>Pendaftaran
                                    RSUD Menegala</option>
                                <option value="Instalansi Gawat Darurat"
                                    {{ old('pelayanan') == 'Instalansi Gawat Darurat' ? 'selected' : '' }}>Instalansi Gawat
                                    Darurat</option>
                                <option value="Poli Rawat Jalan"
                                    {{ old('pelayanan') == 'Poli Rawat Jalan' ? 'selected' : '' }}>Poli Rawat Jalan
                                </option>
                                <option value="Instalansi Rawat Inap"
                                    {{ old('pelayanan') == 'Instalansi Rawat Inap' ? 'selected' : '' }}>Instalansi Rawat
                                    Inap</option>
                                <option value="Manajemen RSUD Menggala"
                                    {{ old('pelayanan') == 'Manajemen RSUD Menggala' ? 'selected' : '' }}>Manajemen RSUD
                                    Menggala</option>
                            </select>
                            <small class="mt-1 d-block text-danger"id="error-pelayanan"></small>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Komentar</label>
                            <textarea name="komentar" id="komentar" class="form-control" rows="4"
                                placeholder="Tulis komentar Anda di sini..."></textarea>
                            <small class="d-block text-danger"id="error-komentar"></small>

                        </div>

                        <div class="d-flex justify-content-center">
                            <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Tunggu...
                            </button>
                            <button type="submit" id="btnSubmit" class="btn-default-saran me-2">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
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

@push('js')
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script>
        $('#submitSaran').submit(async function(e) {
            e.preventDefault();
            loadingsubmit(true, 'btnSubmit', 'btnLoading');

            let param = {
                url: '/saran/store',
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
                    window.location.href = '/saran';
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
    </script>
@endpush
