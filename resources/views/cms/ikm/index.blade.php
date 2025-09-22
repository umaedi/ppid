@extends('cms.layouts.app')
@push('css')
    <style>
        .nilai-ikm {
            border: 2px solid #696cff;
            color: #ffffff;
            font-size: 50px;
            font-weight: bold;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-3">
                    <h5 class="card-header">NIALI IKM </h5>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="nilai-ikm col-md-4 d-flex align-items-center justify-content-center">
                                <h2 class="fw-bold">91,29</h2>
                            </div>
                            <div class="nilai-ikm col-md-8 d-flex align-items-center justify-content-center" style="height: 300px;">
                                <canvas id="chartPie"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">List indeks kepuasan masyarakat</h5>
                    </div>
                    <div class="card-body">
                        <div id="dataTable"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title " id="detailModalLabel">Detail Data Indeks Kepuasan Masyarakat</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead class="text-center bg-light">
                            <tr>
                                <th colspan="2"><strong class="fs-6">Data Pengguna</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-4"><strong>Nama:</strong></td>
                                <td><span id="detailNama"></span></td>
                            </tr>
                            <tr>
                                <td><strong>No HP:</strong></td>
                                <td><span id="detailNoHp"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Jenis Kelamin:</strong></td>
                                <td><span id="detailJenisKelamin"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Jenis Layanan:</strong></td>
                                <td><span id="detailJenisLayanan"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Alamat:</strong></td>
                                <td><span id="detailAlamat"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pekerjaan:</strong></td>
                                <td><span id="detailPekerjaan"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pendidikan:</strong></td>
                                <td><span id="detailPendidikan"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <table class="table table-bordered">
                        <thead class="text-center bg-light">
                            <tr>
                                <th colspan="2"><strong class="fs-6">Pertanyaan</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-4"><strong>Pertanyaan 1:</strong></td>
                                <td><span id="detailPertanyaan1"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 2:</strong></td>
                                <td><span id="detailPertanyaan2"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 3:</strong></td>
                                <td><span id="detailPertanyaan3"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 4:</strong></td>
                                <td><span id="detailPertanyaan4"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 5:</strong></td>
                                <td><span id="detailPertanyaan5"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 6:</strong></td>
                                <td><span id="detailPertanyaan6"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 7:</strong></td>
                                <td><span id="detailPertanyaan7"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 8:</strong></td>
                                <td><span id="detailPertanyaan8"></span></td>
                            </tr>
                            <tr>
                                <td><strong>Pertanyaan 9:</strong></td>
                                <td><span id="detailPertanyaan9"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p><strong>Saran:</strong> <span id="detailSaran"></span></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        var search = '';
        var page = 1;
        $(document).ready(function() {
            loadTable();

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
                url: '{{ url()->current() }}',
                method: 'GET',
                data: {
                    load: 'table',
                    search: search,
                    page: page,
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            }).catch((error) => {
                console.log(error);
            });
        }

        function loadPaginate(to) {
            page = to
            filterTable()
        }
        async function loadTable() {
            let param = {
                url: '{{ url()->current() }}',
                method: 'GET',
                data: {
                    load: 'table'
                }
            }

            await transAjax(param).then((result) => {
                $("#dataTable").html(result);
            }).catch((error) => {
                console.log(error);
            });
        }

        async function hapusIkm(id) {
            const willDelete = await swal({
                title: "Yakin?",
                text: "Apakah Anda yakin untuk mengahpus data ini?",
                icon: "warning",
                dangerMode: true,
            });

            if (willDelete) {
                let param = {
                    url: '/cms/ikm/hapus/' + id,
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


        function lihatDetail(nama, no_hp, jenis_kelamin, jenis_layanan, alamat, saran, pekerjaan, pendidikan,
            pertanyaan_1, pertanyaan_2, pertanyaan_3, pertanyaan_4,
            pertanyaan_5, pertanyaan_6, pertanyaan_7, pertanyaan_8, pertanyaan_9) {
            document.getElementById('detailNama').innerText = nama;
            document.getElementById('detailNoHp').innerText = no_hp;
            document.getElementById('detailJenisKelamin').innerText = jenis_kelamin;
            document.getElementById('detailJenisLayanan').innerText = jenis_layanan;
            document.getElementById('detailAlamat').innerText = alamat;
            document.getElementById('detailSaran').innerText = saran;
            document.getElementById('detailPekerjaan').innerText = pekerjaan;
            document.getElementById('detailPendidikan').innerText = pendidikan;



            // Menampilkan pertanyaan 1 - 9 di dalam modal
            document.getElementById('detailPertanyaan1').innerText = pertanyaan_1;
            document.getElementById('detailPertanyaan2').innerText = pertanyaan_2;
            document.getElementById('detailPertanyaan3').innerText = pertanyaan_3;
            document.getElementById('detailPertanyaan4').innerText = pertanyaan_4;
            document.getElementById('detailPertanyaan5').innerText = pertanyaan_5;
            document.getElementById('detailPertanyaan6').innerText = pertanyaan_6;
            document.getElementById('detailPertanyaan7').innerText = pertanyaan_7;
            document.getElementById('detailPertanyaan8').innerText = pertanyaan_8;
            document.getElementById('detailPertanyaan9').innerText = pertanyaan_9;

            var myModal = new bootstrap.Modal(document.getElementById('detailModal'));
            myModal.show();
        }

        const ctx = document.getElementById('chartPie').getContext('2d');

            // Data pendidikan responden
            const data = {
                labels: ['SMP', 'SMA', 'D3', 'S1', 'S2', 'S3', 'Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah Responden Berdasarkan Pendidikan',
                    data: [80, 100, 60, 90, 30, 10, 0, 0], // Data pendidikan
                    backgroundColor: ['#e74c3c', '#3498db', '#f1c40f', '#2ecc71', '#9b59b6', '#e67e22', '#34495e', '#000'],
                    borderColor: '#ffffff',
                    borderWidth: 2,
                    hoverOffset: 10
                }, {
                    label: 'Jumlah Responden Berdasarkan Jenis Kelamin',
                    data: [0, 0, 0, 0, 0, 0, 180, 140], // Data jenis kelamin
                    backgroundColor: ['#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#2980b9', '#e91e63'],
                    borderColor: '#ffffff',
                    borderWidth: 2,
                    hoverOffset: 10
                }]
            };


            // Membuat chart dengan event hooks pada legend
            const chartPie = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                usePointStyle: true
                            },
                            onHover: function(event, legendItem) {
                                const datasetIndex = legendItem.datasetIndex;
                                const index = legendItem.index;
                                chartPie.setActiveElements([{ datasetIndex, index }]);
                                chartPie.update();
                            },
                            onLeave: function() {
                                chartPie.setActiveElements([]);
                                chartPie.update();
                            }
                        }
                    }
                }
            });
    </script>
@endpush
