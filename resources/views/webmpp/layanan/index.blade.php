@extends('webmpp.layouts.app')
@section('content')
  <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <nav class="breadcrumbs">
              <h1>Layanan</h1>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Layanan</li>
          </ol>
          <p id="datetime"></p>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->
  
      <section>
          <div class="container">
              <div class="cardLayanan">
                  <div class="header">
                      <img lazy="loading" src="https://tulangbawangkab.go.id/img/logo/favicon.png" alt="Logo" width="40px">
                      <div>
                          <strong>Dinas Kependudukan dan Catatan Sipil</strong><br>
                          <small>Login terakhir: 2025-02-13 08:40:17</small>
                      </div>
                  </div>
                  <div class="stats">
                      <div>
                          <strong>Hari Ini</strong><br>
                          -
                      </div>
                      <div>
                          <strong>Total 2024</strong><br>
                          2001
                      </div>
                      <div>
                          <strong>Total Antrian</strong><br>
                          3332
                      </div>
                      <div>
                          <strong>&sum; IKM</strong><br>
                          1384
                      </div>
                      <div>
                          <strong>% IKM</strong><br>
                          69%
                      </div>
                      <div>
                          <strong>Persentase</strong><br>
                          8%
                      </div>
                      <a href="#" class="btn btn-success">Lihat IKM</a>
                  </div>
              </div>
      
              <div class="cardLayanan">
                  <h2>Jenis izin yang dilayani</h2>
                  <strong>Dinas Kependudukan dan Catatan Sipil</strong>
                  <ul class="list">
                      <li>Penerbitan Kartu Tanda Penduduk Online</li>
                      <li>Pengajuan Penerbitan KIA Baru</li>
                  </ul>
              </div>
          </div>
      </section>
@endsection