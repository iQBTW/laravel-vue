<html>
<head>
	<title>Edit Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<?php
	include_once("connect.php");
	$isbn = $_GET['isbn'];

	$buku = mysqli_query($mysqli, "SELECT * FROM buku WHERE isbn='$isbn'");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");

    while($buku_data = mysqli_fetch_array($buku))
    {
    	$judul = $buku_data['judul'];
    	$isbn = $buku_data['isbn'];
    	$tahun = $buku_data['tahun'];
    	$id_penerbit = $buku_data['id_penerbit'];
    	$id_pengarang = $buku_data['id_pengarang'];
    	$id_katalog = $buku_data['id_katalog'];
    	$qty_stok = $buku_data['qty_stok'];
    	$harga_pinjam = $buku_data['harga_pinjam'];
    }
?>
 
<body>
	
	<div class="d-flex align-items-center justify-content-center vh-100">	
		<form action="edit.php?isbn=<?php echo $isbn; ?>" method="post">
			<a href="index.php">Go to Home</a>
			<table border="0">
				<tr> 
					<td>ISBN</td>
					<td class="form-control" style="font-size: 11pt;"><?php echo $isbn; ?> </td>
				</tr>
				<tr> 
					<td>Judul</td>
					<td><input class="form-control" type="text" name="judul" value="<?php echo $judul; ?>"></td>
				</tr>
				<tr> 
					<td>Tahun</td>
					<td><input class="form-control" type="text" name="tahun" value="<?php echo $tahun; ?>"></td>
				</tr>
				<tr> 
					<td>Penerbit</td>
					<td>
						<select class="form-control" name="id_penerbit">
							<?php 
								while($penerbit_data = mysqli_fetch_array($penerbit)) {         
									echo "<option ".($penerbit_data['id_penerbit'] == $id_penerbit ? 'selected' : '')." value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr> 
					<td>Pengarang</td>
					<td>
						<select class="form-control" name="id_pengarang">
							<?php 
								while($pengarang_data = mysqli_fetch_array($pengarang)) {         
									echo "<option ".($pengarang_data['id_pengarang'] == $id_pengarang ? 'selected' : '')." value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr> 
					<td>Katalog</td>
					<td>
						<select class="form-control" name="id_katalog">
							<?php 
								while($katalog_data = mysqli_fetch_array($katalog)) {         
									echo "<option ".($katalog_data['id_katalog'] == $id_katalog ? 'selected' : '')." value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr> 
					<td>Qty Stok</td>
					<td><input class="form-control" type="text" name="qty_stok" value="<?php echo $qty_stok; ?>"></td>
				</tr>
				<tr> 
					<td>Harga Pinjam</td>
					<td><input class="form-control" type="text" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>"></td>
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

			$isbn = $_GET['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>