<?php include 'chairman_SESSION.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
      text-decoration: none;
      padding: 2px 5px;
      /*background: #2E8B57;*/
      background: #4169E1;
      color: white;
      border-radius: 3px;
      font-size: 1.3em;
  }
</style>

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">

      <div class="cd-logo"><img src="../chairman_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
    </div>
    

    <div class="js-cd-search">
      <form>

        <center><h3 class="thesis-title">USTP-BSIT Thesis Management System</h3></center>
      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item">
      <li class="cd-nav__item">
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../chairman_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="manageAcc.php">My Account</a></li></center>
>
          <center><li class="cd-nav__sub-item"><a href="../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header>

  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">Chairman Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="../chairman_dashboard.php">Dashboard</a>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">          
          <ul class="cd-side__sub-list"></ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>User Management</a>
          
          <ul class="cd-side__sub-list">
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

        <li style="background-color:#4169E1"  class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">

          </ul>
        </li>

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="panelAssignment.php">Panel Assignment</a>
        </li>
    
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="defenseSchedule.php">Defense Schedule</a>
        </li>

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

            <div class="page-title"></div>
            <!--<center><h2 class="page-title">Panel Assignment Page</h2></center>-->
<?php 

  include '../../../includes/connect.php';

    /*$selected_id = $_GET['viewproponents'];
    $sql4 = "SELECT * from users_tbl where user_id = '$selected_id' ";

    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) { ?>   
      <center><h2><strong><?php echo htmlentities($row4->name);?></strong></h2></center>
      <center><h3><strong>One of the panelists for the following group below</strong></h3></center>

<?php  } */?>
<!-------------------------->
<form method="POST" action="viewTeamswithAdviser.php">   
    <button type="submit" class="edit_btn" style="float: right">View Teams</button> 
</form>
<!--------------------------> 

<!-------------------------->
<form method="POST" action="advisoryAssignment.php">   
    <button type="submit" class="edit_btn">Back</button> 
</form>
<!-------------------------->   

            <div class="panel panel-default">
              <div class="panel-heading">Panel</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th><strong>Adviser</strong></th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
    include '../../../includes/connect.php';

   //$sql4 = "SELECT * from group_tbl";
    $sql4 = "SELECT * from users_tbl where type = 'faculty'";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
?>
      <tr>
        <td><?php echo htmlentities($row4->user_id);?></td>
        <td><?php echo htmlentities($row4->name);?></td>
                                             
<td>
<a href="advisersTeamsView.php?viewgroups=<?php echo htmlentities($row4->user_id); ?>"class="edit_btn" > View Groups</a>
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
<!------------------>

  <!------->
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