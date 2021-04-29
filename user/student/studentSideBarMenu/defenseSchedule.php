<?php include 'students_SESSION.php';?>

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
          <center><li class="cd-nav__sub-item"><a href="accountManagement_student.php">My Account</a></li></center>                  <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
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

          <a href="fileUpload.php">Thesis Proposal</a>

        </li>
        <li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
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

            <center><h2 class="page-title">Defense Schedule Page</h2></center>

            <!---------------->
            <div class="panel panel-default">
              <div class="panel-heading">Schedule</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                       <th><strong>ID</strong></th>
                      <th><strong>Adviser Name</strong></th>
                      <th><strong>Group Name</strong></th>
                      <th><strong>Thesis Phase</strong></th>
                      <th><strong>Date</strong></th>
                      <th><strong>Time Start</strong></th>
                      <th><strong>Time End</strong></th>
                      <th><strong>Venue</strong></th>
                    </tr>
                  </thead>
                  
                  <tbody>
    <?php
    include '../../../includes/connect.php';

    //$sql4 = "SELECT * from schedules_tbl";
    $my_id = $_SESSION['user_id'];
    $my_group = $_SESSION['user_status'];
    $sql4 = "SELECT user_id,user_status,name,group_id,group_name,phase_id,phase_name,schedule_id,group_sc,phase_sc,date,time_start,time_end,venue from group_tbl INNER JOIN schedules_tbl on group_id = group_sc INNER JOIN phases_tbl on phase_id = phase_sc INNER JOIN users_tbl on user_id = adviser order by date asc ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
      if(($row4->group_id) == ($my_group)){
    ?>
                    <tr>
                    <td><?php echo htmlentities($row4->schedule_id);?></td>
              <td><?php echo htmlentities($row4->name);?></td>
              <td><?php echo htmlentities($row4->group_name);?></td>
              <td><?php echo htmlentities($row4->phase_name);?></td>
              <td><?php echo htmlentities($row4->date);?></td>
              <td><?php echo htmlentities($row4->time_start);?></td>
              <td><?php echo htmlentities($row4->time_end);?></td>
              <td><?php echo htmlentities($row4->venue);?></td>
                     
                    </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            <!---------------->
            
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