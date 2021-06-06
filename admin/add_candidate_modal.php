
<!-- Interface for add candidate -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>Add New Candidate</center>
                        </div>    
                    </div>
                </h4>
            </div>


            <div class="modal-body">
                <form method = "POST" enctype = "multipart/form-data">	
                    
                    <div class="form-group">
                        <label>Designation</label>
                        <select class = "form-control" name = "designation">
                            <option selected>President</option>
                            <option>Vice President for Internal Affairs</option>
                            <option>Vice President for External Affairs</option>
                            <option>Secretary</option>
                            <option>Auditor</option>
                            <option>Treasurer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" type ="text" name = "firstname" placeholder="Please enter first name" required="true">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control"  type = "text" name = "lastname" placeholder="Please enter last name" required="true">
                    </div>

                    <div class="form-group">
                        <label>Year Of Study</label>
                        <select class = "form-control" name = "yearOfStudy">
                            <option selected>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select class = "form-control" name = "gender">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" required> 
                    </div>
                    
                    <!--Save button-->
                    <button name = "save" type="submit" class="btn btn-primary">Save Details</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </form> 
                
            </div>
            


            <!--PHP code goes here-->
            
            <?php
            require_once 'db_connection.php';

            if (isset($_POST ['save'])) {
                
                $designation = $_POST['designation'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $yearOfStudy = $_POST['yearOfStudy'];
                $gender = $_POST['gender'];
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);
                $image_size = getimagesize($_FILES['image']['tmp_name']);

                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                $location = "upload/" . $_FILES["image"]["name"];

                //SQL query to save data to database
                $conn->query("INSERT INTO candidate(designation,firstname,lastname,yearOfStudy,gender,prof_image) VALUES('$designation','$firstname','$lastname','$yearOfStudy','$gender','$location')")or die(mysql_error());
            }
            ?>					
        </div>        
    </div>    
</div>