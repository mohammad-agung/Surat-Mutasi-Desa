<?php
session_start();
if (isset($_SESSION['login']) == 0) {
    header('Location: index');
    exit;
} else {
    include "../controller/config.php";
    include "../model/admin/function_dashboard.php";
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin Dashboard</title>

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="../assets/admin/fonts/fontfamily/sourcesandpro.css">
        <link rel="stylesheet" id="css-main" href="../assets/admin/css/oneui.min.css">

    </head>

    <body>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Start Sidebar -->
            <?php include '../view/admin/nav.php'; ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php include '../view/admin/header.php'; ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('../assets/admin/media/photos/photo3@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-narrow content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                                    <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Selamat Datang Administrator <?= $_SESSION['login']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Arsip Surat Pindah Penduduk</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?= $countQueryDataArsipPindah; ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Arsip Surat Penduduk Datang</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?= $countQueryDataArsipDatang; ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Data Pindah Hari Ini</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?= $countQueryDataPindah; ?></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Data Pendatang Hari Ini</div>
                                    <div class="font-size-h2 font-w400 text-dark"><?= $countQueryDataDatang; ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include '../view/admin/copyright.php'; ?>
            <!-- END Footer -->

        </div>

        <script src="../assets/admin/js/oneui.core.min.js"></script>
        <script src="../assets/admin/js/oneui.app.min.js"></script>

    </body>

    </html>
<?php } ?>