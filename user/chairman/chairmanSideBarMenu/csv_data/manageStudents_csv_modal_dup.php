
<?php 

include '../../../../includes/connect.php';
include 'chairman_SESSION.php';

$msg = null;
$importCsv_prompt_messasge = null;
$del_prompt_messasge = null;

// Import data code using csv
if (isset($_POST['import'])) {
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        $i = 0;
        while (($column = fgetcsv($file)) !== FALSE) {
            if ($i > 0) {
                if (!empty($column[0])) {
                    //$insertdate = date("Y-m-d", strtotime(str_replace('/', '-', $column[3])));
                    $sql = "INSERT into users_tbl (name,username,email,userpassword,type) 
                    values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . md5($column[3]) . "','" . $column[4] . "')";
                    $result = mysqli_query($conn, $sql);
                    if (isset($result)) {
                        $msg++;
                    }
                }
            }
            $i++;
        }
    }
  $importCsv_prompt_messasge = "CSV is imported successfully";
}


if(isset($_GET['delete'])){
    
    $id = $_GET['delete'];              
    $sql="DELETE from users_tbl where user_id = '$id' and user_status = 0";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $del_prompt_messasge="Deleted Successfully";
}
?>

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

  <!--<script>document.getElementsByTagName("html")[0].className += " js";</script>-->
  <link rel="stylesheet" href="../../chairman_assets/css/style.css">

  <title>Student Management</title>

  <link rel="stylesheet" href="../../chairman_css/font-awesome.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-social.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-select.css">
  <link rel="stylesheet" href="../../chairman_css/style_dup.css">

  <link rel="stylesheet" href="../../chairman_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/awesome-bootstrap-checkbox.css">

  <link href="csv_Import_style.css" rel="stylesheet" type="text/css"/>


  <style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
      background: #dd3d36;
      color:#fff;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
      background: #5cb85c;
      color:#fff;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
  </style>


</head>

<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <!--<a href="#0" class="cd-logo"><img src="assets/img/cd-logo.svg" alt="Logo"></a>-->
      <div class="cd-logo"><img src="../../chairman_assets/img/ustp_logo.png" alt="Logo" class="ustp_logo"></div>
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
          <img src="../../chairman_assets/img/cd-avatar.svg" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <center><li class="cd-nav__sub-item"><a href="../manageAcc.php">My Account</a></li></center>
          <!--<li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>-->
          <center><li class="cd-nav__sub-item"><a href="../../../../includes/logout.php">Logout</a></li></center>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <!--<li class="cd-side__label"><span>Main</span></li>-->
        <li class="main-label">admin Page</li>
        <li class="main-label_dup" style="color:white; text-align: center;"><?php $ufunc->UserName();?></li>
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 1</a>-->
          <a href="../../chairman_dashboard.php">Dashboard</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 1</a></li></center>
          </ul>-->
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">          
          <ul class="cd-side__sub-list"></ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <!--<a href="">Feature 2</a>-->
          <a>User Management</a>
          
          <ul class="cd-side__sub-list">
            <center><li  style="background-color:#4169E1" class="cd-side__sub-item"><a href="manageStudents_csv.php">Student Management</a></li></center>
            <!--<center><li style="background-color:#4169E1" class="cd-side__sub-item"><a href="../manageFaculty.php">Faculty Management</a></li></center>-->
            <center><li class="cd-side__sub-item"><a href="manageFaculty_csv.php">Faculty Management</a></li></center>

            <center><li class="cd-side__sub-item"><a href="../manageSecretary.php">Secretary Management</a></li></center>
          </ul>
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <a href="../groupAssignment.php">Group Assignment</a>          
        </li>
        
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 3</a>-->
          <a href="../advisoryAssignment.php">Advisory Assignment</a>
          
          <ul class="cd-side__sub-list">
            <!--<center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 3</a></li></center>-->
          </ul>
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 4</a>-->
          <a href="../panelAssignment.php">Panel Assignment</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 4</a></li></center>
          </ul>-->
        </li>
    
        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="../defenseSchedule.php">Defense Schedule</a>
          
          <!--<ul class="cd-side__sub-list">
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
            <center><li class="cd-side__sub-item"><a href="#0">Sub Feature 5</a></li></center>
          </ul>-->
        </li>

        <!--<li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">-->
        <li class="cd-side__sub-item cd-side__item cd-side__item--has-children">
          <!--<a href="">Feature 5</a>-->
          <a href="../manuscript.php">Thesis Manuscripts</a>
        </li>
      </ul>

    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <center><h2 class="page-title">Student Management Page</h2></center>

            <!------------->
<div class="panel panel-default">
  <div class="panel-body">
    <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">

      <div class="form-group">
      <center>
        <label>Choose CSV File</label> 
        <input type="file" name="file" accept=".csv">
      </center>
      </div>

      <div class="form-group">
      <center><button style="float: center" type="submit" name="import">IMPORT CSV</button></center>
      </div>
    </form>
  </div>
</div>

    <?php
    if ($importCsv_prompt_messasge) {?> 
                                        <div class="succWrap" id="msgshow"><center>
        <!--<div class="msg">CSV data is imported successfully.</div>-->
                                            <?php echo htmlentities($importCsv_prompt_messasge);
  
    ?></center> </div><?php }?>

    <div class="row" style="margin-top: 3em">
          <div class="col-md-12">
          <div class="panel panel-default">
            <?php if(isset($_GET['delete'])){ if($del_prompt_messasge){?><div class="succWrap" id="msgshow"><center><?php echo htmlentities($del_prompt_messasge); ?></center> </div><?php } }?>
              <div class="panel-heading">Students List</div>
              <div class="panel-body">
                
<!--<div class="container">-->
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>          

<table id="mytable" class="display table table-striped table-bordered table-hover">
    <thead>
      <th>No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </thead>
<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $modal=mysqli_query($koneksi,"SELECT * FROM users_tbl");
  while($r=mysqli_fetch_array($modal)){
       
?>
  <tr>
      <td><?php echo $r['user_id']; ?></td>
      <td><?php echo  $r['name']; ?></td>
      <td><?php echo  $r['email']; ?></td>
      <td>
         <a href="#" class='open_modal' id='<?php echo  $r['user_id']; ?>'>Edit</a>
         <a href="#" onclick="confirm_modal('proses_delete.php?&modal_id=<?php echo  $r['user_id']; ?>');">Delete</a>
      </td>
  </tr>
 

<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data Using Modal Boostrap (popup)</h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Name">Name</label>
                  <input type="text" name="name"  class="form-control" placeholder="Name" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Email">Email</label>
                   <textarea name="email"  class="form-control" placeholder="Email" required/></textarea>
                </div>


              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

           

            </div>

           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
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

  <script src="../../chairman_assets/js/util.js"></script>
  <script src="../../chairman_assets/js/menu-aim.js"></script>
  <script src="../../chairman_assets/js/main.js"></script>

  <!-- Loading Scripts -->
  <script src="../../chairman_js/jquery.min.js"></script>
  <script src="../../chairman_js/bootstrap-select.min.js"></script>
  <script src="../../chairman_js/bootstrap.min.js"></script>
  <script src="../../chairman_js/jquery.dataTables.min.js"></script>
  <script src="../../chairman_js/dataTables.bootstrap.min.js"></script>
  <script src="../../chairman_js/Chart.min.js"></script>
  <script src="../../chairman_js/fileinput.js"></script>
  <script src="../../chairman_js/chartData.js"></script>
  <script src="../../chairman_js/main.js"></script>

  <<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 1000);
          });
    </script>



  <!-- Javascript untuk popup modal Edit--> 
<!--kung wala ni nga jquery, dili mugawas ang modal para sa edit-->
<script type="text/javascript">
  $(document).ready(function () {
    $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
        url: "modal_edit.php",
        type: "GET",
        data : {modal_id: m,},
        success: function (ajaxData){
          $("#ModalEdit").html(ajaxData);
          $("#ModalEdit").modal('show',{backdrop: 'static'});
        }
      });
    });
  });
</script>


<!-- Javascript to popup modal Delete--> 
<!--kung wala ni nga jquery, dili mugawas ang modal para sa delete-->
<script type="text/javascript">
  function confirm_modal(delete_url){
    $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>