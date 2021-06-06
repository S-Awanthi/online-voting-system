<!--Interface for delete candidate-->

<div class="modal fade" id="delete_user<?php echo $admin_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>Delete Admin</center>
                        </div>    
                    </div>
                </h4>
            </div>
            
            <div class="modal-body">
                <p>Are you sure you want to delete <b><?php echo $row['adminname'] ?></b> ?</p>  
                <p>Ones you delete, it cannot be recovered.</p>
            </div>

            <div class="modal-footer">
                <a class="btn btn-danger" href="delete_user.php<?php echo '?admin_id='.$admin_id; ?>">
                                <i class="fa fa-check"></i>&nbsp;Yes. Delete Admin</a>

                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-times icon-large"></i>&nbsp;No. Keep Admin</button>
            </div>

        </div>        
    </div>    
</div>
