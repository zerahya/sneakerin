<!DOCTYPE html>
<html>
<head>
	<title>SNEAKER.In</title>
</head>
<body>
	<h2>SNEAKER.In</h2>

	<br/>
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['email']; ?>! anda telah login.</h4>

	<br/>
	<br/>

	<a href="logout.php">LOGOUT</a>


</body>
</html>
