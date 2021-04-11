<?php
include '../../includes/functions.php'; //include functions
include '../../includes/connect.php'; //include connection
$ufunc = new UserFunctions;
$chss = new Login;
$chss->SessionCheck();
//Check user role is true
if (!isset($_SESSION['email']) || $_SESSION['type'] != 'student') {
  header("Location:../../includes/logout.php");
}
if ($_SESSION['is_active'] != 0) {
  echo "<script>alert('Your account was disabled by the chairman')</script>";
  //header("Location:../../includes/logout.php");  
  echo "<script>location.href='../../includes/logout.php'</script>";
}
?>
