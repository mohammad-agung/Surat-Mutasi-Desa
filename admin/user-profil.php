<?php
session_start();
if (isset($_SESSION['login']) == 0) {
    header('Location: index');
    exit;
} else {
    include '../controller/config.php';
    $user_session = $_SESSION['username'];
    $query = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username='$user_session'");
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin User Profil</title>

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="../assets/admin/fonts/fontfamily/sourcesandpro.css">
        <link rel="stylesheet" id="css-main" href="../assets/admin/css/oneui.min.css">

        <!-- my style -->
        <link rel="stylesheet" href="../assets/admin/css/style.css">

        <script type="text/javascript">
            function valid() {
                if (document.chngpwd.newpassword.value != document.chngpwd.retypepassword.value) {
                    alert("password baru dan konfirmasi password tidak sama!!!");
                    document.chngpwd.retypepassword.focus();
                    return false;
                }
                return true;
            }
        </script>
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
                                Form User
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">User</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">User Profil</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <form class="js-validation" method="POST" name="chngpwd" onSubmit="return valid();" action="../model/admin/function_user.php">
                        <div class="block">
                            <div class="block-header">
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row">
                                    <!-- Regular -->
                                    <input type="hidden" name="nameold" value="<?= $user_session; ?>">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <div class="col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="val-namauser">Nama User <span class="text-danger">*</span></label>
                                                <input type="text" id="val-namauser" name="name" class="form-control" required value="<?= htmlentities($row['nama_user']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="val-username">Username <span class="text-danger">*</span></label>
                                                <input type="text" id="val-username" name="username" class="form-control" required value="<?= htmlentities($row['username']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="val-password">Password Lama<span class="text-danger">*</span></label>
                                                <input type="text" for="password" name="password" class="form-control" required placeholder="Password Lama">
                                            </div>
                                            <div class="form-group">
                                                <label for="val-newpassword">Password Baru<span class="text-danger">*</span></label>
                                                <input type="text" id="val-newpassword" name="newpassword" class="form-control" required placeholder="Password Baru">
                                            </div>
                                            <div class="form-group">
                                                <label for="val-confirm-password">Konfirmasi Password<span class="text-danger">*</span></label>
                                                <input type="text" id="val-confirm-password" name="retypepassword" class="form-control" required placeholder="Konfirmasi Password">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- END Regular -->
                                <!-- Submit -->
                                <div class="row items-push mt-2">
                                    <div class="col-12 offset-md-10 col-md-2">
                                        <button type="submit" name="ubahprofil" class="btn btn-primary full-button">Submit</button>
                                    </div>
                                </div>
                                <!-- END Submit -->
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