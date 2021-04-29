<!DOCTYPE html> 
<html> 
	<head> 
		<title>Result page</title> 		
		<style type="text/css">
			.results {
				margin-left:12%; 
				margin-right:12%; 
				margin-top:10px;
			}
		</style>
	</head> 
	
<body bgcolor="#F5DEB3"> 	
	<a href = "documentSearch.php"><button>Go Back</button></a>
	
<?php 
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"tmsdup");
	
	if(isset($_GET['search'])){	
		$get_value = $_GET['user_query'];
		
		if($get_value==''){	
			echo "<center><b>Please go back, and write something in the search box!</b></center>";
			exit();
		}

	$result_query = "select * from thesis_tbl where thesis_title like '%$get_value%'";	
	$run_result = mysqli_query($con,$result_query);
	
	if(mysqli_num_rows($run_result)<1){
		echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
		exit();
	}
	
	while($row_result=mysqli_fetch_array($run_result)){
		$site_title=$row_result['thesis_id'];
		$site_link=$row_result['thesis_title'];
	
		echo "<div class='results'>
		
		<h2>$site_title</h2>
		<a href='$site_title' target='_blank'>$site_link</a>		
		</div>";

		}
	}
?>

</body> 
</html>