@extends('admin.partial.app')
@section('title', 'Dashboard')
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
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">location_on</i>
                </div>
                <p class="card-category">Ilham Ganteng Location</p>
                <h3 class="card-title">Terdapat 16 Lokasi Wisata</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">local_offer</i> Lokasi Wisata Daerah Pati
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Daftar lokasi wisata</h4>
                <p class="card-category">Berikut daftar lokasi wisata daerah Pati</p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-primary">
                    <th>Nomer</th>
                    <th>Nama</th>
                    <th>Daerah</th>
                    <th>Rating</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Sarkem</td>
                      <td>Nigeria</td>
                      <td>
                        <i class="material-icons text-warning align-middle">star</i>
                        <span>5</span>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Sarkem</td>
                      <td>Nigeria</td>
                      <td>
                        <i class="material-icons text-warning align-middle">star</i>
                        <span>5</span>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sarkem</td>
                      <td>Nigeria</td>
                      <td>
                        <i class="material-icons text-warning align-middle">star</i>
                        <span>5</span>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Sarkem</td>
                      <td>Nigeria</td>
                      <td>
                        <i class="material-icons text-warning align-middle">star</i>
                        <span>5</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
@endsection