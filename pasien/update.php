<?php
//koneksi databasae
include '../koneksi.php';

//menangkap data yang dikirim dari form
$id 			= $_POST['id'];
$nama_pasien 	= $_POST['nama_pasien'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$umur			= $_POST['umur'];

//update data ke database
mysqli_query($koneksi, "UPDATE pasien SET nama_pasien='$nama_pasien', jenis_kelamin='$jenis_kelamin', umur='$umur' WHERE id_pasien='$id'");

//mengalihkan halaman kembali ke index.php

header("location:pasien.php");

?>