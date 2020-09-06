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

function arsipTerimaPindah($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);
    $namapemohonasal = htmlspecialchars($data["namapemohon"]);
    $nomorkkasal = htmlspecialchars($data["nomorkk"]);
    $namakepalakeluargaasal = htmlspecialchars($data["namakepalakeluarga"]);
    $alamatasal = htmlspecialchars($data["alamatasal"]);
    $alamattujuan = htmlspecialchars($data["alamattujuan"]);
    $kelurahanasal = htmlspecialchars($data["kelurahanasal"]);
    $kelurahantujuan = htmlspecialchars($data["kelurahantujuan"]);
    $kecamatanasal = htmlspecialchars($data["kecamatanasal"]);
    $kecamatantujuan = htmlspecialchars($data["kecamatantujuan"]);
    $kotaasal = htmlspecialchars($data["kotaasal"]);
    $kotatujuan = htmlspecialchars($data["kotatujuan"]);
    $provinsiasal = htmlspecialchars($data["provinsiasal"]);
    $provinsitujuan = htmlspecialchars($data["provinsitujuan"]);
    $alasanpindah = htmlspecialchars($data["alasanpindah"]);
    $statuskkpindah = htmlspecialchars($data["statuskk"]);

    $id_petugas = intval($data['id_petugas']);

    // status dan tanggal
    $tanggal = date("Y-m-d");
    $status = 1;

    $query = "INSERT INTO tbl_arsip_pindah VALUES('','$nikpemohonasal', '$namapemohonasal','$nomorkkasal','$namakepalakeluargaasal','$alamatasal','$alamattujuan','$kelurahanasal','$kelurahantujuan','$kecamatanasal','$kecamatantujuan','$kotaasal','$kotatujuan','$provinsiasal','$provinsitujuan','$statuskkpindah','$alasanpindah','','$id_petugas','$tanggal','$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahDataPindah($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    // query insert data
    $query = "UPDATE tbl_datapindah SET
				status = 2
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function pendingDataPindah($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    // query insert data
    $query = "UPDATE tbl_datapindah SET
				status = 0
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
