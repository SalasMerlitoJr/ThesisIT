<?php include 'students_SESSION.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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
        <li class="main-label">student Page</li>
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

            <center><h4><i>NOTE: </i>If you're the representative who is responsible for adding members to your team, <strong>DON'T FORGET TO ADD YOURSELF AS A MEMBER TO YOUR DESIRED TEAM SO THAT YOUR TEAM MATES WILL RECOGNIZE YOU AS THEIR REPRESENTATIVE.</strong></h4></center>

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
  $my_id = $_SESSION["user_id"];
  $status = $_SESSION["status"];
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
<a href="membersAddition.php?add=<?php echo htmlentities($row->user_id); ?>" onclick="return confirm('Do you want to add a member and set his/her role in your team?');"> Add as Member </a>

</td>
                    </tr>
                    <?php } } ?>
                                                         
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<!--<div style="height: 45em"></div>-->

<?php

  include '../../../includes/connect.php';

  $my_id = $_SESSION["user_id"];
  $sql4 = "SELECT user_id,name,section,status,team from users_tbl inner join team_members_tbl on user_id = member_id where team = '$my_id' ";
  $records4 = mysqli_query($conn, $sql4);
  $member_count=0;
  while  ($row4 = mysqli_fetch_object($records4)) { 
      $member_count++;


?>
                      <!--<center><h3><strong>Member </strong><?php // echo $member_count.": ".$row4->name;?></h3></center>-->
                    
<center><form method="post" action="setInitialTitle.php">
  <!--<center><form method="post" action="membersAssignment.php">-->


  <!---------------->

      <div class="container-fluid">  
        <div class="row">
          <div class="col-md-12">


<?php
  /*include '../../../includes/connect.php';
  $status = $_SESSION["status"];
  $my_id = $_SESSION["user_id"];
  $sql = "SELECT * from users_tbl ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {
    if(($row->status) != 0 and ($row->del_stat) != 0){*/
?>                  
                    <?php echo "Member ".$member_count.": ".$row4->name;  ?>


        </div>
      </div>
 

           <!---------------->

 <?php 

} ?> 

<?php
  /*include '../../../includes/connect.php';
  $my_id = $_SESSION["user_id"];
  $sql5 = "SELECT * users_tbl where status = '$my_id' ";
  $records5 = mysqli_query($conn, $sql5);
  while ($row5 = mysqli_fetch_object($records5)) { */
?>      

<center><button name="sendTitle" type="submit" style="margin-top: 2.5em; background-color: white; color: blue; float:center">Title Proposal</button></center> 

<center><form method="post">         

<?php //} 

if(isset($_POST['sendTitle'])){
    include '../../../includes/connect.php';
    $my_id = $_SESSION["user_id"];
    $status = $_SESSION["status"];
    
    if(isset($_POST['set_Title'])){
        $team_id = $status;
        $team_adviser = 1;//if wala ni, dili maka insert ug data sa group_tbl
        $initial_title = $_POST['initial_title'];
        $initial_title_category = $_POST['category'];

        $sql2="INSERT into group_tbl (team_id,team_adviser,initial_title,initial_title_category) 
                        values ('" . $team_id . "','" . $team_adviser . "','" . $initial_title . "','" . $initial_title_category . "')";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute();
      }

    $sql10 = "SELECT * from users_tbl where user_id = '$status' and status = '$my_id' ";
    $records10 = mysqli_query($conn, $sql10);
    while($row10 = mysqli_fetch_object($records10)) {
  ?>
  <!--<center><form method="post">-->
  <h1>Send na kag title?</h1>
  <label>Project Proposal </label><br>
  <input type="text" name=initial_title required>
  <center><strong>Category</strong></center>

    <center><select id="category" name="category" required="">
            <option disabled selected="" required>----category----</option>         
            <option type="text" value="Arduino" id="" name="category" required>Arduino</option>
            <option type="text" value="Data Science" id="" name="category" required>Data Science</option>
            <option type="text" value="Web Based" id="" name="category" required>Web Based</option>
            <option type="text" value="Mobile Based" id="" name="category" required>Mobile Based</option>
            <option type="text" value="Web based with Mobile" id="" name="category" required>Web based with Mobile</option>
  </center></select>

                  <button name="set_Title" type="submit" required>Set</button>
<?php } } ?> 
</form></center>
    
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