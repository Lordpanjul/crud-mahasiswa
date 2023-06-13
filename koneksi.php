<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "unimar";
	var $koneksi = "";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($nama,$nim,$jurusan,$kelas)
	{
		mysqli_query($this->koneksi,"insert into mahasiswa values ('','$nama','$nim','$jurusan','$kelas')");
	}

	// dibawah ini adalah penambahan pembuatan funcion
	// membuat function untuk proses ambil data didalam database (didalam tabel barang)
	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
		return $query->fetch_array();
	}
	// membuat funtion untuk mengupdate data yang telah kita edit atau ubah
	function update_data($nama,$nim,$jurusan,$kelas,$id)
	{
		$query = mysqli_query($this->koneksi,"UPDATE mahasiswa SET nama='$nama',nim='$nim',jurusan='$jurusan',kelas='$kelas' WHERE id='$id'");
	}
	// menambahkan function hapus data
	function delete_data($id_mahasiswa)
	{
		$query = mysqli_query($this->koneksi,"DELETE FROM mahasiswa where id='$id'");
	}
}

?>