@extends('cms.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Buat domain</h5>
            </div>
            <div class="card-body">
                <form id="kategoriSubmit">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="nama_domain">Nama domain</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="nama_domain" name="nama_domain" class="form-control">
                                    <span class="input-group-text" id="basic-addon2">.tulangbawangkab.go.id</span>
                                  </div>
                                <small class="mt-1 d-block text-danger"id="error-nama_domain"></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Tidak aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button id="btnLoading" class="btn btn-primary d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Tunggu sebentar yaah...
                    </button>
                    <button id="btnSubmit" type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i>  Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header">
        <h5 class="mb-0">{{ $title }}</h5>
        </div>
          <div class="card-body">
            <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama domain</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody id="dataTable">
                  
                </tbody>
              </table>
          </div>
        </div>
    </div>
@endsection
@push('js')
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
        let id_domain = "";
        $(document).ready(function() {
            loadTable();
        });

        async function loadTable()
        {
            let param = {
                url: "{{ url()->current() }}",
                method: "GET",
                data: {
                    load: 'table'
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            });
        }
        
        $("#kategoriSubmit").submit(async function(e) {
            e.preventDefault();
            loadingsubmit(true,'btnSubmit', 'btnLoading');

            //cek apakah id_kategori ada, jika ada arahakan url untuk update kategori
            //id_kategori di set pada function updateKategori baris 127
            if(id_domain) {
               var _url = '/cms/domain/update/'+id_domain;
            }else {
                var _url = '/cms/domain/store';
            }

            let param = {
                url: _url,
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false
            }

            await transAjax(param).then((result) => {
                loadingsubmit(false,'btnSubmit', 'btnLoading');
                swal({
                title: 'Berhasil',
                text: result.message,
                icon: 'success',
                timer: 3000,
                });
                loadTable();
                $('#nama_domain').val('');
            }).catch((err) => {
                loadingsubmit(false,'btnSubmit', 'btnLoading');
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
                        loadingsubmit(false,'btnSubmit', 'btnLoading');
                        swal({
                        title: 'Oppss',
                        text: err.responseJSON.message,
                        icon: 'error',
                    });
                }
            });
        });

        // updateKategori ada di views/cms/kategori/_data_table baris ke 7
        function updateDomain(id, nama_domain)
        {
            id_domain = id;
            let domain = nama_domain.split('.')[0];
            $('#nama_domain').val(domain);
            $('#btnSubmit').html("<i class='bx bx-paper-plane'></i> Update");
        }

        async function hapusDomain(id)
        {
            const willDelete = await swal({
            title: "Yakin?",
            text: "Apakah Anda yakin untuk mengahpus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                let param = {
                url: '/cms/domain/hapus/'+id,
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
    </script>
@endpush