<?php 
    $query = mysqli_query($conn, "SELECT * FROM tbl_contact");
    while ($row = mysqli_fetch_array($query)){
        $alamat = htmlentities($row['alamat']);
        $email = htmlentities($row['email']);
        $telepon = htmlentities($row['telepon']);
    }
