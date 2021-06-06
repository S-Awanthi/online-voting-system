<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>Add New Admin</center>
                        </div>    
                    </div>
                </h4>
            </div>


            <div class="modal-body">
                <form method = "post" enctype = "multipart/form-data">	
                    <div class="form-group">
                        <label>Username</label>
                        <input class ="form-control" type = "text" name = "adminname" placeholder = "Enter Username" required="true">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type ="password" name = "password" placeholder="Enter Password" required="true">
                    </div>

                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" type ="text" name = "firstname" placeholder="Enter First Name" required="true">
                    </div>
                    
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control"  type = "text" name = "lastname" placeholder="Enter Last Name" required="true">
                    </div>

                    <button name = "ok" type="submit" class="btn btn-primary">Save Details</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </form>

            <?php
            require_once 'db_connection.php';
            if (isset($_POST['ok'])) {

                $adminname = $_POST['adminname'];
                $password = $_POST['password'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];

                $query = $conn->query("SELECT * FROM admin WHERE adminname='$adminname'") or die(mysql_error());
                $count1 = $query->num_rows;

                if ($count1 > 0) {
                    ?>
                    <script>
                        alert("User Already Exist");
                    </script>
                    <?php
                } else {
                    $conn->query("INSERT INTO admin(adminname,password,firstname,lastname) VALUES('$adminname', MD5('$password'),'$firstname','$lastname')");
                    // header('location:user.php');
                    ?>
                    <script>
                        alert('Data Successfully Saved');
                    </script>
                    <?php
                }
            }
            ?>	
        </div>
    </div>
</div>