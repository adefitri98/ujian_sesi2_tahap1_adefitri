<?php
//koneksi database
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM berobat where id_berobat='$id' ");

//mengalihkan halaman kembali ke index.php
header("location:berobat.php");


?>