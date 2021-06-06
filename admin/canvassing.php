
<?php include ('session.php'); ?>
<?php include ('head.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <hr/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class = "alert alert-success">Canvassing Report</h4>	
                    </div>

                    <br/>
                    <form method="post" action="sort.php">

                        <select name="designation" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
                            <option readonly>Search by Position</option>
                            <option>President</option>
                            <option>Vice President for External Affairs </option>
                            <option>Vice President for Internal Affairs</option>
                            <option>Secretary</option>
                            <option>Auditor</option>
                            <option>Treasurer</option>
                        </select>

                        &nbsp;
                        &nbsp;
                        <button id ="sort" class = "btn btn-success"> Search </button>
                        <button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
                    </form>	
                    <div class="panel-body">


                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                            <td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
                            <td style = "width:100px;"class = "alert alert-success">Image</td>
                            <td style = "width:80px;" class = "alert alert-success">Total Votes</td>

                            </thead>
                            <?php
                            require 'db_connection.php';

                            $query = $conn->query("SELECT * FROM candidate WHERE designation = 'President'");
                            while ($fetch = $query->fetch_array()) {
                                $id = $fetch['candidate_id'];
                                $query1 = $conn->query("SELECT COUNT(*) as total FROM vote WHERE candidate_id = '$id'");
                                $fetch1 = $query1->fetch_assoc();
                                ?>
                                <tbody> 
                                <td><?php echo $fetch ['firstname'] . " " . $fetch ['lastname']; ?></td>
                                <td><img src = "<?php echo $fetch ['prof_image']; ?>" style = "width:40px; height:40px; border-radius:500px; " >
                                <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total']; ?></button>	</td>
                            <?php } ?>
                            </tbody>
                        </table>	

                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                            <td style = "width:600px;"class = "alert alert-success">Candidate for Vice President for Internal</td>
                            <td style = "width:100px;" class = "alert alert-success">Image</td>
                            <td style = "width:80px;" class = "alert alert-success">Total Votes</td>

                            </thead>
                            <?php
                            require 'db_connection.php';

                            $query = $conn->query("SELECT * FROM candidate WHERE designation = 'Vice President for Internal Affairs'");
                            while ($fetch = $query->fetch_array()) {
                                $id = $fetch['candidate_id'];
                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `vote` WHERE candidate_id = '$id'");
                                $fetch1 = $query1->fetch_assoc();
                                ?>
                                <tbody> 
                                <td><?php echo $fetch ['firstname'] . " " . $fetch ['lastname']; ?></td>
                                <td><img src = "<?php echo $fetch ['prof_image']; ?>" style = "width:40px; height:40px; border-radius:500px; " >
                                <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total']; ?></button>	</td>
                            <?php } ?>
                            </tbody>
                        </table>	

                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                            <td style = "width:600px;"class = "alert alert-success">Candidate for Vice President for External</td>
                            <td style = "width:100px;" class = "alert alert-success">Image</td>
                            <td style = "width:80px;" class = "alert alert-success">Total Votes</td>

                            </thead>
                            <?php
                            require 'db_connection.php';

                            $query = $conn->query("SELECT * FROM candidate WHERE designation = 'Vice President for External Affairs'");
                            while ($fetch = $query->fetch_array()) {
                                $id = $fetch['candidate_id'];
                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `vote` WHERE candidate_id = '$id'");
                                $fetch1 = $query1->fetch_assoc();
                                ?>
                                <tbody> 
                                <td><?php echo $fetch ['firstname'] . " " . $fetch ['lastname']; ?></td>
                                <td><img src = "<?php echo $fetch ['prof_image']; ?>" style = "width:40px; height:40px; border-radius:500px; " >
                                <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total']; ?></button>	</td>
                            <?php } ?>
                            </tbody>
                        </table>	

                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                            <td style = "width:600px;"class = "alert alert-success">Candidate for Secretary</td>
                            <td style = "width:100px;" class = "alert alert-success">Image</td>
                            <td style = "width:80px;" class = "alert alert-success">Total Votes</td>

                            </thead>
                            <?php
                            require 'db_connection.php';

                            $query = $conn->query("SELECT * FROM candidate WHERE designation = 'Secretary'");
                            while ($fetch = $query->fetch_array()) {
                                $id = $fetch['candidate_id'];
                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `vote` WHERE candidate_id = '$id'");
                                $fetch1 = $query1->fetch_assoc();
                                ?>
                                <tbody> 
                                <td><?php echo $fetch ['firstname'] . " " . $fetch ['lastname']; ?></td>
                                <td><img src = "<?php echo $fetch ['prof_image']; ?>" style = "width:40px; height:40px; border-radius:500px; " >
                                <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total']; ?></button>	</td>
                            <?php } ?>
                            </tbody>
                        </table>		

                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                            <td style = "width:600px;"class = "alert alert-success">Candidate for Auditor</td>
                            <td style = "width:100px;" class = "alert alert-success">Image</td>
                            <td style = "width:80px;" class = "alert alert-success">Total Votes</td>

                            </thead>
                            <?php
                            require 'db_connection.php';

                            $query = $conn->query("SELECT * FROM candidate WHERE designation = 'Auditor'");
                            while ($fetch = $query->fetch_array()) {
                                $id = $fetch['candidate_id'];
                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `vote` WHERE candidate_id = '$id'");
                                $fetch1 = $query1->fetch_assoc();
                                ?>
                                <tbody> 
                                <td><?php echo $fetch ['firstname'] . " " . $fetch ['lastname']; ?></td>
                                <td><img src = "<?php echo $fetch ['prof_image']; ?>" style = "width:40px; height:40px; border-radius:500px; " >
                                <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total']; ?></button>	</td>
                            <?php } ?>
                            </tbody>
                        </table>	

                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                            <td style = "width:600px;"class = "alert alert-success">Candidate for Treasurer</td>
                            <td style = "width:100px;" class = "alert alert-success">Image</td>
                            <td style = "width:80px;" class = "alert alert-success">Total Votes</td>

                            </thead>
                            <?php
                            require 'db_connection.php';

                            $query = $conn->query("SELECT * FROM candidate WHERE designation = 'Treasurer'");
                            while ($fetch = $query->fetch_array()) {
                                $id = $fetch['candidate_id'];
                                $query1 = $conn->query("SELECT COUNT(*) as total FROM `vote` WHERE candidate_id = '$id'");
                                $fetch1 = $query1->fetch_assoc();
                                ?>
                                <tbody> 
                                <td><?php echo $fetch ['firstname'] . " " . $fetch ['lastname']; ?></td>
                                <td><img src = "<?php echo $fetch ['prof_image']; ?>" style = "width:40px; height:40px; border-radius:500px; " >
                                <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total']; ?></button>	</td>
                            <?php } ?>
                            </tbody>
                        </table>	
                    </div>	
                </div>                
            </div>
        </div>
    </div>
</div>
</div>

<?php include ('script.php'); ?>

</body>
</html>