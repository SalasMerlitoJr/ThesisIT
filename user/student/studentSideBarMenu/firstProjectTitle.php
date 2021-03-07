<!--<?php // include 'students_SESSION.php'; ?>-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Pagpasa na ug title sa inyu e propose para mahatagan na mo ug adviser</h1></center>

<?php

  include '../../../includes/connect.php';
  //if(isset($_POST['sendTitle'])){
	  //$id = $_GET['sendTitle'];
	  //$group_id = $_SESSION["user_id"];
  	  //$group_id = $_GET['sendTitle'];
	  //$sql4 = "SELECT * from group_members_tbl where group_id = 25 ";
  	  $sql4 = "SELECT name from users_tbl inner join group_members_tbl on user_id = member_id where group_id = 25 ";
	  $records4 = mysqli_query($conn, $sql4);
	  while  ($row4 = mysqli_fetch_object($records4)) {

?>

                    
                      <!--<center><h1><?php //  htmlentities($row4->group_members_id);?></h1></center>-->
                      <center><h1><?php echo htmlentities($row4->name);?></h1></center>
                    

<?php } ?>
</body>
</html>