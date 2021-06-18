<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "db_pw";
	$kon = mysqli_connect($host,$user,$pass) or die ("Koneksi ke database gagal.");
	mysqli_select_db($kon, $name) or die ("Database tidak ditemukan.");
?>
