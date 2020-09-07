<?php
if (isset($_POST["arsipterimapindah"])) {

    //cek imk
    if (arsipTerimaPindah($_POST) > 0 && ubahDataPindah($_POST) > 0) {
        echo "
            <script>
            alert('Data Diarsipkan');
            document.location.href = 'data-form-pindah';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Di arsip');
                document.location.href = 'data-form-pindah';
            </script>";
    }
}

if (isset($_POST["arsipubahpindah"])) {

    //cek imk
    if (arsipUbahPindah($_POST) > 0 || ubahNIK($_POST) > 0) {
        echo "
            <script>
            alert('Data Berhasil DiUbah');
            document.location.href = 'arsip-data-pindah-diterima';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Di Ubah');
                document.location.href = 'arsip-data-pindah-diterima';
            </script>";
    }
}

if (isset($_POST["arsipterimadatang"])) {

    //cek imk
    if (arsipTerimaDatang($_POST) > 0 && ubahDataDatang($_POST) > 0) {
        echo "
            <script>
            alert('Data Diarsipkan');
            document.location.href = 'data-form-datang';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Di arsip');
                document.location.href = 'data-form-datang';
            </script>";
    }
}

if (isset($_POST["arsiptundapindah"])) {
    if (pendingDataPindah($_POST) > 0) {
        echo "
            <script>
            alert('Data Di arsip pending');
            document.location.href = 'data-form-pindah';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Di arsipkan');
                document.location.href = 'data-form-pindah';
            </script>";
    }
}

if (isset($_POST["arsiptundadatang"])) {
    if (pendingDataDatang($_POST) > 0) {
        echo "
            <script>
            alert('Data Di arsip pending');
            document.location.href = 'data-form-datang';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Di arsipkan');
                document.location.href = 'data-form-datang';
            </script>";
    }
}

if (isset($_POST["cetaksuratpindah"])) {
    if (cetakSuratPindah($_POST) > 0) {
        $tbl_arsip_pindah = $_POST['id'];
        include '../model/template_surat/surat_pindah.php';
    } else {
        echo "
            <script>
                alert('Ada Kesalahan Saat Mencetak Surat. SIlahkan Coba Lagi');
                document.location.href = 'arsip-data-pindah-diterima';
            </script>";
    }
}

// kirim data pages

if (isset($_POST["tambahkontak"])) {
    if (tambahDataKontak($_POST) > 0) {
        echo "
            <script>
            alert('Kontak Di tambahkan');
            document.location.href = 'page-manage';
            </script>";
    } else {
        echo "
            <script>
                alert('gagal menambahkan kontak');
                document.location.href = 'page-manage';
            </script>";
    }
}

if (isset($_POST["ubahkontak"])) {
    if (ubahDataKontak($_POST) > 0) {
        echo "
            <script>
            alert('Kontak Di diubah');
            document.location.href = 'page-manage';
            </script>";
    } else {
        echo "
            <script>
                alert('gagal mengubah kontak');
                document.location.href = 'page-manage';
            </script>";
    }
}
