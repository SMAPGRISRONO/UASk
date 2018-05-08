<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/pengguna.php");
include("class/session.php");
include("class/databuku.php");
include("class/Datasiswa.php");


$session = new session;
$session->cekHakAkses("admin");
$input = new admin;
$pinjam = new buku;
$db		= new Database;
$siswa = new siswa;

$daftarSiswa = $siswa->daftarSiswa();
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
		<a href="tambah.php">Tambah Peserta Didik</a>
		<?php
	echo "<table border = '3'>
				<tr>
					<th>Nis</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Opsi</th>
				</tr>";
		
	while($siswa = $daftarSiswa->fetch_array())
	{
		echo '<tr>';
            echo '<td>'.$siswa['Nis'].'</td>';         
            echo '<td>'.$siswa['Nama'].'</td>';     
			echo '<td>'.$siswa['Kelas'].'</td>';        
            echo '<td><a href="editsiswa.php?Nis='.$siswa['Nis'].'&aksi=update">Edit</a> / <a href="prosessiwa.php?Nis='.$siswa['Nis'].'&aksi=hapus" onclick="return confirm(\'Anda Sudah Yakin?\')">Hapus</a></td>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
        echo '</tr>';
	}
	echo "</table>";	
	?>
	</div>
		<script>
	function konfirm()
	{
		if(confirm('Anda yakin menghapus data ini ?')){
			return true;
		}else{
			return false;
		}
	}
</script>
 </body>
 </html>