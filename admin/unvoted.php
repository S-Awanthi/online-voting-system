<!-- Display Unvoted Voters -->

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
                <?php
                $count = $conn->query("SELECT COUNT(*) as total FROM voter")->fetch_array();
                $count1 = $conn->query("SELECT COUNT(*) as total FROM voter WHERE status = 'Voted'")->fetch_array();
                $count2 = $conn->query("SELECT COUNT(*) as total FROM voter WHERE status = 'Unvoted'")->fetch_array();
                ?>
                <br>
                <a href="voters.php" class = "btn btn-primary btn-outline"><i class = "fa fa-paw"></i> 
                    ALL Voters (<?php echo $count['total'] ?>)</a><br><br>
                <a href="voted.php" class = "btn btn-success btn-outline"><i class = "fa fa-paw"></i> 
                    Voted (<?php echo $count1['total'] ?>)</a>
                <a href="unvoted.php" class = "btn btn-danger btn-outline"><i class = "fa fa-paw"></i> 
                    Unvoted (<?php echo $count2['total'] ?>) </a>

                <br/>
                <hr/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="modal-title" id="myModalLabel">         
                            <div class="panel panel-primary">
                                <div class="panel-heading"><i class = "fa fa-users"></i>
                                    Unvoted List
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

                                        <th>Name</th>
                                        <th>NIC_Number</th>
                                        <th>Password</th>
                                        <th>Year Of Study</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                    require 'db_connection.php';
                                    
                                    $query = $conn->query("SELECT * FROM voter where status = 'Unvoted'");
                                    while ($row = $query->fetch_array()) {
                                        $voters_id = $row ['voter_id'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row ['firstname'] . " " . $row['lastname']; ?></td>
                                            <td><?php echo $row ['NIC_number']; ?></td>
                                            <td><?php echo $row ['password']; ?></td>
                                            <td><?php echo $row ['yearOfStudy']; ?></td>
                                            <td><?php echo $row ['status']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
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