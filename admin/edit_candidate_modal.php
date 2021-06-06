<!--Interface for edit candidate-->
<?php
if (!$bool) {
    ?>

    <div class="modal fade" id="edit_candidate<?php echo $candidate_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">         
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <center>Edit Candidate Details</center>
                            </div>    
                        </div>
                    </h4>
                </div>

                <div class="modal-body">
                    
                    <form method = "POST" enctype = "multipart/form-data">	
                        
                        <input type="hidden" name="candidate_id" value="<?php echo $row['candidate_id'] ?>">
                        
                        <div class="row">
                            <div class="col-md-10">
                                <label for="firstname">Candidate: &nbsp<?php echo $row ['firstname'] ?> <?php echo $row ['lastname']?></label>
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo $row ['prof_image'] ?>" width="50" height="50">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Designation</label>
                            <select class = "form-control" name = "designation">
                                <option><?php echo $row ['designation']; ?></option>
                                
                                <option>President</option>
                                <option>Vice President for Internal Affairs</option>
                                <option>Vice President for External Affairs</option>
                                <option>Secretary</option>
                                <option>Auditor</option>
                                <option>Treasurer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname'] ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname'] ?>" required="true">
                        </div>

                        <div class="form-group">
                            <label>Year Of Study</label>
                            <select class = "form-control" name = "yearOfStudy" required="true">
                                <option><?php echo $row ['yearOfStudy'] ?></option>
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <select class = "form-control" name = "gender">
                                <option><?php echo $row ['gender'] ?></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                                               
                        <!--Update button-->
                        <button name = "update" type="submit" class="btn btn-primary">Update Details</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->


    <!-- PHP code for edit candidate -->
    <?php
    require 'db_connection.php';

    if (ISSET($_POST['update'])) {
        
        $bool = true;
        $designation = $_POST['designation'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $yearOfStudy = $_POST['yearOfStudy'];
        $gender = $_POST['gender'];
        $candidate_id = $_POST['candidate_id'];
        
        // If want to update image also
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
        $location = "upload/" . $_FILES["image"]["name"];

        //SQL query to update details
        $conn->query("UPDATE candidate SET designation = '$designation', firstname = '$firstname', lastname = '$lastname', yearOfStudy = '$yearOfStudy', gender = '$gender' WHERE candidate_id = '$candidate_id'") or die(mysql_error());
        
        //Redirect to page candidate.php
        echo "<script> window.location='candidate.php' </script>";
    }
    ?>

    <?php
}
?>