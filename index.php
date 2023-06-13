<?php
 // Lampirkan dbconfig
 require_once "dbconfig.php";
 // Cek status login user
 if(!$user->isLoggedIn()){
 header("location: login.php"); //Redirect ke halaman login
 }
 // Ambil data user saat ini
 $currentUser = $user->getUser();
 ?>

<?php 	

include('koneksi.php');
$db = new database();
$data_mahasiswa = $db->tampil_data();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Toko</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.css">
      <link rel="stylesheet" type="text/css" href="js/bootstrap.css">

</head>
<body>
	
	<div class="container" style="width: 1000px">
		<h2 style="text-align: center;">Data Mahasiswa</h2>
		<br>
		<a class="btn btn-primary" href="tambah_barang.php">Tambah Mahasiswa</a>
        <a class="btn btn-primary" href="logout.php">Logout</a>
		<br>
		<br>
		
		<table class="table table-bordered table-striped" border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Jurusan</th>
				<th>Kelas</th>
				<th>Action</th>
			</tr>

			<?php 
			$no = 1;
			foreach($data_mahasiswa as $row){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['jurusan']; ?></td>
					<td><?php echo $row['kelas']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a href="proses_barang.php?action=delete&id=<?php echo $row['id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php 
			}
			?>
	</table>
    </div>

</body>
</html>