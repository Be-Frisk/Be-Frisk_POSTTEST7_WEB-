<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $email = $_POST['email'];
  $telpon = $_POST['telpon'];
  $alamat = $_POST['alamat'];
  $query = mysqli_query($db,"INSERT INTO mahasiswa (nama,nim,email,telpon,alamat) VALUES ('$nama','$nim','$email','$telpon','$alamat')");
  if(!empty($_FILES['gambar']['name'])){
    // Get id mahasiswa
    $query = mysqli_query($db,"SELECT * FROM mahasiswa WHERE nim='$nim'");
    $result = mysqli_fetch_assoc($query);
    $id = $result['id'];
    $nama = $_POST['nama_gambar'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.',$gambar);
    $ekstensi = strtolower(end($x));
    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    if(move_uploaded_file($tmp,"img/$gambar_baru")){
      $query = mysqli_query($db,"INSERT INTO lampiran (id_mahasiswa,nama_file,file) VALUES ($id,'$nama','$gambar_baru');");
      if($query){
        header("Location:index.php");
      } else {
        echo "Tambah data error";
      }
    }
  }
}


?>