<?php
class buku
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
 		$daftar = $this->db->query("SELECT * FROM data_buku");

 	    return ($this->db->affected_rows > 0) ? $daftar : FALSE;
 	}
    public function TambahDataPeminjaman($tanggal,$Nis,$Nama,$kode_buku,$nama_buku,$tanggal_kembali){
            $tambah = $this->db->query("INSERT INTO peminjaman_buku (`tanggal`, `Nis`, `Nama`, `kode_buku`, `nama_buku`, `tanggal_kembali`) VALUES ('${tanggal}','${Nis}','${Nama}','${kode_buku}','${nama_buku}','${tanggal_kembali}')");
    }
    public function tambahbuku($kode_buku,$nama_buku,$jenis_buku,$jumlah,$foto)
    { return $this->db->query('INSERT INTO data_buku VALUES("'.$kode_buku.'","'.$nama_buku.'","'.$jenis_buku.'",
			"'.$jumlah.'","'.$foto.'")'); 
    }
    
    public function hapus($kode_buku){
        $hapus = $this->db->query("DELETE FROM data_buku WHERE kode_buku='$kode_buku'");
    }
    public function editbuku($kode_buku){
        $ubah = $this->db->query("SELECT * FROM data_buku WHERE kode_buku='$kode_buku'");
        return $ubah;
    }
    public function updatebuku($kode_buku,$nama_buku,$jenis_buku,$jumlah,$foto){
        $update = $this->db->query("UPDATE data_buku SET kode_buku='${kode_buku}',nama_buku='${nama_buku}',jenis_buku='${jenis_buku}',jumlah='${jumlah}',foto='${foto}' WHERE kode_buku='$kode_buku'");
    }
}
?>