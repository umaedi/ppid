@extends('cms.layouts_mpp.app')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/summernote/summernote-bs5.min.css') }}">
<script src="{{ asset('assets/summernote/summernote-bs5.min.js') }}"></script>
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Edit Layanan</h3>
                    <a href="{{ url('/layanan-details/data-show/'. $instansi_id) }}">
                        Kembali
                    </a>
                    
                </div>
                <div class="card-body">
                    <input type="hidden" name="instansi_id" value="{{ $namaLayanan->instansi_id ?? 0 }}">

                    <form id="editLayananForm" 
                        action="{{ route('cms-layanan-details-update', ['subdomain' => config('services.subdomain'), 'id' => $namaLayanan->id ?? 0]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama Layanan</label>
                            <input type="text" name="nama" class="form-control" id="nama" 
                                value="{{ old('nama', $namaLayanan->nama ?? '') }}" required />
                            <small class="mt-1 d-block text-danger" id="error-nama"></small>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="aktif" {{ old('status', $namaLayanan->status ?? '') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="nonaktif" {{ old('status', $namaLayanan->status ?? '') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                    </select>
                                    <small class="mt-1 d-block text-danger" id="error-status"></small>
                                </div>
                            </div>
                        </div>

                        <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Tunggu sebentar yaah...
                        </button>
                        <button id="btnSubmit" type="submit" class="btn btn-primary">
                            <i class='bx bx-save'></i> Perbarui
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#editLayananForm').submit(async function(e) {
        e.preventDefault();
        loadingsubmit(true, 'btnSubmit', 'btnLoading');

        let formData = new FormData(this);
        formData.append('_method', 'PUT');

        await $.ajax({
            url: this.action,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 10000, 
            success: function(res) {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal({
                    title: 'Success',
                    text: res.message,
                    icon: 'success',
                    timer: 3000,
                }).then(() => {
                    window.location.href = res.redirect_url;          
                });
            },


            error: function(xhr) {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');

                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    if (errors.nama) {
                        $('#error-nama').text(errors.nama[0]);
                    }
                    if (errors.status) {
                        $('#error-status').text(errors.status[0]);
                    }
                } else {
                    swal({
                        text: "Terjadi kesalahan pada server!",
                        icon: 'error',
                    });
                }
            }
        });
    });

    function loadingsubmit(isLoading, submitBtn, loadingBtn) {
        $('#' + submitBtn).toggleClass('d-none', isLoading);
        $('#' + loadingBtn).toggleClass('d-none', !isLoading);
    }
});

</script>
@endpush
