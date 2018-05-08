<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/session.php");
include("class/pengguna.php");


$session = new session;
$session->cekHakAkses("admin");
$input = new admin;
$db = new database;

$pengguna = new admin;
$daftarPengguna = $pengguna->daftarPengguna();
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
<h1> Daftar Pengguna </h1>
		<?php
	echo "<table border = '3'>
				<tr>
					<th>Id Pengguna</th>
					<th>Username</th>
					<th>Password</th>
					<th>Status</th>
				</tr>";
		
	while($pengguna = $daftarPengguna->fetch_array())
	{
		echo "<tr>
				<td>".$pengguna["id_pengguna"]."</td>
				<td>".$pengguna["username"]."</td>
				<td>".$pengguna["password"]."</td>
				<td>".$pengguna["status"]."</td>
			</tr>";
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