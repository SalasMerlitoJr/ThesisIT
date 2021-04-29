
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

//------------------------------------------------------------------------
if(isset($_REQUEST['disable'])){
  $selected_id=$_GET['disable'];
  //$memstatus=1;
  $sql = "UPDATE users_tbl SET is_active = 1 WHERE user_id='$selected_id' ";
  $query = $conn->prepare($sql);
  $query->execute();
  $msg="Changes Sucessfully";
}
if(isset($_REQUEST['enable'])){
  $selected_id=$_GET['enable'];
  //$memstatus=0;
  $sql = "UPDATE users_tbl SET is_active = 0 WHERE user_id='$selected_id' ";
  $query = $conn->prepare($sql);
  $query->execute();
  $msg="Changes Sucessfully";
}
//------------------------------------------------------------------------
?>

 <?php  
 //ob_start();
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "tmsdup");  
      $sql = "SELECT * FROM users_tbl where type = 'student' ORDER BY user_id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["user_id"].'</td>  
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["email"].'</td>  
                          <td>'.$row["userpassword"].'</td> 
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {    //ob_start();
      require_once('tcpdf/tcpdf.php');

    
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER,'10');  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '2', PDF_MARGIN_RIGHT, '2',PDF_MARGIN_BOTTOM, '10');  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE);  
      $obj_pdf->SetFont('helvetica', '', 6);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">students list </h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="15%">ID</th>  
                <th width="25%">Name</th>  
                <th width="25%">Email</th>  
                <th width="35%">Password</th>   
           </tr>  
      ';  
      //ob_start();
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);
      ob_end_clean();
      $obj_pdf->Output('sample.pdf', 'I');  
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

  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../../chairman_assets/css/style.css">

  <title>Student Management</title>

  <link rel="stylesheet" href="../../chairman_css/font-awesome.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-social.css">
  <link rel="stylesheet" href="../../chairman_css/bootstrap-select.css">
  <link rel="stylesheet" href="../../chairman_css/style_dup.css">

  <link rel="stylesheet" href="../../chairman_css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../chairman_css/awesome-bootstrap-checkbox.css">

  <!--<link href="csv_Import_style.css" rel="stylesheet" type="text/css"/>-->
  <!--<link href="manageStudents_csv.css" rel="stylesheet" type="text/css"/>-->
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
    .gede-btn{
      color: #fff;
      background: #2d5986;


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

    /*.isActive_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #4169E1;
    }*/
    .Dectivate_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #3d586b;
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
            
    <!--<div class="csv_section">
        <div class="import_section">
            <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV File</label> <input
                    type="file" name="file" id="file" accept=".csv">

                    <button type="submit" id="submit" name="import" class="btn-submit">IMPORT CSV</button>
                </div>
                <div id="response"></div>
            </form>
        </div>
    </div>-->
<!--------------------------------------------------->
   <form method="post">  
      <input type="submit" name="create_pdf" class="gede-btn" value="Create PDF" />  
  </form> 
<!--------------------------------------------------->    
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
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

<?php
  include '../../../../includes/connect.php';
  //$user_type = "student";
  $sql = "SELECT * from users_tbl where type = 'student' ";
  $records = mysqli_query($conn, $sql);
  while  ($row = mysqli_fetch_object($records)) {
?>
  <tr>
    <td><?php echo htmlentities($row->user_id);?></td>
    <td><?php echo htmlentities($row->name);?></td>
    <td><?php echo htmlentities($row->email);?></td>
  
                      
<td>
<a href="editRecords.php?edit=<?php echo htmlentities($row->user_id); ?>" class="edit_btn"> Edit </a>
<a>|    |</a>
<a href="manageStudents_csv.php?delete=<?php  echo htmlentities($row->user_id); ?>" class="del_btn"> Remove </a>
<a>|    |</a>
  <?php if($row->is_active == 1){?>
    <a href="manageStudents_csv.php?enable=<?php echo htmlentities($row->user_id);?>" onclick="return confirm('Do you really want to activate this account?')" style="text-decoration: none;padding: 2px 5px;color: white; border-radius: 3px; background: #4169E1;">Activate</a> 
  <?php }
   else {?>
    <a href="manageStudents_csv.php?disable=<?php echo htmlentities($row->user_id);?>" onclick="return confirm('Do you really want to deactivate this account?')" class="Dectivate_btn">Deactivate</a> 
  <?php } ?>
</td>
<!----------------------->

</tr>
                    <?php } 
                      # code... id='<?php echo  $r['user_id']; 
                    ?> 
                                       
                    <!--<?php $cnt //  =$cnt+1; }} ?> -->
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
  <!------->
  <!------------modal-------------->
  <?php 
  include '../../../../includes/connect.php';
  //$modal_id=$_GET['modal_id'];
  $modal=mysqli_query($conn,"SELECT * FROM users_tbl WHERE user_id=25 ");
  while($r=mysqli_fetch_array($modal)){ 
?>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
           <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Name">Name</label>
                    <input type="hidden" name="modal_id"  class="form-control" value="<?php echo $r['user_id']; ?>" />
            <input type="text" name="name"  class="form-control" value="<?php echo $r['name']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Email">Email</label>
            <!--<textarea name="email"  class="form-control"><?php // echo $r['email']; ?></textarea>-->
                    <input type="email" name="email"  class="form-control" value="<?php echo $r['email']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Type">Type</label>       
            <!--<input type="number" name="phone"  class="form-control" value="<?php // echo $r['phone']; ?>" disabled/>-->
                    <input type="text" name="type"  class="form-control" value="<?php echo $r['type']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="?">?</label>       
            <!--<input type="number" name="phone"  class="form-control" value="<?php // echo $r['phone']; ?>" disabled/>-->
                    <input type="?" name="?"  class="form-control" value=""/>
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
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>-->
    </div>
  </div>
</div> <?php } ?>
  <!------------------------------->

  </main> <!-- .cd-main-content -->

  <script src="manageStudents_csv.js" type="text/javascript"></script>

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

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 1000);
          });
    </script>




</body>
</html>