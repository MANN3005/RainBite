  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <!-- Page level plugin JavaScript-->
    <!-- <script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.js');?>"></script> -->
    <script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/jquery.magnific-popup.min.js');?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin/js/admin.js');?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/admin/js/admin-charts.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/dropzone.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/admin-datatables.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/admin.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/admin-datatables.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/admin-charts-all.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap-datepicker.js');?>"></script>
            <script>
            $('input.date-pick').datepicker();
            </script>
            <!-- WYSIWYG Editor -->
            <script src="<?php echo base_url('assets/admin/js/editor/summernote-bs4.min.js');?>"></script>
            <script>
            $('.editor').summernote({
                fontSizes: ['10', '14'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontsize', ['fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ],
                placeholder: 'Write here ....',
                tabsize: 2,
                height: 200
            });
            </script>