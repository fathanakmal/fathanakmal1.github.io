<?php 
//SUPER GLOBALS
//VARIABEL MILIK PHP
//MERUPAKAN ARRAY ASSOCIATIVE
//YANG DIPAKAI DISINI ADALAH $_GET
//$_GET ADALAH METODE PENGIRIMAN DATA MELALUI URL DAN DATA TERSEBUT DAPAT DITANGKAP OLEH VARIABEL SUPERGLOBAL $_GET


$handphone = [[
					"merk" => "Xiaomi", //sebelum isi arraynya diisi, harus ditandai dengan key yang dibuat dengan string agar nant dipanggil pada saat looping/perulangan
					"nama" => "Xiaomi NOTE 5",
					"kode" => 11111,
					"warna" => "Gold",
					"harga" => "Rp.1.500.000,-",
					"gambar" => "note5.jpg"],
				[	
					"merk" => "Xiaomi",
					"nama" => "Xiaomi NOTE 7",
					"kode" => 11112,
					"warna" => "Black",
					"harga" => "Rp.2.200.000,-",
					"gambar" => "note7.jpeg"],
				[	
					"merk" => "OPPO",
					"nama" => "OPPO F1",
					"kode" => 11113,
					"warna" => "White",
					"harga" => "Rp.4.200.000,-",
					"gambar" => "oppof1.jpeg"],
				[	
					"merk" => "SAMSUNG",
					"nama" => "SAMSUNG S8 PRO",
					"kode" => 11114,
					"warna" => "Black",
					"harga" => "Rp.8.200.000,-",
					"gambar" => "samsungs8.jpeg"],
				[	
					"merk" => "REALME",
					"nama" => "REALME C2",
					"kode" => 11115,
					"warna" => "Black",
					"harga" => "Rp.1.100.000,-",
					"gambar" => "realmec2.jpeg"],
				[	
					"merk" => "VIVO",
					"nama" => "VIVO V11",
					"kode" => 11116,
					"warna" => "YELLOW",
					"harga" => "Rp.3.200.000,-",
					"gambar" => "vivov11.jpeg"]
				]
?>


<!DOCTYPE html>
<html>
<head>
	<title>assosiative array</title>
	<style>
		body{
			background-color: lightgreen;
		}
		
		.table{	
			background-image: url(img/diamond.png);
			text-align: center;
			font-size: 20px;
			margin: auto;
			margin-top: auto;
			line-height: 50px;
		}
		</style>

</head>
<body>
	<h1>DAFTAR HANDPHONE</h1>

	<ul>
	<?php foreach ($handphone as $hp) :?>
		<li>	
			<td><img src="img/<?= $hp["gambar"];?>"></td>
			<td><a href="variabelsuperglobals2.php?nama=<?= $hp["nama"] ?>  
			&merk=<?= $hp["merk"] ?>
			&kode=<?= $hp["kode"] ?>
			&warna=<?= $hp["warna"]?>
			&harga=<?= $hp["harga"]?>
			&gambar=<?= $hp["gambar"]?>"><?= $hp["nama"];
			//DIATAS ADALAH CONTOH PENGIRIMAN DATA MENGGUNAKAN METODE GET YANG AKAN
			//DITANGKAP OLEH VARIABEL $_GET DI HALAMAN SEBELAH(VARIABELSUPERGLOBALS2.PHP) KARENA SAYA KIRIM MELALUI URL?></a></td>
		</li>	
	<?php endforeach ?>
	</ul>

</body>
</html>



