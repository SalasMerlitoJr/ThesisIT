
<?php
    include "koneksi.php";
	$modal_id=$_GET['modal_id'];
	$modal=mysqli_query($conn,"SELECT * FROM users_tbl WHERE user_id='$modal_id'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Modal Boostrap (popup)</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Name">Name</label>
                    <input type="hidden" name="modal_id"  class="form-control" value="<?php echo $r['user_id']; ?>" />
     				<input type="text" name="name"  class="form-control" value="<?php echo $r['name']; ?>"/>
                    <label for="Email">Email</label>
                    <input type="email" name="email"  class="form-control" value="<?php echo $r['email']; ?>">
                </div>

                <!--<div class="form-group" style="padding-bottom: 20px;">
                	<label for="Email">Email</label>-->
     				<!--<textarea name="email"  class="form-control"><?php // echo $r['email']; ?></textarea>-->
                    
                <!--</div>-->


	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>