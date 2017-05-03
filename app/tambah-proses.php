<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	
	$nis		= $_POST['nis'];
	$nama		= $_POST['nama'];
	$kelas		= $_POST['kelas'];
	$jurusan	= $_POST['jurusan'];
	
	$input = mysql_query("INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$kelas', '$jurusan')") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';
		echo '<a href="tambah.php">Kembali</a>';
		
	}else{
		
		echo 'Gagal menambahkan data! ';
		echo '<a href="tambah.php">Kembali</a>';
		
	}

}else{
	echo '<script>window.history.back()</script>';
}
?>