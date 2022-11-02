<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM mahasiswa WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $nim = $result['nim'];
    $email = $result['email'];
    $telpon = $result['telpon'];
    $alamat = $result['alamat'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE mahasiswa SET nama='$_POST[nama]',nim='$_POST[nim]',email='$_POST[email]',telpon='$_POST[telpon]',alamat='$_POST[alamat]' WHERE id=$_GET[id]");
    if($query){
        header("Location:index.php");
    } else {
        echo "Update gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1 class="judul">Sistem Informasi Akademik Unmul</h1>
    
    <div class="form-class">
        <h3>Edit Data Mahasiswa</h3>
        <form action="" method="post">
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text" value='<?=$nama?>'><br>
            
            <label for="">NIM</label><br>
            <input type="text" name="nim" class="form-text" value='<?=$nim?>'><br>
            
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text" value='<?=$email?>'><br>
            
            <label for="">Nomor HP</label><br>
            <input type="text" name="telpon" class="form-text" value='<?=$telpon?>'><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" cols="64" rows="10" ><?=$alamat?></textarea><br>
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>