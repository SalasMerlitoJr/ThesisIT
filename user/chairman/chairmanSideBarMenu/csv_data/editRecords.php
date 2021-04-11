<?php include 'chairman_SESSION.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../../chairman_assets/css/style.css">

  <title>Student Management</title>

  <link rel="stylesheet" href="../../chairman_css/font-awesome.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-social.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-select.css">
  <link rel="stylesheet" href="../../chairman_css/style_dup.css">

  <link rel="stylesheet" href="../../chairman_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/awesome-bootstrap-checkbox.css">

  <!--<link href="csv_Import_style.css" rel="stylesheet" type="text/css"/>-->
  <!--<link href="manageStudents_csv.css" rel="stylesheet" type="text/css"/>-->
  <link href="csv_Import_style.css" rel="stylesheet" type="text/css"/>

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
            <center><li class="cd-side__sub-item"><a href="manageStudents_csv.php">Student Management</a></li></center>
            <!--<center><li style="background-color:#4169E1" class="cd-side__sub-item"><a href="../manageFaculty.php">Faculty Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="manageFaculty_csv.php">Faculty Management</a></li></center>

            <center><li class="cd-side__sub-item"><a href="../manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="../groupAssignment.php">Group Assignment</a>          
        </li>
        
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="../advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>-->
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
  
<!-- Modal Start -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">
          <p>Here</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal End -->

  <center><h2 class="page-title">Edit</h2></center>
            <!------------------> 

<?php
  include '../../../../includes/connect.php';
  $msg = null;
  
  $id = $_GET['edit'];
  if(isset($_POST['edit_name'])){
    $new_name = $_POST['name'];             
    $sql="UPDATE users_tbl SET name='$new_name' where user_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $_POST['name'];
    $msg="Name Changed Sucessfully";
  }
  
  if(isset($_POST['edit_email'])){
    $new_email = $_POST['email'];

    $sql = "SELECT email from users_tbl WHERE email='$new_email'";
    $records = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($records); 
    
    if($row['email'] != $new_email){
    //Trying to access array offset on value of type null 
      $sql="UPDATE users_tbl SET email='$new_email' where user_id = '$id' ";

      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $_POST['email'];
      $msg="Email Changed Sucessfully";     
    }
    if($row['email'] == $new_email){
    //Trying to access array offset on value of type null 
      echo "<script>alert('Email already existed')</script>";
    } 
  }
   
  $sql = "SELECT * from users_tbl where user_id = '$id' ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {

?>

            <!------------------> 
          <div>
        <?php  if($msg){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($msg); ?></center> </div><?php }?>

            <form method="post">

              <div>

                  <center> <strong style="font-size: 2em"><?php echo htmlentities($row->name); ?></strong></center>
                </div>
                <br>
              <div>
                <center> <strong style="font-size: 2em"><?php echo htmlentities($row->email); ?></strong></center>

              </div>
              <br>
              <div>
                <center>  <label>Full Name<span style="color:red">*</span></label></center>
                  <div>
                    <center><input type="text" name="name" placeholder ="<?php echo htmlentities($row->name); ?>" >
                    </center>
                  </div>
              </div>

              <br>
              <div>
                <div>
                  <center>
                  <button  name="edit_name" type="submit">Update</button>
                  </center>
                </div>
              </div>
              <br>

              <div>
                <center><label>Email<span style="color:red">*</span></label></center>
                  <div>
                    <center>
                    <input type="email" name="email" placeholder ="<?php echo htmlentities($row->email); ?>" >
                    </center>

                  </div>
              


              <div>
                <div>
                  <center>
                  <button name="edit_email" type="submit">Update</button>
                  </center>
                </div>
              </div>
            </div>
            </form>
             <?php } ?>

</div>
<!-------------------------->
<form method="POST" action="../../chairman_dashboard.php">   
    <center><button type="submit" class="edit_btn">Back</button></center> 
</form>
<!-------------------------->

  <!------->
      </div>
    </div>
  </div>
</div>
  <!------------------------------->

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