<!-- @extends('web.layouts.app') -->
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Puskesmas</h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row col-lg-12 col-md-12">

                <div class="col-lg-12" id="dataTable">

                </div>
            </div>
        </div>
    </div>
    <!-- Page Project End -->

    <!-- Sidebar Start -->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" id="closeSidebarBtn">&times;</a>
        <div class="container text-white">
            <h5 id="subdomain-name" class="text-white mb-3"></h5>
            <img class="mb-3" id="photo_kepala_opd" src="" 
            style="width: 200px; height: 200px; border-radius: 10px; object-fit: contain; display: block; margin: 0 auto; background-color: #f0f0f0;">
            <div class="mb-3">
                <p id="kepala-dinas" class="mb-0">Kepala Dinas: </p>
                <p id="sek-dinas" class="mb-0">Sek. Dinas: </p>
            </div>
            <div class="mb-3">
                <h6 class="text-white">Kontak</h6>
                <p id="telp" class="mb-0"></p>
                <p id="email" class="mb-0"></p>
            </div>
            <div class="mb-3">
                <h6 class="text-white">Alamat</h6>
                <p id="alamat"></p>
            </div>
           <a id="website-link" class="btn-default-two btn-signup">
                <span class="fs-6 text-black">Kunjungi Website</span>
            </a>

        </div>
    </div>
    <!-- Sidebar End -->

    
@endsection
@push('js')
    <script type="text/javascript">
        function openSidebar(event, opdId) {
            document.getElementById('sidebar').classList.add('open-sidebar');
            document.addEventListener('click', outsideClickListener);
            event.stopPropagation();
            showDetailPuskesmas(opdId);
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open-sidebar');
            document.removeEventListener('click', outsideClickListener);
        }

        function outsideClickListener(event) {
            const sidebar = document.getElementById('sidebar');
            if (!sidebar.contains(event.target) && !event.target.classList.contains('openSidebarBtn')) {
                closeSidebar();
            }
        }

        if ($(".project-item-boxes").length) {

            /* Init Isotope */
            var $menuitem = $(".project-item-boxes").isotope({
                itemSelector: ".project-item-box",
            });

            /* Filter items on click */
            var $menudisesnav = $(".project-nav li a");
            $menudisesnav.on('click', function(e) {

                var filterValue = $(this).attr('data-filter');
                $menuitem.isotope({
                    filter: filterValue
                });

                $menudisesnav.removeClass("active-btn");
                $(this).addClass("active-btn");
                e.preventDefault();
            });
            $menuitem.isotope({
                filter: "*"
            });
        }

        $('#dataTable').html(make_skeleton());
        $(document).ready(function() {
            loadTable();

            document.getElementById('closeSidebarBtn').onclick = function() {
                closeSidebar();
            };
        });

        async function loadTable() {
            var param = {
                url: '{{ url()->current() }}',
                method: 'GET',
                data: {
                    load: 'table',
                }
            }

            await transAjax(param).then((result) => {
                $('#dataTable').html(result);
            }).catch((err) => {
                console.log(err);
            })
        }

        function make_skeleton() {
            var output = '';
            for (var count = 0; count < 3; count++) {
                output += '<h5 class="card-title placeholder-glow">';
                output += '<span class="placeholder col-6"></span>';
                output += '</h5>';
                output += '<p class="card-text placeholder-glow">';
                output += '<span class="placeholder col-7"></span>';
                output += '</p>';
            }
            return output;
        }

        // Saya menambahkan fungsi ini author by:Fadil
        async function showDetailPuskesmas(opdId) {
            try {   
                const response = await fetch(`/opd/${opdId}/detail`);
                const data = await response.json();

                if (response.ok) {
                    document.getElementById('subdomain-name').innerText = data.nama_opd;
                    document.getElementById('kepala-dinas').innerText = 'Kepala Dinas: ' + data.nama_kepala_opd;
                    document.getElementById('sek-dinas').innerText = 'Sek. Dinas: ' + data.nama_kepala_opd;
                    document.getElementById('telp').innerText = 'Telp. ' + data.no_tlp;
                    document.getElementById('email').innerText = 'Email. ' + data.email;
                    document.getElementById('alamat').innerText = data.alamat;
                    const imgElement = document.getElementById('photo_kepala_opd');
                        // imgElement.src = `/photo-pimpinan/${data.photo_kepala_opd}`;
                    imgElement.src = data.photo_kepala_opd;
                    imgElement.onerror = function() {
                        console.log("Gagal memuat gambar:", data.photo_kepala_opd);
                    };

                    // Link web pada sidebar untuk mengunjungi website OPD yang terkait
                    const subdomainName = data.subdomain;
                    const websiteUrl = `https://${subdomainName}.tulangbawangkab.go.id`;
                    document.getElementById('website-link').setAttribute('href', websiteUrl);
                } else {
                    // alert(data.message || 'Gagal mengambil data.');
                    console.error(data.message || 'Gagal mengambil data.');
                }
            } catch (error) {
                // alert('Terjadi kesalahan, coba lagi.');
            }
        }
        // End
    </script>
    
@endpush