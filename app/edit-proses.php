<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id			= $_POST['id'];		
	$nis		= $_POST['nis'];	
	$nama		= $_POST['nama'];	
	$kelas		= $_POST['kelas'];	
	$jurusan	= $_POST['jurusan'];
	
	$update = mysql_query("UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_kelas='$kelas', siswa_jurusan='$jurusan' WHERE siswa_id='$id'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>