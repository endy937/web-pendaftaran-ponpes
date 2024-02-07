<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$no_hp_ortu = $_POST['no_hp_ortu'];
	
	$sql = "UPDATE pen_santri SET nama='$nama', ttl='$ttl', tgl_masuk='$tgl_masuk', jk='$jk', alamat = '$alamat', no_hp_ortu ='$no_hp_ortu' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: data_santri.php');
	} else {
		die("gagal menyimpan");
	}
	
	
} else {
	die("Akses ditolak");
}

?>
