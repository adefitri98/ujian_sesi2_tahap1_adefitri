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
                <li><a href="../dokter/dokter.php">Data Dokter</a></li>
                <li><a href="../obat/obat.php">Data Obat</a></li>
            </ul>
        </nav> 


	<br><center><h2>PERBAHARUI DATA KUNJUNGAN</h2></center>
    <?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"
            SELECT * from berobat as a, pasien as b, dokter as c WHERE a.id_berobat=$id AND a.id_pasien=b.id_pasien AND a.id_dokter=c.id_dokter ");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php" class="form1">
            <table align="center">  
                <tr>
                    <td>
                        <label>Nama Pasien</label>
                    </td>
                    <td>
                        <select name="id_pasien" style="width:160px;">
                        <?php
                        include "../koneksi.php";
                        $query3    =mysqli_query($koneksi, "SELECT * FROM pasien GROUP BY nama_pasien ORDER BY nama_pasien");
                        while ($data3 = mysqli_fetch_array($query3)) {
                        ?>
                        <option value="<?=$data3['id_pasien'];?>"><?php echo $data3['nama_pasien'];?></option>
                        <?php } ?>
                    </select>
                    </td>
                    <td>
                        <label>Nama Dokter</label>
                    </td>
                    <td>
                        <select name="id_dokter" style="width:160px;">
                        <?php
                        include "../koneksi.php";
                        $query1 = mysqli_query($koneksi, "SELECT * FROM dokter GROUP BY nama_dokter ORDER BY nama_dokter");
                        while ($data1 = mysqli_fetch_array($query1)) {
                        ?>
                        <option value="<?=$data1['id_dokter'];?>"><?php echo $data1['nama_dokter'];?></option>
                        <?php } ?>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Keluhan Pasien</td>
                    <td><input type="text" name="keluhan_pasien" value="<?php echo $d['keluhan_pasien'];?>"></td>
                    <td>Hasil Diagnosa</td>
                    <td><input type="text" name="hasil_diagnosa" value="<?php echo $d['hasil_diagnosa'];?>">
                        <input type="hidden" name="id" value="<?php echo $d['id_berobat']; ?>"></td>
                </tr>


                <tr>
                    <td>
                        <label>Penatalaksanaan</label>
                    </td>
                    <td>
                        <select name="penatalaksanaan" style="width:160px;">
                            <option value="Rawat Jalan">Rawat Jalan</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                            <option value="Rujuk">Rujuk</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </td>
                    <td>Tanggal</td><td><input type="date" value="<?php echo $d['tgl_berobat'];?>" name="tgl_berobat"></td>
                </tr>

                <tr>
                    <td><a href="berobat.php" class="button">Kembali</a></td>
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