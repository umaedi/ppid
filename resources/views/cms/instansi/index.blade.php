@extends('cms.layouts_mpp.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <!-- Card Header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Instansi</h5>
        <a href="/cms/instansi/create" class="btn btn-primary">
            <i class='bx bx-plus'></i> Tambah Instansi
        </a>
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Logo</th>
                        <th>Nama Instansi</th>
                        <th>Kabupaten</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="dataTable">
                    <tr>
                        <td colspan="6" class="text-center">Loading...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script>
$(document).ready(function() {
    loadTable();
});

// Load Data Instansi via AJAX
function loadTable() {
    let url = '{{ route("cms-instansi", ['subdomain' => config('services.subdomain')]) }}'; 
    $("#dataTable").html('<tr><td colspan="6" class="text-center">Loading...</td></tr>');

    $.get(url, function(data) {
        $("#dataTable").html(data);
    }).fail(function() {
        $("#dataTable").html('<tr><td colspan="6" class="text-center text-danger">Gagal memuat data</td></tr>');
    });
}

// Event Delegation untuk Delete
$(document).on('click', '.btn-hapus', function() {
    let id = $(this).data('id');
    let subdomain = "{{ config('services.subdomain') }}";


    swal({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        buttons: ["Batal", "Ya, Hapus!"],
        dangerMode: true,
    }).then((confirmDelete) => {
        if (confirmDelete) {
            let url = '{{ route("cms-instansi-delete", ["subdomain" => "__SUBDOMAIN__", "id" => "__ID__"]) }}'
                .replace('__SUBDOMAIN__', subdomain)
                .replace('__ID__', id);
            
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function(res) {
                    swal("Berhasil!", "Instansi telah dihapus.", "success")
                        .then(() => loadTable());
                },
                error: function(xhr) {
                    swal("Oops!", "Terjadi kesalahan, coba lagi nanti.", "error");
                }
            });
        }
    });
});
</script>
@endpush
