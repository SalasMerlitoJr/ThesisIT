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
  .edit_btn{
      text-decoration: none;
      padding: 2px 5px;
      /*background: #2E8B57;*/
      background: #4169E1;
      color: white;
      border-radius: 3px;
      font-size: 1.3em;
      /*float: right;*/
      margin-right: 1em
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


        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>as Panelist</a>
          
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

            <center><h2 class="page-title">Proponents Rate Page (PROJECT PROPOSAL)</h2></center>

<!-------------------------->
<form method="POST" action="Pan_propRate.php">   
    <button type="submit" class="edit_btn">Back</button> 
</form>
<!-------------------------->    

            <!------------------------------------------------------>
            <div class="panel panel-default">
              <div class="panel-heading">Team List</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <!--<th>Group ID</th>
                      <th>Group Name</th>
                      <th>Adviser Name</th>
                      <th>Thesis Title</th>
                      <th>Action</th> -->

                      <th><strong>phase ID</strong></th>
                      <th><strong>Group Name</strong></th>
                      <th><strong>Group Adviser</strong></th>
                      <th><strong>Phase</strong></th>
                      <th><strong>Thesis Title</strong></th>
                      <<!--th><strong>Thesis Title</strong></th>-->
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
    include '../../../includes/connect.php';
    //include 'Pan_ratepageOE.php'; //error

   //$sql4 = "SELECT user_id,name,a.group_id,group_name,phase_id,phase_name,schedule_id,group_sc,phase_sc,time_start,time_end,venue,thesis_id,b.group_id,thesis_title from group_tbl a INNER JOIN users_tbl on user_id = adviser INNER JOIN schedules_tbl on a.group_id = group_sc INNER JOIN phases_tbl on phase_id = phase_sc INNER JOIN thesis_tbl b on a.group_id = b.group_id where phase_id = 1 ";

    //$sql4 = "SELECT user_id,name,a.group_id,group_name,thesis_id,b.group_id,thesis_title from group_tbl a INNER JOIN users_tbl on user_id = adviser INNER JOIN thesis_tbl b on a.group_id = b.group_id "; //no phase name

    //$sql4 = "SELECT thesis_phase_id,a.thesis_id,a.phase_id,thesis_phase_status,b.thesis_id,b.group_id,thesis_title,c.phase_id,phase_name,d.group_id,group_name,adviser,user_id,name from thesis_phase_tbl a INNER JOIN thesis_tbl b on a.thesis_id = b.thesis_id INNER JOIN phases_tbl c on a.phase_id = c.phase_id INNER JOIN group_tbl d on b.group_id = d.group_id INNER JOIN users_tbl on user_id = adviser where a.phase_id = 2 "; //old join

    //$sql4 = "SELECT thesis_phase_id,a.thesis_id,a.phase_id,thesis_phase_status,b.thesis_id,b.group_id,thesis_title,c.phase_id,phase_name,d.group_id,group_name,adviser,user_id,name,e.group_id,panelist_id from thesis_phase_tbl a INNER JOIN thesis_tbl b on a.thesis_id = b.thesis_id INNER JOIN phases_tbl c on a.phase_id = c.phase_id INNER JOIN group_tbl d on b.group_id = d.group_id INNER JOIN users_tbl on user_id = adviser INNER JOIN thesis_panels_tbl e on b.group_id = e.group_id where a.phase_id = 2 ";

    $sql4 = "SELECT user_id,name,a.group_id,group_name,phase_id,phase_name,schedule_id,group_sc,phase_sc,time_start,time_end,venue,thesis_id,b.group_id,thesis_title,c.group_id,panelist_id from group_tbl a INNER JOIN users_tbl on user_id = adviser INNER JOIN schedules_tbl on a.group_id = group_sc INNER JOIN phases_tbl on phase_id = phase_sc INNER JOIN thesis_tbl b on a.group_id = b.group_id INNER JOIN thesis_panels_tbl c on a.group_id = c.group_id where phase_sc = 2";//dependent on schedules_tbl

    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
      //if($row4->thesis_phase_status == 0){
?>
      <tr>        
        <!--
        <td><?php //echo htmlentities($row4->group_id);?></td>
        <td><?php //echo htmlentities($row4->name);?></td>
        <td><?php //echo htmlentities($row4->group_name);?></td>
        <td><?php //echo htmlentities($row4->phase_name);?></td>
        <td><?php //echo htmlentities($row4->thesis_title);?></td>
        -->
        <td><?php echo htmlentities($row4->phase_sc);?></td>
        <td><?php echo htmlentities($row4->group_name);?></td>
        <td><?php echo htmlentities($row4->name);?></td>
        <!--<td><?php //echo htmlentities($row4->thesis_id);?></td>-->
        <!--<td><?php //echo htmlentities($row4->phase_id);?></td>-->
        <td><?php echo htmlentities($row4->phase_name);?></td>
        <td><?php echo htmlentities($row4->thesis_title);?></td>

                                             
<td>
<a href="Pan_ratepagePP_rate.php?panelratePP=<?php echo htmlentities( $row4->thesis_id); ?>"> Rate </a>
<a>| |</a>
<a href="Pan_ratepageOE.php?viewmembers=<?php echo htmlentities( $row4->group_id); ?>"> View Members </a>
</td> 
                    </tr>
                  <?php } //} ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            <!------------------------------------------------------>
            
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