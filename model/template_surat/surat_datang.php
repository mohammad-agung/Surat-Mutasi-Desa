<?php
// $query = mysqli_query($conn, "SELECT tbl_arsip_pindah.id_arsip_pindah,tbl_arsip_pindah.nama_pemohon,tbl_arsip_pindah.tanggal_arsip,tbl_arsip_pindah.status,tbl_admin.nama_user,tbl_datapindah.nik_pemohon FROM tbl_arsip_pindah JOIN tbl_admin ON tbl_arsip_pindah.id_petugas = tbl_admin.id_user JOIN tbl_datapindah ON tbl_arsip_pindah.id_pemohon = tbl_datapindah.id_datapindah");

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; Filename=surat-datang.doc");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

</body>

</html>