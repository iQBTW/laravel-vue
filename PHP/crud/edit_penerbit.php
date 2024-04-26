<html>
<head>
	<title>Edit Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
    $id_penerbit = $_GET['id_penerbit'];
    
	$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");

    while($penerbit_data = mysqli_fetch_array($penerbit))
    {
        $id_penerbit = $penerbit_data["id_penerbit"];
		$nama_penerbit = $penerbit_data['nama_penerbit'];
        $email = $penerbit_data['email'];
        $telp = $penerbit_data['telp'];
        $alamat = $penerbit_data['alamat'];
    }
?>
 
<body>
	
	<div class="d-flex align-items-center justify-content-center vh-100">	
		<form action="edit_penerbit.php?id_penerbit=<?= $id_penerbit; ?>" method="post">
			<a href="penerbit.php">Go to Home</a>
			<table border="0">
				<tr> 
					<td>ID Penerbit</td>
					<td class="form-control" style="font-size: 11pt;"><?= $id_penerbit; ?></td>
				</tr>
				<tr> 
					<td>Nama Penerbit</td>
					<td><input class="form-control" type="text" name="nama_penerbit" value="<?= $nama_penerbit; ?>"></td>
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

			$id_penerbit = $_GET['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
			
			header("Location:penerbit.php");
		}
	?>
</body>
</html>