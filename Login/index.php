<!DOCTYPE html>
<html>
<head>
	<title>SNEAKER.In</title>
</head>
<body>
	<h2>Login</h2>
	<br/>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! email dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="Masukkan email"></td>
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>
</html>
