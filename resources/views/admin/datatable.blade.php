<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Wisata Pati
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.0.1/b-html5-2.0.1/sc-2.0.5/datatables.min.css"/>
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/vendor/dropify/dropify.min.css">
</head>

<body>
  <div class="wrapper">
     <!--color are available in data-color="purple | azure | green | orange | danger"-->
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
      <div class="logo">
        <a href="dashboard.html" class="simple-text logo-normal">
          Wisata Pati
        </a>
      </div>
      <!-- Sidebar -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboardAdmin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('uploadInformation')}}">
              <i class="material-icons">file_upload</i>
              <p>Unggah Informasi</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('dataTable')}}">
              <i class="material-icons">file_upload</i>
              <p>DataTable</p>
            </a>
          </li>
        </ul>
      </div>
      <!-- End Sidebar -->
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">DataTable</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">help</i>
                  <p class="d-lg-none d-md-block">
                    Help
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Notifikasi
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Akun Anda
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{route('/')}}">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">DataTable Example</h4>
                        <p class="card-category">This is data table example.</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover" id="dataTable">
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
                                    <td>Indon</td>
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
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <p>
                    Deny Setiawan
                </p>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> , Deny Setiawan. All Right Reserved
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/vendor/dropify/dropify.min.js"></script>
  <!-- Datatable Plugin -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.0.1/b-html5-2.0.1/sc-2.0.5/datatables.min.js"></script>
  <!-- Js for this table screen -->
  <script src="../assets/js/dataTable.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js" type="text/javascript"></script>
  <script>
      (function($) {
  'use strict';
  $('.dropify').dropify();
})(jQuery);
  </script>
</body>

</html>