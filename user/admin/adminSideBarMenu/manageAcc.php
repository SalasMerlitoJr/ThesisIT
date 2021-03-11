<?php include 'admin_SESSION.php'; ?> 

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
  <link rel="stylesheet" href="../admin_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../admin_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../admin_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../admin_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../admin_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../admin_css/style.css">

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
  </style>

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
          <center><li style="background-color:#4169E1" class="cd-nav__sub-item"><a href="manageAcc.php">My Account</a></li></center>
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
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
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

            <center><h2 class="page-title">Account Management Page</h2></center>

            <?php 
            
            include '../../../includes/connect.php';
            $msg = null;

            if(isset($_POST['edit_password'])){
                $password=md5($_POST['password']);
                $my_email=$_SESSION["email"];
                $my_id = $_SESSION["user_id"];
                $status = $_SESSION["status"];
                $sql = "SELECT * from users_tbl where user_id != '$my_id' ";
                $records = mysqli_query($conn, $sql);
                while  ($row = mysqli_fetch_object($records)) {
                  if(($row->userpassword) != ($password)){
                    $sql="UPDATE users_tbl SET userpassword='$password' where email = '$my_email' ";

                      $stmt = $conn->prepare($sql);
                      $stmt->execute();
                      $_SESSION['userpassword'] = md5($_POST['password']);
                      $msg="Password Changed Sucessfully";
                
                  }
                   else if(($row->userpassword) == ($password)){
                      $msg="Password Is Already Been Taken";
                  } }
              }
            ?>

          <div class="panel panel-default">
        <?php  if($msg){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($msg); ?></center> </div><?php }?>

            <div class="panel-body"></div>
            <form method="post" class="form-horizontal" enctype="multipart/form-data">

              <div class="form-group">
                  <center> <strong style="font-size: 2em"><?php $ufunc->UserName(); ?></strong></center>
                </div>

              <div class="form-group">
                <center> <strong style="font-size: 2em"><?php $ufunc->email(); ?></strong></center>
              </div>

              <div class="form-group">
                <center>  <label class="col-sm-2 control-label">Password<span style="color:red">*</span></label></center>
                  <div class="col-sm-4">
                    <input type="text" name="password" class="form-control" placeholder = "edit password" >
                  </div>
              </div>


              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                  <button class="btn btn-primary" action = "editSucess.php" name="edit_password" type="submit">Update</button>
                </div>
              </div>
            </form>
                        
                </div>
              </div>
            </div>
          </div>

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
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 1500);
          });
  </script>


</body>
</html>