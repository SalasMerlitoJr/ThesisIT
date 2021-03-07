<?php  include 'secretary_SESSION.php'; ?>
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
  <link rel="stylesheet" href="../secretary_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../secretary_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../secretary_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../secretary_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../secretary_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../secretary_css/style.css">

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
      <div class="cd-logo"><img src="../secretary_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../secretary_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li style="background-color:#4169E1" class="cd-nav__sub-item"><a href="accountManagement_secretary.php">My Account</a></li></center>
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
        <li class="main-label">secretary Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        

        <li class="cd-side__item--selected ">          
        </li>
    
        
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

      	<li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="Sec_defSched.php">Defense Schedule</a>
        </li>
      	<li class="cd-side__sub-item cd-side__item cd-side__item--has-children">

          <a href="Sec_thesisMins.php">Thesis Minutes</a>

        </li>
       
      </ul>

    </nav>


  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Account Management Page</h2></center>

            

            <?php 
            
            include '../../../includes/connect.php';
            $msg = null;
              /*if(isset($_POST['submit'])){  
                $name=$_POST['name'];
                $email=$_POST['email'];
                $fafa=$_SESSION["login"];
                $sql="UPDATE tbl_users SET name='$name', login='$email' where login = '$fafa'";

                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $msg="Information Updated Successfully";
              }*/ /*working but no validation*/

              //----------------------------------------------------------------------------//

              /*if(isset($_POST['edit_email'])){
                $email=$_POST['email'];
                $fafa=$_SESSION["login"];

                $sql = "SELECT login from tbl_users";

                $records = mysqli_query($conn, $sql);
                while  ($row = mysqli_fetch_object($records)) {
                  $row2 = $row->login;
                  if($_POST['email'] == $row2){
                    die("This E-Mail address is already in use");

                  }

                  if($_POST['email'] != $row2) {
                    $sql="UPDATE tbl_users SET login='$email' where login = '$fafa'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $_SESSION['login'] = $_POST['email'];
                    $msg="Email Changed Sucessfully";
                  }
                } */ /*with validation but it can copy an existing email from db*/

                //----------------------------------------------------------------------------//

               /* $email=$_POST['email'];
                $fafa=$_SESSION["login"];
                $sql ="SELECT * FROM tbl_users";
                $records = mysqli_query($conn, $sql);
                if(mysqli_num_rows($records) > 0){
                  while($row = mysqli_fetch_array($records)){
                    //if($_SESSION['role'] == 3){
                      $emails_from_db = $row['login'];
                      //$emails_from_db = $_SESSION['login'];
                      if($emails_from_db == $_POST['email']){
                        $msg="Your current email is not valid.";
                      }
                      if($emails_from_db != $_POST['email']){                   
                        $con="update tbl_users set login='$email' where login='$fafa' ";
                        $records = mysqli_query($conn, $con);
                        $_SESSION['login'] = $_POST['email'];
                        $msg="Your Email succesfully changed";  
                      }
                    }
                    
                  //} 
                }*/ /* error */

                //----------------------------------------------------------------------------//

                /*$email=$_POST['email'];
                $fafa=$_SESSION["login"];
                $sql ="SELECT * FROM tbl_users";
                $rec = mysqli_query($conn, $sql);
                $record = mysqli_fetch_array($rec);
                $emails_from_db = $record['login'];
                if($emails_from_db == $email){
                  $msg="Your current email is not valid.";
                }
                if($emails_from_db != $_POST['email']){ 
                //else{                  
                  $con="update tbl_users set login='$email' where login='$fafa' ";
                  $records = mysqli_query($conn, $con);
                  $_SESSION['login'] = $_POST['email'];
                  $msg="Your Email Succesfully Changed";  
                }*/ /*working but no validation*/

                //----------------------------------------------------------------------------//

                /*a working email validation from other system*/
                
                /*
                // This if statement checks to determine whether the edit form has been submitted
                // If it has, then the account updating code is run, otherwise the form is displayed
                if (!empty($_POST)) {
                    // Make sure the user entered a valid E-Mail address
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        die("Invalid E-Mail Address");
                    }

                    // If the user is changing their E-Mail address, we need to make sure that
                    // the new value does not conflict with a value that is already in the system.
                    // If the user is not changing their E-Mail address this check is not needed.
                    if ($_POST['email'] != $_SESSION['user']['email']) {
                        // Define our SQL query
                        $query = "
                            SELECT
                                1
                            FROM users
                            WHERE
                                email = :email
                        ";

                        // Define our query parameter values
                        $query_params = array(
                            ':email' => $_POST['email']
                        );

                        try { 
                            // Execute the query
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                        }
                        catch(PDOException $ex) {
                            // Note: On a production website, you should not output $ex->getMessage().
                            // It may provide an attacker with helpful information about your code.
                            die("Failed to run query: " . $ex->getMessage());
                        }

                        // Retrieve results (if any)
                        $row = $stmt->fetch();
                        if ($row) {
                            die("This E-Mail address is already in use");
                        }
                    } //a working email validation from other system

                */

                //----------------------------------------------------------------------------//

                /* // I try to execute this on the system. OUTPUT : A BIG ERROR
                    
                if (!empty($_POST)) { //with or without this line, still ERROR
                    // Make sure the user entered a valid E-Mail address
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        die("Invalid E-Mail Address");
                    }

                    $email = $_POST['email'];
                    $email_from_db = $_SESSION['login'];
                    if ($_POST['email'] != $_SESSION['login']) {
                        // Define our SQL query
                        $query = "SELECT FROM tbl_users WHERE login = '$email_from_db' ";

                        $query_params = array(
                            '$email_from_db' => $_POST['email']
                        );

                        try { 
                            $stmt = $conn->prepare($query);
                            $record = $stmt->execute($query_params);
                        }
                        catch(PDOException $ex) {
                            die("Failed to run query: " . $ex->getMessage());
                        }

                        $row = $stmt->fetch();
                        if ($row) {
                            die("This E-Mail address is already in use");
                        }
                    }
                  }

                */

              //}

              /*if(isset($_POST['edit_name'])){
                $name=$_POST['name'];
                $fafa=$_SESSION["login"];
                $sql="UPDATE tbl_users SET name='$name' where login = '$fafa'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $_SESSION['name'] = $_POST['name'];
                $msg="Name Changed Sucessfully";
              }*/

              if(isset($_POST['edit_password'])){
                $password=md5($_POST['password']);
                $fafa=$_SESSION["email"];
                $sql="UPDATE users_tbl SET userpassword='$password' where email = '$fafa' and userpassword != '$password' ";
                //$sql = " password != '$password' begin UPDATE tbl_users SET password='$password' where login = '$fafa'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $_SESSION['userpassword'] = md5($_POST['password']);

                $msg="Password Changed Sucessfully";

                /*Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in*/
                /*while($row = mysqli_fetch_array($records)){*/

                /*$password=md5($_POST['password']);
								$fafa=$_SESSION["login"];
								$sql ="SELECT * FROM tbl_users";
								$records = mysqli_query($conn, $sql);
                if(mysqli_num_rows($records) > 0){
                  while($row = mysqli_fetch_array($records)){
                    //if($_SESSION['role'] == 3){
                      //$passwords_from_db = $row['password'];
                      $passwords_from_db = $_SESSION['password'];
                      if($passwords_from_db == $_POST['password']){
                        $msg="Your current password is not valid.";
                      }
                      if($passwords_from_db != $_POST['password']){                   
                        $con="update tbl_users set password='$password' where login='$fafa' ";
                        $records = mysqli_query($conn, $con);
                        $msg="Your Password succesfully changed";  
                      }
                    //}
                    
                  } 
                } */  
                  
                /*else{
                  $msg="Your current password is not valid."; 
                }*/
								
						}
                /*
								$password=md5($_POST['password']);
								$newpassword=md5($_POST['newpassword']);
								$username=$_SESSION['alogin'];
								$sql ="SELECT Password FROM users WHERE email='$username' and password='$password'";
								$query= $dbh -> prepare($sql);
								$query-> bindParam(':username', $username, PDO::PARAM_STR);
								$query-> bindParam(':password', $password, PDO::PARAM_STR);
								$query-> execute();
								$results = $query -> fetchAll(PDO::FETCH_OBJ);
								if($query -> rowCount() > 0){
									$con="update users set password=:newpassword where email=:username";
									$chngpwd1 = $dbh->prepare($con);
									$chngpwd1-> bindParam(':username', $username, PDO::PARAM_STR);
									$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
									$chngpwd1->execute();
									$msg="Your Password succesfully changed";
								}
								else{
								$error="Your current password is not valid.";	
								}
							}
                */
              //}
              
            ?>

					<div class="panel panel-default">
				<?php  if($msg){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($msg); ?></center> </div><?php }?>

            <div class="panel-body"></div>
            <form method="post" class="form-horizontal" enctype="multipart/form-data">

              <div class="form-group">
                <!--<label class="col-sm-2 control-label">Full Name<span style="color:red">:</span></label>
                  <div class="col-sm-4">-->
                    <!--<input type="text" name="name" class="form-control" required value="<?php // $ufunc->UserName(); ?>">-->
                    <!--<input type="text" name="name" class="form-control" placeholder = "edit name">-->

                  <!--</div>-->
                  <center> <strong style="font-size: 2em"><?php $ufunc->UserName(); ?></strong></center>
                </div>

                <!--<div class="form-group">
                  <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn btn-primary" action = "editSucess.php" name="edit_name" type="submit">Update</button>
                  </div>
                </div>-->

              <div class="form-group">
                <center> <strong style="font-size: 2em"><?php $ufunc->email(); ?></strong></center>
                  <!-- <div class="col-sm-4">-->
                   <!--<input type="email" name="email" class="form-control" placeholder = "edit email" >
                   
                  </div>-->
              </div>


              <!--<div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                  <button class="btn btn-primary" action = "editSucess.php" name="edit_email" type="submit">Update</button>
                </div>
              </div>-->

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

            <!-------->
    <!-- <div class="content-wrapper">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
          
            <center><h2 class="page-title">Change Password</h2></center>

            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Form fields</div>
                  <div class="panel-body">
                    <form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
                    
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Current Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                      </div>
                      <div class="hr-dashed"></div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">New Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="newpassword" id="newpassword" required>
                        </div>
                      </div>
                      <div class="hr-dashed"></div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">Confirm Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required>
                        </div>
                      </div>
                      <div class="hr-dashed"></div>
                    
                
                      
                      <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                
                          <button class="btn btn-primary" name="submit" type="submit">Save changes</button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>
              </div>
              
            </div>
            
          

          </div>
        </div>
        
      
      </div>
    </div> -->
            <!-------->
        </div>
      </div>    
    </div>
  </div>
  <!------->
  </main> <!-- .cd-main-content -->
  <script src="../secretary_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../secretary_assets/js/menu-aim.js"></script>
  <script src="../secretary_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../secretary_js/jquery.min.js"></script>
  <script src="../secretary_js/bootstrap-select.min.js"></script>
  <script src="../secretary_js/bootstrap.min.js"></script>
  <script src="../secretary_js/jquery.dataTables.min.js"></script>
  <script src="../secretary_js/dataTables.bootstrap.min.js"></script>
  <script src="../secretary_js/Chart.min.js"></script>
  <script src="../secretary_js/fileinput.js"></script>
  <script src="../secretary_js/chartData.js"></script>
  <script src="../secretary_js/main.js"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 1500);
          });
  </script>

</body>
</html>