<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/pengguna.php");
include("class/session.php");

$session = new session;
$session->cekHakAkses("petugas");
?>
<html>
	<head>
	<title>Peminjaman Buku</title>
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
            <li align="left"><a href="datapinjam.php" >Data Peminjaman</a></li>
			<li align="left"><a href="peminjaman.php" >Peminjaman </a></li>
			<li align="left"><a href="databuku.php" >Data Buku</a></li>
            <li align="left"><a href="logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
                    </ul>
                
                </nav>
		</div>
		<div class="home">
		selamat datang anda sebagai petugas
	<table width="400" height="500" border="4" align="center">
	
</table>
 </body>
 </html>