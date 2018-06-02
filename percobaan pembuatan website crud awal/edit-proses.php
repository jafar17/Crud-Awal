<?php

if (isset ($_POST ['simpan'])){

	include ('koneksi.php');
	$id = $_POST['id'];
	$jm = $_POST ['jmobil'];
	$sm = $_POST ['smobil'];
	$jt = $_POST['jtrans'];
	$mm = $_POST['mmesin'];
	$by = $_POST['bayar'];
	
	$update = mysql_query("UPDATE daftar SET jmobil='$jm', smobil='$sm', jtrans='$jt', mmesin='$mm', bayar='$by' WHERE id='$id' ") or die (mysql_error());

if ($update){
	echo 'Data Berhasil Disimpan ';
	echo '<a href="daftar.php">Kembali</a>' ;
	}else{
		
	echo 'Gagal Menyimpan Data!!! ';
	echo '<a href="edit.php?id='.$id.'">Kembali</a>' ;
	}
	
	}else{
	
	echo '<script> windows.history.back() </script>' ; 
}
?>