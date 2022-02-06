<?php
//koneksi databasae
include '../koneksi.php';

//menangkap data yang dikirim dari form
$id 		= $_POST['id'];
$nama_obat 	= $_POST['nama_obat'];

//update data ke database
mysqli_query($koneksi, "UPDATE obat SET nama_obat='$nama_obat' WHERE id_obat='$id'");

//mengalihkan halaman kembali ke index.php

header("location:obat.php");

?>