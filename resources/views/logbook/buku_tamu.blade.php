<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
    {{-- Link CSS Bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-primary">
        <div class="wrapper">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"> BUKU TAMU</i></a>
                </li>
                <!-- icons laptop / link dashboard -->
                    <li class="nav-item">
                        <a type="button" class="nav-link fas fa-laptop" href="/dashboard" target="_blank"></a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link fas fa-tachometer-alt" href="/dashboard2" target="_blank"></a>
                    </li>
                    <!-- icons tambah / link modal tambah -->
                    <li class="nav-item">
                        <a type="button" class="nav-link fas fa-plus-square" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                    </li>
                    <!-- icons print / link print pdf -->
                    <li class="nav-item">
                        <a type="button" class="nav-link fas fa-file-download" href="{{route('logbook.cetak_logbook')}}" target="_blank"></a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link fas fa-print" href="{{route('logbook.cetak-logbook-form')}}"></a>
                    </li>
                    <form class="d-flex" method="POST" action="{{route('cari')}}">
                        @csrf
                        <input class="form-control me-2 col-lg-12" name="keyword" type="search" placeholder="Cari berdasarkan tanggal" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('assets/dist/img/POLINDRA.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="/admin" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Data Administrator
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/details" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Details</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Keluar</p>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/agenda" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Data Kegiatan
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="/logbook" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>
                    Buku Tamu
                  </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Kontak
                </p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

    <div class="container">
        <div class="col-6">
            {{-- Modal tambah data tamu  --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tamu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Form tambah logbook  --}}
                            <form action="/logbook/store" method="POST">
                                {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
                                @method('POST')
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal</label>
                                    <input required name="tanggal" type="date" class="form-control" placeholder="Input tanggal">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Lengkap</label>
                                    <input required name="nama" type="text" class="form-control" placeholder="Input nama lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input required name="alamat" type="text" class="form-control" placeholder="Input alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Bidang Tujuan</label>
                                    <input required name="tujuan" type="text" class="form-control" placeholder="Input bidang tujuan">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Keperluan</label>
                                    <input required name="keperluan" type="text" class="form-control" placeholder="Input keperluan">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Telepon</label>
                                    <input required name="telp" type="text" class="form-control" placeholder="Input telepon">
                                </div>
                                <div class="mb-3 form-check">
                                    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Centang jika data sudah benar</label>
                                </div class="modal-footer">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Penutup modal tambah  --}}
        </div>
{{--  ISI  --}}
<table class="table table-striped table-hover" style="vertical-align: middle">
    {{-- Judul tabel  --}}
    <tr>
        <th>No.</th>
        <th>Tanggal</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Bidang Tujuan</th>
        <th>Keperluan</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr>
    {{-- Perulangan  --}}
    @foreach ($data_tamu as $index => $buku_tamu)
    {{-- Pengambilan data dari database  --}}
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $buku_tamu->tanggal }}</td>
        <td>{{ $buku_tamu->nama }}</td>
        <td>{{ $buku_tamu->alamat }}</td>
        <td>{{ $buku_tamu->tujuan }}</td>
        <td>{{ $buku_tamu->keperluan }}</td>
        <td>{{ $buku_tamu->telp}}</td>
        <td>
            <a href="{{route('logbook.edit', $buku_tamu->id)}}" class="btn btn-primary fas fa-edit"></a>
            <form action="{{route('logbook.destroy', $buku_tamu->id)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger fas fa-trash-alt"></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

    </div>
    </div>
    {{-- Link JS Bootstrap  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
</body>

</html>