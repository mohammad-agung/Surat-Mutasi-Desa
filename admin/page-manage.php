<?php
session_start();
if (isset($_SESSION['login']) == 0) {
    header('Location: index');
    exit;
} else {
    include '../controller/config.php';
    include '../model/admin/function_pages.php';
    include '../model/admin/function_kirimdata.php';
    $query = mysqli_query($conn, "SELECT * FROM tbl_contact");
    $countQuery = mysqli_num_rows($query);
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin Manage Pages</title>

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="../assets/admin/fonts/fontfamily/sourcesandpro.css">
        <link rel="stylesheet" id="css-main" href="../assets/admin/css/oneui.min.css">

        <!-- my style -->
        <link rel="stylesheet" href="../assets/admin/css/style.css">

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
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Kelola Halaman
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">General</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Halaman Kontak</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <form class="js-validation" method="POST">
                        <div class="block">
                            <div class="block-header">
                            </div>
                            <div class="block-content block-content-full">
                                <!-- Regular -->
                                <?php
                                if ($countQuery > 0) {
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <label for="val-alamat">Alamat<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="val-alamat" name="alamat" rows="4" placeholder="Alamat"><?= htmlentities($row['alamat']); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <label for="val-email">Email<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="val-email" name="email" rows="4" placeholder="Email"><?= htmlentities($row['email']); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group">
                                                    <label for="val-telp">Telepon<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="val-telp" name="telp" rows="4" placeholder="Telepon"><?= htmlentities($row['telepon']); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Regular -->
                                        <!-- Submit -->
                                        <div class="row items-push mt-2">
                                            <div class="col-12 offset-md-8 col-md-4">
                                                <button type="submit" name="ubahkontak" class="btn btn-primary full-button">Ubah Kontak Kami</button>
                                            </div>
                                        </div>
                                        <!-- END Submit -->
                                    <?php }
                                } else { ?>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="val-alamat">Alamat<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="val-alamat" name="alamat" rows="4" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="val-email">Email<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="val-email" name="email" rows="4" placeholder="Email"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="val-telp">Telepon<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="val-telp" name="telp" rows="4" placeholder="Telepon"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Regular -->
                                    <!-- Submit -->
                                    <div class="row items-push mt-2">
                                        <div class="col-12 offset-md-8 col-md-4">
                                            <button type="submit" name="tambahkontak" class="btn btn-primary full-button">Tambah Data Kontak</button>
                                        </div>
                                    </div>
                                    <!-- END Submit -->
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                    <!-- jQuery Validation -->
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