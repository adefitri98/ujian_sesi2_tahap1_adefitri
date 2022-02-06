<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama_dokter'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into dokter values('','$nama')");
 
// mengalihkan halaman kembali ke index.php
header("location:dokter.php");
 
?>