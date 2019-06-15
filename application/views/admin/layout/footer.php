<div class="slim-footer">
  <div class="container">
    <p>Copyright 2018 &copy; PDAK - Direktorat Jenderal Kependudukan dan Pencatatan Sipil</p>
  </div><!-- container -->
</div><!-- slim-footer -->

<script src="<?php echo base_url(); ?>assets/admin/lib/jquery/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/popper.js/js/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/jquery.cookie/js/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/datatables/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/datatables-responsive/js/dataTables.responsive.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/select2/js/select2.full.min.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/lib/moment/js/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/lib/jquery-ui/js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/js/slim.js"></script>
<script>
  $(function() {
    'use strict';
    $('.select2').select2({
      minimumResultsForSearch: Infinity
    });

    // Select2 by showing the search
    $('.select2-show-search').select2({
      minimumResultsForSearch: ''
    });

    // Datepicker
    $('.fc-datepicker').datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });

    $('#datepickerNoOfMonths').datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      numberOfMonths: 2
    });

    $('#datatable1').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
    });

    $('#datatable2').DataTable({
      bLengthChange: false,
      searching: false,
      responsive: true
    });

    // Select2
    $('.dataTables_length select').select2({
      minimumResultsForSearch: Infinity
    });

  });
</script>
</body>

</html>