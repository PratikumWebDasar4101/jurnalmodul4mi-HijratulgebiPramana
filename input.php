<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<table border="0">
		<form method="POST" action="proses.php" enctype="multipart/form-data">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					Mendaki <input type="checkbox" name="Hobi[]" value="mendaki">
					Main ML <input type="checkbox" name="Hobi[]" value="main ML">
					Memanah <input type="checkbox" name="Hobi[]" value="Memanah">
					Membaca <input type="checkbox" name="Hobi[]" value="membaca">
					Berenang <input type="checkbox" name="Hobi[]" value="berenang">
				</td>
			</tr>
			<tr>
				<td>Upload</td>
				<td>:</td>
				<td><input type="file" name="file" id="file"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="input"></td>
			</tr>
		</form>
	</table>

</body>
</html>