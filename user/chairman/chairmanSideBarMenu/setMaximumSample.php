<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">

<?php            
     include '../../../../includes/connect.php';	
     $faculty_id = $_GET['setMaximumTeam'];
		if(isset($_POST['setNumber'])){
		$max_num = $_POST["setMaximumNumber"];
		$sql="UPDATE users_tbl SET set_count = '$max_num' where  user_id = 2 " ;
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
?>
        <center><label>Set Maximum Number of Team</label></center>

		<center><input type="number" name="setMaximumNumber"></center><br>

		<center><button value="" name="setNumber">Set</button></center><br>
</form>

</body>
</html>


