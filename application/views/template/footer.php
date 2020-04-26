    </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Beta
    </div>
    <strong>Copyright &copy; <?= (int)date('Y') ?> <a href="<?= base_url()?>"> - Build with &hearts;
</a></strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- bootstrap datepicker -->
<script src="<?= base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?= base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>
<!-- toastr -->
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

</body>
</html>