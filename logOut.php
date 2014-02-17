<?php 
session_start();
$fname = $_SESSION['F_name'];
$lname = $_SESSION['L_name'];
session_destroy();
echo "<script>alert('Thank you ".$fname." ".$lname." for taking the Exam!');window.location.href='index.php';</script>";
 ?>