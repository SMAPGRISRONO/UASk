<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/databuku.php");

$buku = new buku;

$DaftarBuku = $buku->DaftarBuku();
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
            <li align="left"><a href="logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
                    </ul>
            </nav>
            </div>
		<div class="home">
<h2><a class="tambah" href="tambahbuku.php">&nbsp;[+] Tambah Data</a></h2>
	<table border="2">	
		 <tr>
         <th>nomer</th>
         <th>Kodebuku</th>
         <th>Namabuku</th>
         <th>jenisbuku</th>
         <th>jumlah</th>
         <th>foto</th>
         <th>Opsi</th>
         </tr>
<?php

		$nomer =1;

		foreach($DaftarBuku as $buku){?>
		<tr>
		<td><?php echo $nomer++; ?></td>
		<td><?php echo $buku["kode_buku"]?></td>
		<td><?php echo $buku["nama_buku"]?></td>
		<td><?php echo $buku["jenis_buku"]?></td>
        <td><?php echo $buku["jumlah"]?></td>
        <td><img src="image/<?php echo $buku["foto"]?>"width='90' height='90'></td>
		<td>
		<a href="editbuku.php?kode_buku=<?php echo $buku['kode_buku'];?>">Edit</a>
        <a href="prosesbuku.php?kode_buku=<?php echo $buku['kode_buku'];?>&filefoto=<?php echo $buku['foto'];?>&aksi=hapus">Hapus</a>
        </td>
		
	</tr>
	<?php
	}
	?>	
</table>	

            </div>
 </body>
 </html>