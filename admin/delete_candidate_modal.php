<!--Interface for delete candidate-->

<div class="modal fade" id="delete_user<?php echo $candidate_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Delete Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
																
			<div class="modal-body">
				Are you sure you want to delete candidate <b><?php echo $row['firstname'] ." ". $row['lastname']?></b> ?
			</div>
									
			<div class="modal-footer">
				<a class="btn btn-danger" href="delete_candidate.php<?php echo '?candidate_id='.$candidate_id; ?>">
                                <i class="fa fa-check"></i>&nbsp;Yes</a>

				<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-times"></i>&nbsp;No</button>
			</div>
		</div>
    </div>
</div>


