<?php
require 'koneksi.php';

$id = $_GET["id"];

$select_sql = "SELECT * FROM daftar_playlist WHERE id = $id";
$result = mysqli_query($conn, $select_sql);

$pkn = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pkn[] = $row;
}

$pkn = $pkn[0];

if (isset($_POST["update"])) {
    $nama_playlist = htmlspecialchars($_POST["nama_playlist"]);
    $nama_lagu = htmlspecialchars($_POST["nama_lagu"]);
    $artist = htmlspecialchars($_POST["artist"]);
    $gendre = htmlspecialchars($_POST["gendre"]);


    $update_sql = "UPDATE daftar_playlist SET nama_playlist='$nama_playlist',nama_lagu='$nama_lagu'
                    ,artist='$artist',gendre='$gendre' WHERE id=$id";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil diupdate!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diupdate!');
            document.location.href = 'update.php';
        </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-header">
                <h2>FORM UPDATE DATA PLAYLIST</h2>
            </div>
            <input type="hidden" name="id" value="<?= $pkn["id"]; ?>>
            <div class=  "form-content" >
            <div class="form-area">
                <div class="form-label">
                    <label for="">Nama Playlist:</label>
                </div>
                <div class="form-input">
                    <input type="text" name="nama_playlist" value="<?= $pkn["nama_playlist"]; ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-area">
                <div class="form-label">
                    <label for="">Nama Lagu :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="nama_lagu" value="<?= $pkn["nama_lagu"]; ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-area">
                <div class="form-label">
                    <label for="">Artist :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="artist" value="<?= $pkn["artist"]; ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-area">
                <div class="form-label">
                    <label for="">Gendre :</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "JAZZ" ? "checked" : "JAZZ" ?> value="JAZZ">
                    <label for="">JAZZ</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "POP" ? "checked" : "POP" ?> value="POP">
                    <label for="">POP</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "R&B" ? "checked" : "R&B" ?> value="R&B">
                    <label for="">R&B</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "KLASIK" ? "checked" : "KLASIK" ?> value="KLASIK">
                    <label for="">KLASIK</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "RAP" ? "checked" : "RAP" ?> value="RAP">
                    <label for="">RAP</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "BLUES" ? "checked" : "BLUES" ?> value="BLUES">
                    <label for="">BLUES</label>
                </div>
                <div class="form-input-radio">
                    <input type="radio" name="gendre" <?= $pkn['gendre'] == "LAINNYA" ? "checked" : "LAINNYA" ?> value="LAINNYA">
                    <label for="">LAINNYA</label>
                </div>
                </div>
            </div>
            <div class="form-button">
                <button type="submit" name="update">Update</button>
                <a href="index.php">Kembali ke Home</a>
            </div>
    </div>
    </form>
    </div>
</body>

</html>