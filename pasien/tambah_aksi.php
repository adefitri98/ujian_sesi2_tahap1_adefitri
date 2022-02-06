<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pasien values('','$nama','$jenis_kelamin','$umur')");
 
// mengalihkan halaman kembali ke index.php
header("location:pasien.php");
 
?>