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

            <center><li class="cd-side__sub-item"><a href="Ad_fileUpload.php">File Upload</a></li></center>

            <center><li style="background-color:#4169E1" class="cd-side__sub-item"><a href="Ad_adviseeDoc.php">Advisee Document</a></li></center>

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

    <?php 

// Downloads files
$conn = mysqli_connect('localhost', 'root', '', 'tmsdup_previous');

//$sql = "SELECT * FROM thesis_documents_tbl";
$sql = "SELECT * FROM thesis_documents_tbl";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

/*
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM thesis_documents_tbl WHERE thesis_document_id = $id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    //$filepath = '../../../fileStorage/uploads/' . $file['name'];
    $filepath = 'uploads/' . $file['name'];


    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        //header('Content-Length: ' . filesize('../../../fileStorage/uploads/' . $file['name']));
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        //readfile('../../../fileStorage/uploads/' . $file['name']);
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE thesis_documents_tbl SET thesis_document_status=$newCount WHERE thesis_document_id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
*/
 ?>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Advisee Document Page</h2></center>
        <div class="panel-heading">Advisee Documents</div>
          <div class="panel-body">
            <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
            <thead>
              <th>ID</th>
              <th>Filename</th>
              <!--<th>size (in mb)</th>
              <th>Downloads</th>-->
              <th>Action</th>
          </thead>
          <tbody>
            <?php foreach ($files as $file): ?>
              <tr>
                <td><?php echo $file['thesis_document_id']; ?></td>
                <td><?php echo $file['name']; ?></td>
                <!--<td><?php //echo floor($file['size'] / 1000) . ' KB'; ?></td>
                <td><?php // echo $file['downloads']; ?></td>-->
                <td><a href="../../../fileStorage/downloads.php?file_id=<?php echo $file['thesis_document_id'] ?>">Download</a></td>
              </tr>
            <?php endforeach;?>  
            </tbody>
            </table> 
            
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