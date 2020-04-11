<?php 
	//JIKA TOMBOL SUMBIT SUDAH DITEKAN ATAU BELUM
if ( isset ($_POST["submit"]) ){
	//CEK USERNAME DAN PASSWORD KOSONG
	if ( isset ($_POST["username"]) && ($_POST["password"]) ) {
		
	}
 // CEK PASSWORD BENAR ATAU SALAH	
if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
		//jika benar username dan password nya
		header("location: admin.php ");
		exit;
	}// jika salah
	else{
		$error = true;
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body{
			background-image: url(img/background.png);
			background-size: 100%;

		}
		div{
			width:  300px;

		}

		form{
			
			background-color: rgba(0,0,0,.5);
			padding: 10px;
			border: 10px solid;
			color: white;
			border-color: rgb(100,5,5);

		}

		h1{
			color: white;
			margin-top: 400px;
			padding-left: 30px;
		}

		input{
			background-color: rgba(0,0,0,.5);
			color: white;
		}
		p{
			color: white;
			font-size: 12px;
		}
		button{
			margin: auto;
			width: 70px;
			border-radius: 50%;

		}
	</style>
</head>
<body>

	
<div>
	<h1 class="ecek">Login Admin</h1>

	<?php if (isset ($error) ){ ?>
		 <p>Username / password anda salah</p>
	<?php } ?>
	
	<ul>
	<form class="ecek" action="" method="POST"> <!--jika ACTION kosong, maka data akan dikirim ke halaman ini -->
		
		<li>
			<label for="username">Username : </label> <!-- fungsi for di label dan id yang di input adalah agar label dan input terhubung-->
			<input type="text" name="username" id="username"> 
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<br>
		<li>
			<button type="text" name="submit">Login</button>
		</li>


	</form>	
	</ul>

</div>

</body>
</html>