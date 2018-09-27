<?php
session_start();

 include 'koneksi.php';

  $email = $_SESSION["email"];


  $sql = $con->query("DELETE FROM pemesanan WHERE email='$email' AND isConfirmed=0");

  header("location:index.php");
?>