<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/pengguna.php");
include("class/Datasiswa.php");


$siswa = new siswa;
$EditDataSiswa = $siswa->EditDataSiswa($_GET['Nis']);
?>

<html>
	<head>
	<title>Perpustakaan</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
		<body align = "center">
		<div class="atas">
		<img  src="20540172.png" width="100" height="100" align="left">
		<h2><center>SISTEM INFORMASI PERPUSTAKAAN SMA PGRI SRONO</h2></center>
		
		<center><h3>Jl. MOJOPAHIT NO:03 SRONO</h3></center>
		</div>
				<div class="tengah">
		
             <nav>
                <ul>
            <li align="left"><a href="tampilanadmin.php" >Beranda</a></li>
            <li align="left"><a href="index1.php" onClick="return confirm ('Yakin?')">Logout</a></li>
                    </ul>
            </nav>
            </div>
           <div class="home">
            <h1>Edit Data Siswa</h1>           
          <?php
		  	while($edit = $EditDataSiswa->fetch_array()){

		  ?>
            <form action="prosessiwa.php?aksi=update" method="post">
                        <table cellpadding="3" cellspacing="0">
                                    <tr>
                                                <td>Nis</td>
                                                <td><input type="text" name="Nis" value="<?php echo $edit['Nis']?>"></td>      
                                    </tr>
                                    <tr>
                                                <td>Nama</td>
                                                <td><input type="text" name="Nama" size="30" value="<?php echo $edit['Nama']?>"></td>
                                    </tr>
                                    <tr>
                                                <td>Kelas</td>
												<td><input type="text" name="Kelas" size="50" value="<?php echo $edit['Kelas']?>">
                                                </td>
                                    </tr>
                                    <tr>
                                                <td></td>
                                                <td><input type="submit" name="simpan" value="Simpan"></td>
                                    </tr>
                        </table>
			<?php } ?>
            </form>
			</div>
</body>
</html>