<section class="content">
 <div class="row">
      <div class="col-xs-12">
           <div class="box">
                <div class="box-header">
                     <h3 class="box-title"><?= $boxtitle; ?></h3>

                     <div class="box-tools">
                           <form action="<?= base_url('admin/updateUsbn'); ?>" method="post">
                                  <a href="<?= base_url('admin/usbn'); ?>" class="btn btn-primary btn-sm" style="margin-right: 5px;">Cancel</a>
                                  <button type="submit" class="btn btn-success btn-sm">Save</button>
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
                    					<td>
                    						<input type="hidden" name="nisn[]" value="<?= $n['nisn']; ?>"><?= $n['nama_siswa']; ?>
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" value="<?= $n['bi_pg']; ?>" name="bi_pg[]">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" value="<?= $n['bi_uraian']; ?>" name="bi_uraian[]">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" name="bi_na[]" value="<?= $n['bi_na']; ?>">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" value="<?= $n['mtk_pg']; ?>" name="mtk_pg[]">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" value="<?= $n['mtk_uraian']; ?>" name="mtk_uraian[]">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" name="mtk_na[]" value="<?= $n['mtk_na']; ?>">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" value="<?= $n['ipa_pg']; ?>" name="ipa_pg[]">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" value="<?= $n['ipa_uraian']; ?>" name="ipa_uraian[]">
                    					</td>
                    					<td style="text-align: center;">
                    						<input type="text" maxlength="4" size="5" name="ipa_na[]" value="<?= $n['ipa_na']; ?>">
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