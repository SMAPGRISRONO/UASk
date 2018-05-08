<?php
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/pengguna.php");
include("class/databuku.php");
include("class/Datasiswa.php");

$db		= new Database;
$siswa = new siswa;
    
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        $siswa->TambahDatasiswa($_POST["Nis"],
                              $_POST["Nama"],
                              $_POST["Kelas"]);
        header("location:siswa.php");
 }  
    elseif($aksi == "hapus"){ 	
        $siswa->HapusDataSiswa($_GET['Nis']);
	    header("location:siswa.php");
 }
    elseif($aksi == "update"){
 	    $siswa->UpdateDataSiswa($_POST["Nis"],
                              $_POST["Nama"],
                              $_POST["Kelas"]);
                              
 	    header("location:siswa.php");
 }
?>