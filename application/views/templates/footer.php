 <!-- Required Js -->
 <script src="<?php echo base_url('assets/back/') ?>assets/js/vendor-all.min.js"></script>
 <script src="<?php echo base_url('assets/back/') ?>assets/js/plugins/bootstrap.min.js"></script>

 <script src="<?php echo base_url('assets/back/') ?>assets/js/pcoded.min.js"></script>


 <!-- DataTable -->
 <script src="<?= base_url('assets/front/'); ?>js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/dataTables.buttons.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/buttons.bootstrap4.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/buttons.flash.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/jszip.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/pdfmake.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/vfs_fonts.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/buttons.html5.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/buttons.print.min.js"></script>
 <script src="<?= base_url('assets/front/'); ?>js/sweetalert2.min.js"></script>

 <!-- Apex Chart -->
 <script src="<?php echo base_url('assets/back/') ?>assets/js/plugins/apexcharts.min.js"></script>


 <!-- custom-chart js -->
 <script src="<?php echo base_url('assets/back/') ?>assets/js/pages/dashboard-main.js"></script>

 <!-- implement datatables -->
 <script>
   $(document).ready(function() {
     $("#daftarpemilih").DataTable({
       dom: "Bfrtip",
       buttons: ["excel", "pdf", "print"]
     });
   });
 </script>

 <script type="text/javascript">
   $('.custom-file-input').on('change', function() {

     let fileName = $(this).val().split('\\').pop();
     $(this).next('.custom-file-label').addClass('selected').html(fileName);

   });



   $('.form-check-input').on('click', function() {
     const menuId = $(this).data('menu');
     const roleId = $(this).data('role');

     $.ajax({
       url: "<?= base_url('admin/changeaccess'); ?>",
       type: 'post',
       data: {
         menuId: menuId,
         roleId: roleId
       },
       success: function() {
         document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
       }
     });


   });
 </script>
  <script src="<?php echo base_url('assets/back/') ?>assets/js/myscript.js"></script>
 </body>

 </html>