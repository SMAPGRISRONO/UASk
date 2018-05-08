<?php
class jmlpinjam
{
	private $id;
	private $db;
	public function __construct($id = null)
	{
		$this->id = $id;

		//instansiasi objek koneksi DB
		$database = new database;
		$this->db = $database->db;
	}
	
	public function Daftapeminjaman2()
	{
		 $daftar2 = $this->db->query("SELECT peminjaman_buku.`tanggal`AS tanggal ,peminjaman_buku.`Nama` AS Nama,peminjaman_buku.`nama_buku` AS Nama_buku , peminjaman_buku.`tanggal_kembali` AS tanggal_kembali, peminjaman_buku.`tanggal_pengembalian` AS Tgl_Pengembalian, peminjaman_buku.`status` AS Stattus FROM peminjaman_buku");

 	    return ($this->db->affected_rows > 0) ? $daftar2 : FALSE;

	}
}
?>