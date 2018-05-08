<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/pengguna.php");
include("class/session.php");
include("class/databuku.php");

$session = new session;
$session->cekHakAkses("petugas");
$daftar = new buku;
$DaftarBuku = $daftar->DaftarBuku();


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
        <li align="left"><a href="logout.php" onClick="return confirm ('Apakah Anda Yakin Ingin Keluar?')">Logout</a></li>
    </ul>
</nav>
		</div>
		<div class="home">
        <table border="2">  
         <tr>
         <th>nomer</th>
         <th>kode_buku</th>
         <th>Nama_buku</th>
         <th>jenis_buku</th>
         <th>jumlah</th>
         <th>foto</th>
         </tr>
     
<?php
$nomer = 1;

    foreach($DaftarBuku as $buku) {?>

        <tr>
        <td><?php echo $nomer++; ?></td>
        <td><?php echo $buku['kode_buku']?></td>
        <td><?php echo $buku['nama_buku']?></td>
        <td><?php echo $buku['jenis_buku']?></td>
        <td><?php echo $buku['jumlah']?></td>
        <td><?php echo $buku['foto']?></td>
           
        </tr>

        <?php
        }
        ?>
         </table></div>

	</body>
</html>