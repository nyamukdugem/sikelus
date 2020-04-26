<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"><?= $this->session->flashdata('message'); ?>
              <h3 class="box-title"><?= $boxtitle; ?></h3>

              <div class="box-tools">
                  <a href="<?= base_url('import_siswa'); ?>" class="btn btn-success btn-sm" title="Import Siswa" style="margin-right: 5px;"><i class="fa fa-fw fa-upload"></i></a>
                  <a href="<?= base_url('admin/addSiswa'); ?>" class="btn btn-primary btn-sm" title="Tambah Siswa" style="margin-right: 5px;"><i class="fa fa-fw fa-plus"></i></a>
                  <a href="<?= base_url('admin/emptySiswa'); ?>" class="btn btn-danger btn-sm" title="Delete Nilai" onclick="return confirm('Anda yakin akan menghapus semua siswa?')"><i class="fa fa-fw fa-trash"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered">
                <tbody>
                <tr>
                	<th>No</th>
                	<th>NISN</th>
                	<th>NIS</th>
                	<th>No. Peserta</th>
                	<th>Nama</th>
                	<th>Tempat Lahir</th>
                	<th>Tanggal Lahir</th>
                	<th>Nama Orang Tua</th>
                	<th>Action</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($siswa as $s) : ?>
                <tr>
                	<td><?= $i; ?></td>
                	<td><?= $s['nisn']; ?></td>
                	<td><?= $s['nis']; ?></td>
                	<td><?= $s['nopes']; ?></td>
                	<td><?= $s['nama_siswa']; ?></td>
                	<td><?= $s['tmpt_lahir']; ?></td>
                	<td><?= $s['tgl_lahir']; ?></td>
                	<td><?= $s['nama_ayah']; ?></td>
                	<td>
                		<a href="<?= base_url('admin/editSiswa/'. $s['nisn']); ?>" class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-fw fa-pencil"></i></a>
                		<a href="<?= base_url('admin/deletesiswa/'. $s['nisn']); ?>" onclick="return confirm('apakah anda yakin menghapus data siswa ini?')" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-fw fa-trash"></i></a>
                	</td>
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