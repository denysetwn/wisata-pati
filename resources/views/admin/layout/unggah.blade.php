@extends('admin.partial.app')
@section('title', 'Unggah')
@section('content')
<div class="wrapper">
  <!--color are available in data-color="purple | azure | green | orange | danger"-->
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
    <div class="logo">
      <a href="dashboard.html" class="simple-text logo-normal">
        Wisata Pati
      </a>
    </div>
    <!-- Sidebar -->
    @include('admin.partial.sidebar')
    <!-- End Sidebar -->
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    @include('admin.partial.navbar')
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Silahkan unggah informasi lokasi wisata</h4>
                <p class="card-category">Anda hanya bisa menggunggah dalam bentuk file exel (.xlsx).</p>
              </div>
              <div class="card-body">
                <input type="file" class="dropify" />
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Masukan Data lokasi Wisata di Pati</h4>
                <p class="card-category">Silahkan masukan data sesuai dengan field dibawah ini.</p>
              </div>
              <div class="card-body">
                <form class="mt-4">
                  <div class="form-group my-2">
                    <label for="exampleFormControlInput1">Dummy 1</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dummy1">
                  </div>
                  <div class="form-group my-2">
                    <label for="exampleFormControlInput2">Dummy 2</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Dummy2">
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-success">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    @include('admin.partial.footer')
    <!-- End Footer -->
  </div>
</div>
<!--   Core JS Files   -->