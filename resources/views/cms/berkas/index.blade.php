@extends('cms.layouts.app')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Form unggah berkas</h5>
                    </div>
                    <div class="card-body">
                        <form id="formBerkas">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label for="nama_berkas">Nama berkas</label>
                                        <input type="text" id="nama_berkas" name="nama_berkas"
                                            placeholder="Pengumuman CPNS 2025" class="form-control">
                                        <small class="mt-1 d-block text-danger"id="error-nama_berkas"></small>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label for="berkas">Pilih Berkas</label>
                                        <input type="file" id="berkas" name="berkas" class="form-control"
                                            accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.jpg,.jpeg,.png">
                                        <small class="mt-1 d-block text-danger"id="error-berkas"></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="halaman_id">Pilih Halaman (opsional)</label>
                                        <select name="halaman_id" id="halamanId" class="form-select select2">
                                            <option value="" selected>-- pilih halaman --</option>
                                            @foreach ($halamans as $halaman)
                                                <option value="{{ $halaman->id }}">{{ $halaman->judul }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Tunggu sebentar yaah...
                            </button>
                            <button id="btnSubmit" type="submit" class="btn btn-primary d-flex align-items-center gap-1"><i
                                    class='bx bx-upload'></i>
                                Unggah</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Daftar berkas</h5>
                    </div>
                    <div class="card-body">
                        <div id="dataTable"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container top-0 end-0 p-3">
            <div id="toastSalinTautan" class="toast align-items-center bg-info" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        Tautan berhasil disalin!
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        let id_berkas = "";
        let search = '';
        let page = 1;
        $(document).ready(function() {
            loadTable();

            $('.select2').select2({
                theme: 'bootstrap4',
            });

            $('#search').on('keypress', function(e) {
                if (e.which == 13) {
                    filterTable();
                    return false;
                }
            });

        });

        function filterTable() {
            search = $('#search').val();
            loadTable();
        }

        async function loadTable() {
            let param = {
                url: "{{ url()->current() }}",
                method: "GET",
                data: {
                    load: 'table',
                    search: search,
                    page: page,
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            });
        }

        $("#formBerkas").submit(async function(e) {
            e.preventDefault();
            loadingsubmit(true, 'btnSubmit', 'btnLoading');

            if (id_berkas) {
                var _url = '/cms/berkas/update/' + id_berkas;
            } else {
                var _url = '/cms/berkas/store';
            }

            console.log(id_berkas);

            let param = {
                url: _url,
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false
            }

            await transAjax(param).then((result) => {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal({
                    title: 'Success',
                    text: result.message,
                    icon: 'success',
                    timer: 3000,
                });
                loadTable();
                $('#nama_berkas').val('');
                $('#berkas').val('');
            }).catch((err) => {
                loadingsubmit(false, 'btnSubmit', 'btnLoading');
                swal({
                    title: "Opps!",
                    text: err.responseJSON.message,
                    icon: 'error',
                });
                if (err.responseJSON && err.responseJSON.errors) {
                    let errors = err.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        let errorElement = $('#error-' + key);
                        if (errorElement.length) {
                            errorElement.html(value[0]);
                        }
                    });
                } else {
                    loadingsubmit(false, 'btnSubmit', 'btnLoading');
                    swal({
                        text: "Internal Server Error!",
                        icon: 'error',
                    });
                }
            });
        });

        // updateKategori ada di views/cms/kategori/_data_table baris ke 7
        function updateBerkas(id, nama_berkas) {
            id_berkas = id;
            $('#nama_berkas').val(nama_berkas);
            $('#btnSubmit').html("<i class='bx bx-paper-plane'></i> Simpan perubahan");
        }

        async function hapusBerkas(id) {
            const willDelete = await swal({
                title: "Yakin?",
                text: "Beneran nih mau dihapus?",
                icon: "warning",
                dangerMode: true,
            });

            if (willDelete) {
                let param = {
                    url: '/cms/berkas/hapus/' + id,
                    method: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                }

                await transAjax(param).then((result) => {
                    loadTable();
                    swal("Dihapus!", "Data ini berhasil dihapus", "success");
                }).catch((error) => {
                    swal("Opps!", "Internal server error!", "warning");
                });
            }
        }

        function salinTautan(berkas) {
            let link = "{{ route('dokumen', '__BERKAS__') }}".replace('__BERKAS__', berkas);

            navigator.clipboard.writeText(link).then(() => {
                const toastElement = document.getElementById('toastSalinTautan');
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastElement);
                toastBootstrap.show();
            }).catch(err => {
                console.error("Gagal menyalin teks", err);
            });
        }

        function loadPaginate(to) {
            page = to
            filterTable()
        }
    </script>
@endpush
