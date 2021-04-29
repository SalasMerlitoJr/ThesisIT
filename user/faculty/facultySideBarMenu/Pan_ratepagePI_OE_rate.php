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
    h5{
      text-align: center;
      float: left;
      margin-right: 7em;
    }

    .lahi{
      float: center;
    }

    .edit_btn{
      text-decoration: none;s
      padding: 2px 5px;
      background: #2E8B57;
      color: white;
      border-radius: 3px;
      font-size: 1.3em;
  }
    .arrow{
      color: red
    }
  </style>

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <div class="cd-logo"><img src="../faculty_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
    </div>
    
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

            <center><li class="cd-side__sub-item"><a href="Ad_adviseeDoc.php">Advisee Document</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="Ad_defSched.php">Defense Schedule</a></li></center>

            <center><li class="cd-side__sub-item">
            <a href="Ad_adviseesRate.php">Advisees Rate</a></li></center>

          </ul>
        </li>


        <li style="background-color:#4169E1" class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a >as Panelist</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="adminSideBarMenu/manageStudents.php">Student Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="Pan_prefSched.php">Preferred Schedule</a></li></center>

            <center><li class="cd-side__sub-item"><a href="Pan_defSched.php">Defense Schedule</a></li></center>

            <center><li class="cd-side__sub-item"><a href="Pan_propDocu.php">Proponents Documents</a></li></center>

            <center><li style="background-color:#4169E1" class="cd-side__sub-item">
            <a href="Pan_propRate.php">Proponents Rate</a></li></center>
          </ul>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Proponents Rate Page (PROJECT IMPLEMENTATION)</h2></center>

            <?php 
              include '../../../includes/connect.php';
              //include 'Pan_ratepageOE.php';
              $selected_id = $_GET['panelrate'];
              //$viewmembers = $_GET['viewmembers'];
              $sql0 = "SELECT a.thesis_id,group_id,b.thesis_id,phase_id,thesis_phase_status from thesis_tbl a INNER JOIN thesis_phase_tbl b on a.thesis_id = b.thesis_id where group_id = '$selected_id' "; //duplicated

              //$sql0 = "SELECT a.thesis_id,group_id,b.thesis_id,phase_id,thesis_phase_status from thesis_tbl a INNER JOIN thesis_phase_tbl b on a.thesis_id = b.thesis_id where group_id = '$selected_id' and thesis_phase_status = 1 "; //one

              //$sql0 = "SELECT a.thesis_id,group_id,b.thesis_id,a.phase_id,thesis_phase_status,c.phase_id from thesis_tbl a INNER JOIN thesis_phase_tbl b on a.thesis_id = b.thesis_id INNER JOIN phases_tbl b on c.phase_id = a.phase_id where group_id = '$selected_id' and thesis_phase_status = 1 "; //one


              $records0 = mysqli_query($conn, $sql0);
              while  ($row0 = mysqli_fetch_object($records0)) {
                if(($row0->thesis_phase_status) == 0){
                  if(($row0->phase_id) == 3){
             ?>
             <!--
            <div class="lahi"> 
            <h5 >Beginning(5pts)</h5>
            <h5 >Developing(10pts)</h5>
            <h5 >Accomplished(15pts)</h5>
            <h5 >Exemplary(20pts)</h5>
            </div>
            -->
            <?php 

                  //include '../../../includes/connect.php';
                  //$selected_id = $_GET['panelrate'];
                  $panelist = $_SESSION['user_id'];
                  
                  if(isset($_POST['panelist_rate'])){
                    $rt = 4; //Research Topic
                    $rt2 = 5; //Relevant Literature and Related Existing Application
                    $rt3 = 6; //Issues and Gap
                    $rt4 = 7; //Possible Solutions/Enhancement and Impact
                    $rt5 = 8; //Overall Concept Presentation
                    $rt_score = $_POST['rt'];
                    $rt_score2 = $_POST['rrl'];
                    $rt_score3 = $_POST['ig'];
                    $rt_score4 = $_POST['psei'];
                    $rt_score5 = $_POST['ocp'];

                    $sql = "INSERT INTO raw_scores_tbl (rubric,panel,group_sc,score) values ('" . $rt . "','" . $panelist . "','" . $selected_id . "','" . $rt_score . "')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    $sql2 = "INSERT INTO raw_scores_tbl (rubric,panel,group_sc,score) values ('" . $rt2 . "','" . $panelist . "','" . $selected_id . "','" . $rt_score2 . "')";
                    $stmt2 = $conn->prepare($sql2);
                    $stmt2->execute();

                    $sql3 = "INSERT INTO raw_scores_tbl (rubric,panel,group_sc,score) values ('" . $rt3 . "','" . $panelist . "','" . $selected_id . "','" . $rt_score3 . "')";
                    $stmt3 = $conn->prepare($sql3);
                    $stmt3->execute();

                    $sql4 = "INSERT INTO raw_scores_tbl (rubric,panel,group_sc,score) values ('" . $rt4 . "','" . $panelist . "','" . $selected_id . "','" . $rt_score4 . "')";
                    $stmt4 = $conn->prepare($sql4);
                    $stmt4->execute();

                    $sql5 = "INSERT INTO raw_scores_tbl (rubric,panel,group_sc,score) values ('" . $rt5 . "','" . $panelist . "','" . $selected_id . "','" . $rt_score5 . "')";
                    $stmt5 = $conn->prepare($sql5);
                    $stmt5->execute();
                    
                  }
                  
                  //mysqli_close($conn); //} //}
                 ?>

            <center>
              <form style="margin-top: 2.3em" name="myform" method="POST">
                

                <label style="margin-right: 5em"><h3><strong>Rubric</strong></h3></label>
                <label><h3><strong>Scores</strong></h3></label><br>

                <h2><center>ORAL EXAMINATION</center></h2>
                <label><h4>Mastery of Subject Matters</h4></label><br>
                <input type="number" name="rt" min="1" max="5" interval="5"  required=""><br><br>

                <label><h4>Delivery and Presentation of Idea</h4></label><br>
                <input type="number" name="rrl" min="1" max="10" required=""><br><br>

                <label><h4>Ability to answer questions/defends ideas/receptiveness</h4></label><br>
                <input type="number" name="ig" min="1" max="10" required=""><br><br><br>


                <input class="edit_btn" type="submit" name="panelist_rate" value="SUBMIT">
                 
              </form>
             
            </center>

<?php }  } 
/*if(($row0->thesis_phase_status) == 0){
  if(($row0->phase_id) == 2){*/
?>
  <!--<h1>phase 2</h1>-->
<?php } mysqli_close($conn); //} } 
 ?>
<!-------------------------->
<br><br>
<!--<form method="POST" action="Pan_ratepageOE.php">-->
<form method="POST" action="Pan_ratepagePP.php"> 
<!--<form method="POST" action="Pan_ratepagePP_rate.php">-->
    <center> <button type="submit" class="edit_btn" value="<?php $selected_id; ?>">Back</button></center> 
</form> 
<br><br>
<!-------------------------->
           
            
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