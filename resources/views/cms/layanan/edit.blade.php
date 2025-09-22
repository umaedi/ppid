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
                    <a href="{{ route('cms-layanan', ['subdomain' => config('services.subdomain')]) }}" class="btn btn-primary">
                        <i class='bx bx-arrow-back'></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form id="editLayananForm" action="{{ route('cms-layanan-update', ['subdomain' => config('services.subdomain'), 'id' => $layanan->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       
                        <div class="mb-3">
                            <label class="form-label" for="instansi_id">Instansi</label>
                            <select name="instansi_id" id="instansi_id" class="form-control" required>
                                <option value="">-- Pilih Instansi --</option>
                                @foreach ($instansis as $instansi)
                                    <option value="{{ $instansi->id }}" {{ $layanan->instansi_id == $instansi->id ? 'selected' : '' }}>{{ $instansi->nama }}</option>
                                @endforeach
                            </select>
                            <small class="mt-1 d-block text-danger" id="error-instansi_id"></small>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="aktif" {{ $layanan->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="nonaktif" {{ $layanan->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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
    $('#editLayananForm').submit(async function(e) {
        e.preventDefault();
        loadingsubmit(true, 'btnSubmit', 'btnLoading');

        let formData = new FormData(this);

        await $.ajax({
            url: this.action,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(res) {
                swal({
                    title: 'Success',
                    text: res.message,
                    icon: 'success',
                    timer: 3000,
                }).then(() => {
                    window.location.href = '{{ route("cms-layanan", ['subdomain' => config('services.subdomain')]) }}';
                });
            },
            error: function(xhr) {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $('.text-danger').html('');
                    $.each(errors, function(key, value) {
                        $('#error-' + key).html(value[0]);
                    });
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
</script>
@endpush
