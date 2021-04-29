<?php include 'students_SESSION.php'; ?>

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

  <link rel="stylesheet" href="../student_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../student_css/awesome-bootstrap-checkbox.css">

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
    .edit_btn {
      text-decoration: none;
      padding: 2px 5px;
      background: #2E8B57;
      color: white;
      border-radius: 3px;
      margin-right: 5px;
    }

    .del_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #800000;
    }

  </style>

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
          <center><li class="cd-nav__sub-item"><a href="accountManagement_student.php">My Account</a></li></center>                   <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
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
          <div class="panel panel-default">
            <center><h2 class="page-title">File Upload Page</h2></center>

            <!---------------->
            

              <!--<div class="panel-heading">List Users</div>

                <table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                           <th>#</th>
                        <th>User</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>?</td>
                      <td>?</td>
                      <td>?</td>
                      <td>?</td>
                    </tr>
                  </tbody>
                </table>
            </div>-->
            <!---------------->
    <!------------------------------------------------------------->

     <?php
    include '../../../includes/connect.php';

    //$sql4 = "SELECT * from schedules_tbl";
    $my_group = $_SESSION['user_status'];
    //$sql4 = "SELECT a.thesis_id,group_id,thesis_title,b.thesis_id,name from thesis_documents_tbl a INNER JOIN thesis_tbl b on a.thesis_id = b.thesis_id where group_id = '$my_group' limit 1 ";
    $sql4 = "SELECT * from thesis_tbl where group_id = '$my_group' ";
    if (isset($_POST['setTitle'])) { 
      $thesis_title = $_POST['thesis_title'];
      $description = $_POST['description'];
      $group = $_SESSION['user_status'];
      //ADD thesis title
      $sql1 = "INSERT INTO thesis_tbl (group_id, thesis_title, thesis_description) VALUES ('$group','$thesis_title','$description')";
      $stmt = $conn->prepare($sql1);
      $stmt->execute();
    } 
    ?>
    <div class="panel panel-default">
        <div class="panel-body">
     <table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Thesis Title</th>
          <th>Description</th>
          <th>Action</th> 
        </tr>
    <tbody>
    <?php 
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
    ?>

      <!--<center><h2><a href="fileUploadSet.php?getThesis=<?php //echo htmlentities($row4->group_id); ?>" >  <?php //echo htmlentities($row4->thesis_title);?></a></h2></center><br>-->
      <tr>
        <td><?php echo htmlentities($row4->thesis_title);?></td>
        <td><?php echo htmlentities($row4->thesis_description);?></td>
              
        <td>       
        <!--<center><h2><a href="fileUploadSet.php?getThesis=<?php //echo htmlentities($row4->thesis_id); ?>" >  <?php //echo htmlentities($row4->thesis_title);?></a></h2></center><br> -->
        <a href="fileUploadSet.php?getThesis=<?php echo htmlentities($row4->thesis_id); ?>" class="edit_btn">Upload File</a>
        <a>| |</a>      
        <a href="fileUploadPhase.php?setPhase=<?php echo htmlentities($row4->thesis_id); ?>" class="del_btn">Set Phase</a> 
        </td>
      </tr>
    <?php }    
    ?>
  </tbody>
</table>
</div>
</div>
</div>

    <!------------------------------------------------------------->

<!-------------->
<div class="row">                      
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">

<form method="post" action="fileUpload.php" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
  <label class="col-sm-2 control-label">Thesis title<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" id="thesistitle" name="thesis_title" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="col-sm-2 control-label">Description<span style="color:red">*</span></label>
  <div class="col-sm-10">
  <textarea class="form-control" rows="5" name="description" placeholder="Description" required></textarea>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-8 col-sm-offset-2">
    <button class="btn btn-primary" name="setTitle" type="submit">Submit</button>
  </div>
</div>
</form>
                </div>
              </div>
            </div>
          </div>
          <!-------------->
      
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

