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

function tambahDataPindah($data)
{
    global $conn;

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
    $kodeposasal = htmlspecialchars($data["kodeposdaerahasal"]);
    $teleponasal = htmlspecialchars($data["notelpdaerahasal"]);
    $nikpemohonasal = $data["nikpemohon"];
    $namapemohonasal = htmlspecialchars($data["namapemohon"]);

    // Data Kepindahan
    $alasanpindah = htmlspecialchars($data["alasanpindah"]);
    $alamattujuan = htmlspecialchars($data["alamatdaerahtujuan"]);
    $rttujuan = htmlspecialchars($data["nomorrtdaerahtujuan"]);
    $rwtujuan = htmlspecialchars($data["nomorrwdaerahtujuan"]);
    $kelurahantujuan = htmlspecialchars($data["desakelurahandaerahtujuan"]);
    $kotatujuan = htmlspecialchars($data["kabupatenkotadaerahtujuan"]);
    $kecamatantujuan = htmlspecialchars($data["kecamatandaerahtujuan"]);
    $provinsitujuan = htmlspecialchars($data["provinsidaerahtujuan"]);
    $statuskktidakpindah = htmlspecialchars($data["statuskktidakpindah"]);
    $statuskkpindah = htmlspecialchars($data["statuskkpindah"]);

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

    $foto_kk = uploadKK();
    if (!$foto_kk) {
        return false;
    }
    $fotokk = date('d-m-Y') . '-' . $foto_kk;

    // status dan tanggal
    $tanggal = date("Y-m-d");
    $status = 1;

    $query = "INSERT INTO tbl_datapindah VALUES('$nomorkkasal', '$namakepalakeluargaasal','$alamatasal','$rtasal','$rwasal','$kelurahanasal','$kotaasal','$kecamatanasal','$provinsiasal','$kodeposasal','$teleponasal','$nikpemohonasal','$namapemohonasal','$alasanpindah','$alamattujuan','$rttujuan','$rwtujuan','$kelurahantujuan','$kotatujuan','$kecamatantujuan','$provinsitujuan','$statuskktidakpindah','$statuskkpindah','$tanggal','$status','$fotottd','$fotoktp','$fotokk')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadKtp()
{
    $namaFile = $_FILES['foto_ktp']['name'];
    $ukuranFile = $_FILES['foto_ktp']['size'];
    $error = $_FILES['foto_ktp']['error'];
    $tmpName = $_FILES['foto_ktp']['tmp_name'];


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

function uploadKK()
{
    $namaFile = $_FILES['foto_kk']['name'];
    $ukuranFile = $_FILES['foto_kk']['size'];
    $error = $_FILES['foto_kk']['error'];
    $tmpName = $_FILES['foto_kk']['tmp_name'];


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
    $namaFile = $_FILES['foto_ttd']['name'];
    $ukuranFile = $_FILES['foto_ttd']['size'];
    $error = $_FILES['foto_ttd']['error'];
    $tmpName = $_FILES['foto_ttd']['tmp_name'];


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
