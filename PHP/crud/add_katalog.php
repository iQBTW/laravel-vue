<html>
<head>
	<title>Add Katalog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
?>
 
<body>
	
	<div class="d-flex align-items-center justify-content-center vh-100">	
		<form action="add_katalog.php" method="post" name="katalog_form">
			<a href="katalog.php">Go to Home</a>
			<table border="0">
				<tr> 
					<td>ID Katalog</td>
					<td><input class="form-control" type="text" name="id_katalog"></td>
				</tr>
				<tr> 
					<td>Nama Katalog</td>
					<td><input class="form-control" type="text" name="nama"></td>
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
			$id_katalog = $_POST['id_katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>