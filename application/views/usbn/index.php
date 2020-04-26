<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $boxtitle; ?></h3>

              <div class="box-tools">
                  <a href="<?= base_url('Import_usbn'); ?>" class="btn btn-success btn-sm" title="Import Siswa" style="margin-right: 5px;"><i class="fa fa-fw fa-upload"></i></a>
                  <a href="<?= base_url('admin/addUsbn'); ?>" class="btn btn-primary btn-sm" title="Tambah Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-plus"></i></a>
                  <a href="<?= base_url('admin/editUsbn'); ?>" class="btn btn-warning btn-sm" title="Tambah Nilai" style="margin-right: 5px;"><i class="fa fa-fw fa-pencil"></i></a>
                  <a href="<?= base_url('admin/emptyUsbn'); ?>" class="btn btn-danger btn-sm" title="Delete Nilai" onclick="return confirm('Anda yakin akan menghapus semua nilai?')"><i class="fa fa-fw fa-trash"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered">
                <tbody>
                <tr>
                	<th rowspan="2" style="text-align: center;">No</th>
                	<th rowspan="2" style="text-align: center;">Nama</th>
                	<th colspan="3" style="text-align: center;">Bahasa Indonesia</th>
                	<th colspan="3" style="text-align: center;">Matematika</th>
                	<th colspan="3" style="text-align: center;">IPA</th>
                </tr>
                <tr>
                	<th style="text-align: center;">PG</th>
                	<th style="text-align: center;">Uraian</th>
                	<th style="text-align: center;">NA</th>
                	<th style="text-align: center;">PG</th>
                	<th style="text-align: center;">Uraian</th>
                	<th style="text-align: center;">NA</th>
                	<th style="text-align: center;">PG</th>
                	<th style="text-align: center;">Uraian</th>
                	<th style="text-align: center;">NA</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($nilai as $n) : ?>
                <tr>
                	<td style="text-align: center;"><?= $i; ?></td>
                	<td><?= $n['nama_siswa']; ?></td>
                	<td style="text-align: center;"><?= $n['bi_pg']; ?></td>
                	<td style="text-align: center;"><?= $n['bi_uraian']; ?></td>
                	<td style="text-align: center;"><?= $n['bi_na']; ?></td>
                	<td style="text-align: center;"><?= $n['mtk_pg']; ?></td>
                	<td style="text-align: center;"><?= $n['mtk_uraian']; ?></td>
                	<td style="text-align: center;"><?= $n['mtk_na']; ?></td>
                	<td style="text-align: center;"><?= $n['ipa_pg']; ?></td>
                	<td style="text-align: center;"><?= $n['ipa_uraian']; ?></td>
                	<td style="text-align: center;"><?= $n['ipa_na']; ?></td>
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