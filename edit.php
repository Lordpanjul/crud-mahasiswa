<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_mahasiswa = $db->get_by_id($id);
}
else
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Barang</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.css">
	  <link rel="stylesheet" type="text/css" href="js/bootstrap.css">
	 
</head>
<body>
<br/>

<div class="container" style="width: 400px" >

<h3>Update Data Barang</h3>

<form method="post" action="proses_barang.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_mahasiswa['id']; ?>"/>

<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td style="padding-left: 10px;"><input class="form-control" type="text" name="nama" value="<?php echo $data_mahasiswa['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td style="padding-top: 10px;padding-left: 10px;"><input class="form-control" type="text" name="nim" value="<?php echo $data_mahasiswa['nim']; ?>"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td style="padding-top: 10px;padding-left: 10px;"><input class="form-control" type="text" name="jurusan" value="<?php echo $data_mahasiswa['jurusan']; ?>"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td style="padding-top: 10px;padding-left: 10px;padding-bottom: 10px;"><input class="form-control" type="text" name="kelas" value="<?php echo $data_mahasiswa['kelas']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<input type="submit" name="tombol" class="btn btn-primary" value="Update"/>
			<a class="btn btn-primary" href="index.php">Kembali</a>
		</td>
	</tr>
</table>
</form>
</div>

</body>
</html>