
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akreditasi | Tabel Akreditasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/fontawesome-free/css/all.min.css'); ?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/adminlte.min.css'); ?>">
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
      <img src="<?php echo base_url('asset/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="<?= base_url() ?>" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Form Akreditasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('dashboard2')?>" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tabel Akreditasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
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
            <h1 class="m-0">Tabel Akreditasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Akreditasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="col-sm-4">
		        <div class="form-group">
            <?php 
                  $s_keyword="";
                  if (isset($_POST['search'])) {
                      $s_keyword = $_POST['s_keyword'];
                  }
                 ?>
		            <input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" class="form-control" value="<?php echo $s_keyword; ?>">                
		    </div>
		    <div class="col-sm-4" >
		        <button id="search" name="search" class="btn btn-warning">Cari</button>
            
		        </div>
		    </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="vertical-align:middle">Peguruan Tinggi</th>
                    <th style="vertical-align:middle">Program Studi</th>
                    <th style="vertical-align:middle">Strata</th>
                    <th style="vertical-align:middle">Wilayah</th>
                    <th style="vertical-align:middle">Nomor SK</th>
                    <th style="vertical-align:middle">Tahun SK</th>
                    <th style="vertical-align:middle">Peringkat</th>
                    <th style="vertical-align:middle">Masa Berlaku</th>
                    <th style="vertical-align:middle">Status Kadaluarsa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    
                    define('HOST','localhost');
                    define('USER','root');
                    define('PASS','');
                    define('DB1', 'akreditasi');
                  
                  // Buat Koneksinya
                  $db1 = new mysqli(HOST, USER, PASS, DB1);
                  

	            $search_keyword = '%'. $s_keyword .'%';	            
	            $query = "SELECT * FROM banpt WHERE perguruan_tinggi LIKE ? OR prodi LIKE ? OR strata LIKE ?  OR wilayah LIKE ? 
              OR no_sk LIKE ? OR tahun_sk LIKE ? OR peringkat LIKE ? OR kadaluarsa LIKE ? ORDER BY peringkat DESC";
	            $dewan1 = $db1->prepare($query);
	            $dewan1->bind_param('ssssssss', $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
	            $dewan1->execute();
	            $res1 = $dewan1->get_result();
 
	            if ($res1->num_rows > 0) {
	                while ($row = $res1->fetch_assoc()) {
	                    $perguruan_tinggi = $row['perguruan_tinggi'];
	                    $prodi = $row['prodi'];
	                    $strata = $row['strata'];
	                    $wilayah = $row['wilayah'];
	                    $no_sk = $row['no_sk'];
	                    $tahun_sk = $row['tahun_sk'];
                      $peringkat = $row['peringkat'];
                      $kadaluarsa = $row['kadaluarsa'];                      
                      ?>
                        <tr>
                              <td>                                  
                                <?php echo $row['perguruan_tinggi'] ?>
                              </td>
                              <td><?php echo $row['prodi'] ?></td>
                              <td><?php echo $row['strata'] ?></td>
                              <td><?php echo $row['wilayah'] ?></td>
                              <td><?php echo $row['no_sk'] ?></td>
                              <td><?php echo $row['tahun_sk'] ?></td>
                              <td><?php echo $row['peringkat'] ?></td>
                              <td><?php echo $row['kadaluarsa'] ?></td>
                              <td>
                                <?php
                                  $awal  = date_create($row['kadaluarsa']);
                                  $akhir = date_create();                                   
                                  if($akhir>$awal){
                                  echo "<font color='red'>Sudah Kadaluarsa</font>";
                                  }else{
                                  echo "<font color='green'>Belum Kadaluarsa</font>";}
                                ?>                              
                              </td>                              
                          </tr>
                  <?php } } else { ?> 
                      <tr>
	                <td colspan='7'>Tidak ada data ditemukan</td>
	            </tr>
	        <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th style="vertical-align:middle">Peguruan Tinggi</th>
                    <th style="vertical-align:middle">Program Studi</th>
                    <th style="vertical-align:middle">Strata</th>
                    <th style="vertical-align:middle">Wilayah</th>
                    <th style="vertical-align:middle">Nomor SK</th>
                    <th style="vertical-align:middle">Tahun SK</th>
                    <th style="vertical-align:middle">Peringkat</th>
                    <th style="vertical-align:middle">Masa Berlaku</th>
                    <th style="vertical-align:middle">Status Kadaluarsa</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url('asset/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/dist/js/adminlte.js'); ?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url('asset/plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('asset/plugins/chart.js/Chart.min.js'); ?>"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/dist/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/dist/js/pages/dashboard2.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('asset/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
