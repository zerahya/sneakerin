<?php

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
	$msg = "";
	
	
		include 'koneksi.php';
	
		$name = $con->real_escape_string($_POST['nama']);
		$email = $con->real_escape_string($_POST['email']);
		$number = $con->real_escape_string($_POST['nomorHP']);
		$Password = $con->real_escape_string($_POST['password']);
	
		if ($name == "" || $email == "" || $password= "" || $number== "")
			$msg = "Please check your inputs!";
		else {
		
			$sql = "SELECT name FROM user WHERE email='$email'";
			$result = mysqli_query($con, $sql);
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
				
				$mail=new PHPMailer(TRUE);                            
        		$mail->isSMTP();                                    
        		$mail->Host = 'tls://smtp.gmail.com'; 
        		$mail->SMTPAuth = true;                             
        		$mail->Username = 'snicker.injogjakarta@gmail.com';           
        		$mail->Password = 'rnxscerrbbyjkcsc';                      
        		$mail->SMTPSecure = 'tls';                       
        		$mail->Port = 587;          
                $mail->setFrom('snicker.injogjakarta@gmail.com');
                $mail->addAddress($email);
        		$mail->isHTML(true);
                $mail->Subject="Verify email Snicker.in";
                $mail->Body="
		  
		  Thanks for signing up!
		  Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		  
		  Please click this link to activate your account:
		  <a href='https://kakuna.rapidplex.com:2083/cpsess7554041069/frontend/paper_lantern/filemanager/confirm.php?email=$email&token=$token'>Klik Untuk Menjadi Keluarga Besar Sneaker</a>";
		  
		  if ($mail->send())
                $msg = "You have been registered! Please verify your email!";
        else
                $msg = "Something wrong happened! Please try again!";
    }
}
?>