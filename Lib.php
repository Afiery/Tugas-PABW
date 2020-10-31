<?php 
	class Lib{
		public function __construct(){
			$this->db = new PDO('mysql:host=localhost;dbname=tugas1ppo','root','');
			
		}

		// Mahasiswa

		public function tambahDataMahasiswa($nim, $nama_mah, $kode_mk, $nama_mk){

			$sql = "INSERT INTO mahasiswa (NIM, Nama_Mahasiswa, Kode_MK, Nama_MK) VALUES ('$nim', '$nama_mah', '$kode_mk', '$nama_mk')";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function tampilDataMahasiswa(){

			$sql = "SELECT * FROM mahasiswa";
			$query = $this->db->query($sql);
			return $query;

		}

		public function editDataMahasiswa($nim){

			$sql = "SELECT * FROM mahasiswa WHERE NIM = '$nim'"; 
			$query = $this->db->query($sql);
			return $query;
		}

		public function updateDataMahasiswa($nim, $nama_mah, $kode_mk, $nama_mk){

			$sql = "UPDATE mahasiswa SET NIM = '$nim', Nama_Mahasiswa = '$nama_mah', Kode_MK = '$kode_mk', Nama_MK = '$nama_mk' WHERE NIM = '$nim'";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function hapusDataMahasiswa($nim){

			$sql = "DELETE FROM mahasiswa WHERE NIM = '$nim'";
			$query = $this->db->query($sql);
		}

		// Dosen

		public function tambahDataDosen($nip, $nama_dos, $kode_mk){

			$sql = "INSERT INTO dosen (NIP, Nama_Dosen, Kode_MK) VALUES ('$nip', '$nama_dos', '$kode_mk')";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function tampilDataDosen(){

			$sql = "SELECT * FROM dosen";
			$query = $this->db->query($sql);
			return $query;

		}

		public function editDataDosen($nip){

			$sql = "SELECT * FROM dosen WHERE NIP = '$nip'"; 
			$query = $this->db->query($sql);
			return $query;
		}

		public function updateDataDosen($nip, $nama_dos, $kode_mk){

			$sql = "UPDATE dosen SET NIP = '$nip', Nama_Dosen = '$nama_dos', Kode_MK = '$kode_mk' WHERE NIP = '$nip'";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function hapusDataDosen($nip){

			$sql = "DELETE FROM dosen WHERE NIP = '$nip'";
			$query = $this->db->query($sql);
		}

		// Mata Kuliah

		public function tambahDataMK($kode_mk, $nama_mk){

			$sql = "INSERT INTO mata_kuliah (Kode_MK, Nama_MK) VALUES ('$kode_mk', '$nama_mk')";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function tampilDataMK(){

			$sql = "SELECT * FROM mata_kuliah";
			$query = $this->db->query($sql);
			return $query;

		}

		public function editDataMK($kode_mk){

			$sql = "SELECT * FROM mata_kuliah WHERE Kode_MK = '$kode_mk'"; 
			$query = $this->db->query($sql);
			return $query;
		}

		public function updateDataMK($kode_mk, $nama_mk){

			$sql = "UPDATE mata_kuliah SET Kode_MK = '$kode_mk', Nama_MK = '$nama_mk' WHERE Kode_MK = '$kode_mk'";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function hapusDataMK($kode_mk){

			$sql = "DELETE FROM mata_kuliah WHERE Kode_MK = '$kode_mk'";
			$query = $this->db->query($sql);
		}

		// Pembayaran

		public function tambahDataBayar($id_bayar, $nim, $nama, $jumlah){

			$sql = "INSERT INTO pembayaran (id_bayar, NIM, Nama, Jumlah_Bayar) VALUES ('$id_bayar', '$nim', '$nama', '$jumlah')";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function tampilDataBayar(){

			$sql = "SELECT * FROM pembayaran";
			$query = $this->db->query($sql);
			return $query;

		}

		public function updateDataBayar($id_bayar, $nim, $nama, $jumlah){

			$sql = "UPDATE pembayaran SET id_bayar = '$id_bayar', NIM = '$nim', Nama = '$nama', Jumlah_Bayar = '$jumlah' WHERE id_bayar = '$id_bayar'";
			$query = $this->db->query($sql);

			if(!query){
				return 'Gagal';
			}else{
				return 'Berhasil';
			}
		}

		public function hapusDataBayar($id_bayar){

			$sql = "DELETE FROM pembayaran WHERE id_bayar = '$id_bayar'";
			$query = $this->db->query($sql);
		}
	}
?>