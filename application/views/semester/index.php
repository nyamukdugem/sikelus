<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Nilai Semester</h3>

              <div class="box-tools">
                  <a href="<?= base_url('import_semester'); ?>" class="btn btn-success btn-sm" title="Import Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-upload"></i></a>
                  <a href="<?= base_url('admin/addSemester'); ?>" class="btn btn-primary btn-sm" title="Add Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-plus"></i></a>
                  <a href="<?= base_url('admin/editSemester'); ?>" class="btn btn-warning btn-sm" title="Edit Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-pencil"></i></a>
                  <a href="<?= base_url('admin/emptySemester'); ?>" class="btn btn-danger btn-sm" title="Delete Nilai" onclick="return confirm('Anda yakin akan menghapus semua nilai?')"><i class="fa fa-fw fa-trash"></i></a>
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
                	<th>B.Indo</th>
                	<th>MTK</th>
                	<th>IPA</th>
                	<th>IPS</th>
                	<th>SBK</th>
                	<th>PJOK</th>
                	<th>BMR</th>
                	<th>B.Ing</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($nilai as $n) : ?>
                <tr>
                	<td style="text-align: center;"><?= $i; ?></td>
                	<td><?= $n['nama_siswa']; ?></td>
                	<td style="text-align: center;"><?= $n['agama_s']; ?></td>
                	<td style="text-align: center;"><?= $n['pkn_s']; ?></td>
                	<td style="text-align: center;"><?= $n['bi_s']; ?></td>
                	<td style="text-align: center;"><?= $n['mtk_s']; ?></td>
                	<td style="text-align: center;"><?= $n['ipa_s']; ?></td>
                	<td style="text-align: center;"><?= $n['ips_s']; ?></td>
                	<td style="text-align: center;"><?= $n['sbk_s']; ?></td>
                	<td style="text-align: center;"><?= $n['pjok_s']; ?></td>
                	<td style="text-align: center;"><?= $n['bmr_s']; ?></td>
                	<td style="text-align: center;"><?= $n['bing_s']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
              </tbody>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>