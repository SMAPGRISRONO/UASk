<?php

class admin
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

	public function daftarPengguna()
		{
			
			$daftar = $this->db->query("SELECT * FROM pengguna");
			return ($this->db->affected_rows > 0) ? $daftar : FALSE;
		}
	public function EditPengguna()
		{
			
			$daftar = $this->db->query("UPDATE pengguna SET id_pengguna='$id_pengguna', username='$username', password='$password' WHERE id_pengguna='$id_pengguna'");
			return ($this->db->affected_rows > 0) ? $daftar : FALSE;
		}
	
 	public function inputPinjam($tanggalpin,$NIS,$nama,$kode,$namabuk,$tanggalkem)
 	{
 		$input = $this->db->query('INSERT INTO peminjaman_buku VALUES("'.$tanggalpin.'","'.$NIS.'","'.$nama.'","'.$kode.'","'.$namabuk.'","'.$tanggalkem.'")');
 	}
	
}
?>