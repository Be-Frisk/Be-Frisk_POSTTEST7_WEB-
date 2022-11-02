<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $nama_playlist = htmlspecialchars($_POST["nama_playlist"]);
    $nama_lagu = htmlspecialchars($_POST["nama_lagu"]);
    $artist = htmlspecialchars($_POST["artist"]);
    $gendre = htmlspecialchars($_POST["gendre"]);
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO perpus (pinjam, kembali, nama) VALUES ('$pinjam','$kembali','$gambar_baru')";
        $result = $db->query($query);

    $insert_sql = "INSERT INTO daftar_playlist VALUES ('','$nama_playlist','$nama_lagu','$artist','$gendre')";
    $result = mysqli_query($conn, $insert_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'create.php';
        </script>";
    }
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
    <title>CREATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-header">
                <h2>DAFTAR PLAYLIST</h2>
            </div>
            <div class="form-content">
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Nama Playlist :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="nama_playlist" autocomplete="off">
                    </div>
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Nama Lagu :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="nama_lagu" autocomplete="off">
                    </div>
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Artist :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="artist" autocomplete="off">
                    </div>
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Gendre :</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="JAZZ" checked>
                        <label for="">JAZZ</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="POP">
                        <label for="">POP</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="R&B">
                        <label for="">R&B</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="KLASIK">
                        <label for="">KLASIK</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="RAP">
                        <label for="">RAP</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="BLUES">
                        <label for="">BLUES</label>
                    </div>
                    <div class="form-input-radio">
                        <input type="radio" name="gendre" value="LAINNYA">
                        <label for="">LAINNYA</label>
                    </div>
                    
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Gambar Playlist :</label>
                    </div>
                    <div class="form-input">
                        <input type="file" name="gambar" autocomplete="off">
                    </div>
                </div>
                <div class="form-button">
                    <button type="submit" name="submit">Submit</button>
                    <a href="index.php">Kembali ke Home</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>