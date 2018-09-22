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
                    Please click on the link below:<br><br>
                    
                    <a href='http://localhost:8181/Register/confirm.php?email=$email&token=$token'>Click Here</a>
                ";

                if ($mail->send())
                    $msg = "You have been registered! Please verify your email!";
                else
                    $msg = "Something wrong happened! Please try again!";
			}
		}
	 
?>