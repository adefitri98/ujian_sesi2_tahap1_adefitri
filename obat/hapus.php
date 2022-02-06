<?php
//koneksi database
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM obat where id_obat='$id' ");

//mengalihkan halaman kembali ke index.php
header("location:obat.php");


?>