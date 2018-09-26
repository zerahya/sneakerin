<?php

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
	$msg = "";
	
	
		$con=new mysqli('localhost', 'root', '', 'tugasbesar');
		$db = mysqli_connect('localhost', 'root', '', 'tugasbesar');
	
		$name = $con->real_escape_string($_POST['nama']);
		$email = $con->real_escape_string($_POST['email']);
		$number = $con->real_escape_string($_POST['nomorHP']);
		$Password = $con->real_escape_string($_POST['password']);
	
		if ($name == "" || $email == "" || $password= "" || $number== "")
			$msg = "Please check your inputs!";
		else {
		
			$sql = "SELECT name FROM user WHERE email='$email'";
			$result = mysqli_query($db, $sql);
			$row=mysqli_fetch_assoc($result);

			if($row['name'])
			{
				$message="Your account is already registered";
				echo $message;
			}else {
				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);

				$passHashed=password_hash($Password, PASSWORD_BCRYPT);
				
				$con->query("INSERT INTO user (name,email,password,phone,isEmailConfirmed,token)
				VALUES ('$name', '$email','$passHashed','$number', '0', '$token');
				");

if($con ){
      
		  $to      = $email;
		  $subject = 'Verify email Snicker.in';
		  $message = '
		  
		  Thanks for signing up!
		  Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
				  
		  ------------------------
		  Username: '.$username.'
		  Password: '.$Password.'
		  ------------------------
		  
		  Please click this link to activate your account:
		  http://sneakerin.000webhostapp.com/confirm.php?email='.$email.'&token='.$token.'';
									  
		  $headers = 'From:snicker.injogjakarta@gmail.com' . "\r\n"; // Set from headers
		  mail($to, $subject, $message, $headers);
					}
		}
	 
?>