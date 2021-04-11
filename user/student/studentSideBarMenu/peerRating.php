<?php include 'students_SESSION.php'; 

    include '../../../includes/connect.php';

$msg = null;
$del_prompt_messasge = null;

if(isset($_GET['remove'])){

    $selected_id = $_GET['remove'];
    $my_id = $_SESSION["user_id"];

    $sql="UPDATE users_tbl SET status = 0 where  user_id = '$selected_id'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    /*$sql="UPDATE users_tbl SET status = 0, del_stat = '$selected_id' where  user_id = '$selected_id'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();*/

                 
    $sql1="DELETE from team_members_tbl where member_id = '$selected_id' ";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $del_prompt_messasge="Deleted Successfully";

    /*$sql2="DELETE from group_tbl where team_id = '$selected_id' and team_id = '$my_id'";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $del_prompt_messasge="Deleted Successfully";*/
}
/*if(isset($_GET['remove2'])){

    $selected_id = $_GET['remove'];
    
    //update student status in users_tbl
    $my_id = $_SESSION["user_id"];
    $status = $_SESSION["status"];
    $sql="UPDATE users_tbl SET status = 0 where  status = '$status'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    //$id = $_GET['remove'];              
    $sql1="DELETE from group_members_tbl where group_members_id = '$selected_id' ";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $del_prompt_messasge="Deleted Successfully";
}*/

/*if ((team == member_id) and status == 0)
   delete all team 
  */
?>


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

        <li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
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

            <center><h2 class="page-title">Peer Rating Page</h2></center>

      <div class="panel panel-default">
              <?php if(isset($_GET['delete'])){ if($del_prompt_messasge){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($del_prompt_messasge); ?></center> </div><?php } }?>
              <div class="panel-heading">Rate Members</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Section</th>
                      <th>Role</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

<?php /*
      $my_id = $_SESSION["user_id"];
      $status = $_SESSION["user_status"];
      $sql4 = "SELECT user_id,name,section,team_members_id,team,member_id,role,gro_mem_status from users_tbl inner join team_members_tbl on user_id = member_id where member_id != '$my_id' and team = '$status' ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
     if(($row4->team) == ($my_id)){
       //if((($row4->member_id) != ($my_id)) and (($row4->gro_mem_status)==($my_id))){
         if(($row4->member_id) != ($my_id)){
          if(($row4->team)==($my_id)){ */
?>


                    <tr>
                      <!--<td><?php // echo htmlentities($row4->group_members_id);?></td>-->
                      <td><?php //echo htmlentities($row4->member_id);?></td>
                      <td><?php //echo htmlentities($row4->name);?></td>
                      <td><?php //echo htmlentities($row4->section);?></td>
                      <td><?php //echo htmlentities($row4->role);?></td>
                      
      
                      
<td>
<a href="peerRating.php?add=<?php echo htmlentities($row4->user_id); ?>" onclick="return confirm('Muabot rata anang para sa rating, okay?');"> Rate   <!--<i class="fa fa-pencil"></i>--></a>
</td>
                    </tr>
<?php  
          //  }
?>

                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            
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