<?php
session_start();

 include 'koneksi.php';

  $email = $_SESSION["email"];

  $sql = $con->query("UPDATE pemesanan SET isConfirmed=1 WHERE email='$email'");

  header("location:index.php");
?>