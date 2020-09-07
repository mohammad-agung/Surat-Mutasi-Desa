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

function ubahDataPindah($data)
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
