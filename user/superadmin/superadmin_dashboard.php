<?php 
  include 'settings.php'; //include settings 
  include '../../includes/connect.php';
?>
<!doctype html>
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
  <link rel="stylesheet" href="superadmin_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="superadmin_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="superadmin_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="superadmin_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="superadmin_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="superadmin_css/style.css">

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="superadmin_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <!--<img src="admin_assets/img/cd-avatar.svg" alt="avatar">-->
          <span><center>Account</center></span> <div style="width: 2.6em"></div>

        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="superadminSideBarMenu/manageAcc.php">My Account</a></li></center>
          <center><li class="cd-nav__sub-item"><a href="../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">Admin Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="superadmin_dashboard.php">Dashboard</a>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="superadminSideBarMenu/groupAssignment.php">?</a>
        </li>

    </nav>
  
    <!--<div class="cd-content-wrapper">
      <div class="text-component text-center">
        <h1>Responsive Sidebar Navigation</h1>
        <p>????<a href="https://codyhouse.co/gem/responsive-sidebar-navigation">Article &amp; Download</a></p>
      </div>
    </div> --><!-- .content-wrapper -->
    <!------->
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Dashboard</h2></center>
            
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-primary text-light">
                        <div class="stat-panel text-center">
<?php 
$sql ="SELECT user_id from users_tbl where type = 'student' ";
$records = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($records);
?>                      
                          <div class="stat-panel-number h1 "><?php echo $rowcount;?></div>
                          <div class="stat-panel-title text-uppercase">Total Proponents</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-success text-light"> 
                        <div class="stat-panel text-center">

<?php 
$sql ="SELECT user_id from users_tbl where type = 'faculty' ";
$records = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($records);
?>

                          <div class="stat-panel-number h1 "><?php echo $rowcount; ?></div>
                          <div class="stat-panel-title text-uppercase">Total Faculty</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>

                          <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-danger text-light">
                        <div class="stat-panel text-center">
<?php 
$sql ="SELECT group_id from group_tbl";
$records = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($records); 
?>
                          <div class="stat-panel-number h1 "><?php echo $rowcount; ?></div>
                          <div class="stat-panel-title text-uppercase">Total Thesis Groups</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body bk-info text-light">
                        <div class="stat-panel text-center">

                      <div class="stat-panel-number h1 "></div>
                          <div class="stat-panel-title text-uppercase">Total Approved Manuscripts</div>
                        </div>
                      </div>
                      <div class="block-anchor panel-footer" style="height: 4em"></div>
                    </div>
                  </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
  <!------->
  </main> <!-- .cd-main-content -->
  <script src="superadmin_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="superadmin_assets/js/menu-aim.js"></script>
  <script src="superadmin_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="superadmin_js/jquery.min.js"></script>
  <script src="superadmin_js/bootstrap-select.min.js"></script>
  <script src="superadmin_js/bootstrap.min.js"></script>
  <script src="superadmin_js/jquery.dataTables.min.js"></script>
  <script src="superadmin_js/dataTables.bootstrap.min.js"></script>
  <script src="superadmin_js/Chart.min.js"></script>
  <script src="superadmin_js/fileinput.js"></script>
  <script src="superadmin_js/chartData.js"></script>
  <script src="superadmin_js/main.js"></script>
  <!--<script>
    
  window.onload = function(){
    
    // Line chart from swirlData for dashReport
    var ctx = document.getElementById("dashReport").getContext("2d");
    window.myLine = new Chart(ctx).Line(swirlData, {
      responsive: true,
      scaleShowVerticalLines: false,
      scaleBeginAtZero : true,
      multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
    }); 
    
    // Pie Chart from doughutData
    var doctx = document.getElementById("chart-area3").getContext("2d");
    window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

    // Dougnut Chart from doughnutData
    var doctx = document.getElementById("chart-area4").getContext("2d");
    window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

  }
  </script>-->

</body>
</html>
<!--<?php // } ?>-->