<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.css">
	  <link rel="stylesheet" type="text/css" href="js/bootstrap.css">
</head>
<body>
<br><br>

<div class="container" style="width: 400px;">
<h3>Tambah Data Barang</h3>
<br>

<form method="post" action="proses_barang.php?action=add">
<table class="form-control" style="padding-top: 20px;">
	<tr>
		<td>Nama Mahasiswa</td>
		<td>:</td>
		<td style="padding-top: 20px; padding-left: 10px;"><input class="form-control" type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td style="padding-top: 20px; padding-left: 10px;"><input class="form-control" type="text" name="nim"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td style="padding-top: 20px; padding-left: 10px;"><input class="form-control" type="text" name="jurusan"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td style="padding-top: 20px; padding-left: 10px;"><input  class="form-control" type="text" name="kelas"/></td>
	</tr>

	<tr>
		<td></td>
		<td></td>
		<td style="padding-top: 10px; padding-left: 10px;">
			<!-- <input type="submit" name="tombol" value="Simpan"/> -->

			<input type="submit" name="tombol" class="btn btn-primary" value="Simpan"/>
			<a class="btn btn-primary" href="index.php">Kembali</a>
		</td>
	</tr>
</table>
</form>
</div>
<!-- </div> -->
</body>
</html>