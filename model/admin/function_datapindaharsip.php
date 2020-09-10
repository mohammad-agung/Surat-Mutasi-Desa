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

// ======================================================================

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

    $tanggal = date("Y-m-d");
    $status = 1;

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
                id_petugas = '$idpetugas',
                tanggal_arsip = '$tanggal',
                status = '$status'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editDataPindah($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);
    $namapemohonasal = htmlspecialchars($data["namapemohon"]);
    $nomorkkasal = htmlspecialchars($data["nomorkk"]);
    $namakepalakeluargaasal = htmlspecialchars($data["namakepalakeluarga"]);
    $rtasal = htmlspecialchars($data["rtasal"]);
    $rttujuan = htmlspecialchars($data["rttujuan"]);
    $rwasal = htmlspecialchars($data["rwasal"]);
    $rwtujuan = htmlspecialchars($data["rwtujuan"]);
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

    $idpemohon = intval($data['id_pemohon']);

    $query = "UPDATE tbl_datapindah SET
                nik_pemohon = '$nikpemohonasal',
                nama_pemohon = '$namapemohonasal',
                nomorkk_asal = '$nomorkkasal',
                namakepalakeluarga_asal = '$namakepalakeluargaasal',
                rt_asal = '$rtasal',
                rt_tujuan = '$rttujuan',
                rw_asal = '$rwasal',
                rw_tujuan = '$rwtujuan',
                alamat_asal = '$alamatasal',
                alamat_tujuan = '$alamattujuan',
                desa_kelurahan_asal = '$kelurahanasal',
                desa_kelurahan_tujuan = '$kelurahantujuan',
                kecamatan_asal = '$kecamatanasal',
                kecamatan_tujuan = '$kecamatantujuan',
                kabupaten_kota_asal = '$kotaasal',
                kabupaten_kota_tujuan = '$kotatujuan',
                provinsi_asal = '$provinsiasal',
                provinsi_tujuan = '$provinsitujuan',
                statuskk_pindah = '$statuskkpindah',
                alasan_pindah = '$alasanpindah'
                WHERE id_datapindah = '$idpemohon'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahDataPindah($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    $query = "UPDATE tbl_datapindah SET
				status = 2,
                keterangan = 'Surat Siap Di Cetak'
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function pendingDataPindah($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    $query = "UPDATE tbl_datapindah SET
				status = 0,  
                keterangan = 'Surat Dipending ,Harap Cek Data Di Kantor Desa'
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusDataPindah($data)
{
    global $conn;

    $id = intval($data['id_pemohon']);

    mysqli_query($conn, "DELETE FROM tbl_datapindah WHERE id_datapindah = $id");

    return mysqli_affected_rows($conn);
}

// ======================================================================

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

    $tanggal = date("Y-m-d");

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

    $query = "UPDATE tbl_datapindah SET
				nik_pemohon = '$nikpemohonasal'
            WHERE id_datapindah = '$idpindah'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// =====================================================================