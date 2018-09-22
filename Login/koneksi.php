<?php
$koneksi = mysqli_connect("localhost","root","","tugasbesar");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
