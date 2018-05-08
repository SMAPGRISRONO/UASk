<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/pengguna.php");
include("class/session.php");
include("class/databuku.php");


$session = new session;
$session->cekHakAkses("petugas");
$input = new admin;
$pinjam = new buku;
$db		= new Database;

if(isset($_POST['ok'])){
		@$tanggal = $_POST['tanggal'];
		@$Nis = $_POST['Nis'];
		@$Nama = $_POST['Nama'];
		@$kode_buku = $_POST['kode_buku'];
		@$nama_buku = $_POST['nama_buku'];
		@$tanggal_kembali = $_POST['tanggal_kembali'];

		if($pinjam->TambahDataPeminjaman($tanggal,$Nis,$Nama,$kode_buku,$nama_buku,$tanggal_kembali))
		echo "";
		else								   
		echo "";
}

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
		<form method="post" enctype="multipart/form-data">
		<table class="tabel2" border="2">
		<center><h2>Peminjaman Buku<h2></center>
<tr for="tanggal">
<td>Tanggal Pinjam</td>
<td>&nbsp;&nbsp;<input type="date" name="tanggal"></td>
</tr>

<tr for="Nis">
<td>NIS</td>
<td>&nbsp;&nbsp;<input type="text" name="Nis" maxlength="30" size="40" placeholder="NIS" ></td>
</tr>

<tr for="Nama">
<td>Nama</td>
<td>&nbsp;&nbsp;<input type="text" name="Nama" maxlength="30" size="40"  placeholder="Masukkan Nama"></td>
</tr>

<tr for="kode_buku">
<td>Kode Buku</td>
<td>&nbsp;&nbsp;<input type="text" name="kode_buku" maxlength="30" size="40" ></td>
</tr>

<tr for="nama_buku">
<td>Nama Buku</td>
<td>&nbsp;&nbsp;<input type="text" name="nama_buku" maxlength="30" size="40" ></td>
</tr>

<tr for="tanggal_kembali">
<td>Tanggal Kembali</td>
<td>&nbsp;&nbsp;<input type="date" name="tanggal_kembali"  ></td>
</tr>
<tr>
<td><input type="submit" name="ok">
<input type="reset" value="Reset"></td>
</tr>
</table>

</form>
</div>
 </body>
 </html>