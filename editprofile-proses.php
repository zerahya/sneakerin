<?php

	if(isset($_POST['save']))
	{
        session_start();
		include('koneksi.php');
		
		$name	        = $_POST['name'];
        $phone	        = $_POST['phone'];
        $email          = $_SESSION['email'];
        $conn->query("UPDATE user SET name='$name',phone='$phone' WHERE email='$email'");
        header("location:index.php");
	}
	else
	{
		echo '<script>window.history.back()</script>';
	}

?>