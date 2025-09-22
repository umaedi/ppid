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
                        <h3 class="mb-0">Buat Details Layanan</h3>
                        <a href="{{ route('cms-layanan', ['subdomain' => config('services.subdomain')]) }}" class="btn btn-primary">
                            <i class='bx bx-arrow-back'></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form id="submitlayanan" enctype="multipart/form-data">
                            @csrf
            
                            <input type="hidden" name="layanan_id" value="{{ $layanan_id ?? '' }}">



                            <div class="mb-3">
                                <label class="form-label" for="instansi_nama">Instansi</label>
                                <input type="text" class="form-control" id="instansi_nama" value="{{$instansi->nama ?? '' }}" readonly>
                                <small class="mt-1 d-block text-danger" id="error-layanan_id"></small>
                            </div>
                        
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama Layanan</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" required />
                                <small class="mt-1 d-block text-danger" id="error-nama"></small>
                            </div>


                            
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="aktif" {{ old('status', $namaLayanan->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="nonaktif" {{ old('status', $namaLayanan->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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
                                <i class='bx bx-paper-plane'></i> Simpan
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
$('#submitlayanan').submit(async function(e) {
    e.preventDefault();
    $('#btnSubmit').hide();
    $('#btnLoading').show();

    let formData = new FormData(this);

    let layananId = $('input[name="layanan_id"]').val();
    if (!layananId) {
        swal("Error", "Layanan ID tidak valid!", "error");
        $('#btnSubmit').show();
        $('#btnLoading').hide();
        return;
    }

    await $.ajax({
        url: '{{ route("cms-layanan-details-store", ['subdomain' => config('services.subdomain')]) }}',
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
               window.location.href = res.redirect_url;      
            });
        },
        error: function(xhr) {
            $('#btnSubmit').show();
            $('#btnLoading').hide();

            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $('.text-danger').html('');
                $.each(errors, function(key, value) {
                    $('#error-' + key).html(value[0]);
                });
            } else if (xhr.status === 400) { 
                swal({
                    text: xhr.responseJSON.message,
                    icon: 'warning',
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

</script>


@endpush
