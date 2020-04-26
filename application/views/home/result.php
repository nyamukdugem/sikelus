<html style="height: auto; min-height: 100%;"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?= base_url(); ?>assets/index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 701px;">
    <div class="container">
      <!-- Content Header (Page header) -->
      

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Biodata Siswa</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <table class="table">
              <tbody>
                <tr>
                  <td>NISN</td>
                  <td>1234567890</td>
                </tr>
                <tr>
                  <td>NIS</td>
                  <td>1234567890</td>
                </tr>
                <tr>
                  <td>Nomor Peserta Ujian</td>
                  <td>1234-5678-90</td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>Sulistio</td>
                </tr>
                <tr>
                  <td>Tempat Tanggal Lahir</td>
                  <td>Pekanbaru, 14 Juli 1995</td>
                </tr>
                <tr>
                  <td>Nama Orang Tua</td>
                  <td>Suprayitno</td>
                </tr>
              </tbody>
            </table>
              </div>
              <div class="col-md-6">
                <p>Berdasarkan hasil keputusan musyawarah guru dan melihat hasil ujian dan segala aspeknya sudah memenuhi seluruh kriteria peraturan perundang-undangan. Maka dengan ini siswa atas nama <b style="font-size: 17pt;">SULISTIO</b> dinyatakan : </p>
                <h1 style="text-align: center;">LULUS</h1>
                <p>Dengan hasil ujian terlampir pada tabel di bawah ini :</p>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Nilai Rata-Rata Rapor</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Pendidikan Agama Islam</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pendidikan Kewarganegaraan</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Bahasa Indonesia</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Matematika</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Ilmu Pengetahuan Alam</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Ilmu Pengetahuan Sosial</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Seni Budaya dan Keterampilan</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Pendidikan Jasmani dan Olahraga</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Budaya Melayu Riau</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Bahasa Inggris</td>
                  <td>100</td>
                </tr>
              </tbody>
            </table>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Nilai Ujian Sekolah</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Pendidikan Agama Islam</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pendidikan Kewarganegaraan</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Ilmu Pengetahuan Sosial</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Seni Budaya dan Keterampilan</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Pendidikan Jasmani dan Olahraga</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Budaya Melayu Riau</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Bahasa Inggris</td>
                  <td>100</td>
                </tr>
              </tbody>
            </table>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Nilai Ujian Sekolah Berstandar Nasional (USBN)</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Pilihan Ganda</th>
                  <th>Uraian</th>
                  <th>Nilai Akhir</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Bahasa Indonesia</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Matematika</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Ilmu Pengetahuan Alam</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                </tr>
              </tbody>
            </table>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>


</body></html>