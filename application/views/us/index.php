<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $boxtitle; ?></h3>

              <div class="box-tools">
                  <a href="<?= base_url('Import_us'); ?>" class="btn btn-success btn-sm" title="Import Siswa" style="margin-right: 5px;"><i class="fa fa-fw fa-upload"></i></a>
                  <a href="<?= base_url('admin/addUs'); ?>" class="btn btn-primary btn-sm" title="Tambah Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-plus"></i></a>
                  <a href="<?= base_url('admin/editUs'); ?>" class="btn btn-warning btn-sm" title="Tambah Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-pencil"></i></a>
                  <a href="<?= base_url('admin/emptyUs'); ?>" class="btn btn-danger btn-sm" title="Delete Nilai" onclick="return confirm('Anda yakin akan menghapus semua nilai?')"><i class="fa fa-fw fa-trash"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered">
                <tbody>
                <tr>
                	<th>No</th>
                	<th>Nama</th>
                	<th>Agama</th>
                	<th>PKN</th>
                	<th>IPS</th>
                	<th>SBK</th>
                	<th>PJOK</th>
                	<th>BMR</th>
                	<th>B.Ing</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($nilai as $n) : ?>
                <tr>
                	<td><?= $i; ?></td>
                	<td><?= $n['nama_siswa']; ?></td>
                	<td><?= $n['agama']; ?></td>
                	<td><?= $n['pkn']; ?></td>
                	<td><?= $n['ips']; ?></td>
                	<td><?= $n['sbk']; ?></td>
                	<td><?= $n['pjok']; ?></td>
                	<td><?= $n['bmr']; ?></td>
                  <td><?= $n['bing']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>