<?php
		include ('koneksi.php');
		$id = $_POST['id'];
	
		$DELETE = mysql_query("DELETE FROM daftar WHERE id= '$id'");
		if ($DELETE) {
			echo ' Data berhasil di DELETE! ';
			echo ' <a href="daftar.php">kembali</a>';
		}else{
			echo ' Terjadi Error ';
		}
?>