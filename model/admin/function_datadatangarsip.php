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

function arsipTerimaDatang($data)
{
    global $conn;

    $namapemohonasal = htmlspecialchars($data["namapemohon"]);
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
    $nomorsurat = htmlspecialchars($data["nomorsurat"]);

    $idpetugas = intval($data['id_petugas']);
    $idpemohon = intval($data['id_pemohon']);

    // status dan tanggal
    $tanggal = date("Y-m-d");
    $status = 1;

    // $queryIdPemohon = "SELECT id_datapindah FROM tbl_datapindah WHERE id_datapindah='$idpemohon'";
    // $queryIdPetugas = "SELECT id_user FROM tbl_admin WHERE id_user='$idpetugas'";

    $query = "INSERT INTO tbl_arsip_datang SET 
                id_arsip_datang = '',
                id_pemohon = '$idpemohon',
                nama_pemohon = '$namapemohonasal',
                alamat_asal = '$alamatasal',
                alamat_tujuan = '$alamattujuan',
                kelurahan_asal = '$kelurahanasal',
                kelurahan_tujuan = '$kelurahantujuan',
                kecamatan_asal = '$kecamatanasal',
                kecamatan_tujuan = '$kecamatantujuan',
                kota_asal = '$kotaasal',
                kota_tujuan = '$kotatujuan',
                provinsi_asal = '$provinsiasal',
                provinsi_tujuan = '$provinsitujuan',
                nomor_surat = '$nomorsurat',
                id_petugas = '$idpetugas',
                tanggal_arsip = '$tanggal',
                status = '$status'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahDataDatang($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    // query insert data
    $query = "UPDATE tbl_datadatang SET
				status = 2
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function pendingDataDatang($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    // query insert data
    $query = "UPDATE tbl_datadatang SET
				status = 0
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
