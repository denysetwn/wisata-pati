@extends('home.partial.app')
@section('content')
@include('home.partial.navbar')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/background.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>Wisata Pati</h1>
          <h3>Selamat Datang di Aplikasi Informasi dan Rekomendasi Tempat Wisata di Kabupaten Pati</h3>
        </div>
      </div>
    </div>
  </div>
</div>
@include('home.partial.footer')
@endsection