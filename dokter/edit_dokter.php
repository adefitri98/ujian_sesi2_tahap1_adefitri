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
                <li><a href="../pasien/pasien.php">Data Pasien</a></li>
                <li><a href="dokter.php" class="active">Data Dokter</a></li>
                <li><a href="../obat/obat.php">Data Obat</a></li>
            </ul>
        </nav> 


	<br><center><h2>PERBAHARUI DATA DOKTER</h2></center>
	<br/>
    <?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from dokter where id_dokter='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php" class="form1">
            <table align="center" style="text-align: left;">
                <tr>            
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id_dokter']; ?>">
                        <input type="text" name="nama_dokter" value="<?php echo $d['nama_dokter']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><a href="dokter.php" class="button">Kembali</a></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>       
            </table>
        </form>
        <?php 
    }
    ?>

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