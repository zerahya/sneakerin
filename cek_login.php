<?php

session_start();

include 'koneksi.php';


$email = $_POST['email'];
$password = $_POST['password'];


$getdata = $con->query("select name,password, isEmailConfirmed from user where email='$email'");
$data =$getdata->fetch_array();
$getName = $con->query("select name from user where email='$email'");

$cek = mysqli_num_rows($getdata);
 
if($cek > 0){
	if(password_verify($password, $data['password']) && $data['isEmailConfirmed']==1)
	{
		$_SESSION["email"] = $email;
		header("location:index.php");
	}else
	{
		echo'email dan password anda salah !';
	}
	
}else{
	echo 'email dan password anda salah !';
	//header("location:index.php?pesan=gagal");
}
?>
