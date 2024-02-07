<!DOCTYPE html>
<html>
<head>
	<title>Form pendaftaran</title>
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
                    <li><a href="admin/index.php">admin</a></li>
                    <li id="kiri"><a href="form_pendaftaran.php" class="tbl-daftar">Pendaftaran Santri Baru</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="semua">
    	<div class="container">
    		<div class="title"> formulir pendaftaran santri baru</div>
    		  <form class="action" action="proses_pendaftaran.php" method="POST">
    			<div class="user-ditel">
    				<div class="input-box">
    					<span class="ditel">Nama</span>
    					<input type="text" placeholder="Masukkan Nama Anda" name="nama" required>
    				</div>
    				<div class="input-box">
    					<span class="ditel">Tempat, Tanggal lahir</span>
    					<input type="text" placeholder="tempat tanggal lahir anda" name="ttl" required>
    				</div>
    				<div class="input-box">
    					<span class="ditel">Tanggal Masuk</span>
    					<input type="date" placeholder="" name="tgl_masuk" required>	
    				</div>
    				<div class="input-box">
    					<span class="ditel">Nomor Hp Orang Tua</span>
    					<input type="text" placeholder="no hp orang tua" name="no_hp_ortu" required>
    				</div>
    				<div class="input-box">
    					<span class="ditel">Alamat</span>
    					<textarea type="text" name="alamat" required></textarea>
    				</div>
    			</div>
    			<div class="jk-ditel">
    				<input type="radio" name="jk" value="laki-laki" id="dot-1">
    				<input type="radio" name="jk" value="perempuan" id="dot-2">
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
    				<input type="submit" value="Daftar" name="submit">
    			</div>
    		</form>
        </div>
        <div id="copyright">
            <div class="semua">
                &copy; 2022. <b>Al-Hamidiyah</b>
            </div>
        </div>
	</body>
</html>