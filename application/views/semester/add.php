<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Nilai Semester</h3>

              <div class="box-tools">
               <form action="<?= base_url('admin/saveSemester'); ?>" method="post">
                      <a href="<?= base_url('admin/semester'); ?>" class="btn btn-primary btn-sm" style="margin-right: 5px;">Cancel</a>
                      <button type="submit" class="btn btn-success btn-sm">Save</button>
               </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
               <table class="table table-hover table-bordered">
                <tbody>
                 <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Agama</th>
                  <th style="text-align: center;">PKN</th>
                  <th style="text-align: center;">B.Indo</th>
                  <th style="text-align: center;">MTK</th>
                  <th style="text-align: center;">IPA</th>
                  <th style="text-align: center;">IPS</th>
                  <th style="text-align: center;">SBK</th>
                  <th style="text-align: center;">PJOK</th>
                  <th style="text-align: center;">BMR</th>
                  <th style="text-align: center;">B.Ing</th>
           </tr>
           <?php $i = 1; ?>
           <?php foreach($siswa as $s) : ?>
           <tr>
                 <td style="text-align: center;"><?= $i; ?></td>
                 <td>
                       <input type="hidden" name="nisn[]" value="<?= $s['nisn']; ?>"><?= $s['nama_siswa']; ?>
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="agama_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="pkn_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="bi_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="mtk_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="ipa_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="ips_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="sbk_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="pjok_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="bmr_s[]">
                </td>
                <td style="text-align: center;">
                       <input type="text" maxlength="4" size="2" name="bing_s[]">
                </td>
         </tr>
         <?php $i++; ?>
  <?php endforeach; ?>
</tbody>
</table>
</div>
</form>
<!-- /.box-body -->
</div>
<!-- /.box -->
  </div>
</div>
</section>