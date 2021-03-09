<?php include 'students_SESSION.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../student_assets/css/style.css">

  <title>Admin Dashboard</title>

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

      <div class="cd-logo"><img src="../student_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
    </div>
    
    <!--<div class="cd-search js-cd-search">-->
    <div class="js-cd-search">
      <form>

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
          <center><li class="cd-nav__sub-item"><a href="accountManagement_student.php">My Account</a></li></center>                   <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
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

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
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
<div style="height: 13em"></div>

<center>

<?php
  include '../../../includes/connect.php';
  
  //$selected_id = $_GET['add'];
  if(isset($_POST['set_Title'])){
    $my_id = $_SESSION["user_id"];
    $status = $_SESSION["status"];
    $my_name = $_SESSION["name"];
    $team_name = $my_name.' Team';

    $team_id = $status;
    $team_adviser = 1;//if wala ni, dili maka insert ug data sa group_tbl
    $initial_title = $_POST['initial_title'];
    $initial_title_category = $_POST['category'];

    $sql3="INSERT into group_tbl (team_id,team_name,team_adviser,initial_title,initial_title_category) values ('" . $team_id . "','" . $team_name . "','" . $team_adviser . "','" . $initial_title . "','" . $initial_title_category . "')";
    $stmt3 = $conn->prepare($sql3);
    $stmt3->execute();

    $sql="UPDATE team_members_tbl SET gro_mem_status = 1 where  team = '$my_id'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();


}
  ?>
<center><form method="post">
<?php 
$my_id = $_SESSION["user_id"];
include '../../../includes/connect.php';
$sql = "SELECT * from team_members_tbl where team = '$my_id' limit 1";
  $records = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_object($records)) {
    if(($row->gro_mem_status)==0){ 
?>
  
  <center><label>Initial Proposal Title</label></center>
  <input type="text" name=initial_title required>
  <center><strong>Category</strong></center>

    <center><select id="category" name="category" required="">
            <option disabled selected="" required>----------category----------</option>         
            <option type="text" value="Arduino" id="" name="category" required>Arduino</option>
            <option type="text" value="Data Science" id="" name="category" required>Data Science</option>
            <option type="text" value="Web Based" id="" name="category" required>Web Based</option>
            <option type="text" value="Mobile Based" id="" name="category" required>Mobile Based</option>
            <option type="text" value="Web based with Mobile" id="" name="category" required>Web based with Mobile</option>
  </center></select>

                  <button name="set_Title" type="submit">Set</button>
            
<?php  } 
  if(($row->gro_mem_status)==1){ 
      //if(($row->initial_title)==""){
    //if(($row->gro_status)==0 and (empty($row->initial_title))){ 
?>
            <h1>You're initial project title has already been sent. </h1><h2>Now it's the turn for the admin to assign an adviser to your team based on the category of project proposal you choose.</h2> <h3>The faculties who will become advisers have their area of expertise or forte based on the category of the project proposal you have chosen.</h3>

<?php 

 } }?>
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