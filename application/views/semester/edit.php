<section class="content">
 <div class="row">
  <div class="col-xs-12">
   <div class="box">
    <div class="box-header">
     <h3 class="box-title">Daftar Nilai Semester</h3>

     <div class="box-tools">
      <form action="<?= base_url('admin/updateSemester'); ?>" method="post">
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
         <td>
           <input type="hidden" name="nisn[]" value="<?= $n['nisn']; ?>"><?= $n['nama_siswa']; ?>
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" value="<?= $n['agama_s']; ?>" name="agama_s[]">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" value="<?= $n['pkn_s']; ?>" name="pkn_s[]">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" value="<?= $n['bi_s']; ?>" name="bi_s[]">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" value="<?= $n['mtk_s']; ?>" name="mtk_s[]">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" value="<?= $n['ipa_s']; ?>" name="ipa_s[]">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" name="ips_s[]" value="<?= $n['ips_s']; ?>">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" name="sbk_s[]" value="<?= $n['sbk_s']; ?>">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" name="pjok_s[]" value="<?= $n['pjok_s']; ?>">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" name="bmr_s[]" value="<?= $n['bmr_s']; ?>">
         </td>
         <td style="text-align: center;">
           <input type="text" maxlength="4" size="5" name="bing_s[]" value="<?= $n['bing_s']; ?>">
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