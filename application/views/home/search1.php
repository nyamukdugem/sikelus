<html style="height: auto; min-height: 100%;"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIKELUS - SDIT Al-Manar Pekanbaru</title>
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
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

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
            <a href="<?= base_url(); ?>" class="navbar-brand"><b>SIKELUS</b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="https://sditalmanarpekanbaru.sch.id">Website Utama</a></li>
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
          <div class="row">
            <div class="col-sm-12">
              <div class="callout callout-info">
                <h4>Pemberitahuan</h4>

                <p>Surat Keterangan Kelulusan (SKL) dapat akan dibagikan di hari <b>Sabtu, 22 Juni 2019 dari jam 08.00 WIB - 11.00 WIB</b>. <b>Siswa diwajibkan hadir untuk cap 3 jari</b></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="box box-primary">
                <div class="box-body">
                  <p>Silahkan masukkan NISN pada kolom pencarian di bawah ini</p>
                  <form action="" method="post">
                    <div class="input-group margin">
                      <input type="number" class="form-control" placeholder="Masukkan NISN" name="keyword">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-flat">Cari</button>
                      </span>
                    </div>
                    <?php echo form_error('keyword'); ?>
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <?php if (empty($hasil)): ?>
              <div class="col-sm-8">
                <div class="box box-primary">
                  <div class="box-body">
                    Hasil Pencarian Akan Keluar Disini
                  </div>
                  
                </div>
              </div>
              <?php else: ?>
                <div class="col-sm-8">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Biodata Siswa</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-7">
                      <table class="table">
                        <tbody>
                          <?php foreach($hasil as $h) : ?>
                          <tr>
                            <td>NISN</td>
                            <td><?= $h['nisn']; ?></td>
                          </tr>
                          <tr>
                            <td>NIS</td>
                            <td><?= $h['nis']; ?></td>
                          </tr>
                          <tr>
                            <td>Nomor Peserta Ujian</td>
                            <td><?= $h['nopes']; ?></td>
                          </tr>
                          <tr>
                            <td>Nama</td>
                            <td><?= $h['nama_siswa']; ?></td>
                          </tr>
                          <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td><?= $h['tmpt_lahir']; ?>, <?= date('d F Y', strtotime($h['tgl_lahir'])) ; ?></td>
                          </tr>
                          <tr>
                            <td>Nama Orang Tua</td>
                            <td><?= $h['nama_ayah']; ?></td>
                          </tr>
                        </tbody>
                      <?php endforeach; ?>
                      </table>
                    </div>
                    <div class="col-md-5">
                      <p style="text-align: justify;">
                        Berdasarkan hasil keputusan rapat majelis guru dan melihat hasil ujian nasional berstandar nasional dan juga segala aspek sudah memenuhi seluruh kriteria peraturan perundangan-undangan. Maka dengan ini siswa yang namanya tersebut dinyatakan :
                        </p>
                      <h1 style="text-align: center;"><b>LULUS</b></h1>
                      <p style="text-align: justify;">Dengan hasil ujian terlampir pada tabel di bawah ini :</p>
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
                          <?php foreach($semester as $s) : ?>
                          <tr>
                            <td>1</td>
                            <td>Pendidikan Agama Islam</td>
                            <td><?= $s['agama_s']; ?></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Pendidikan Kewarganegaraan</td>
                            <td><?= $s['pkn_s']; ?></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Bahasa Indonesia</td>
                            <td><?= $s['bi_s']; ?></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Matematika</td>
                            <td><?= $s['mtk_s']; ?></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Ilmu Pengetahuan Alam</td>
                            <td><?= $s['ipa_s']; ?></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td><?= $s['ips_s']; ?></td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Seni Budaya dan Keterampilan</td>
                            <td><?= $s['sbk_s']; ?></td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>Pendidikan Jasmani dan Olahraga</td>
                            <td><?= $s['pjok_s']; ?></td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Budaya Melayu Riau</td>
                            <td><?= $s['bmr_s']; ?></td>
                          </tr>
                          <!-- <tr>
                            <td>jumlah</td>
                            <td><?= $s['bmr_s']+$s['pjok_s']+$s['sbk_s']+$s['ips_s']+$s['ipa_s']+$s['mtk_s']+$s['bi_s']+$s['pkn_s']+$s['agama_s']; ?></td>
                          </tr> -->
                          <!-- <tr>
                            <td>10</td>
                            <td>Bahasa Inggris</td>
                            <td><?= $s['bing_s']; ?></td>
                          </tr> -->
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              <div class="box box-success">
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
                          <?php foreach($us as $s) : ?>
                          <tr>
                            <td>1</td>
                            <td>Pendidikan Agama Islam</td>
                            <td><?= $s['agama']; ?></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Pendidikan Kewarganegaraan</td>
                            <td><?= $s['pkn']; ?></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Ilmu Pengetahuan Sosial</td>
                            <td><?= $s['ips']; ?></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Seni Budaya dan Keterampilan</td>
                            <td><?= $s['sbk']; ?></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Pendidikan Jasmani dan Olahraga</td>
                            <td><?= $s['pjok']; ?></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Budaya Melayu Riau</td>
                            <td><?= $s['bmr']; ?></td>
                          </tr>
                          <!-- <tr>
                            <td>jumlah</td>
                            <td><?= $s['agama']+$s['pkn']+$s['ips']+$s['sbk']+$s['pjok']+$s['bmr']; ?></td>
                          </tr> -->
                          <!-- <tr>
                            <td>7</td>
                            <td>Bahasa Inggris</td>
                            <td><?= $s['bing']; ?></td>
                          </tr> -->
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              <div class="box box-danger">
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
                          <?php foreach($usbn as $u) : ?>
                          <tr>
                            <td>1</td>
                            <td>Bahasa Indonesia</td>
                            <td style="text-align: center;"><?= $u['bi_pg']; ?></td>
                            <td style="text-align: center;"><?= $u['bi_uraian']; ?></td>
                            <td style="text-align: center;"><?= $u['bi_na']; ?></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Matematika</td>
                            <td style="text-align: center;"><?= $u['mtk_pg']; ?></td>
                            <td style="text-align: center;"><?= $u['mtk_uraian']; ?></td>
                            <td style="text-align: center;"><?= $u['mtk_na']; ?></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Ilmu Pengetahuan Alam</td>
                            <td style="text-align: center;"><?= $u['ipa_pg']; ?></td>
                            <td style="text-align: center;"><?= $u['ipa_uraian']; ?></td>
                            <td style="text-align: center;"><?= $u['ipa_na']; ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" style="text-align: center;"><b>Jumlah</b></td>
                            <td style="text-align: center;"><b><?= number_format($u['bi_pg']+$u['mtk_pg']+$u['ipa_pg'],1); ?></b></td>
                            <td style="text-align: center;"><b><?= number_format($u['bi_uraian']+$u['mtk_uraian']+$u['ipa_uraian'],1); ?></b></td>
                            <td style="text-align: center;"><b><?= number_format($u['bi_na']+$u['mtk_na']+$u['ipa_na'],1); ?></b></td>
                          </tr>
                          <tr>
                            <td colspan="2" style="text-align: center;"><b>Rata-Rata NA USBN</b></td>
                            <td></td>
                            <td></td>
                            <td style="text-align: center;"><b><?= number_format(($u['bi_na']+$u['mtk_na']+$u['ipa_na'])/3,1); ?></b></td>
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <?php endif ?>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> beta
        </div>
        <strong>Copyright © 2019 <a href="https://pojokan.web.id">Developed by Sulistio | SDIT Al-Manar Pekanbaru</a>.</strong> All rights
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript">
  <?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
</script>


</body></html>