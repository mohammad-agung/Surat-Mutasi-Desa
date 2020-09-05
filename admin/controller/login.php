<?php
session_start();
include('../../controller/config.php');
// error_reporting(0);
if (isset($_POST['login'])) {
    // Getting username/ email and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username='$username'");

    $num = mysqli_fetch_array($sql);

    if ($num > 0) {
        $status = $num['status'];

        if ($status == 1) {
            $hashpassword = $num['password']; // Hashed password fething from database

            //verifying Password
            if (password_verify($password, $hashpassword)) {
                $namauser = $num['nama_user'];

                $_SESSION['login'] = $namauser;
                $_SESSION['username'] = $username;
                echo "<script>document.location = '../dashboard'</script>";
            } else {
                echo "<script>alert('Password Salah');
					document.location = '../';</script>";
            }
        } else {
            echo "<script>alert('username tidak aktif');
					document.location = '../';</script>";
        }
    } //if username or email not found in database
    else {
        echo "<script>alert('username tidak ada');
				document.location = '../';</script>";
    }
}
