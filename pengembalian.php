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
$daftar->Status($_GET['kode_buku']);
header("location:datapinjam.php");

?>