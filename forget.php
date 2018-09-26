<?php

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
	$msg = "";
	
	
		$con=new mysqli('localhost', 'root', '', 'tugasbesar');
		mysqli_connect('localhost', 'root', '', 'tugasbesar');
	
		$email = $con->real_escape_string($_GET['email']);
		
		if ($email == "")
			$msg = "Please check your inputs!";
		else {	
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
                    
                    <a href='http://localhost:8181/ForgetPassword/reset.php?email=$email'>Click Here</a>
                ";

                if ($mail->send())
                    $msg = "You have been registered! Please verify your email!";
                else
                    $msg = "Something wrong happened! Please try again!";
		}
		
	 
?>