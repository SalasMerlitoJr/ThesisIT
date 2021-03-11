<?php include 'admin_SESSION.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../admin_assets/css/style.css">

  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="../admin_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../admin_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../admin_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../admin_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../admin_css/style.css">

  <link rel="stylesheet" href="../admin_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../admin_css/awesome-bootstrap-checkbox.css">

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../admin_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../admin_assets/img/cd-avatar.svg" alt="avatar">
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
          <a href="../index.php">Dashboard</a>
          
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
            <center><li class="cd-side__sub-item"><a href="manageStudents_Styling/manageStudents_csv.php">Student Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="manageStudents_Styling/manageFaculty_csv.php">Faculty Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label">  <span>Separate</span></li>-->
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">-->
        <li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>-->
          </ul>
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="panelAssignment.php">Panel Assignment</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
          </ul>-->
        </li>
    
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="defenseSchedule.php">Defense Schedule</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
          </ul>-->
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="manuscript.php">Thesis Manuscripts</a>
        </li>
      </ul>
    
      <!--<ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Action</span></li>
        <li class="cd-side__btn"><button class="reset" href="#0">+ Button</button></li>
      </ul>-->
    </nav>
  
    <!--<div class="cd-content-wrapper">
      <div class="text-component text-center">
        <h1>Responsive Sidebar Navigation</h1>
        <p>👈<a href="https://codyhouse.co/gem/responsive-sidebar-navigation">Article &amp; Download</a></p>
      </div>
    </div> --><!-- .content-wrapper -->
    <!------->

  <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Advisory Assignment Page</h2></center>

            <div class="panel panel-default">
              <div class="panel-heading">Team List</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Team ID</th>
                      <th>Team Name</th>
                      <th>Initial Project Title</th>
                      <th>Category</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
    //include '../../../../includes/connect.php';
    $my_id = $_SESSION['user_id'];
    $sql4 = "SELECT user_id,name,type,group_id,team_adviser,team_name,initial_title,initial_title_category from users_tbl inner join group_tbl on user_id = team_adviser where gro_status != 0 ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
      //if(($row4->name) == 'Admin'){ 
      //if(($row4->user_id) == $my_id){
?>
      <tr>
        <td><?php echo htmlentities($row4->group_id);?></td>
        <td><?php echo htmlentities($row4->team_name);?></td>
        <td><?php echo htmlentities($row4->initial_title);?></td>
        <td><?php echo htmlentities($row4->initial_title_category);?></td>                                      
<td>
<a href="assignAdvisertoTeam.php?assignAdviser=<?php echo htmlentities($row4->group_id); ?>" onclick="return confirm('Assign Adviser?');"> Assign</a>
<a>|   |</a>
<a onclick="return confirm('Do you want to delete this team proposal?');">Delete</a>
</td>
                    </tr>
                  <?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<!---------------->

    <!--    <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">Group List</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Team ID</th>
                      <th>Team Name</th>
                      <th>Initial Project Title</th>
                      <th>Category</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
/*
    //include '../../../../includes/connect.php';
    $sql4 = "SELECT * from group_tbl ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
      if(empty($row4->team_adviser)){ */
?>
      <tr>
        <td><?php // echo htmlentities($row4->group_id);?></td>
        <td><?php // echo htmlentities($row4->team_name);?></td>
        <td><?php // echo htmlentities($row4->initial_title);?></td>
        <td><?php // echo htmlentities($row4->initial_title_category);?></td>                                      
<td>
<a href="assignAdvisertoTeam.php?assignAdviser=<?php // echo htmlentities($row4->group_id); ?>" onclick="return confirm('Assign Adviser?');"> Assign</a>
<a>|   |</a>
<a onclick="return confirm('Do you want to delete this team proposal?');">Delete</a>
</td>
                    </tr>
                  <?php //} }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div></div></div>

            
          </div>
        </div>
      </div>
    </div> -->

<!---------------->

<!------------------>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">Group List</div>
                <div class="panel-body">


                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Team Name</th>                      
                      <th>Initial Project Title</th>
                      <th>Category</th>
                      <th>Adviser Name</th>
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
    include '../../../includes/connect.php';
    $sql4 = "SELECT user_id,name,group_id,team_id,team_name,team_adviser,initial_title,initial_title_category from users_tbl inner join group_tbl on user_id = team_adviser where status = 0 ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
?>
      <tr>
        <td><?php echo htmlentities($row4->team_name);?></td>      
        <td><?php echo htmlentities($row4->initial_title);?></td>
        <td><?php echo htmlentities($row4->initial_title_category);?></td>             
        <td><strong><?php echo htmlentities($row4->name);?></strong></td>         

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
<!------------------>
<!---------->


  <!------->
  </main> <!-- .cd-main-content -->
  <script src="../admin_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../admin_assets/js/menu-aim.js"></script>
  <script src="../admin_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../admin_js/jquery.min.js"></script>
  <script src="../admin_js/bootstrap-select.min.js"></script>
  <script src="../admin_js/bootstrap.min.js"></script>
  <script src="../admin_js/jquery.dataTables.min.js"></script>
  <script src="../admin_js/dataTables.bootstrap.min.js"></script>
  <script src="../admin_js/Chart.min.js"></script>
  <script src="../admin_js/fileinput.js"></script>
  <script src="../admin_js/chartData.js"></script>
  <script src="../admin_js/main.js"></script>


</body>
</html>