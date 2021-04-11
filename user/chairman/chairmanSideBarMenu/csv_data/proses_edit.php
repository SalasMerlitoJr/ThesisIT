
<?php
	include "koneksi.php";
	$modal_id=$_POST['modal_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$modal=mysqli_query($conn,"UPDATE users_tbl SET name = '$name',email = '$email' WHERE user_id = '$modal_id'");
	header('location:manageStudents_csv.php');
?>