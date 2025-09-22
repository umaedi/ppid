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
                    <h3 class="mb-0">Edit Instansi</h3>
                    <a href="{{ route('cms-instansi', ['subdomain' => config('services.subdomain')]) }}" class="btn btn-primary">
                        <i class='bx bx-arrow-back'></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form id="editInstansiForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama Instansi -->
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama Instansi</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $instansi->nama }}" required/>
                            <small class="mt-1 d-block text-danger" id="error-nama"></small>
                        </div>
                        
                        <!-- Kabupaten -->
                        <div class="mb-3">
                            <label class="form-label" for="kabupaten">Kabupaten</label>
                            <input type="text" name="kabupaten" class="form-control" id="kabupaten" value="{{ $instansi->kabupaten }}" required/>
                            <small class="mt-1 d-block text-danger" id="error-kabupaten"></small>
                        </div>

                        <div class="row">
                            <!-- Status -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="aktif" {{ $instansi->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="nonaktif" {{ $instansi->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                    </select>
                                    <small class="mt-1 d-block text-danger" id="error-status"></small>
                                </div>
                            </div>
                            
                            <!-- Logo -->
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="logo">Logo</label>
                                    <input type="file" name="logo" class="form-control" id="logo" accept="image/*"/>
                                    <small class="mt-1 d-block text-danger" id="error-logo"></small>
                                    <img lazy="loading"
                                    src="{{ route('mpp-instansi', ['filename' => $instansi->logo]) }}"
                                    alt="Logo" class="img-fluid rounded" style="width: 50px; height: auto;">
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
    $('#editInstansiForm').submit(async function(e) {
        e.preventDefault();
        loadingsubmit(true, 'btnSubmit', 'btnLoading');

        let formData = new FormData(this);
        let instansiId = '{{ $instansi->id }}';
        formData.append('instansi_id', instansiId);

        await $.ajax({
            url: '{{ route("cms-instansi-update", ['subdomain' => config('services.subdomain'), "id" => $instansi->id]) }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(res) {
                swal({
                    title: 'Success',
                    text: 'Instansi berhasil diperbarui!',
                    icon: 'success',
                    timer: 3000,
                }).then(() => {
                    window.location.href = '{{ route("cms-instansi", ['subdomain' => config('services.subdomain')]) }}';
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
                        text: "Internal Server Error!",
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