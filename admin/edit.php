<!DOCTYPE html>
<html>
<head>
		<?php 
			include("koneksi.php");
			if( !isset($_GET['id']) ){
			header('Location: data_santri.php'); }

			$id = $_GET['id'];
			$sql = "SELECT * FROM pen_santri WHERE id=$id";
			$query = mysqli_query($db, $sql);
			$santri = mysqli_fetch_assoc($query);

			if( mysqli_num_rows($query) < 1 ){
				die("data tidak terdeteksi");
			}
		?>
	<title>form edit data santri</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
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
		<div class="container">
	    	<div class="title"> Edit Data Pendaftaran Santri</div>
	    		<form class="action" action="proses_edit.php" method="POST">
	    			<input type="hidden" name="id" value="<?php echo $santri['id'] ?>" />
	    				<div class="user-ditel">
	    					<div class="input-box">
	    						<span class="ditel">Nama</span>
	    							<input type="text" placeholder="Masukkan Nama Anda" name="nama" required value="<?php echo $santri['nama'] ?>"/>
	    					</div>
	    					<div class="input-box">
	    						<span class="ditel">Tempat, Tanggal lahir</span>
	    							<input type="text" placeholder="tempat tanggal lahir anda" name="ttl" required value="<?php echo $santri['ttl']?>"/>
	    					</div>
	    					<div class="input-box">
	    						<span class="ditel">Tanggal Masuk</span>
	    							<input type="date" placeholder="" name="tgl_masuk" required value="<?php echo $santri['tgl_masuk'] ?>">
	    					</div>
	   
		    				<div class="input-box">
		    					<span class="ditel">Nomor Hp Orang Tua</span>
		    						<input type="text" placeholder="no hp orang tua" name="no_hp_ortu" required value="<?php echo $santri['no_hp_ortu'] ?>" >
		    				</div>
		    				<div class="input-box">
		    					<span class="ditel">Alamat</span>
		    						<textarea type="text" name="alamat" required><?php echo $santri['alamat'] ?>
		    						</textarea>
		    				</div>
	    				</div>
	    			<div class="jk-ditel"><?php $jk = $santri['jk']; ?>
	    				<input type="radio" name="jk" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>  id="dot-1">
	    					<input type="radio" name="jk" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?> id="dot-2">
	    						<span class="genter-title">Jenis kelamin</span>
	    				<div class="category">
	    					<label for="dot-1">
	    						<span class="dot one"></span>
	    						<span class="jk">laki-laki</span>
	    					</label>
	    					<label for="dot-2">	
	    						<span class="dot two"></span>
	    						<span class="jk">perempuan</span>
	    					</label>
	    				</div>
	    			</div>
	    			<div class="button">
	    				<input type="submit" value="Simpan" name="simpan">
	    			</div>
	    		</form>
	    	</div>
		     <div id="copyright">
		        <div class="semua">
		            &copy; 2022. <b>Al-Hamidiyah</b>
		        </div>
		    </div>
		</div>
	</body>
</html>
