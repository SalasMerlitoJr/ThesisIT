<?php
$dbhost = "localhost"; //Host
$dbuser = "root"; //Database user
$dbpass = ""; //Database password
//$dbname = "tmsdup"; //Database name 
$dbname = "tmsdup_previous";

$conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname"); //Connection

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
