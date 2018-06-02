<!DOCTYPE html>
<html>
<head>
	<title>Bluelogic Corp</title>
</head>
<body>
	<h2>Bluelogic Showroom</h2>
	
	<h3>Data Penjualan Mobil</h3>

		<p><a href="tambah.php">Masukkan</a>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Jenis Mobil</th>
			<th>Seri Mobil</th>
			<th>Jenis Transmisi </th>
			<th>Model Mesin</th>
			<th>Jumlah Penjualan</th>
		</tr>
		
		<?php
		
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM daftar ORDER BY id DESC") or die(mysql_error());
		
		
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			
			$no = 1;
			while($data = mysql_fetch_assoc($query)){	
			
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['jmobil'].'</td>';	
					echo '<td>'.$data['smobil'].'</td>';	
					echo '<td>'.$data['jtrans'].'</td>';
					echo '<td>'.$data['mmesin'].'</td>';
					echo '<td>'.$data['bayar'].'</td>';
					 echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a>  <a href="delete.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>