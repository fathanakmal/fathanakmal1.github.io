<?php 
if ( 	!isset ($_GET["nama"]) ||
		!isset ($_GET["merk"]) ||
		!isset ($_GET["kode"]) ||
		!isset ($_GET["warna"]) ||
		!isset ($_GET["harga"]) ||
		!isset ($_GET["gambar"])) { //jika data nama masih kosong makan akan dipaksa redirect ke halaman sebelumnya
	//redirect
	header("Location: variabelsuperglobals.php");
	exit;
// ISSET BERFUNGSI UNTUK MENGECEK SUATU VARIABEL SUDAH DI ISI AAU BELUM
// header("Location: wwww.google.com"); adalah untuk redirect ke halaman lain
// exit; berfungsi untuk menstopkan program sampai disini agar program dibawahnya tidak dijalankan
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>detail handphone</title>
</head>
<body>
<h1>Detail Handphone</h1>
	<ul>
		<li><img src="img/<?= $_GET["gambar"] ?>"></li> <!--DATA YANG ADA DIDALAM $_GET ADALAH DATA YANG DITANGKAP SETELAH DATA TERSEBUT-->		
		<li>Nama : <?= $_GET["nama"] ?></li> 					<!--DIKIRIM DARI URL YANG DILAKUKAN DI HALAMAN SEBELAH(VARIABELSUPERGLOBALS.PHP)-->
		<li>Merk : <?= $_GET["merk"] ?></li>
		<li>Kode : <?= $_GET["kode"] ?></li>
		<li>Warna: <?= $_GET["warna"] ?></li>
		<li>Harga: <?= $_GET["harga"] ?></li>
	</ul>
<a href="variabelsuperglobals.php">kembali</a>

<?php var_dump($_GET["kode"]); ?>

</body>
</html>