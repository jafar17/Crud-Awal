<?php

if (isset ($_POST ['tambah'])){

	include ('koneksi.php');
	
	$jm = $_POST ['jmobil'];
	$sm = $_POST ['smobil'];
	$jt = $_POST ['jtrans'];
	$mm = $_POST ['mmesin'];
	$by = $_POST ['bayar'];
	
$input = mysql_query ("INSERT INTO daftar VALUES (NULL, '$jm', '$sm', '$jt', '$mm', '$by')") or die (mysql_error());

if ($input){
	echo 'Data Berhasil Di Tambahkan ';
	echo '<a href="daftar.php">Kembali</a>' ;
	}else{
		
	echo 'Gagal Di Tambahkan ';
	echo '<a href="tambah.php">Kembali</a>' ;
	}
	
	}else{
	
	echo '<script> windows.history.back() </script>' ; 
}
?>