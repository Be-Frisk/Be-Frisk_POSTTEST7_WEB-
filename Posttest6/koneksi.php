<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "playlist";

$conn = mysqli_connect($server, $user, $pass, $db_name);


if (!$conn) {
    die("Gagal terhubung ke database : " . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $result = mysqli_fetch_assoc($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword) {
    $query = " SELECT * FROM daftar_playlist 
                WHERE
            nama_playlist LIKE '%$keyword%'
            ";
    return query($query);
}

?>