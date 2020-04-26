<section class="content">
 <div class="row">
      <div class="col-xs-12">
           <div class="box">
                <div class="box-header">
                     <h3 class="box-title">Daftar Nilai Semester</h3>

                     <div class="box-tools">
                           <form action="<?= base_url('admin/saveUs'); ?>" method="post">
                                  <a href="<?= base_url('admin/semester'); ?>" class="btn btn-primary btn-sm" style="margin-right: 5px;">Cancel</a>
                                  <button type="submit" class="btn btn-success btn-sm">Save</button>
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
                                      <?php foreach($siswa as $s) : ?>
                                      <tr>
                                             <td style="text-align: center;"><?= $i; ?></td>
                                             <td>
                                                   <input type="hidden" name="nisn[]" value="<?= $s['nisn']; ?>"><?= $s['nama_siswa']; ?>
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="agama[]">
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="pkn[]">
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="ips[]">
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="sbk[]">
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="pjok[]">
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="bmr[]">
                                            </td>
                                            <td style="text-align: center;">
                                                   <input type="text" maxlength="4" size="10" name="bing[]">
                                            </td>
                                     </tr>
                                     <?php $i++; ?>
                              <?php endforeach; ?>
                              </tbody></table>
                       </div>
                </form>
                <!-- /.box-body -->
         </div>
         <!-- /.box -->
  </div>
</div>
</section>