<!DOCTYPE html>
<html>
<head>
	<title>Bluelogic Corp</title>
</head>
<body>
	<h2>Bluelogic Showroom</h2>

	<p><a href="daftar.php">Beranda</a> 

	<h3>Edit Data Penjualan</h3>

	<?php

	include('koneksi.php');

	$id = $_GET['id'];

	$show = mysql_query("SELECT * FROM daftar WHERE id='$id'");

	if(mysql_num_rows($show) == 0) {
		echo '<script>windows.history.back()</script>';
		} else {
		 $data = mysql_fetch_assoc($show);
		}
	?>

	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Jenis Mobil</td>
				<td>:</td>
				<td><input type="text" name="jmobil" value="<?php echo $data['jmobil']; ?>" required></td>
			</tr>

			<tr>
				<td>Seri Mobil</td>
				<td>:</td>
				<td><input type="text" name="smobil" size="30" value="<?php echo $data['smobil']; ?>" required></td>
			</tr>

			<tr>
				<td>Jenis Transmisi</td>
				<td>:</td>
				<td><input type="text" name="jtrans" size="30" value="<?php echo $data['jtrans']; ?>" required></td>
			</tr>

			<tr>
				<td>Model Mesin</td>
				<td>:</td>
				<td><input type="text" name="mmesin" size="30" value="<?php echo $data['mmesin']; ?>" required></td>
			</tr>

			<tr>
				<td>Jumlah Penjualan</td>
				<td>:</td>
				<td><input type="text" name="bayar" size="30" value="<?php echo $data['bayar']; ?>" required></td>
			</tr>

			<tr>
				<td>&nbsp</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>