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

    $idpetugas = intval($data['id_petugas']);
    $idpemohon = intval($data['id_pemohon']);

    // status dan tanggal
    $tanggal = date("Y-m-d");
    $status = 1;

    // $queryIdPemohon = "SELECT id_datapindah FROM tbl_datapindah WHERE id_datapindah='$idpemohon'";
    // $queryIdPetugas = "SELECT id_user FROM tbl_admin WHERE id_user='$idpetugas'";

    $query = "INSERT INTO tbl_arsip_pindah SET 
                id_arsip_pindah = '',
                id_pemohon = '$idpemohon',
                nama_pemohon = '$namapemohonasal',
                nomor_kartu_keluarga = '$nomorkkasal',
                nama_kepala_keluarga = '$namakepalakeluargaasal',
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
                status_kk = '$statuskkpindah',
                alasanpindah = '$alasanpindah',
                nomor_surat = '',
                id_petugas = '$idpetugas',
                tanggal_arsip = '$tanggal',
                status = '$status'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function arsipUbahPindah($data)
{
    global $conn;

    $namapemohonasal = htmlspecialchars($data["namapemohon"]);
    $nomorkkasal = htmlspecialchars($data["nomorkartukeluarga"]);
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

    $idpetugas = intval($data['id_petugas']);
    $idarsip = intval($data['id']);

    // status dan tanggal
    $tanggal = date("Y-m-d");

    // $queryIdPemohon = "SELECT id_datapindah FROM tbl_datapindah WHERE id_datapindah='$idpemohon'";
    // $queryIdPetugas = "SELECT id_user FROM tbl_admin WHERE id_user='$idpetugas'";

    $query = "UPDATE tbl_arsip_pindah SET 
                nama_pemohon = '$namapemohonasal',
                nomor_kartu_keluarga = '$nomorkkasal',
                nama_kepala_keluarga = '$namakepalakeluargaasal',
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
                alasanpindah = '$alasanpindah',
                id_petugas = '$idpetugas',
                tanggal_arsip = '$tanggal'
                WHERE id_arsip_pindah = '$idarsip'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahNIK($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);
    $idpindah = intval($data['id_pemohon']);

    // query insert data
    $query = "UPDATE tbl_datapindah SET
				nik_pemohon = '$nikpemohonasal'
            WHERE id_datapindah = '$idpindah'";

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


function cetakSuratPindah($data)
{
    global $conn;

    $id = intval($data["id"]);
    $nomorsurat = htmlspecialchars($data["nomorsurat"]);

    // query insert data
    $query = "UPDATE tbl_arsip_pindah SET
				nomor_surat = '$nomorsurat',
                status = 2
			WHERE id_arsip_pindah = '$id'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
