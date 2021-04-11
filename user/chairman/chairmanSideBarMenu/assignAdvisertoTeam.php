
<?php include 'chairman_SESSION.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../chairman_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../chairman_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../chairman_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../chairman_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../chairman_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../chairman_css/style.css">

  <link rel="stylesheet" href="../chairman_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../chairman_css/awesome-bootstrap-checkbox.css">
<style type="text/css">
  .edit_btn{
      text-decoration: none;s
      padding: 2px 5px;
      background: #2E8B57;
      color: white;
      border-radius: 3px;
      font-size: 1.3em;
  }
</style>

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../chairman_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
    </div>
    
    <!--<div class="cd-search js-cd-search">-->
    <div class="js-cd-search">
      <form>
        <!--<center><h3 class="thesis-title" style="color:white; margin-top: 1em">BSIT-USTP Thesis Management System</h3></center>-->
        <center><h3 class="thesis-title">USTP-BSIT Thesis Management System</h3></center>
      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><!--<a href="#0">Tour</a></li>-->
      <li class="cd-nav__item"><!--<a href="#0">Support</a></li>-->
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../chairman_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="manageAcc.php">My Account</a></li></center>
          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">admin Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="../chairman_dashboard.php">Dashboard</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
          </ul>-->
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">          
          <ul class="cd-side__sub-list"></ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>User Management</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="adminSideBarMenu/manageStudents.php">Student Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="csv_data/manageStudents_csv.php">Student Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="csv_data/manageFaculty_csv.php">Faculty Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="groupAssignment.php">Group Assignment</a>          
        </li> 

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">
          </ul>
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="panelAssignment.php">Panel Assignment</a>
          
        </li>
    
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="defenseSchedule.php">Defense Schedule</a>

        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="manuscript.php">Thesis Manuscripts</a>
        </li>
      </ul>
    
    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

<center>

<?php 
  include '../../../includes/connect.php';
  $msg = null;
  
  $selected_id = $_GET['assignAdviser'];

  $sql = "SELECT * from group_tbl where group_id = '$selected_id' ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) { 
?>

        <?php  if($msg){?><center><?php echo htmlentities($msg); ?></center> <?php } ?>

        <center>    <form method="post" class="form-horizontal" enctype="multipart/form-data">
          <div style="height: 3em"></div>
              <center><h3>Select Adviser for </h3></center>
                  <center> <strong style="font-size: 2em"><?php echo htmlentities($row->group_name); ?></strong></center>
                </div>

      <?php } ?>
                <div style="height: 13em"></div>

    <center><strong>Group</strong></center>
  <center><form method="post">  

<!-------------------------->
<select name='adviser'>
<option value="NULL" selected>---Select Adviser---</option>
  <?php
    include '../../../includes/connect.php';
    $selected_id = $_GET['assignAdviser'];
    if(isset($_POST['assign'])){
      $adviser = $_POST['adviser'];
      $sql11="UPDATE group_tbl SET adviser = '$adviser' where group_id = '$selected_id' ";
      $stmt11 = $conn->prepare($sql11);
      $stmt11->execute();

      $sql12="UPDATE users_tbl SET user_status = '$selected_id' where user_id = '$adviser' ";
      $stmt12 = $conn->prepare($sql12);
      $stmt12->execute();
    } 
    
    $sql2 = "SELECT * FROM users_tbl where type = 'faculty' "; // if status != 0 dili na ma display ang name sa instructor
    $data = mysqli_query($conn, $sql2);
    while  ($row = mysqli_fetch_object($data)) { 
      ?>
  <option value="<?=$row->user_id?>" name="adviser"> <?=$row->name?></option>
<?php  } ?>  
</select>
<button type="submit" name="assign" value="">Assign</button>
</form></center>

<!-------------------------->
<form method="POST" action="advisoryAssignment.php">   
    <center><button type="submit" class="edit_btn" value="">Back</button></center> 
</form>
<!-------------------------->
          </div>
        </div>
      </div>
    </div>
  
  </main> <!-- .cd-main-content -->
  <script src="../chairman_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../chairman_assets/js/menu-aim.js"></script>
  <script src="../chairman_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../chairman_js/jquery.min.js"></script>
  <script src="../chairman_js/bootstrap-select.min.js"></script>
  <script src="../chairman_js/bootstrap.min.js"></script>
  <script src="../chairman_js/jquery.dataTables.min.js"></script>
  <script src="../chairman_js/dataTables.bootstrap.min.js"></script>
  <script src="../chairman_js/Chart.min.js"></script>
  <script src="../chairman_js/fileinput.js"></script>
  <script src="../chairman_js/chartData.js"></script>
  <script src="../chairman_js/main.js"></script>


</body>
</html>


<!--
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><h1>Assign Adviser na</h1></center>
  <center><form method="post">

<?php /*
include '../../../includes/connect.php';
 

if(isset($_POST['setAdviser'])){
  $adviser_id = $_POST['adviser_id'];
?>

  <select class='form-control' name='adviser_id'>
  <option value="NULL" selected>View Fields...</option>
  <?php 
    $sql4 = "SELECT user_id,name,adviser_field_id,field from users_tbl inner join adviser_fields_tbl on user_id = adviser where user_id = '$adviser_id' ";

    $data = mysqli_query($conn, $sql4);
    while  ($row = mysqli_fetch_object($data)) { 
      //if set_count != $rowcount
      ?>
  <option value="<?=$row->adviser_field_id?>" name=""> <?=$row->field?></option>
  <?php  } ?>
</select>

  
<?php
  
  $group_id = $_GET['assignAdviser'];
  $sql = "UPDATE group_tbl set adviser = '$adviser_id' where group_id = '$group_id' and adviser = 0 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
 ?>


    <center><h1><?php //echo htmlentities($row5->set_count) ; ?></h1></center>


<select class='form-control' name='adviser_id'>
<option value="NULL" selected>Select adviser...</option>
  <?php 
    $sql4 = "SELECT * FROM users_tbl where type = 'faculty' "; // if status != 0 dili na ma display ang name sa instructor

    $data = mysqli_query($conn, $sql4);
    while  ($row = mysqli_fetch_object($data)) { 

      ?>
  <option value="<?=$row->user_id?>" name="adviser_id"> <?=$row->name?></option>
  <?php  } */?>
</select>

<br><br>
<button name="setAdviser" type="submit">assign</button>
</form></center>

</body>
</html>
-->
