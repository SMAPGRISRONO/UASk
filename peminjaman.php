
<?php

class pinjam
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
	public function DaftarBuku()
 	{
 		$daftar = $this->db->query("SELECT * FROM peminjaman_buku");

 	    return ($this->db->affected_rows > 0) ? $daftar : FALSE;
 	}
 	public function TambahDataPeminjaman($tanggal,$Nis,$Nama,$kode_buku,$nama_buku){
            $tambah = $this->db->query("INSERT INTO 'peminjaman_buku' ('tanggal','Nis','Nama','kode_buku','nama_buku','tanggal_kembali') VALUES ('${tanggal}','${Nis}','${Nama}','${kode_buku}','${nama_buku}')");
    }
    public function Status($kode_buku) {
            $update = $this->db->query("UPDATE `peminjaman_buku` SET STATUS=1  WHERE `kode_buku`= '$kode_buku'");
			return $hapus;
        }
}
?>