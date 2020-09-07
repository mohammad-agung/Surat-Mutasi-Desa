<?php

if (isset($_POST["cetaksuratpindah"])) {
    if (ubahDataPindah($_POST) > 0) {
        $tbl_arsip_pindah = $_POST['id'];
        include '../model/template_surat/surat_pindah.php';
        echo "
            <script>
            document.location.href = 'arsip-data-pindah-diterima';
            </script>";
    } else {
        echo "
            <script>
                alert('Ada Kesalahan Saat Mencetak Surat. SIlahkan Coba Lagi');
                document.location.href = 'arsip-data-pindah-diterima';
            </script>";
    }
}
