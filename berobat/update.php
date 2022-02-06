<?php
//koneksi databasae
include '../koneksi.php';

//menangkap data yang dikirim dari form

$id 				= $_POST['id'];
$id_pasien 			= $_POST['id_pasien'];
$id_dokter 			= $_POST['id_dokter'];
$tgl_berobat 		= date($_POST['tgl_berobat']);
$keluhan_pasien		= $_POST['keluhan_pasien'];
$hasil_diagnosa		= $_POST['hasil_diagnosa'];
$penatalaksanaan 	= $_POST['penatalaksanaan'];

//update data ke database
mysqli_query($koneksi, "
	UPDATE berobat 
	SET 
		id_pasien='$id_pasien', 
		id_dokter='$id_dokter',
		tgl_berobat='$tgl_berobat',
		keluhan_pasien='$keluhan_pasien',
		hasil_diagnosa='$hasil_diagnosa',
		penatalaksanaan='$penatalaksanaan'

	WHERE id_berobat='$id'");

//mengalihkan halaman kembali ke index.php

header("location:berobat.php");

?>