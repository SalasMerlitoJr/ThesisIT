<?php 
  include 'settings.php'; //include settings 
  include '../../includes/connect.php';
?><!doctype html>
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
  <link rel="stylesheet" href="faculty_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="faculty_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="faculty_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="faculty_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="faculty_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="faculty_css/style.css">

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="faculty_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="faculty_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="facultySideBarMenu/accountManagement_faculty.php">My Account</a></li></center>
          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">faculty Page</li>
                <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>

        

        <li class="cd-side__item--selected ">          
        </li>
    
        
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

      	 <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">          
          <ul class="cd-side__sub-list"></ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>as Adviser</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="adminSideBarMenu/manageStudents.php">Student Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="facultySideBarMenu/Ad_expertise.php">Expertise</a></li></center>

            <center><li class="cd-side__sub-item"><a href="facultySideBarMenu/Ad_fileUpload.php">File Upload</a></li></center>

            <center><li class="cd-side__sub-item"><a href="facultySideBarMenu/Ad_adviseeDoc.php">Advisee Document</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="facultySideBarMenu/Ad_defSched.php">Defense Schedule</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="facultySideBarMenu/Ad_adviseesRate.php">Advisees Rate</a></li></center>

          </ul>
        </li>


        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>as Panelist</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="adminSideBarMenu/manageStudents.php">Student Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="facultySideBarMenu/Pan_prefSched.php">Preferred Schedule</a></li></center>

            <center><li class="cd-side__sub-item"><a href="facultySideBarMenu/Pan_defSched.php">Defense Schedule</a></li></center>

            <center><li class="cd-side__sub-item"><a href="facultySideBarMenu/Pan_propDocu.php">Proponents Documents</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="facultySideBarMenu/Pan_propRate.php">Proponents Rate</a></li></center>
          </ul>
        </li>

      </ul>

    </nav>
  
    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Dashboard</h2></center>
            
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-primary text-light">
                        <div class="stat-panel text-center">
<?php 
//$sql ="SELECT id from users where role = 0";
$sql ="SELECT user_id from users_tbl where type = 'student'";
$records = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($records);
?>                      
                          <div class="stat-panel-number h1 "><?php echo $rowcount; ?></div>
                          <div class="stat-panel-title text-uppercase">Total Proponents</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-success text-light"> 
                        <div class="stat-panel text-center">
<?php 
//$sql ="SELECT id from users where role = 2";
$sql ="SELECT user_id from users_tbl where type = 'faculty'";
$records = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($records);
?>
                          <div class="stat-panel-number h1 "><?php echo $rowcount; ?></div>
                          <div class="stat-panel-title text-uppercase">Total Faculty</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>

                          <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-danger text-light">
                        <div class="stat-panel text-center">

<?php 
$sql ="SELECT group_id from group_tbl";
$records = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($records); 
?>
                          <div class="stat-panel-number h1 "><?php echo $rowcount; ?></div>
                          <div class="stat-panel-title text-uppercase">Total Thesis Groups</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-info text-light">
                        <div class="stat-panel text-center">

                      <div class="stat-panel-number h1 "></div>
                          <div class="stat-panel-title text-uppercase">Total Approved Manuscripts</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>
              
                </div>
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
  <script src="faculty_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="faculty_assets/js/menu-aim.js"></script>
  <script src="faculty_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="faculty_js/jquery.min.js"></script>
  <script src="faculty_js/bootstrap-select.min.js"></script>
  <script src="faculty_js/bootstrap.min.js"></script>
  <script src="faculty_js/jquery.dataTables.min.js"></script>
  <script src="faculty_js/dataTables.bootstrap.min.js"></script>
  <script src="faculty_js/Chart.min.js"></script>
  <script src="faculty_js/fileinput.js"></script>
  <script src="faculty_js/chartData.js"></script>
  <script src="faculty_js/main.js"></script>

</body>
</html>