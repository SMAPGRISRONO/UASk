<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/pengguna.php");
include("class/session.php");
include("class/databuku.php");
include("class/peminjaman.php");

$session = new session;
$session->cekHakAkses("petugas");
$daftar = new pinjam;
$datapinjam = $daftar->DaftarBuku();



?>
<html>
	<head>
	<title>Data Buku</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
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
        <table border="2">  
         <tr>
         <th>nomer</th>
         <th>Tanggal</th>
         <th>Nis</th>
         <th>Nama</th>
         <th>Kode buku</th>
         <th>Nama buku</th>
         <th>Tanggal kembali</th>
         <th>Tanggal pengembalian</th>
         <th>Status</th>
         <th>opsi</th>
         </tr>
     
<?php
$nomer = 1;

    foreach($datapinjam as $buku) {?>

        <tr>
        <td><?php echo $nomer++; ?></td>
        <td><?php echo $buku['tanggal']?></td>
        <td><?php echo $buku['Nis']?></td>
        <td><?php echo $buku['Nama']?></td>
        <td><?php echo $buku['kode_buku']?></td>
        <td><?php echo $buku['nama_buku']?></td>
        <td><?php echo $buku['tanggal_kembali']?></td>
        <td><?php echo $buku['tanggal_pengembalian']?></td>
        <td><?php if ($buku['status']==0) {
            echo "belum dikembalikan";
        } else{
            echo "sudah dikembalikan";
        }?></td>
        <td><a href="pengembalian.php?kode_buku=<?php echo $buku['kode_buku']?>&aksi=update">mengembalikan</a></td>
    </tr>
<?php
}
?></table>
</div>

	</body>
</html>