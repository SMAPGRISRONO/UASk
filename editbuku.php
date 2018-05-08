<?php
	include("koneksiDB/configDB.php");
	include("class/database.php");
	include("class/petugas.php");
    include("class/databuku.php");

	$buku = new buku;
    $editbuku = $buku->editbuku($_GET['kode_buku'])	
?>
<html>
	<head>
	<title>Perpustakaan</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
		<body align = "center">
		<div class="atas">
		<img  src="20540172.png" width="100" height="100" align="left">
            <center><h2>SISTEM INFORMASI PERPUSTAKAAN SMA PGRI SRONO</h2></center>
		
		<center><h3>Jl. MOJOPAHIT NO:03 SRONO</h3></center>
		</div>
		<div class="tengah">
             <nav>
            <ul>
            <li align="left"><a href="tampilanadmin.php" >Beranda</a></li>
            <li align="left"><a href="logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
            </ul>
            </nav>
            </div>
		<div class="home">
            <?php
				foreach($editbuku as $ubah){
			?>
		
		<form action="prosesbuku.php?aksi=update" method="post" enctype="multipart/form-data"> 
		<table border="1" align="center">
		 <tr>
             <tr for="kode_buku">
              <td>Kode Buku</td>
              <td><input type="text" name="kode_buku" value="<?php echo $ubah['kode_buku']?>"></td>
         </tr>
         <tr for="nama_buku">             
        <td>Nama</td>
        <td><input type="text" name="nama_buku" value="<?php echo $ubah['nama_buku']?>"></td>
        </tr>
		<tr for="jenis_buku">
        <td>jenis buku</td>
        <td><input type="text" name="jenis_buku" value="<?php echo $ubah['jenis_buku']?>"></td>
		</tr>
        <tr for ="jumlah">
        <td> jumlah</td>
        <td><input typet="numeric" name="jumlah"value="<?php echo $ubah['jumlah']?>"></td>
        </tr>
            <tr for="foto">
            <td>Upload Foto</td>
            <td><input type="file" name="foto" accept="image/*"/></td>
            </tr>
		
		<tr>
        <td><input type="submit" value="Simpan"></td>
         </tr>
		</table>
            </form>
		<?php 	} ?>
 		
</div>
 </body>
 </html>