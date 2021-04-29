<?php include 'students_SESSION.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../student_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../student_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../student_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../student_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../student_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../student_css/style.css">

  <style type="text/css">
    .form_upload {
      width: 30%;
      margin: 100px auto;
      padding: 30px;
      border: 1px solid #555;
    }
    .input_upload {
      width: 100%;
      border: 1px solid #f1e1e1;
      display: block;
      padding: 5px 10px;
    }
    .button_upload {
      border: none;
      padding: 10px;
      border-radius: 5px;
    }
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
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../student_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../student_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="accountManagement_student.php">My Account</a></li></center>
          <center><li class="cd-nav__sub-item"><a href="../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="main-label">student Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        
        <li class="cd-side__item--selected ">          
        </li>          
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
      	<li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">

          <a href="fileUpload.php">Thesis Proposal</a>

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
      <div class="container-fluid">  <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Title</h2></center>

            <!---------------->
            <div class="panel panel-default">
  <?php
    include '../../../includes/connect.php';

    $thesis_id = $_GET['setPhase'];

    $sql4 = "SELECT * from thesis_tbl where thesis_id = '$thesis_id' ";
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
    ?>
    <center><h2 style="color: green; font-size: 4em"><?php echo htmlentities($row4->thesis_title);?></h2></center>

    <?php  } ?>

        <form class="form_upload" action="fileUploadSet.php" method="post" enctype="multipart/form-data" >

          <center><select name='phase'>
          <option value="NULL" selected>---Select Phase--</option>
            <?php
              include '../../../includes/connect.php';
              $thesis_id = $_GET['getThesis'];
              $sql2 = "SELECT * FROM phases_tbl where phase_id != 4 "; 
              $data = mysqli_query($conn, $sql2);
              while  ($row = mysqli_fetch_object($data)) { 
                ?>
            <option value="<?=$row->phase_id?>" name="phase"> <?=$row->phase_name?></option>
            <?php  } ?>
          </select>

          <br><br>

          <button class="btn btn-primary" type="submit" name="setP">Set</button>
        </center>
        </form>
    <!------------------------------------------------------------->

<!------------------------------------------------------------->
<form method="POST" action="fileUpload.php">   
    <center><button type="submit" class="edit_btn">Back</button></center> 
</form>
<!------------------------------------------------------------->         
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

