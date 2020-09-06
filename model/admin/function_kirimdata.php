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
