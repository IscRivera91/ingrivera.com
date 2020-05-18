<?php

error_reporting(E_ALL);
ini_set('upload_max_filesize', '2048M');
ini_set('post_max_size', '2048M');
ini_set('display_errors', 1);
date_default_timezone_set('America/Mexico_City');
require_once('requires.php');

?>
<?php require_once ('template/header.php'); ?>

<?php require_once ('template/header2.php'); ?>
<?php require_once ('template/nav.php'); ?>
<?php require_once ('template/menu.php'); ?>

<div class="container-fluid">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content">

            <?php if (isset($_GET['mensaje'])){ ?>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-10">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong><?php echo $_GET['mensaje']; ?></strong>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            <?php } // end if (isset($_GET['mensaje'])) ?>





        </section><!-- /.content -->
    </div>

</div>



<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0
    </div>
    <strong>Copyright © 2020 Ing Rivera . </strong>todos los derechos reservados.
</footer>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/jquery/jquery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3//moment/moment.min.js"></script>
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo RUTA_PROYECTO ?>template/adminlte3/dist/js/adminlte.min.js"></script>
<?php
echo "<script>";
echo "var COLORBASE_BOOTSTRAP = '".COLORBASE_BOOTSTRAP."';";
echo "</script>";
?>
<script>
    $(function () {

        //Initialize Select2 Elements
        $('.select2').select2();

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    });
</script>
</body>
</html>
