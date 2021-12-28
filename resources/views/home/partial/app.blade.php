<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/Logo_Kabupaten_Pati.png">
    <link rel="icon" type="image/png" href="./assets/img/Logo_Kabupaten_Pati.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') - gagego
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.0.1/b-html5-2.0.1/sc-2.0.5/datatables.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
</head>

<body>
    @yield('content')
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js" type="text/javascript"></script>
    <!-- Datatable Plugin -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.0.1/b-html5-2.0.1/sc-2.0.5/datatables.min.js"></script>
    <!-- Js for this table screen -->
    <script src="../assets/js/dataTable.js"></script>
    <script>
        (function($) {
            'use strict';
            $('.dropify').dropify();
        })(jQuery);
    </script>
</body>

</html>