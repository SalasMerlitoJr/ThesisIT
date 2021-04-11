
<?php
include "koneksi.php";
$name = $_POST['name'];
$email = $_POST['email'];
mysqli_query($conn,"INSERT INTO users_tbl (name,email) VALUES ('$name','$email')");
header('location:manageStudents_csv.php');
?>