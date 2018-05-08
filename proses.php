<?php  
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/databuku.php");

    $petugas = new admin;
	
    
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        $petugas->tambahpetugas($_POST["NIP"],
                                $_POST["nama"],
                                $_POST["pass"]);
 	      header("location:admin.php");
 }  
    elseif($aksi == "hapus"){ 	
        $petugas->hapusData($_GET["NIP"]);
	      header("location:admin.php");
 }
        
    elseif($aksi == "update"){
 	    $petugas->updatedataPetugas($_POST["NIP"],
                                  $_POST["nama"],
                                  $_POST["pass"]);
 	    header("location:admin.php");
 }
    elseif ($aksi == "input") {
        $petugas->inputPinjam($_POST["tanggal"],
                                $_POST["Nis"],
                                $_POST["Nama"],
                                $_POST["kode_buku"],
                                $_POST["nama_buku"],
                                $_POST["tanggal_kembali"]);
        header("location:peminjaman.php");
    }
?>