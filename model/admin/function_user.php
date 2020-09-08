<?php

include('../../controller/config.php');
if (isset($_POST['ubahprofil'])) {

    $namauserlama = htmlspecialchars($_POST['nameold']);
    $namauser = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    // new password hashing 
    $newpassword = htmlspecialchars($_POST['newpassword']);
    $newhashedpass = password_hash($newpassword, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "SELECT nama_user,username,password FROM tbl_admin where username='$namauserlama'");

    $num = mysqli_fetch_array($query);

    if ($num > 0) {
        $dbpassword = $num['password'];

        if (password_verify($password, $dbpassword)) {

            $con = mysqli_query($conn, "UPDATE tbl_admin set password='$newhashedpass',username='$username',nama_user='$namauser' where username='$namauserlama'");
            echo "
                <script>
                    alert('Akun Berhasil Di Rubah, Silahkan Login Kembali');
                    document.location.href = '../../admin/controller/logout.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Password Lama Salah!!');
                    window.location=history.go(-1);
                </script>";
        }
    } else {
        echo "
                <script>
                    alert('Password Gagal Di Rubah!!');
                    window.location=history.go(-1);
                </script>";
    }
}
