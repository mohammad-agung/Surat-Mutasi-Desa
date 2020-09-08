<?php

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahDataDatang($data)
{
    global $conn;

    $nomorsuratpindah = htmlspecialchars($data["nomorsuratpindah"]);

    // Data Daerah Asal
    $nomorkkasal = htmlspecialchars($data["nomorkartukeluargadaerahasal"]);
    $namakepalakeluargaasal = htmlspecialchars($data["namakepalakeluargadaerahasal"]);
    $alamatasal = htmlspecialchars($data["alamatdaerahasal"]);
    $rtasal = htmlspecialchars($data["nomorrtdaerahasal"]);
    $rwasal = htmlspecialchars($data["nomorrwdaerahasal"]);
    $kelurahanasal = htmlspecialchars($data["desakelurahandaerahasal"]);
    $kotaasal = htmlspecialchars($data["kabupatenkotadaerahasal"]);
    $kecamatanasal = htmlspecialchars($data["kecamatandaerahasal"]);
    $provinsiasal = htmlspecialchars($data["provinsidaerahasal"]);
    $kodeposasal = htmlspecialchars($data["kodepos"]);
    $teleponasal = htmlspecialchars($data["notelp"]);
    $nikpemohonasal = $data["nikpemohon"];
    $namapemohonasal = htmlspecialchars($data["namapemohon"]);

    // Data Kepindahan
    $nomorkkdaerahtujuan = htmlspecialchars($data['nomorkartukeluargadaerahtujuan']);
    $nikkepalakeluarga = htmlspecialchars($data['nikkepalakeluarga']);
    $namakepalakeluargatujuan = htmlspecialchars($data["namakepalakeluargadaerahtujuan"]);
    $tanggal_datang = htmlspecialchars($data["tanggalkedatangan"]);
    $alamattujuan = htmlspecialchars($data["alamatdaerahtujuan"]);
    $rttujuan = htmlspecialchars($data["nomorrtdaerahtujuan"]);
    $rwtujuan = htmlspecialchars($data["nomorrwdaerahtujuan"]);
    $kelurahantujuan = htmlspecialchars($data["desakelurahandaerahtujuan"]);
    $kotatujuan = htmlspecialchars($data["kabupatenkotadaerahtujuan"]);
    $kecamatantujuan = htmlspecialchars($data["kecamatandaerahtujuan"]);
    $provinsitujuan = htmlspecialchars($data["provinsidaerahtujuan"]);
    $statuskkpindah = htmlspecialchars($data["statuskk"]);
    // Berkas Pendukung
    $foto_ttd = uploadTTD();
    if (!$foto_ttd) {
        return false;
    }
    $fotottd = date('d-m-Y') . '-' . $foto_ttd;

    $foto_ktp = uploadKtp();
    if (!$foto_ktp) {
        return false;
    }
    $fotoktp = date('d-m-Y') . '-' . $foto_ktp;

    $scan_surat = uploadScan();
    if (!$scan_surat) {
        return false;
    }
    $scansurat = date('d-m-Y') . '-' . $scan_surat;

    // status dan tanggal
    $tanggal = date("Y-m-d");
    $status = 1;

    $query = "INSERT INTO tbl_datadatang VALUES('','$nomorsuratpindah','$nomorkkasal', '$namakepalakeluargaasal','$alamatasal','$rtasal','$rwasal','$kelurahanasal','$kotaasal','$kecamatanasal','$provinsiasal','$kodeposasal','$teleponasal','$nikpemohonasal','$namapemohonasal','$nomorkkdaerahtujuan','$nikkepalakeluarga','$namakepalakeluargatujuan','$tanggal_datang','$alamattujuan','$rttujuan','$rwtujuan','$kelurahantujuan','$kotatujuan','$kecamatantujuan','$provinsitujuan','$statuskkpindah','$tanggal','$status','$fotottd','$fotoktp','$scansurat','')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadKtp()
{
    $namaFile = $_FILES['fotoktp']['name'];
    $ukuranFile = $_FILES['fotoktp']['size'];
    $error = $_FILES['fotoktp']['error'];
    $tmpName = $_FILES['fotoktp']['tmp_name'];


    // cek apakah tidak ada gambar di upload
    if ($error === 4) {
        echo "
			<script>
				alert('pilh gambar terlebih dahulu!');
			</script>
			";
        return false;
    }

    // cek apakah yang di upload itu gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
			<script>
				alert('yang anda upload bukan gambar');
			</script>
			";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 20000000) {
        echo "
			<script>
				alert('ukuran gambar terlalu besar');
			</script>
			";
        return false;
    }

    // lolos pengecekan gambar siap di upload
    // generate nama baru
    $namaFileBaruKTP = uniqid();
    $namaFileBaruKTP .= '.';
    $namaFileBaruKTP .= $ekstensiGambar;

    move_uploaded_file($tmpName,  'img/' . date('d-m-Y') . '-' . $namaFileBaruKTP);

    return $namaFileBaruKTP;
}

function uploadScan()
{
    $namaFile = $_FILES['scansuratpindah']['name'];
    $ukuranFile = $_FILES['scansuratpindah']['size'];
    $error = $_FILES['scansuratpindah']['error'];
    $tmpName = $_FILES['scansuratpindah']['tmp_name'];


    // cek apakah tidak ada gambar di upload
    if ($error === 4) {
        echo "
			<script>
				alert('pilh gambar terlebih dahulu!');
			</script>
			";
        return false;
    }

    // cek apakah yang di upload itu gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
			<script>
				alert('yang anda upload bukan gambar');
			</script>
			";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 20000000) {
        echo "
			<script>
				alert('ukuran gambar terlalu besar');
			</script>
			";
        return false;
    }

    // lolos pengecekan gambar siap di upload
    // generate nama baru
    $namaFileBaruKK = uniqid();
    $namaFileBaruKK .= '.';
    $namaFileBaruKK .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . date('d-m-Y') . '-' . $namaFileBaruKK);

    return $namaFileBaruKK;
}

function uploadTTD()
{
    $namaFile = $_FILES['fotottd']['name'];
    $ukuranFile = $_FILES['fotottd']['size'];
    $error = $_FILES['fotottd']['error'];
    $tmpName = $_FILES['fotottd']['tmp_name'];


    // cek apakah tidak ada gambar di upload
    if ($error === 4) {
        echo "
			<script>
				alert('pilh gambar terlebih dahulu!');
			</script>
			";
        return false;
    }

    // cek apakah yang di upload itu gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
			<script>
				alert('yang anda upload bukan gambar');
			</script>
			";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 20000000) {
        echo "
			<script>
				alert('ukuran gambar terlalu besar');
			</script>
			";
        return false;
    }

    // lolos pengecekan gambar siap di upload
    // generate nama baru
    $namaFileBaruTTD = uniqid();
    $namaFileBaruTTD .= '.';
    $namaFileBaruTTD .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . date('d-m-Y') . '-' . $namaFileBaruTTD);

    return $namaFileBaruTTD;
}
