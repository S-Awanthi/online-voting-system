
<?php include ('session.php'); ?>
<?php include ('head.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                
                <br>

                <button style="font-size: 15px;" class="btn btn-primary btn-primary" data-toggle="modal" data-target="#add_user"><i class = "fa fa-plus-circle"></i> Add New System Admin</button>
                
                <?php include ('add_user_modal.php'); ?>
                
                <hr/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="modal-title" id="myModalLabel">         
                            <div class="panel panel-primary">
                                <div class="panel-heading"><i class = "fa fa-users"></i>
                                    Admin List
                                </div>    
                            </div>
                        </h4>
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Usernname</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <?php
                                        require 'db_connection.php';
                                        $bool = false;
                                        $query = $conn->query("SELECT * FROM admin ORDER BY admin_id DESC");
                                        while ($row = $query->fetch_array()) {
                                            $admin_id = $row['admin_id'];
                                            ?>
                                            <td><?php echo $row ['admin_id'] ?></td>
                                            <td><?php echo $row ['adminname']; ?></td>
                                            <td><?php echo $row ['firstname']; ?></td>
                                            <td><?php echo $row ['lastname']; ?></td>
                                            <td style="text-align:center">
                                                
                                                <a rel="tooltip"  title="Delete" id="<?php echo $admin_id; ?>" href="#delete_user<?php echo $admin_id; ?>" data-target="#delete_user<?php echo $admin_id ?>" data-toggle="modal"class="btn btn-danger btn-outline">
                                                    <i class="fa fa-trash-o"></i> Delete</a>
                                                
                                                <?php include ('delete_user_modal.php'); ?>

                                                <a rel="tooltip"  title="Edit" id="<?php echo $row['admin_id'] ?>" href="#edit_user<?php echo $row['admin_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline">
                                                    <i class="fa fa-pencil"></i> Edit</a>	

                                            </td>
                                            <?php include ('edit_user_modal.php'); ?>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include ('script.php'); ?>

</body>
</html>