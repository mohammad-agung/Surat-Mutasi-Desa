<?php
if (isset($_POST["kirimdatapindah"])) {

    //cek imk
    if (tambahDataPindah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil Dikirim');
            document.location.href = 'form-pindah';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Dikirim');
            document.location.href = 'form-pindah';
        </script>";
    }
}

if (isset($_POST["kirimdatadatang"])) {
    if (tambahDataDatang($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil Dikirim');
            document.location.href = 'form-datang';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Dikirim');
            document.location.href = 'form-datang';
        </script>";
    }
}
