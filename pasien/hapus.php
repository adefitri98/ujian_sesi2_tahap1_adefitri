<?php
//koneksi database
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM pasien where id_pasien='$id' ");

//mengalihkan halaman kembali ke index.php
header("location:pasien.php");


?>