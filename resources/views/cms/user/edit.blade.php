@extends('cms.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <form id="formPengaturan">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Ganti Password</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mt-3">
                                <label for="">Password Baru</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Konfirmasi Password Baru</label>
                                <input type="text" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Tunggu sebentar yaah...
            </button>
            <button id="btnSubmit" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan
                perubahan</button>
        </form>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('#formPengaturan').submit(async function(e) {
            e.preventDefault();

            let formData = new FormData(this);
            let param = {
                url: '/cms/user/update-password',
                method: "POST",
                processData: false,
                contentType: false,
                data: formData
            }

            loadingsubmit(true, 'btnSubmit', 'btnLoading');
            await transAjax(param).then((result) => {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal("Berhasil!", "Data berhasil disimpan", "success");
                $('#formPengaturan')[0].reset();
            }).catch((error) => {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal("Opps!", error.responseJSON.message, "warning");
            });
        });
    </script>
@endpush
