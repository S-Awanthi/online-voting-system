<?php
if (!$bool) {
    ?>
    <div class="modal fade" id="edit_user<?php echo $admin_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">         
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <center>Edit Admin Details</center>
                            </div>    
                        </div>
                    </h4>
                </div>


                <div class="modal-body">										
                    <form action="update_user.php?admin_id=<?php echo $admin_id; ?>" method = "post" >	
                        <input type="hidden" name="admin_id" value="<?php echo $row['admin_id'] ?>">

                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type ="text" name = "adminname" required="true" value = "<?php echo $row ['adminname'] ?>">
                        </div>

                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname'] ?>" required="true">
                        </div>

                        <button name = "change" type="submit" class="btn btn-primary">Update Details</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>					
        </div>
    </div>
    <?php
}
?>