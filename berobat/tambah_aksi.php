<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pasien 			= $_POST['id_pasien'];
$id_dokter 			= $_POST['id_dokter'];
$tgl_berobat 		= date($_POST['tgl_berobat']);
$keluhan_pasien		= $_POST['keluhan_pasien'];
$hasil_diagnosa		= $_POST['hasil_diagnosa'];
$penatalaksanaan 	= $_POST['penatalaksanaan'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO berobat VALUES 
	('','$id_pasien','$id_dokter','$tgl_berobat','$keluhan_pasien','$hasil_diagnosa','$penatalaksanaan')");
 
// mengalihkan halaman kembali ke index.php
header("location:berobat.php");
 
?>