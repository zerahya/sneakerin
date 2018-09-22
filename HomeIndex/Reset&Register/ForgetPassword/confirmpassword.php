<?php
 function redirect() {
  header('Location: forgetform.php');
  exit();
 }

  $con = new mysqli('localhost', 'root', '', 'tugasbesar');

  
  $email = $con->real_escape_string($_GET['email']);
  $password = $con->real_escape_string($_GET['password']);
  
  $passHashed=password_hash($password, PASSWORD_BCRYPT);
  $sql = $con->query("SELECT name FROM user WHERE email='$email'");

  if ($sql->num_rows !=0) {
   $con->query("UPDATE user SET password='$passHashed' WHERE email='$email'");
   echo 'Your Password has benn changed!';
  } else
   redirect();
?>