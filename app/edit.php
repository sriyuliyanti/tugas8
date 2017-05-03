<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	include('koneksi.php');
	
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM siswa WHERE siswa_id='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
		
	}else{
		$data = mysql_fetch_assoc($show);
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['siswa_nis']; ?>" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['siswa_nama']; ?>" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="X" <?php if($data['siswa_kelas'] == 'X'){ echo 'selected'; } ?>>X</option>
						<option value="XI" <?php if($data['siswa_kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>
						<option value="XII" <?php if($data['siswa_kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer dan Jaringan" <?php if($data['siswa_jurusan'] == 'Teknik Komputer dan Jaringan'){ echo 'selected'; } ?>>Teknik Komputer dan Jaringan</option>
						<option value="Multimedia" <?php if($data['siswa_jurusan'] == 'Multimedia'){ echo 'selected'; } ?>>Multimedia</option>	
						<option value="Akuntansi" <?php if($data['siswa_jurusan'] == 'Akuntansi'){ echo 'selected'; } ?>>Akuntansi</option>		
						<option value="Perbankan" <?php if($data['siswa_jurusan'] == 'Perbankan'){ echo 'selected'; } ?>>Perbankan</option>		
						<option value="Pemasaran" <?php if($data['siswa_jurusan'] == 'Pemasaran'){ echo 'selected'; } ?>>Pemasaran</option>		
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>