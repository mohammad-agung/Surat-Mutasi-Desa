<?php
$queryDataPindah = mysqli_query($conn, "SELECT * FROM tbl_datapindah");
$countQueryDataPindah = mysqli_num_rows($queryDataPindah);

$queryDataDatang = mysqli_query($conn, "SELECT * FROM tbl_datadatang");
$countQueryDataDatang = mysqli_num_rows($queryDataDatang);

$queryDataArsipDatang = mysqli_query($conn, "SELECT * FROM tbl_arsip_datang");
$countQueryDataArsipDatang = mysqli_num_rows($queryDataArsipDatang);

$queryDataArsipPindah = mysqli_query($conn, "SELECT * FROM tbl_arsip_pindah");
$countQueryDataArsipPindah = mysqli_num_rows($queryDataArsipPindah);
