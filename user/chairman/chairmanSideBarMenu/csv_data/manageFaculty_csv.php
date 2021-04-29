
<?php 

include '../../../../includes/connect.php';
include 'chairman_SESSION.php';

$msg = null;
$importCsv_prompt_messasge = null;
$del_prompt_messasge = null;

// Import data code using csv
if (isset($_POST['import'])) {
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        $i = 0;
        while (($column = fgetcsv($file)) !== FALSE) {
            if ($i > 0) {
                if (!empty($column[0])) {
                    //$insertdate = date("Y-m-d", strtotime(str_replace('/', '-', $column[3])));
                    $sql = "INSERT into users_tbl (name,username,email,userpassword,type) 
                    values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . md5($column[3]) . "','" . $column[4] . "')";
                    $result = mysqli_query($conn, $sql);
                    if (isset($result)) {
                        $msg++;
                    }
                }
            }
            $i++;
        }
    }
  $importCsv_prompt_messasge = "CSV is imported successfully";
}

if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];              
    $sql="DELETE from users_tbl where user_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $del_prompt_messasge="Deleted Successfully";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="responsive.css">-->
  
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../../chairman_assets/css/style.css">

  <title>Faculty Management</title>

  <link rel="stylesheet" href="../../chairman_css/font-awesome.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-social.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-select.css">
  <link rel="stylesheet" href="../../chairman_css/style_dup.css">

  <link rel="stylesheet" href="../../chairman_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/awesome-bootstrap-checkbox.css">

  <!--<link href="csv_Import_style.css" rel="stylesheet" type="text/css"/>-->
  <link href="manageStudents_csv.css" rel="stylesheet" type="text/css"/>

  <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
      background: #dd3d36;
      color:#fff;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
      background: #5cb85c;
      color:#fff;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
      .edit_btn {
      text-decoration: none;
      padding: 2px 5px;
      background: #2E8B57;
      color: white;
      border-radius: 3px;
      margin-right: 5px;
    }
    .del_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #800000;
    }

  </style>

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../../chairman_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../../chairman_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="../manageAcc.php">My Account</a></li></center>
          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../../../includes/logout.php">Logout</a></li></center>
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
          <a href="../../chairman_dashboard.php">Dashboard</a>
          
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
            <center><li  class="cd-side__sub-item"><a href="manageStudents_csv.php">Student Management</a></li></center>
            <center><li style="background-color:#4169E1" class="cd-side__sub-item"><a href="manageFaculty_csv.php">Faculty Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="../manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="../groupAssignment.php">Group Assignment</a>          
        </li>

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="../advisoryAssignment.php">Advisory Assignment</a>        
          <ul class="cd-side__sub-list">
          </ul>
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="../panelAssignment.php">Panel Assignment</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
          </ul>-->
        </li>
    
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="../defenseSchedule.php">Defense Schedule</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
          </ul>-->
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="../manuscript.php">Thesis Manuscripts</a>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Faculty Management Page</h2></center>

<div class="panel panel-default">
  <div class="panel-body">
    <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">

      <div class="form-group">
      <center>
        <label>Choose CSV File</label> 
        <input type="file" name="file" accept=".csv">
      </center>
      </div>

      <div class="form-group">
      <center><button style="float: center" type="submit" name="import">IMPORT CSV</button></center>
      </div>
    </form>
  </div>
</div>

    <?php
    if ($importCsv_prompt_messasge) {?> 
                                        <div class="succWrap" id="msgshow"><center>
        <!--<div class="msg">CSV data is imported successfully.</div>-->
                                            <?php echo htmlentities($importCsv_prompt_messasge);
  
    ?></center> </div><?php }?>
    
    <div class="row" style="margin-top: 3em">
          <div class="col-md-12">
          <div class="panel panel-default">
            <?php if(isset($_GET['delete'])){ if($del_prompt_messasge){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($del_prompt_messasge); ?></center> </div><?php } }?>
              <div class="panel-heading">Faculty List</div>
              <div class="panel-body">
              <!--<?php  /*if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php } */?> -->
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

<!--<?php $sql /* = "SELECT * from  users ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{     */  ?>  -->
<?php
  include '../../../../includes/connect.php';
  $sql = "SELECT * from users_tbl where type = 'faculty' ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {

?>

                    <tr>
                      <td><?php echo htmlentities($row->user_id);?></td>
                      <!--td><img src="../images/<?php // echo htmlentities($result->image);?>" style="width:50px; border-radius:50%;"/></td>-->
                      <td><?php echo htmlentities($row->name);?></td>
                      <td><?php echo htmlentities($row->email);?></td>
                      <!--<td><?php // echo htmlentities($result->designation);?></td>-->
                      <!--<td><?php /* if($result->status == 1)
                                                    {?>
                                                    <a href="userlist.php?confirm=<?php  echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Disable the Account')">Enable <i class="fa fa-check-circle"></i></a> 
                                                    <?php } else {?>
                                                    <a href="userlist.php?unconfirm=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Enable the Account')">Disable <i class="fa fa-times-circle"></i></a>
                                                    <?php } */ ?> 

                      </td>-->
                      
<td>
<!--<a href="edit-user.php?edit=<?php // echo $result->id;?>" onclick="return confirm('Do you want to Edit');">&nbsp; <i class="fa fa-pencil"></i></a>&nbsp;&nbsp>;-->
<a href="editRecords.php?edit=<?php echo htmlentities($row->user_id); ?>" class="edit_btn"> Edit </a>
<a>|    |</a>


<a href="manageFaculty_csv.php?delete=<?php echo htmlentities($row->user_id);  ?>" onclick="return confirm('Do you want to REMOVE this?');" class="del_btn"> Remove</a>
<!--<a>|   |</a>
<a href="setMaximumTeamtoAdviser.php?setMaximumTeam=<?php //echo htmlentities($row->user_id);  ?>" onclick="return confirm('Do you want to SET maximum team to this faculty?');"> set</a>-->

</td>
                    </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

  <!------->
  </main> <!-- .cd-main-content -->

  <script src="manageStudents_csv.js" type="text/javascript"></script>

  <script src="../../chairman_assets/js/util.js"></script>
  <script src="../../chairman_assets/js/menu-aim.js"></script>
  <script src="../../chairman_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../../chairman_js/jquery.min.js"></script>
  <script src="../../chairman_js/bootstrap-select.min.js"></script>
  <script src="../../chairman_js/bootstrap.min.js"></script>
  <script src="../../chairman_js/jquery.dataTables.min.js"></script>
  <script src="../../chairman_js/dataTables.bootstrap.min.js"></script>
  <script src="../../chairman_js/Chart.min.js"></script>
  <script src="../../chairman_js/fileinput.js"></script>
  <script src="../../chairman_js/chartData.js"></script>
  <script src="../../chairman_js/main.js"></script>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 1000);
          });
    </script>

</body>
</html>