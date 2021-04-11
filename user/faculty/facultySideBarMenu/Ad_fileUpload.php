<?php include 'faculty_SESSION.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../faculty_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../faculty_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../faculty_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../faculty_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../faculty_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../faculty_css/style.css">

  <link rel="stylesheet" href="../faculty_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../faculty_css/awesome-bootstrap-checkbox.css">

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
  </style>


</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../faculty_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../faculty_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="accountManagement_faculty.php">My Account</a></li></center>
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
            <center><li class="cd-side__sub-item"><a href="Ad_expertise.php">Expertise</a></li></center>

            <center><li style="background-color:#4169E1" class="cd-side__sub-item"><a href="Ad_fileUpload.php">File Upload</a></li></center>

            <center><li class="cd-side__sub-item"><a href="Ad_adviseeDoc.php">Advisee Document</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="Ad_defSched.php">Defense Schedule</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="Ad_adviseesRate.php">Advisees Rate</a></li></center>

          </ul>
        </li>


        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>as Panelist</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="adminSideBarMenu/manageStudents.php">Student Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="Pan_prefSched.php">Preferred Schedule</a></li></center>

            <center><li class="cd-side__sub-item"><a href="Pan_defSched.php">Defense Schedule</a></li></center>

            <center><li class="cd-side__sub-item"><a href="Pan_propDocu.php">Proponents Documents</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="Pan_propRate.php">Proponents Rate</a></li></center>
          </ul>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">File Upload Page</h2></center>

             <!------------------------------------------------------------->
    <?php //include 'filesLogic.php'; 

      $conn = mysqli_connect('localhost', 'root', '', 'tmsdup_previous');

      $sql = "SELECT * FROM thesis_documents_tbl";
      $result = mysqli_query($conn, $sql);

      $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

      // Uploads files
      if (isset($_POST['save'])) { // if save button on the form is clicked
          // name of the uploaded file
          $filename = $_FILES['myfile']['name'];

          // destination of the file on the server
          $destination = '../../../fileStorage/uploads/' . $filename;

          // get the file extension
          $extension = pathinfo($filename, PATHINFO_EXTENSION);

          // the physical file on a temporary uploads directory on the server
          $file = $_FILES['myfile']['tmp_name'];
          $size = $_FILES['myfile']['size'];


          if (!in_array($extension, ['zip', 'pdf', 'docx', 'PNG', 'png','JPG','jpg'])) {
              echo "You file extension must be .zip, .pdf or .docx";
          } elseif ($_FILES['myfile']['size'] > 1000000000000000) { // file size
              echo "File too large!";
          } else {
              // move the uploaded (temporary) file to the specified destination
              if (move_uploaded_file($file, $destination)) {
                  //$sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
                  $sql = "INSERT INTO thesis_documents_tbl (thesis_id,name) VALUES (1,'$filename')";

                  if (mysqli_query($conn, $sql)) {
                      echo "File uploaded successfully";
                  }
              } else {
                  echo "Failed to upload file.";
              }
          }
      }

    ?>

        <form class="form_upload" action="Ad_fileUpload.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input class="input_upload" type="file" name="myfile"> <br>
          <button class="button_upload" type="submit" name="save">upload</button>
        </form>

    <!------------------------------------------------------------->

          </div>
        </div>
      </div>
    </div>
  <!------->
  </main> <!-- .cd-main-content -->
  <script src="../faculty_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../faculty_assets/js/menu-aim.js"></script>
  <script src="../faculty_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../faculty_js/jquery.min.js"></script>
  <script src="../faculty_js/bootstrap-select.min.js"></script>
  <script src="../faculty_js/bootstrap.min.js"></script>
  <script src="../faculty_js/jquery.dataTables.min.js"></script>
  <script src="../faculty_js/dataTables.bootstrap.min.js"></script>
  <script src="../faculty_js/Chart.min.js"></script>
  <script src="../faculty_js/fileinput.js"></script>
  <script src="../faculty_js/chartData.js"></script>
  <script src="../faculty_js/main.js"></script>

</body>
</html>