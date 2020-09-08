<?php
$pages = 'arsip';
$thisPage = 'arsip-pindah';
session_start();
if (isset($_SESSION['login']) == 0) {
    header('Location: index');
    exit;
} else {
    include '../controller/config.php';
    include '../model/admin/function_datapindaharsip.php';
    include '../model/admin/function_kirimdata.php';
    $id = 1;
    $query = mysqli_query($conn, "SELECT tbl_arsip_pindah.id_arsip_pindah,tbl_arsip_pindah.nama_pemohon,tbl_arsip_pindah.tanggal_arsip,tbl_arsip_pindah.status,tbl_admin.nama_user,tbl_datapindah.nik_pemohon FROM tbl_arsip_pindah JOIN tbl_admin ON tbl_arsip_pindah.id_petugas = tbl_admin.id_user JOIN tbl_datapindah ON tbl_arsip_pindah.id_pemohon = tbl_datapindah.id_datapindah");
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin Data Form Pindah</title>

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../assets/admin/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../assets/admin/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="../assets/admin/fonts/fontfamily/sourcesandpro.css">
        <link rel="stylesheet" id="css-main" href="../assets/admin/css/oneui.min.css">

        <!-- jquery -->
        <script src="../assets/admin/js/core/jquery.min.js"></script>

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
                                Arsip Data Pindah Penduduk
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header">
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%;">ID</th>
                                        <th style="width: 20%;">NIK Pemohon</th>
                                        <th class="d-sm-table-cell" style="width: 30%;">Nama Pemohon</th>
                                        <th>Tanggal Arsip</th>
                                        <th class="d-sm-table-cell" style="width: 20%;">Nama Petugas</th>
                                        <th class="d-sm-table-cell" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <tr>
                                            <td class="text-center font-size-sm"><?= $id++; ?></td>
                                            <td class="font-w600 font-size-sm">
                                                <?= htmlentities($row['nik_pemohon']); ?>
                                            </td>
                                            <td class="d-sm-table-cell font-size-sm">
                                                <?= htmlentities($row['nama_pemohon']); ?>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm"><?= htmlentities($row['tanggal_arsip']); ?></em>
                                            </td>
                                            <td class="d-sm-table-cell font-size-sm">
                                                <?= htmlentities($row['nama_user']); ?>
                                            </td>
                                            <td class="d-sm-table-cell text-center">
                                                <?php if ($row['status'] == 1) { ?>
                                                    <a href="arsip-data-pindah-diterima-cetak?nik=<?= htmlentities($row['nik_pemohon']); ?>&id=<?= intval($row['id_arsip_pindah']); ?>" class="mr-2" title="cetak surat" data-toggle="modal" data-target="#one-modal-apps" id="cetak">
                                                        <span class="si si-printer btn btn-info">
                                                        </span>
                                                    </a>
                                                <?php } ?>
                                                <a href="arsip-data-pindah-diterima-view?nik=<?= htmlentities($row['nik_pemohon']); ?>&id=<?= intval($row['id_arsip_pindah']); ?>" title=" ubah data" data-toggle="modal" data-target="#one-modal-apps" id="view">
                                                    <span class="si si-eye btn btn-success">
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->
                    <!-- END Page Content -->

                </div>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include '../view/admin/copyright.php'; ?>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-lg" role="document" id="get_modal">
                </div>
            </div>
            <!-- END Apps Modal -->

        </div>
        <script>
            $(document).ready(function() {
                $('a#cetak').click(function() {
                    var url = $(this).attr('href');
                    $.ajax({
                        url: url,
                        success: function(response) {
                            $('#get_modal').html(response);
                        }
                    });
                });
                $('a#view').click(function() {
                    var url = $(this).attr('href');
                    $.ajax({
                        url: url,
                        success: function(response) {
                            $('#get_modal').html(response);
                        }
                    });
                });
            });
        </script>

        <script src="../assets/admin/js/oneui.core.min.js"></script>
        <script src="../assets/admin/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/admin/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/admin/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/admin/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="../assets/admin/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="../assets/admin/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="../assets/admin/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="../assets/admin/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/admin/js/pages/be_tables_datatables.min.js"></script>

    </body>

    </html>
<?php } ?>