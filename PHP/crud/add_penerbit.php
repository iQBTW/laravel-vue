<html>
<head>
	<title>Add Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
?>
 
<body>
	
	<div class="d-flex align-items-center justify-content-center vh-100">
		<form action="add_penerbit.php" method="post" name="penerbit_form">
			<a href="penerbit.php">Go to Home</a>
			<table border="0">
				<tr> 
					<td>ID Penerbit</td>
					<td><input class="form-control" type="text" name="id_penerbit"></td>
				</tr>
				<tr> 
					<td>Nama Penerbit</td>
					<td><input class="form-control" type="text" name="nama_penerbit"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
				<tr> 
					<td>Telp</td>
					<td><input class="form-control" type="text" name="telp"></td>
				</tr>
				<tr> 
					<td>Alamat</td>
					<td><input class="form-control" type="text" name="alamat"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input class="form-control btn btn-primary" type="submit" name="Submit" value="Add"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id_penerbit = $_POST['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
			
			header("Location:penerbit.php");
		}
	?>
</body>
</html>