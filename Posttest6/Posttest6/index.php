<?php
session_start();
require 'koneksi.php';
$select_sql = "SELECT * FROM daftar_playlist ORDER BY id DESC";
// $result = mysqli_query($conn, $select_sql);
$result = mysqli_query($conn, $select_sql);

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $read_select_sql = "SELECT * FROM daftar_playlist WHERE nama_playlist LIKE '%$keyword%'";
    $result = mysqli_query($conn, $read_select_sql);
} else {
    $read_sql = "SELECT * FROM daftar_playlist";
    $result = mysqli_query($conn, $read_sql);
}


if (!$result) {
    echo mysqli_error($conn);
}

$tb_playlist = [];

while ($row = mysqli_fetch_assoc($result)) {
    $tb_playlist[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style0.css">
</head>

<body>
    <section>
        <script>
            
            console.log("Hello World");</script>

        

        
        
        <nav class ="navbar">
            <h1 href="#" id="judul">Playlist Music </h1> <br>
            <ul class="nav-list">
                <li class= "list-item">
                    <!-- <input name="Search" type="text" >
                    <a href="#"><button class="cari" type="submit" name="cari" > Cari </button></a>
                    <button id="btn-info2">Search</button> <br> -->

                <form action="" method="post" class="search">
                <input type= "text" name="keyword" size="50" autofocus 
                placeholder="masukkan keyword pencarian" autocomplete="off">
                <a href="#"><button class="cari" type="submit" name="cari" > Cari </button></a>

        </form>
                </li>

                <li class= "list-item">
                    <label href="#" for="Kg">Home</label>
                </li>

                <li class= "list-item">
                    <label href="#" for="Kg">About Me</label>
                </li>

                <li class= "list-item">
                    <a href="logout.php" for="Kg">Logout</a>
                </li>

                <li>
                    <button id="btn-info">Night / Light Mode</button>
                </li>
            </ul>
            
            
        </nav>
        <a href="index1.php" class="tambah">Playlist</a>
        <button id="btn-info1">A</button>
        <section>
            <img id="gambar1" class="center" draggable="false" title="Divide" src="gambar/Divide.jpg" alt="Divide" style="width: 250px ;">
            <img id="gambar2" class="center" draggable="false" title="Red" src="gambar/red.jpg" alt="Red" style="width: 250px ;">
            <img id="gambar3" class="center" draggable="false" title="V" src="gambar/V.jpg" alt="V" style="width: 250px ;">
            <img id="gambar4" class="center" draggable="false" title="Ghost" src="gambar/coldplay.png" alt="Ghost" style="width: 250px ;">
            <img id="gambar5" class="center" draggable="false" title="Comatose" src="gambar/comatose.jpg" alt="Comatose" style="width: 250px ;">
        </section>
        
        <!-- <article>  -->
            


        <!-- </article> -->


        <!-- <p id="info" style="position: relative;">Sekarang lagi belajar javascript</p> -->
        <script src="javascript.js"></script>
        <script src="jquery.js"></script>
    </section>
    

    
</body>

</html>