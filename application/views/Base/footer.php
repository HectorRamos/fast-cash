
        </div>
    	<!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->

        <script src="<?= base_url() ?>plantilla/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>plantilla/js/waves.js"></script>
        <script src="<?= base_url() ?>plantilla/js/wow.min.js"></script>
        <script src="<?= base_url() ?>plantilla/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>plantilla/js/jquery.scrollTo.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/chat/moment-2.2.1.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/fastclick/fastclick.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="<?= base_url() ?>plantilla/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="<?= base_url() ?>plantilla/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>plantilla/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- Modal-Effect -->
        <script src="<?= base_url() ?>plantilla/assets/modal-effect/js/classie.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/modal-effect/js/modalEffects.js"></script>

        <!-- Notifications -->
        <script src="<?= base_url() ?>plantilla/assets/notifications/notify.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/notifications/notify-metro.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/notifications/notifications.js"></script>
        
        <!-- CUSTOM JS -->
        <script src="<?= base_url() ?>plantilla/js/jquery.app.js"></script>

                <!--Form Validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="<?= base_url() ?>plantilla/assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url() ?>plantilla/assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="<?= base_url() ?>plantilla/assets/form-wizard/wizard-init.js" type="text/javascript"></script>

        <!-- Data table -->
        <script src="<?= base_url() ?>plantilla/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <!-- Dashboard -->
        <script src="<?= base_url() ?>plantilla/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="<?= base_url() ?>plantilla/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="<?= base_url() ?>plantilla/js/jquery.todo.js"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <script src="<?= base_url() ?>plantilla/js/tilt.jquery.min.js"></script>
		<script >
			$('.js-tilt').tilt({
				scale: 1.0
			})
		</script>

        <footer class="footer text-right">
           Copyright © <?php echo date('Y');?> <font color="#0080FF">JIREH</font>.
        </footer>
        <script type="text/javascript">
            footer = function(){ 
                $alto_navegador= $(window).height(); /*el alto que tiene el navegador*/
                $alto_documento= $(document).height(); /*el alto que tiene el contenido de la pagina*/
                if ($alto_documento > $alto_navegador){ /*aqui condicionamos si el alto del contenido es mayor que el alto del navegador*/
                    /* si es mayor es que tiene un contenido mas largo que el alto del navegador y entonces lo dejamos a relativo*/
                    $("footer").css({"position":"relative"})
                    console.log("relative");
                }else {
                    /* si el alto del contenido es menor que el alto del navegador es que tenemos espacio vacio y le mandamos abajo*/
                    $("footer").css({"position":"fixed"})
                    console.log("fixed");
                } 
            }
            footer();
        </script>
    </body>
</html>