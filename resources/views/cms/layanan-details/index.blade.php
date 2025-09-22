@extends('cms.layouts_mpp.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <!-- Card Header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Layanan</h5>
        <a href="{{ route('cms-layanan-details-create', ['subdomain' => config('services.subdomain'), 'instansi_id' => $instansi_id ?? '']) }}" 
            class="btn btn-sm btn-primary">
             <i class='bx bx-list-plus'></i> Tambah Layanan
         </a>         
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Layanan Instansi</th>
                        <th>Status Layanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="dataTable">
                    <tr>
                        <td colspan="3" class="text-center">Loading...</td>
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

// Fungsi untuk memuat tabel via AJAX
function loadTable() {
    let url = '{{ route("cms-layanan-details-show",  ['subdomain' => config('services.subdomain'), "instansi_id" => $instansi_id]) }}'; // Ganti dengan route yang benar
    
    $("#dataTable").html('<tr><td colspan="3" class="text-center">Loading...</td></tr>');

    $.get(url, function(data) {
        $("#dataTable").html(data);
        // console.log(data);
    }).fail(function(xhr) {
        $("#dataTable").html('<tr><td colspan="3" class="text-center text-danger">Gagal memuat data</td></tr>');
    });
}


// Event Delegation untuk Delete
$(document).on('click', '.btn-hapus', function() {
    let id = $(this).data('id');

    swal({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        buttons: ["Batal", "Ya, Hapus!"],
        dangerMode: true,
    }).then((confirmDelete) => {
        if (confirmDelete) {
            let url = '{{ route("cms-layanan-details-delete", ['subdomain' => config('services.subdomain'), "id" => "__ID__"]) }}'
                .replace('__ID__', id);

            $.ajax({
                url: url,
                type: 'DELETE',
                data: { _token: '{{ csrf_token() }}' },
                success: function(res) {
                    swal("Berhasil!", res.message, "success")
                        .then(() => location.reload());
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
