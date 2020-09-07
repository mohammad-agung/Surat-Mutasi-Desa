<?php
$date = date('Y-m-d');

$queryDataPindah = mysqli_query($conn, "SELECT * FROM tbl_datapindah WHERE tanggal_buat='$date'");
$countQueryDataPindah = mysqli_num_rows($queryDataPindah);

$queryDataDatang = mysqli_query($conn, "SELECT * FROM tbl_datadatang WHERE tanggal_buat='$date'");
$countQueryDataDatang = mysqli_num_rows($queryDataDatang);

$queryDataArsipDatang = mysqli_query($conn, "SELECT * FROM tbl_arsip_datang");
$countQueryDataArsipDatang = mysqli_num_rows($queryDataArsipDatang);

$queryDataArsipPindah = mysqli_query($conn, "SELECT * FROM tbl_arsip_pindah");
$countQueryDataArsipPindah = mysqli_num_rows($queryDataArsipPindah);
