<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		include('koneksi.php');
	
		$query = mysql_query("SELECT * FROM siswa ORDER BY siswa_nis DESC") or die(mysql_error());
		
		if(mysql_num_rows($query) == 0){
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';					
					echo '<td>'.$data['siswa_nis'].'</td>';		
					echo '<td>'.$data['siswa_nama'].'</td>';	
					echo '<td>'.$data['siswa_kelas'].'</td>';	
					echo '<td>'.$data['siswa_jurusan'].'</td>';	
					echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> / <a href="hapus.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;
				
			}
			
		}
		?>
	</table>
</body>
</html>