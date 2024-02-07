<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data santri baru</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<nav>
        <div class="semua" id="garis">
            <div class="menu">
                <ul>
                    <li><a href="index.php">Profil</a></li>
                    <li><a href="#courses">Aktifitas</a></li>
                    <li><a href="#tutors">Berita</a></li>
                    <li><a href="data_santri.php">admin</a></li>
                    <li id="kiri"><a href="form_pendaftaran.php" class="tbl-daftar">Pendaftaran Santri Baru</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="semua">
		<table class="tabel">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Tempat tanggal lahir</th>
					<th>Tanggal masuk</th>
					<th>jenis kelamin</th>
					<th>Alamat</th>
					<th>Nomor Np/Wa Orang Tua</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM pen_santri";
					$query = mysqli_query($db, $sql);
					while($santri = mysqli_fetch_array($query)){
						echo "<tr>";
							echo "<td>".$santri['id']."</td>";
							echo "<td>".$santri['nama']."</td>";
							echo "<td>".$santri['ttl']."</td>";
							echo "<td>".$santri['tgl_masuk']."</td>";
							echo "<td>".$santri['jk']."</td>";
							echo "<td>".$santri['alamat']."</td>";
							echo "<td>".$santri['no_hp_ortu']."</td>";
							echo "<td>";
							echo "<a href='edit.php?id=".$santri['id']."'>Edit</a><br>";
							echo "<a href='hapus.php?id=".$santri['id']."'>Hapus</a>";
							echo "</td>";
						echo "</tr>";
						}		
					?>	



		<!-- <?php 
		//memanggil ada 3 yaitu include,require,require_once
			include 'koneksi.php';
			$no = 1;
			$query = mysqli_query( $koneksi,'select * from reservasi');// kode menampilkan data *=pilih semua

			//looping atau perulagan
			//fetch = mana datana?
			while($tampil = mysqli_fetch_array($query)) {
			?>
			<tr align="center">
				<td><?php echo $no++ ?></td>
				<td><?php echo $tampil['nama'] ?></td>
				<td><?php echo $tampil['email'] ?></td>
				<td><?php echo $tampil['telepon'] ?></td>
				<td><?php echo $tampil['tanggal'] ?></td>
				<td><?php echo $tampil['waktu'] ?></td>
				<td><?php echo $tampil['orang'] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $tampil['id']; ?>">[EDIT]</a>
					<a href="hapus.php?id=<?php echo $tampil['id']; ?>" onclick="return confirm('Yakin dih,,, bade dihapus?')">[HAPUS]</a>
				</td>
			</tr>
			<?php 
		}
		?> -->
			</tbody>
		</table>
	 	<div class="semua">
			<div id="copyright">
	            &copy; 2022. <b>Al-Hamidiyah</b>
	       </div>
	    </div>
	</div>
</body>
</html>
