<?php 
//VARIABEL SCOPE/ LINGKUP VARIABEL
// - VARIABEL BIASA
// - VARIABEL GLOBAL
// - VARIABEL SUPERGLOBALS = ADALAH VARIABEL YANG SUDAH DISEDIA OLEH PHP 
// - VARIBAEL SUPERGLOBALS ($_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV) INI TIPENYA ADA ARRAY ASSOCIATIVE



 $x=10; //variabel biasa
 $y=30;


 function tampilX(){
 	$x=20; // variabel local hanya untuk didalam function saja
	global $y;// variabel global
				 //dengan keyword global artinya dia akan mencari variabel yang sama namun berada diluar function
	echo $y;
	echo "<br>";
	echo $x;

}

echo tampilX();
echo "<br>";
echo $x; // outputnya nanti adalah 30 20 10 karena meski nama variabelnya sama namun tetap dianggap berbeda lingkup,

 ?>

 <?php 




  ?>