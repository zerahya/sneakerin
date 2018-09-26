<?php
 function redirect() {
  header('Location: register.php');
  exit();
 }

  $con = new mysqli('localhost', 'root', '', 'tugasbesar');

  $email = $con->real_escape_string($_GET['email']);
  $token = $con->real_escape_string($_GET['token']);

  $sql = $con->query("SELECT name FROM user WHERE email='$email' AND token='$token'");

  if ($sql->num_rows > 0) {
   $con->query("UPDATE user SET isEmailConfirmed=1 WHERE email='$email'");
   echo 'Your email has been verified! You can log in now!';
  } else
   redirect();
?>