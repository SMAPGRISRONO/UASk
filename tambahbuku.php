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
	<table border="1" align="center">	
		<form action="prosesbuku.php?aksi=tambah" method="post" enctype="multipart/form-data"> 
		 <tr for="kode_buku">
              <td>Kode Buku</td>
              <td><input type="text" name="kode_buku"></td>
         </tr>
         <tr for="nama_buku">             
          		<td>Nama</td>
                <td><input type="text" name="nama_buku"></td>
          </tr>
		<tr for="jenis_buku">
              <td>jenis buku</td>
			  <td><input type="text" name="jenis_buku"></td>
		</tr>
            <tr for ="jumlah">
                <td> jumlah</td>
                <td><input typet="numeric" name="jumlah"></td>
            </tr>
            <tr for="foto">
                <td>Upload Foto</td>
                <td><input type="file" name="foto" accept="image/*"/></td>
            </tr>
         <td><input type="submit" name="Simpan" value="Simpan"></td>
                    </tr>
           </form>
		</table>	
 </body>
 </html>