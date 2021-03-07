<?php include 'students_SESSION.php'; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../student_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../student_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../student_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../student_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../student_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../student_css/style.css">

  <link rel="stylesheet" href="../student_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../student_css/awesome-bootstrap-checkbox.css">

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../student_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../student_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="accountManagement_student.php">My Account</a></li></center>          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">Student Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        

        <li class="cd-side__item--selected ">          
        </li>
    
        
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

      	<li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="membersAssignment.php">Members Assignment</a>
        </li>
      	<li class="cd-side__sub-item cd-side__item cd-side__item--has-children">

          <a href="fileUpload.php">File Upload</a>

        </li>
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="defenseSchedule.php">Defense Schedule</a>
          
          <ul class="cd-side__sub-list">
          </ul>
        </li>

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="thesisRating.php">Thesis Rating</a>

        </li>
    
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="adviserRating.php">Adviser Rating</a>
          
        </li>

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="peerRating.php">Peer Rating</a>
        </li>

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="documentSearch.php">Document Search</a>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Members Assignment Page</h2></center>

            <div class="panel panel-default">
              <?php if(isset($_GET['delete'])){ if($del_prompt_messasge){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($del_prompt_messasge); ?></center> </div><?php } }?>
              <div class="panel-heading">Choose Members</div>
              <div class="panel-body">
              <!--<?php  /*if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php } */?> -->


                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Section</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

<?php
  include '../../../includes/connect.php';
  $my_id = $_SESSION["user_id"];

  /*if(isset($_POST['regroup'])){                
    $my_id = $_SESSION["user_id"];
    $sql5="UPDATE users_tbl SET status = 0 where status = '$my_id'";
    $stmt5 = $conn->prepare($sql5);
    $stmt5->execute();

    $sql6="DELETE from group_members_tbl where team = '$my_id' ";
    $stmt6 = $conn->prepare($sql6);
    $stmt6->execute();
      
  }*/

  $sql = "SELECT * from users_tbl where type = 'student' ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {
    if(($row->status) == 0){
    //if(empty($row->status)){
    //if((($row->status) == 0) or (($row->status) == 1)){

?>

                    <tr>
                      <td><?php echo htmlentities($row->user_id);?></td>
                      <td><?php echo htmlentities($row->name);?></td>
                      <td><?php echo htmlentities($row->email);?></td>
                      <td><?php echo htmlentities($row->section);?></td>
                      
<td>
<!--<a href="edit-user.php?edit=<?php // echo $result->id;?>" onclick="return confirm('Do you want to Edit');">&nbsp; <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;-->
<a href="membersAddition.php?add=<?php echo htmlentities($row->user_id); ?>" onclick="return confirm('Do you want to add a member and set his/her role in your team?');"> Add as a Member <!--<i class="fa fa-pencil"></i>--></a>

</td>
                    </tr>
                    <?php } } ?>
                                       
                    <!--<?php $cnt //  =$cnt+1; }} ?> -->
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<div style="height: 45em"></div>

<?php

  include '../../../includes/connect.php';

  $my_id = $_SESSION["user_id"];
  $sql4 = "SELECT name,team from users_tbl inner join group_members_tbl on user_id = member_id where team = '$my_id' ";
  $records4 = mysqli_query($conn, $sql4);
  $member_count=0;
  while  ($row4 = mysqli_fetch_object($records4)) { 
      $member_count++; 

?>

                    
                      <!--<center><h1><?php //  htmlentities($row4->group_members_id);?></h1></center>-->
                      <center><h4 style="text-align: center;"><strong>Member </strong><?php echo $member_count.": ".$row4->name;?></h4></center>
                    
<center><form method="post">
<?php }

$group_id = $_SESSION["user_id"];

/*if(isset($_POST['displayDeletedMember'])){
  $my_id = $_SESSION["user_id"];
  $sql5="UPDATE users_tbl SET status = 0 where status = '$my_id' " ;
  $stmt5 = $conn->prepare($sql5);
  $stmt5->execute();
}*/

$sql4 = "SELECT * from group_members_tbl where team = '$group_id' limit 1 ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) { 
      if(($row4->team) == ($group_id)){ ?>

        
          <button name="sendTitle" type="submit" style="background-color: white; color: blue; float:justify;">Title Proposal</button>
          <button name="displayDeletedMember" type="submit" style="background-color: white; color: blue; float:justify;">Display Deleted Member</button>
        </form></center>
    
        <!--<a href="membersAssignment.php?displayDeletedMember=<?php // echo htmlentities($row->user_id); ?>" onclick="return confirm('Do you want to add a member and set his/her role in your team?');"> Add as Member</a>-->
<?php  
      }
    }
?>

          
          <!-------->
            
          </div>
        </div>
      </div>
    </div>
  <!------->
  </main> <!-- .cd-main-content -->
  <script src="../student_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../student_assets/js/menu-aim.js"></script>
  <script src="../student_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../student_js/jquery.min.js"></script>
  <script src="../student_js/bootstrap-select.min.js"></script>
  <script src="../student_js/bootstrap.min.js"></script>
  <script src="../student_js/jquery.dataTables.min.js"></script>
  <script src="../student_js/dataTables.bootstrap.min.js"></script>
  <script src="../student_js/Chart.min.js"></script>
  <script src="../student_js/fileinput.js"></script>
  <script src="../student_js/chartData.js"></script>
  <script src="../student_js/main.js"></script>

</body>
</html>