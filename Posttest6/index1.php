<?php
require 'koneksi.php';
$select_sql = "SELECT * FROM daftar_playlist ORDER BY id DESC";
$result = mysqli_query($conn, $select_sql);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>HOME</title>
</head>

<body>
    <section class="content">
        <form action="" method="post" class="search">
        <input type= "text" name="keyword" size="50" autofocus 
        placeholder="masukkan keyword pencarian" autocomplete="off">
        <a href="#"><button class="cari" type="submit" name="cari" > Cari </button></a>

        </form>
        <br>

        <h1 class="title">PLAYLIST</h1>
        <a href="create1.php"><button class="create"><i class="fas fa-plus"></i> Tambah Data</button></a>
        <table>
            <tr>
                <th>NO</th>
                <th>NAMA PLAYLIST</th>
                <th>NAMA LAGU</th>
                <th>ARTIST</th>
                <th>GENDRE</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($tb_playlist as $pkn) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $pkn["nama_playlist"] ?></td>
                    <td><?= $pkn["nama_lagu"] ?></td>
                    <td><?= $pkn["artist"] ?></td>
                    <td><?= $pkn["gendre"] ?></td>
                    <td><a href="update.php?id=<?= $pkn["id"]; ?>"><button class="update"><i class="fas fa-pen"></i></button></a>
                        <a href="delete.php?id=<?= $pkn["id"]; ?>"><button class="delete"><i class="fas fa-trash"></i></button></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <a href="index.php"><button class="create"> HOME </button></a>
    </section>
</body>

</html>