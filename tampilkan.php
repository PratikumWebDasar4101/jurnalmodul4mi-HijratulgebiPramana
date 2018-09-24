<?php
$user = $_SESSION['user'];
?>

<table border="1">
	<tr align="center">
		<td width="100px" height="30px">Nama</td>
		<td width="100px" height="30px">Hobi</td>
		<td>Gambar</td>
	</tr>
	<tr>
		<td><?php echo $user['nama'];?></td>
		<td>
			<?php
			foreach ($user['Hobi'] as $hobi => $value) {
				echo $value .'<br>';
			}
			?>
		</td>
		<td>
			<img width="300px" src="<?php echo $user["file"]; ?>">
		</td>
	</tr>
</table>