<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['nim'],$_POST['jurusan'],$_POST['kelas']);
	header('location:index.php');
}
// dibawah ini adalah penambahan fungsi elesif dengan action update data
//tambah proses update data
elseif($action=="update")
{
	$koneksi->update_data($_POST['nama'],$_POST['nim'],$_POST['jurusan'],$_POST['kelas'],$_POST['id']);
	header('location:index.php');
}
// proses hapus data
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:index.php');
}

?>