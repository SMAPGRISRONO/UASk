<?php  
include("koneksiDB/configDB.php");
include("class/database.php");
include("class/petugas.php");
include("class/databuku.php");

    $petugas = new buku;
    
	
    
    $aksi = $_GET['aksi'];
    
    if($aksi == "tambah"){
        $filefoto = $_FILES["foto"]["name"];
        
        $petugas->tambahbuku($_POST["kode_buku"],
                                $_POST["nama_buku"],
                                $_POST["jenis_buku"],
                                $_POST["jumlah"],
                                $filefoto);
          move_uploaded_file($_FILES['foto']['tmp_name'],"image/".$_FILES['foto']['name']);
 	      header("location:buku.php");
    }
    elseif($aksi == "hapus"){
        $foto = $_GET['filefoto'];
        // $filefoto = $_FILES["foto"]["name"];
        if(is_file("image/".$foto))
            unlink("image/".$foto);
        
        $petugas->hapus($_GET["kode_buku"]);
	      header("location:buku.php");
    }
        
    elseif($aksi == "update"){
        $filefoto = $_FILES["foto"]["name"];
 	    $petugas->updatebuku($_POST["kode_buku"],
                                $_POST["nama_buku"],
                                $_POST["jenis_buku"],
                                $_POST["jumlah"],
                                $filefoto);
        move_uploaded_file($_FILES['foto']['tmp_name'], "image/".$_FILES['foto']['name']);
        header("location:buku.php");
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