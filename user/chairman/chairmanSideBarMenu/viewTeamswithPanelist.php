<?php include 'chairman_SESSION.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <style type="text/css">
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

      <div class="cd-logo"><img src="../chairman_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../chairman_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="manageAcc.php">My Account</a></li></center>
>
          <center><li class="cd-nav__sub-item"><a href="../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header>

  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">Chairman Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="../chairman_dashboard.php">Dashboard</a>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">          
          <ul class="cd-side__sub-list"></ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>User Management</a>
          
          <ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="csv_data/manageStudents_csv.php">Student Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="csv_data/manageFaculty_csv.php">Faculty Management</a></li></center>
            <center><li class="cd-side__sub-item"><a href="manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="groupAssignment.php">Group Assignment</a>          
        </li>

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">

          </ul>
        </li>

        <li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="panelAssignment.php">Panel Assignment</a>
        </li>
    
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="defenseSchedule.php">Defense Schedule</a>
        </li>

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

            <center><h2><strong>GROUPS</strong></h2></center>
<!-------------------------->
<form method="POST" action="proponentsPanelists.php">   
    <button type="submit" class="edit_btn" style="float: right">List of Panelists</button> 
</form>
<!-------------------------->  

<!-------------------------->
<form method="POST" action="panelAssignment.php">   
    <button type="submit" class="edit_btn">Back</button> 
</form>
<!-------------------------->   

            <div class="panel panel-default">
              <div class="panel-heading">Team List</div>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th><strong>Group ID</strong></th>
                      <th>Group Name</th> 
                      <th><strong>Adviser Name</strong></th>
                      <!--<th>Number of Panelists</th>-->
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
    include '../../../includes/connect.php';

    //$sql4 = "SELECT user_id,name,group_id,adviser,group_name,thesis_panel_id,group_ad,panelist_id FROM users_tbl RIGHT JOIN group_tbl ON adviser = user_id RIGHT JOIN thesis_panels_tbl ON panelist_id = user_id";//with output only group_id

   //$sql4 = "SELECT * FROM users_tbl RIGHT JOIN group_tbl ON adviser = user_id RIGHT JOIN thesis_panels_tbl ON panelist_id = user_id";//with output only group_id

   //$sql4 = "SELECT name,group_name,group_ad,panelist_id FROM users_tbl INNER JOIN group_tbl ON adviser = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id ";//with output only group_id adviser name

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN group_tbl ON adviser = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id INNER JOIN thesis_panels_tbl ON user_id = panelist_id "; //no output

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN group_tbl ON adviser = user_id INNER JOIN thesis_panels_tbl ON panelist_id = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id"; //no output

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN thesis_panels_tbl ON panelist_id = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id"; //no output

   //----main----//
    //$sql4 = "SELECT * FROM users_tbl INNER JOIN thesis_panels_tbl ON panelist_id = user_id "; //with output only panelist name

   //$sql4 = "SELECT * FROM group_tbl INNER JOIN thesis_panels_tbl ON group_id = group_ad";//no output

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN thesis_panels_tbl ON panelist_id = user_id INNER JOIN thesis_panels_tbl ON  group_id = group_ad"; //no output even if interchange common reference

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN group_tbl ON adviser = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id"; //with output only group_id and adviser name

    //$sql4 = "SELECT user_id,name,group_ad,panelist_id from users_tbl inner join thesis_panels_tbl on user_id = panelist_id "; //with output only group_id and panelist name

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN group_tbl ON adviser = user_id INNER JOIN thesis_panels_tbl ON panelist_id = user_id";//no output without error

   //$sql4 = "SELECT * FROM users_tbl LEFT JOIN group_tbl ON adviser = user_id LEFT JOIN thesis_panels_tbl ON group_ad = group_id";//with output but all faculty names

  //$sql4 = "SELECT * FROM users_tbl INNER JOIN group_tbl ON adviser = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id";//with output only group_id,group_name and adviser

    //$sql4 = "SELECT * FROM users_tbl INNER JOIN thesis_panels_tbl ON panelist_id = user_id INNER JOIN thesis_panels_tbl ON group_ad = group_id"; //with output only panelist name

   //$sql4 = "SELECT * FROM users_tbl INNER JOIN thesis_panels_tbl ON user_id = panelist_id INNER JOIN thesis_panels_tbl ON group_ad = group_id";//no output with error

  //----counting rows
  /*$sql ="SELECT user_id,group_id,group_ad,panelist_id from group_tbl inner join users_tbl on user_id = panelist_id";
  $records = mysqli_query($conn, $sql);
  $rowcount = mysqli_num_rows($records); */

   //$sql4 = "SELECT name,a.group_id,group_name,adviser,thesis_id,b.group_id,thesis_title from users_tbl inner join group_tbl a on user_id = adviser inner join thesis_tbl b on a.group_id = b.group_id "; //with thesis title

   $sql4 = "SELECT name,a.group_id,group_name,adviser from users_tbl inner join group_tbl a on user_id = adviser "; // group only
    $records4 = mysqli_query($conn, $sql4);
    while  ($row4 = mysqli_fetch_object($records4)) {
?>
      <tr>
        <td><?php echo htmlentities($row4->group_id);?></td>
        <td><?php echo htmlentities($row4->group_name);?></td>  
        <td><?php echo htmlentities($row4->name); ?></td>
        <!--<td><?php // echo $rowcount;?></td>-->
                                             
<td>
<!--<a href="assignAdvisertoTeam.php?assignAdviser=<?php //echo htmlentities($row4->group_id); ?>" > Assign</a>
<a>|   |</a>-->
<!--<a href="viewTeamswithAdviser.php?gg=<?php //echo htmlentities($row4->group_id); ?>" onclick="return confirm('Do you want to remove this adviser from this team?');">Remove</a>
<a>|   |</a>-->

<a href="panelistsProponents.php?viewpanel=<?php echo htmlentities($row4->group_id); ?>" >View <strong>Panelists</strong></a>

<!--<a href="panelistsProponents.php?viewpanel=<?php //echo htmlentities($row4->thesis_id); ?>" >View <strong>Panelists</strong></a>-->
</td>
                    </tr>
                  <?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
<!------------------>

  <!------->
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