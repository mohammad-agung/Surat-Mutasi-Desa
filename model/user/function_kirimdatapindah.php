<?php
if (isset($_POST["kirimdatapindah"])) {

    //cek imk
    if (tambahDataPindah($_POST) > 0) {
        echo "
    <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'form-pindah';
    </script>";
    } else {
        echo "
    <script>
        alert('Data Gagal ditambahkan');
        document.location.href = 'form-pindah';
    </script>";
    }
}
