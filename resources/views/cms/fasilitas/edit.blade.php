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
            <h3 class="mb-0">Edit Fasilitas</h3>
            <a href="{{ route('cms-fasilitas', ['subdomain' => request()->subdomain]) }}" class="btn btn-primary">
                <i class='bx bx-arrow-back'></i> Kembali
            </a>            
          </div>
          <div class="card-body">
            <form id="submitFasilitas" enctype="multipart/form-data" method="POST" action="{{ route('cms-fasilitas-update', ['subdomain' => request()->subdomain, 'id' => $fasilitas->id]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label" for="judul_fasilitas">Judul Fasilitas</label>
                  <input type="text" name="judul_fasilitas" id="judul_fasilitas" class="form-control" value="{{ $fasilitas->judul_fasilitas }}" required>
                  <small class="mt-1 d-block text-danger" id="error-judul_fasilitas"></small>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="deskripsi_fasilitas">Deskripsi</label>
                  <textarea name="deskripsi_fasilitas" id="deskripsi_fasilitas" class="form-control" required>{{ $fasilitas->deskripsi_fasilitas }}</textarea>
                  <small class="mt-1 d-block text-danger" id="error-deskripsi_fasilitas"></small>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="logo">Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                            <small class="mt-1 d-block text-danger" id="error-logo"></small>
                            <img lazy="loading"
                                    src="{{ route('mpp-fasilitas', ['filename' => $fasilitas->logo]) }}"
                                    alt="Logo" class="img-fluid rounded" style="width: 50px; height: auto;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="aktif" {{ $fasilitas->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ $fasilitas->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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
                    <i class='bx bx-save'></i> Simpan Perubahan
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
    $('#submitFasilitas').submit(async function(e) {
        e.preventDefault();
        loadingsubmit(true, 'btnSubmit', 'btnLoading');

        let formData = new FormData(this);

        await $.ajax({
            url: '{{ route("cms-fasilitas-update", ['subdomain' => request()->subdomain, 'id' => $fasilitas->id]) }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(res) {
                swal({
                    title: 'Success',
                    text: 'Fasilitas berhasil diperbarui!',
                    icon: 'success',
                    timer: 3000,
                }).then(() => {
                    window.location.href = '{{ route("cms-fasilitas", ['subdomain' => request()->subdomain]) }}';
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
        if (isLoading) {
            $('#' + submitBtn).addClass('d-none');
            $('#' + loadingBtn).removeClass('d-none');
        } else {
            $('#' + submitBtn).removeClass('d-none');
            $('#' + loadingBtn).addClass('d-none');
        }
    }
</script>
@endpush
