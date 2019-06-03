<div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="">ThemePixels</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="<?php echo base_url(); ?>assets/admin/lib/jquery/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/popper.js/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/datatables/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/lib/select2/js/select2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/slim.js"></script>
    <script>
      $(function(){
        'use strict';

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
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
