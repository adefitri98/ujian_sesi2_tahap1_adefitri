<?php
//koneksi databasae
include '../koneksi.php';

//menangkap data yang dikirim dari form
$id 			= $_POST['id'];
$nama_dokter 	= $_POST['nama_dokter'];

//update data ke database
mysqli_query($koneksi, "UPDATE dokter SET nama_dokter='$nama_dokter' WHERE id_dokter='$id'");

//mengalihkan halaman kembali ke index.php

header("location:dokter.php");

?>