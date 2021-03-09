<?php include 'secretary_SESSION.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../secretary_assets/css/style.css">

  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="../secretary_css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="../secretary_css/bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="../secretary_css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="../secretary_css/bootstrap-select.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="../secretary_css/style.css">

</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../secretary_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../secretary_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="accountManagement_secretary.php">My Account</a></li></center>
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
        <li class="main-label">secretary Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>

        

        <li class="cd-side__item--selected ">          
        </li>
    
        
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">

      	<li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="Sec_defSched.php">Defense Schedule</a>
        </li>
      	<li style="background-color:#4169E1" class="cd-side__sub-item cd-side__item cd-side__item--has-children">

          <a href="Sec_thesisMins.php">Thesis Minutes</a>

        </li>
       
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
  
        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Thesis Minutes Page</h2></center>

            <!-------------->
            <div class="row">
                       
              <div class="col-md-12">
                            <h2>Give us Feedback</h2>
                <div class="panel panel-default">
                  <div class="panel-heading">Edit Info</div>

<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
    <input type="hidden" name="user" value="<?php echo htmlentities($result->email); ?>">
  <label class="col-sm-2 control-label">Title<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" name="title" class="form-control" required>
  </div>

  <label class="col-sm-2 control-label">Attachment<span style="color:red"></span></label>
  <div class="col-sm-4">
  <input type="file" name="attachment" class="form-control">
  </div>
</div>

<div class="form-group">
  <label class="col-sm-2 control-label">Description<span style="color:red">*</span></label>
  <div class="col-sm-10">
  <textarea class="form-control" rows="5" name="description"></textarea>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-8 col-sm-offset-2">
    <button class="btn btn-primary" name="submit" type="submit">Send</button>
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
  <script src="../secretary_assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../secretary_assets/js/menu-aim.js"></script>
  <script src="../secretary_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../secretary_js/jquery.min.js"></script>
  <script src="../secretary_js/bootstrap-select.min.js"></script>
  <script src="../secretary_js/bootstrap.min.js"></script>
  <script src="../secretary_js/jquery.dataTables.min.js"></script>
  <script src="../secretary_js/dataTables.bootstrap.min.js"></script>
  <script src="../secretary_js/Chart.min.js"></script>
  <script src="../secretary_js/fileinput.js"></script>
  <script src="../secretary_js/chartData.js"></script>
  <script src="../secretary_js/main.js"></script>

</body>
</html>