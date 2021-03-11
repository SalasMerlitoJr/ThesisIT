<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><h1>Assign Adviser na</h1></center>
  <center><form method="post">

<?php
include '../../../includes/connect.php';
 

if(isset($_POST['setAdviser'])){
  $adviser_id = $_POST['adviser_id'];
?>
<!-------------------------->
  <select class='form-control' name='adviser_id'>
  <option value="NULL" selected>View Fields...</option>
  <?php 
    //$sql4 = "SELECT * FROM users_tbl where type = 'faculty' and type != 'student' and  status = 0 "; // if status != 0 dili na ma display ang name sa instructor
    $sql4 = "SELECT user_id,name,adviser_field_id,field from users_tbl inner join adviser_fields_tbl on user_id = adviser where user_id = '$adviser_id' ";

    $data = mysqli_query($conn, $sql4);
    while  ($row = mysqli_fetch_object($data)) { 
      //if set_count != $rowcount
      ?>
  <option value="<?=$row->adviser_field_id?>" name=""> <?=$row->field?></option>
  <?php  } ?>
</select>
<!-------------------------->
  
<?php
  
  $group_id = $_GET['assignAdviser'];
  $sql = "UPDATE group_tbl set team_adviser = '$adviser_id',gro_status = 0 where group_id = '$group_id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


  /*$sql1 = "UPDATE group_tbl set team_adviser = '$adviser_id' where group_id = '$group_id' ";
    $stmt1 = $conn->prepare($sql1);
    $stmt->execute();*/
}
 ?>

<!------------------>
<?php 
/* */
$group_id = $_GET['assignAdviser']; // group_id from group_tbl 
$sql4 ="SELECT * from group_tbl where team_adviser = 46 ";
$records = mysqli_query($conn, $sql4);
$rowcount = mysqli_num_rows($records);
?>
<h1><?php echo $rowcount; ?></h1>
<?php 


/*
$sql5 = "SELECT * from users_tbl where user_id = '$group_id' ";
$records5 = mysqli_query($conn, $sql5);
while($row5 = mysqli_fetch_object($records5)) {
  //if(($row5->set_count) == ($rowcount)){ */ ?>
    <center><h1><?php //echo htmlentities($row5->set_count) ; ?></h1></center>
<?php  
//}
  // if $rowcount == set_count sa user_id sa faculty
//e update ang status sa faculty into an integer other than 0
//$group_id = $_GET['assignAdviser'];

/*$sql5 = "SELECT * from users_tbl where user_id = '$group_id' ";
    $records5 = mysqli_query($conn, $sql5);
    while  ($row5 = mysqli_fetch_object($records5)) {
      if(($row5->set_count) == ($rowcount)){
        $sql="UPDATE users_tbl SET status = 1 where user_id = '$group_id'" ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
      }
    }*/
?>
<!------------------>

<select class='form-control' name='adviser_id'>
<option value="NULL" selected>Select adviser...</option>
  <?php 
    $sql4 = "SELECT * FROM users_tbl where type = 'faculty' and type != 'student' and  status = 0 "; // if status != 0 dili na ma display ang name sa instructor

    $data = mysqli_query($conn, $sql4);
    while  ($row = mysqli_fetch_object($data)) { 
      //if set_count != $rowcount
      ?>
  <option value="<?=$row->user_id?>" name="adviser_id"> <?=$row->name?></option>
  <?php  } ?>
</select>

<!------------------------->

<!------------------------->



<br><br>
<button name="setAdviser" type="submit">assign</button>
</form></center>

<?php 
$sql5 = "SELECT * from users_tbl where user_id = '$group_id' ";
$records5 = mysqli_query($conn, $sql5);
while($row5 = mysqli_fetch_object($records5)){ ?>
    <center><h1><?php echo htmlentities($row5->set_count) ; ?></h1></center>
<?php  
}
?>
</body>
</html>

