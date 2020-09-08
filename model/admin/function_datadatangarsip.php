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

// ============================================================================

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

    $tanggal = date("Y-m-d");
    $status = 1;

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

function editDataDatang($data)
{
    global $conn;

    $nomorsurat = htmlspecialchars($data["nomorsurat"]);
    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);
    $namapemohonasal = htmlspecialchars($data["namapemohon"]);
    $nomorkkasal = htmlspecialchars($data["nomorkk"]);
    $namakepalakeluargaasal = htmlspecialchars($data["namakepalakeluarga"]);
    $nomorkktujuan = htmlspecialchars($data["nomorkkkeluargatujuan"]);
    $nikkepalakeluarga = htmlspecialchars($data["nikkepalakeluarga"]);
    $namakepalakeluargatujuan = htmlspecialchars($data["namakepalakeluargatujuan"]);
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
    $tanggaldatang = htmlspecialchars($data["tanggaldatang"]);
    $statuskkpindah = htmlspecialchars($data["statuskk"]);

    $idpemohon = intval($data['id_pemohon']);

    $query = "UPDATE tbl_datadatang SET
                nomor_surat_pindah = '$nomorsurat',
                nik_pemohon = '$nikpemohonasal',
                nama_pemohon = '$namapemohonasal',
                nomorkk_asal = '$nomorkkasal',
                namakepalakeluarga_asal = '$namakepalakeluargaasal',
                nomorkkdaerahtujuan = '$nomorkktujuan',
                nikkepalakeluarga = '$nikkepalakeluarga',
                namakepalakeluargatujuan = '$namakepalakeluargatujuan',
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
                tanggal_datang = '$tanggaldatang'
                WHERE id_datadatang = '$idpemohon'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahDataDatang($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);

    // query insert data
    $query = "UPDATE tbl_datadatang SET
				status = 2,
                keterangan = 'Surat Siap Di Cetak'
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
				status = 0,  
                keterangan = 'Surat Dipending ,Harap Cek Data Di Kantor Desa'
			WHERE nik_pemohon = '$nikpemohonasal'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusDataDatang($data)
{
    global $conn;

    $id = intval($data['id_pemohon']);

    mysqli_query($conn, "DELETE FROM tbl_datadatang WHERE id_datadatang = $id");

    return mysqli_affected_rows($conn);
}

// ======================================================================

function arsipUbahDatang($data)
{
    global $conn;

    $nomorsuratpindah = htmlspecialchars($data['nomorsuratpindah']);
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

    $idpetugas = intval($data['id_petugas']);
    $idarsip = intval($data['id']);

    $tanggal = date("Y-m-d");

    $query = "UPDATE tbl_arsip_datang SET 
                nomor_surat = '$nomorsuratpindah',
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
                id_petugas = '$idpetugas',
                tanggal_arsip = '$tanggal'
                WHERE id_arsip_datang = '$idarsip'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahNIKDatang($data)
{
    global $conn;

    $nikpemohonasal = htmlspecialchars($data["nikpemohon"]);
    $iddatang = intval($data['id_pemohon']);

    $query = "UPDATE tbl_datadatang SET
				nik_pemohon = '$nikpemohonasal'
            WHERE id_datadatang = '$iddatang'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// ====================================================================

function cetakSuratDatang($data)
{
    global $conn;

    $id = intval($data["id"]);
    $nomorsurat = htmlspecialchars($data["nomorsurat"]);

    $query = "UPDATE tbl_arsip_datang SET
				nomor_surat_cetak = '$nomorsurat',
                status = 2
			WHERE id_arsip_datang = '$id'
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
