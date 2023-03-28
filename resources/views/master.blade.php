<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layout.navbar')
        @include('layout.sidebar')
        <div class="content-wrapper">
          <section class="content">
            <div class="container-fluid">
              @yield('pengalaman')
            </div>
          </section>
            <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              @yield('contact')
              @yield('selamat')
              @yield('aldinprofile')
              @yield('kholidprofile')
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
          </section>
        </div>
        </div>
        @include('layout.footer')
    </div> 
    <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
</body>

