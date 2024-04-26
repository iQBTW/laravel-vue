<html>
<head>
	<title>Edit Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
    $id_pengarang = $_GET['id_pengarang'];
    
	$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");

    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
        $id_pengarang = $pengarang_data["id_pengarang"];
		$nama_pengarang = $pengarang_data['nama_pengarang'];
        $email = $pengarang_data['email'];
        $telp = $pengarang_data['telp'];
        $alamat = $pengarang_data['alamat'];
    }
?>
 
<body>
	
	<div class="d-flex align-items-center justify-content-center vh-100">	
		<form action="edit_pengarang.php?id_pengarang=<?= $id_pengarang; ?>" method="post">
			<a href="pengarang.php">Go to Home</a>
			<table border="0">
				<tr> 
					<td>ID Penerbit</td>
					<td class="form-control" style="font-size: 11pt;"><?= $id_pengarang; ?></td>
				</tr>
				<tr> 
					<td>Nama Penerbit</td>
					<td><input class="form-control" type="text" name="nama_pengarang" value="<?= $nama_pengarang; ?>"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input class="form-control" type="text" name="email" value="<?= $email; ?>"></td>
				</tr>
				<tr> 
					<td>Telp</td>
					<td><input class="form-control" type="text" name="telp" value="<?= $telp; ?>"></td>
				</tr>
				<tr> 
					<td>Alamat</td>
					<td><input class="form-control" type="text" name="alamat" value="<?= $alamat; ?>"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input class="form-control btn btn-primary" type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pengarang = $_GET['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("Location:pengarang.php");
		}
	?>
</body>
</html>