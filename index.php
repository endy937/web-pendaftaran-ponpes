<!DOCTYPE html>
<html>
<head>
	<title>halaman utama</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
        <div class="semua" id="garis">
            <div class="menu">
                <ul>
                    <li><a href="">Profil</a></li>
                    <li><a href="#courses">Aktifitas</a></li>
                    <li><a href="#tutors">Berita</a></li>
                    <li><a href="admin/index.php">admin</a></li>
                    <li id="kiri"><a href="form_pendaftaran.php" class="tbl-daftar">Pendaftaran Santri Baru</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="semua">
        <section id="home">
            <div class="kolom">
                <p class="judul">Selamat Datang di Website Resmi</p>
                <h2>Pondok Pesantren </h2> <h2>Babakan Al-Hamidiyah</h2>
                <p>Memberikan kontribusi nyata dalam pembangunan sumber daya manusia dan menciptakan insan kamil yang memiliki kecerdasan intelektual dan spiritual demi pembangunan agama, bangsa dan negara.</p>
                <p><a href="" class="tbl-akre">Terakreditasi A</a></p>
            </div>
        </section>  
    </div>

    <div class="semua">
        <div id="copyright">
             &copy; 2022. <b>Al-Hamidiyah</b>
         </div>
    </div>
</body>
    <?php if(isset($_GET['status'])): ?>
    <?php endif; ?>
</html>
