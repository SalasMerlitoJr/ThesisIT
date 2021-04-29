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

  <link rel="stylesheet" href="../student_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../student_css/awesome-bootstrap-checkbox.css">


  <style type="text/css">
  body {
    background:#ffffff;
    text-align: center;
    /*margin-top:-100px;*/  
  }
  
  .search_form {
    margin-top: 5em;
  }

  .search_input {
    height: 3em;
    width: 50%; 
  }

  .search_button {
    height: 3em;
    width: 7%; 
  }

  .results {
    margin-left:12%; 
    margin-right:12%; 
    margin-top:10px;
    color: #000000;
  }

  #img{
    left-margin:900px;
  }
    
</style>

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <div class="cd-logo"><img src="../student_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
    </div>
    
    <!--<div class="cd-search js-cd-search">-->
    <div class="js-cd-search">
      <form>
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

        <li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="documentSearch.php">Document Search</a>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Document Search Page</h2></center>

            <!---------------------------------------------------------->
            <center>
            <form class="search_form" action="documentSearch.php" method="get">     
              <input class="search_input" type="text" name="user_query" placeholder="Write something to search"/> 
              <input class="search_button" type="submit" name="search" value="Search Now">  
            </form>
            </center>
            <!---------------------------------------------------------->

            <!----------------------------------------------->  
            <?php 
              $con=mysqli_connect("localhost","root","");
              mysqli_select_db($con,"tmsdup");
              
              if(isset($_GET['search'])){ 
                $get_value = $_GET['user_query'];
                
                if($get_value==''){ 
                  echo "<center><b>Please go back, and Write something in the search box!</b></center>";
                  exit();
                }

              //$result_query = "SELECT a.thesis_id,thesis_title,b.thesis_id,name from thesis_tbl a INNER JOIN thesis_documents_tbl b on a.thesis_id = b.thesis_id WHERE thesis_title LIKE '%$get_value%' "; 

              //$result_query = "SELECT * from thesis_tbl where thesis_title LIKE '%$get_value%' ";

              //$result_query = "SELECT a.thesis_id,thesis_title,b.thesis_id,name from thesis_tbl a INNER JOIN thesis_documents_tbl b on a.thesis_id = b.thesis_id  where thesis_title LIKE '%$get_value%' ";//dependent on thesis_id

              $result_query = "SELECT a.group_id,thesis_title,thesis_id,b.group_id,name from thesis_tbl a INNER JOIN thesis_documents_tbl b on a.group_id = b.group_id  where thesis_title LIKE '%$get_value%' ";

              $run_result = mysqli_query($con,$result_query);
              
              if(mysqli_num_rows($run_result)<1){
                echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
                exit();
              }
              
              while($row_result=mysqli_fetch_array($run_result)){
                $thesis_id=$row_result['thesis_id'];
                $thesis_title=$row_result['thesis_title'];
                $document_name = $row_result['name'];
           
                echo "<div class='results'>
                
                <h5 style='margin-top:5em'>$thesis_id</h5>
                <h3><a href='$thesis_id' target='_blank'>$thesis_title</a></h3>
                <h4>$document_name</h4>
                </div>";

                } 
              }
            ?>
            <!----------------------------------------------->     

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