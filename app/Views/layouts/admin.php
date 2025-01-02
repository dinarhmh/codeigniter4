<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Codeigniter 4 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
     <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

     <?= $this->renderSection('styles') ?>
</head>
<body>
    <!-- Page wrapper -->
     <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('layouts/components/sidebar') ?>
        <!-- End of Sidebar -->
        <!-- Content wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main content -->
             <div id="content">
                <!-- Topbar -->
                <?= $this->include('layouts/components/topbar') ?>
                <!-- end of topbar -->
                <!-- begin page content -->
                <?= $this->renderSection('content') ?>
                <!-- /.container-fluid -->
            </div>
            <!-- end of main content -->
            
            <!-- footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text center my-auto">
                        <span>Copyright - Dina Nur Rohimah&copy; <?= Date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- end of footer -->
        </div>
        <!-- end of content wrapper -->
    </div>

    <!-- scroll to top button -->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>

    <!-- logout modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap core javascript -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- core plugin javascript -->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <!-- custom script for all pages -->
    <script src="<?= base_url('assets/js/sb-admin-2.js') ?>"></script>

    <?= $this->renderSection('scripts') ?>
</body>
</html>