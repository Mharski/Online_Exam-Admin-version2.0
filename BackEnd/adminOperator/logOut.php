<?php
session_start();
$Admin_Fname = $_SESSION['Admin_Fname'];
$Admin_Lname = $_SESSION['Admin_Lname'];
session_destroy();
echo "<script>alert('Thank You ".$Admin_Fname." ".$Admin_Lname."');window.location.href='../index.php';</script>";
 ?>