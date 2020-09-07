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

function tambahDataKontak($data)
{
    global $conn;

    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $telp = htmlspecialchars($data['telp']);

    $query = "INSERT INTO tbl_contact SET 
                id_contact = '',
                alamat = '$alamat',
                email = '$email',
                telepon = '$telp'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahDataKontak($data)
{
    global $conn;

    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $telp = htmlspecialchars($data['telp']);

    $query = "UPDATE tbl_contact SET 
                alamat = '$alamat',
                email = '$email',
                telepon = '$telp'
                WHERE id_contact = 1";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
