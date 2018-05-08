<?php
	class siswa{
		private $id;
		private $db;
		
        public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
		public function daftarSiswa()
		{			
			$daftar = $this->db->query("SELECT * FROM anggota");
			return ($this->db->affected_rows > 0) ? $daftar : FALSE;
		}
        public function TambahDatasiswa($Nis,$Nama,$Kelas){
            $tambah = $this->db->query("INSERT INTO anggota (`Nis`, `Nama`, `Kelas`) VALUES ('${Nis}','${Nama}','${Kelas}')");
        }
        
        public function HapusDataSiswa($Nis) {
            $hapus = $this->db->query("DELETE FROM anggota WHERE Nis='$Nis'");
			return $hapus;
        }
        
        public function EditDataSiswa($Nis) {
            $edit = $this->db->query("SELECT * FROM anggota WHERE Nis='$Nis'");
            return $edit;
        }
        
        public function UpdateDataSiswa($Nis,$Nama,$Kelas){
            $update = $this->db->query("UPDATE anggota SET Nis='${Nis}',Nama='${Nama}',Kelas='${Kelas}' WHERE Nis='$Nis'");
        }
	}
?>