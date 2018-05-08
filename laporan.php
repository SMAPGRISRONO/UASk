<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/pengguna.php");
include("class/session.php");
include("class/databuku.php");
include("class/Jumlahpinjam.php");

$session = new session;
$session->cekHakAkses("admin");
$input = new admin;
$pinjam = new buku;
$db		= new Database;
$jumlah2 = new jmlpinjam;

$Daftapeminjaman2 = $jumlah2->Daftapeminjaman2();

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
		<h1> Daftar Peminjaman </h1>
		<?php

	
	echo "<table border = '3'>
				<tr>
					<th>Tanggal Kunjungan</th>
					<th>Nama Peminjam</th>
					<th>Nama Buku</th>
					<th>Tanggal Kembali</th>
					<th>Tanggal Pengembalian</th>
					<th>Status</th>
				</tr>";
		
	while($jumlah2 = $Daftapeminjaman2->fetch_array())
	{
		echo "<tr>
				<td>".$jumlah2["tanggal"]."</td>
				<td>".$jumlah2["Nama"]."</td>
				<td>".$jumlah2["Nama"]."</td>
				<td>".$jumlah2["tanggal_kembali"]."</td>
				<td>".$jumlah2["Tgl_Pengembalian"]."</td>
				<td>".$jumlah2["Stattus"]."</td>
			</tr>";
	}
	echo "</table>";
?>

</div>
 </body>
 </html>