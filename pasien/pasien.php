<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Website</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
 
<body>
    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo">Poliklinik Sehat</a>
            <!--- menu --->
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="#" class="active">Data Pasien</a></li>
                <li><a href="../dokter/dokter.php">Data Dokter</a></li>
                <li><a href="../obat/obat.php">Data Obat</a></li>
            </ul>
        </nav> 


	<br><center><h2>DATA PASIEN</h2></center>
	<br/>
	<table border="1" class="table1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pasien");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['umur']; ?></td>
				<td>
					<a href="edit_pasien.php?id=<?php echo $d['id_pasien']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_pasien']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

	<br/>
	<center><button class="button"><a href="tambah.php" class="link">TAMBAH PASIEN</a></button></center>
	
    </section>

 
    <!-- footer -->
    <footer>
        <p>POLIKLINIK SEHAT</p>
             
        <!--paragraph-->
        <p>Jl. A. Yani Km 3.5 No 74 Samping Polresta Kota Banjarmasin.</p>
        <!--social-->
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
         
    </footer>
 
    <!--social-attach-bar-->
    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</body>
 
</html>