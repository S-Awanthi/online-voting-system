<?php include ('session.php'); ?>
<?php include ('head.php'); ?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                
                <br><br>

                <?php
                $count = $conn->query("SELECT COUNT(*) as total FROM voter")->fetch_array();
                $count1 = $conn->query("SELECT COUNT(*) as total FROM voter WHERE status = 'Voted'")->fetch_array();
                $count2 = $conn->query("SELECT COUNT(*) as total FROM voter WHERE status = 'Unvoted'")->fetch_array();
                ?>

                <a href="voters.php" class = "btn btn-primary btn-outline"><i class = "fa fa-paw"></i> 
                    ALL Voters (<?php echo $count['total'] ?>)</a><br><br>
                <a href="voted.php" class = "btn btn-success btn-outline"><i class = "fa fa-paw"></i> 
                    Voted (<?php echo $count1['total'] ?>)</a>
                <a href="unvoted.php" class = "btn btn-danger btn-outline"><i class = "fa fa-paw"></i> 
                    Unvoted (<?php echo $count2['total'] ?>) </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                <br/>
                <hr/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="modal-title" id="myModalLabel">         
                            <div class="panel panel-primary">
                                <div class="panel-heading"><i class = "fa fa-users"></i>
                                    Voters List
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
                                        <th>NIC Number</th>
                                        <th>Password</th>
                                        <th>Name</th>
                                        <th>Year Of Study</th>
                                        <th>Status</th>
                                        <th>Account</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    require 'db_connection.php';

                                    $query = $conn->query("SELECT * FROM voter ORDER BY voter_id DESC");
                                    while ($row1 = $query->fetch_array()) {
                                        $voters_id = $row1['voter_id'];
                                        ?>

                                        <tr>
                                            <td><?php echo $row1 ['NIC_number']; ?></td>
                                            <td><?php echo $row1 ['password']; ?></td>
                                            <td><?php echo $row1 ['firstname'] . " " . $row1 ['lastname']; ?></td>
                                            <td><?php echo $row1 ['yearOfStudy']; ?></td>
                                            <td><?php echo $row1 ['status']; ?></td>
                                            <td><?php echo $row1 ['account']; ?></td>                                  		
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