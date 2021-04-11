
<?php
	include "koneksi.php";
	$modal_id=$_GET['modal_id'];
	$modal=mysqli_query($conn,"Delete FROM users_tbl WHERE user_id='$modal_id'");
	header('location:manageStudents_csv.php');
?>