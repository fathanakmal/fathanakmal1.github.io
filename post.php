<!DOCTYPE html>
<html>
<head>
	<title>$_POST</title>
	<style>
		form{
			background-color: green;
		}

	</style>
</head>
<body>

	<form action="post2.php" method="post"> <!-- action adalah tujuan ke halaman mana data akan dikirim, method adalah metode pengiriman data $_GET ATAU $_POST-->
		Masukkan nama : 
		<input type="text" name="nama">
		<br>
		<button type="text" name="submit">KIRIM!</button>


	</form>

</body>
</html>