<?php include 'chairman_SESSION.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
  <!--<meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">-->

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


</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../chairman_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../chairman_assets/img/cd-avatar.svg" alt="avatar">
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
          <a href="../chairman_dashboard.php">Dashboard</a>
          
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
            <center><li class="cd-side__sub-item"><a href="csv_data/manageStudents_csv.php">Student Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="csv_data/manageFaculty_csv.php">Faculty Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

        <li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="groupAssignment.php">Group Assignment</a>          
        </li> 

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">
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
    
    </nav>
    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">
  <!------------------>
	<!--<center><h4><i>NOTE: </i>If you're the representative who is responsible for adding the members to your team, <strong>YOU MUST ADD YOURSELF AT THE LAST PART AS THE LAST MEMBER OF YOUR TEAM OR ELSE YOU CAN'T ADD ADDITIONAL MEMBER TO YOUR TEAM IF YOU ADDED YOURSELF FIRST AND IS ALREADY A MEMBER OF YOUR DESIRED TEAM.</strong></h4></center>-->

<center>

<?php
  include '../../../includes/connect.php';
  $msg = null;
  
  $selected_id = $_GET['add'];
  if(isset($_POST['set_member_role'])){
                 
    //update student status in users_tbl
    /*$my_id = $_SESSION["user_id"];
    $sql0="UPDATE users_tbl SET status = '$my_id' where user_id = '$selected_id'";
    $stmt0 = $conn->prepare($sql0);
    $stmt0->execute();*/

    //insert new records in group_members_tbl
    $my_id = $_SESSION["user_id"];
    $team_id = $selected_id;
    $member_role = $_POST['role'];
    $group_member_status = $my_id;
    $sql2="INSERT into team_members_tbl (team,member_id,role) values ('" . $my_id . "','" . $team_id . "','" . $member_role . "')";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();

  }

  $sql = "SELECT * from users_tbl where user_id = '$selected_id' ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {
?>

        <?php  if($msg){?><center><?php echo htmlentities($msg); ?></center> <?php }?>

        <center>    <form method="post" class="form-horizontal" enctype="multipart/form-data">
          <div style="height: 3em"></div>
              <center><h3>Select Role for </h3></center>
                  <center> <strong style="font-size: 2em"><?php echo htmlentities($row->name); ?></strong></center>
                </div>

			<?php } ?>
                <div style="height: 13em"></div>

              <?php 
                $my_id = $_SESSION['user_id'];
                //$status = $_SESSION['status'];
                $sql = "SELECT * from users_tbl where user_id = '$my_id' ";
                $records = mysqli_query($conn, $sql);
                while  ($row = mysqli_fetch_object($records)) { 
                  if(($row->status) == 0 or ($row->status) == ($my_id)){
                  ?>

    <center><strong>Role</strong></center>

    <center><select id="role" name="role">
					  <option disabled selected="">----Select Role----</option>				  
					  <option type="text" value="Pancit Cantooner" id="" name="role" required>Pancit Cantooner</option>
					  <option type="text" value="Wifi Librer" id="" name="role" required>Wifi Librer</option>
					  <option type="text" value="Financer" id="" name="role" required>Financer</option>
					  <option type="text" value="Project Leader" id="" name="role" required>Project Leader</option>
					</center></select>

                  <button name="set_member_role" type="submit" required>Set</button>

                <?php } } ?>

            </form></center>
   
    <?php
      include '../../../includes/connect.php';
      $my_id = $_SESSION["user_id"];

      if(isset($_POST['dismemberYourself'])){
                 
        //update student status in users_tbl
        $my_id = $_SESSION["user_id"];
        $sql5="UPDATE users_tbl SET status = 0 where status = '$my_id'";
        $stmt5 = $conn->prepare($sql5);
        $stmt5->execute();

        $sql6="DELETE from group_members_tbl where team = '$my_id' ";
        $stmt6 = $conn->prepare($sql6);
        $stmt6->execute();
      
      }

  /*if(isset($_POST['deleteAll2'])){

        $sql6="DELETE from group_members_tbl where team = '$my_id' ";
        $stmt6 = $conn->prepare($sql6);
        $stmt6->execute();      
    }*/

      //$sql = "SELECT * from group_members_tbl where member_id = '$my_id' limit 1";
    $my_id = $_SESSION["user_id"];
    $status = $_SESSION["status"];
    $sql = "SELECT user_id,name,section,status,team_members_id,team,member_id,role,gro_mem_status from users_tbl inner join team_members_tbl on user_id = member_id where member_id = '$my_id' ";
		  $records = mysqli_query($conn, $sql);
		  while  ($row = mysqli_fetch_object($records)) {
        if(($row->team) != ($my_id)){

		?>
          <center>
            <h1>OOPS!</h1><br>
            <h2>You're already a member in a team and that is fixed</h2></center>
          <center><h1>You're Role is <?php echo htmlentities($row->role);  ?></h1> </center>
          <center><h1> <?php echo htmlentities($row->name);  ?></h1> </center>
<?php 
     /* }
        if(($row->user_id) == ($status)){ ?>
          <center><h1> Your team mate, <strong><?php echo htmlentities($row->name);  ?></strong>, added you to be one of the members to this team. Only <?php echo htmlentities($row->name);?> can add additional members but you can rest your case as a team.</h1> </center>
<?php } }*/?>
<?php } } ?>
    
<?php 
    $my_id = $_SESSION["user_id"];
    $status = $_SESSION["status"];
    $sql = "SELECT * from users_tbl where status != '$my_id'";
      $records = mysqli_query($conn, $sql);
      while  ($row = mysqli_fetch_object($records)) {
        if(($row->user_id) == ($status)){

    ?>
          <center><h1> Your team mate, <strong><?php echo htmlentities($row->name);  ?></strong>, added you to be one of the members to this team. As your team's representative, only <?php echo htmlentities($row->name);?> can add additional members to your team.</h1> </center>

<?php } } ?>
                    

</div>
        </div>
      </div>
    </div>
  
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