@extends('webmpp.layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <nav class="breadcrumbs">
              <h1>Antrian</h1>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Antrian</li>
          </ol>
          <p id="datetime"></p>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->
    <section>
      <div class="container">
          <h3>Silahkan Pilih Jenis Layanan</h3>
          <p>Antrian - Dinas Kependudukan dan Catatan Sipil</p>
          <label for="layanan">Layanan Instansi:</label>
          <select id="layanan">
              <option>- Pilih Layanan -</option>
              <option value="ktp">Pembuatan KTP</option>
              <option value="kk">Pembuatan Kartu Keluarga</option>
              <option value="akta">Pembuatan Akta Kelahiran</option>
          </select>
          <br>
         
      <a href="nomer-antrian">
          <button  onclick="ambilAntrian() ">AMBIL ANTRIAN</button>
      </a>
      </div>
      <script>
          function updateDateTime() {
              const now = new Date();
              const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
              document.getElementById("datetime").innerText = now.toLocaleDateString('id-ID', options);
          }
          setInterval(updateDateTime, 1000);
          updateDateTime();
  
          function ambilAntrian() {
              const layanan = document.getElementById("layanan").value;
              if (layanan === "- Pilih Layanan -") {
                  alert("Silakan pilih layanan terlebih dahulu!");
              } else {
                  alert("Antrian untuk " + layanan + " berhasil diambil!");
              }
          }
      </script>
      </section>
@endsection