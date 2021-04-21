<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/back/'); ?>images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>css/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/quill/quill.snow.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/dragula/dragula.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/apexcharts/apexcharts.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/choices.js/choices.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/back/'); ?>vendors/simple-datatables/style.css">

</head>

<body>
    <div id="app">

        <!-- sidebar -->
        <?php $this->load->view('backend/layout/_sidebar'); ?>
        <!-- end sidebar -->

        <div id="main">

            <!-- navbar -->
            <?php $this->load->view('backend/layout/_navbar'); ?>
            <!-- end navbar -->

            <!-- content -->
            <?php $this->load->view('backend/page/' . $page); ?>
            <!-- end content -->

            <!-- footer -->
            <?php $this->load->view('backend/layout/_footer'); ?>
            <!-- end footer -->

        </div>
    </div>
    <!-- fix-->
    <script src="<?= base_url('assets/back/'); ?>js/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>js/app.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/chartjs/Chart.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>js/pages/dashboard.js"></script>
    <script src="<?= base_url('assets/back/'); ?>js/main.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/quill/quill.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/dragula/dragula.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/choices.js/choices.min.js"></script>
    <script src="<?= base_url('assets/back/'); ?>vendors/simple-datatables/simple-datatables.js"></script>

    <!-- no use 
    <script src="js/vendors.js"></script>
    <script src="js/pages/widgets.js"></script>
    <script src="js/pages/ui-chartjs.js"></script>
    <script src="js/pages/form-editor.js"></script>
    <script src="js/pages/ui-apexchart.js"></script>
    -->
</body>

</html>