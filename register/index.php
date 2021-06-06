<?php include ('head.php'); ?>

<body>
    <div id="wrapper">

        <?php include ('side_bar.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
                    <br><a href="../admin/voters.php" class = "btn btn-primary btn-outline"> <i class = "fa fa-arrow-left"></i> Back to Voters</a><br><br>
                    
                </div>
                
                <div class = "well col-lg-5">

                    <div class="panel panel-green">

                        <div class="panel-heading">
                            Add Voter                          
                        </div>
                        <div class="panel-body">
                            <form method = "post" enctype = "multipart/form-data">	
                                <div class="form-group">
                                    <label>NIC Number</label>
                                    <input class ="form-control" type = "text" name = "NIC_number" placeholder = "Enter NIC Number" required="true" maxlength="10">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Enter Password" required="true"   />
                                </div>

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type ="text" name = "firstname" placeholder="Enter First Name" required="true">
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control"  type = "text" name = "lastname" placeholder="Enter Last Name" required="true">
                                </div>

                                <div class="form-group">
                                    <label>Year Of Study</label>
                                    <select class = "form-control" name = "yearOfStudy">
                                        <option>1st Year</option>
                                        <option>2nd Year</option>
                                        <option>3rd Year</option>
                                        <option>4th Year</option>

                                    </select>
                                </div>

                                <button name = "submit" type="submit" class="btn btn-primary">Register</button>
                                                        
                                </div>


                        </form>


                        <?php
                        require 'db_connection.php';

                        if(isset($_POST['submit'])){
                        $nic_number = $_POST['NIC_number'];
                        $password = $_POST['password'];
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $yearOfStudy = $_POST['yearOfStudy'];

                        $query = $conn->query("SELECT * FROM voter WHERE NIC_number = '$nic_number'")or die (mysql_error());
                        $count = $query->fetch_array();

                        if ($count > 0){
                        ?>
                        <script>
                            alert("ID Number Already Exist")
                        </script>
                        <?php
                        }
                        else {
                          
                        $conn->query("INSERT INTO voter(NIC_number,password,firstname,lastname,yearOfStudy,status,account) VALUES ('$nic_number','$password','$firstname','$lastname','$yearOfStudy','Unvoted','Active')");
                        
                        ?>
                        <script>
                            alert('Voter Successfully Registerd');

                        </script>


                        <?php
                        }
                        }
                      
                        ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('script.php'); ?>

</body>
</html>
</body>