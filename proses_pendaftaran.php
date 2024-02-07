<?php
include("koneksi.php");

if(isset($_POST['submit'])){

	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$no_hp_ortu = $_POST['no_hp_ortu'];
	
	
	$sql = "INSERT INTO pen_santri (nama, ttl, tgl_masuk, jk, alamat, no_hp_ortu) VALUE ('$nama', '$ttl', '$tgl_masuk', '$jk', '$alamat', '$no_hp_ortu')";
	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} 
else {
	die("Akses ditolak");
}

?>
