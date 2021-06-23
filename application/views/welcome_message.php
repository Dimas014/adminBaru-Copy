
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akreditasi | Form Akreditasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/adminlte.min.css'); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/summernote/summernote-bs4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/select2/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'); ?>">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/bs-stepper/css/bs-stepper.min.css'); ?>">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/dropzone/min/dropzone.min.css'); ?>">
   <!-- datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-datepicker/css/bootstrap-datepicker.min.css'); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Akreditasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Akreditasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Form Akreditasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('dashboard2')?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tabel Akreditasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('user')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0">Form Akreditasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Akreditasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pengisian Form Akreditasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Perguruan Tinggi</label>
                    <select name="perguruan_tinggi" class="form-control select2bs4" style="width: 100%;" required>
                      <option selected="selected"></option>
                      <option value="UNIVERSITAS SULTAN AGENG TIRTAYASA">UNIVERSITAS SULTAN AGENG TIRTAYASA</option>
                      <option value="UNIVERSITAS AIRLANGGA">UNIVERSITAS AIRLANGGA</option>
                      <option value="UNIVERSITAS PEMBANGUNAN NASIONAL JAKARTA">UNIVERSITAS PEMBANGUNAN NASIONAL JAKARTA</option>
                      <option value="UNIVERSITAS PEMBANGUNAN NASIONAL YOGYAKARTA">UNIVERSITAS PEMBANGUNAN NASIONAL YOGYAKARTA</option>
                      <option value="INSTITUT PERTANIAN BOGOR">INSTITUT PERTANIAN BOGOR</option>
                      <option value="INSTITUT TEKNOLOGI BANDUNG">INSTITUT TEKNOLOGI BANDUNG</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Program Studi</label>
                    <select name="prodi" class="form-control select2bs4" style="width: 100%;" required>
                      <option selected="selected"></option>
                      <option value="Teknik Elektro">Teknik Elektro</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Sipil">Teknik Sipil</option>
                      <option value="Teknik Kimia">Teknik Kimia</option>
                      <option value="Teknik Industri">Teknik Industri</option>
                      <option value="Teknik Metalurgi">Teknik Metalurgi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Strata</label>
                    <select name=strata class="form-control select2bs4" style="width: 100%;" required>
                      <option selected="selected"></option>
                      <option value="D-I">D-I</option>
                      <option value="D-II">D-II</option>
                      <option value="D-III">D-III</option>
                      <option value="D-IV">D-IV</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                      <option value="Profesi">Profesi</option>
                      <option value="Spesialis">Spesialis</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Wilayah</label>
                    <select name="wilayah" class="form-control select2bs4" style="width: 100%;" required>
                      <option selected="selected"></option>
                      <option value="1">01</option>
                      <option value="2">02</option>
                      <option value="3">03</option>
                      <option value="4">04</option>
                      <option value="5">05</option>
                      <option value="6">06</option>
                      <option value="7">07</option>
                      <option value="8">08</option>
                      <option value="9">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor SK</label>
                    <input name="no_sk" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor SK" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun SK</label>
                    <input name="tahun_sk" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun SK" required>
                  </div>
                  <div class="form-group">
                    <label>Peringkat</label>
                    <select name="peringkat" class="form-control select2bs4" style="width: 100%;" required>
                      <option selected="selected"></option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option Value="Unggul">Unggul</option>
                      <option value="Baik Sekali">Baik Sekali</option>
                      <option value="Baik">Baik</option>
                      <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>                  
                    </select>
                  </div>
                  <div class="form-group">
                  <label>Tanggal Kadaluarsa</label>
                    <div class="input-group">
                      <input name="kadaluarsa" type="date" class="form-control"
                      min="2021-01-01" required>
                      <span class="validity"></span>
                    </div>
                  </div>                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php
                $koneksi = mysqli_connect("localhost","root","","akreditasi");

                if(isset($_POST['proses'])){
                mysqli_query($koneksi, "insert into banpt set  
                perguruan_tinggi = '$_POST[perguruan_tinggi]',
                prodi = '$_POST[prodi]',
                strata = '$_POST[strata]',
                wilayah = '$_POST[wilayah]',
                no_sk = '$_POST[no_sk]',
                tahun_sk = '$_POST[tahun_sk]',
                peringkat = '$_POST[peringkat]',
                kadaluarsa = '$_POST[kadaluarsa]'");

                echo "Data Peserta Baru Telah Disimpan";
                

                }

                ?>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/plugins/moment/moment.min.js"></script>
<script src="asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/dist/js/pages/dashboard.js"></script>
</body>
</html>
