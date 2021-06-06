<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:cadetblue;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="" style = "color:white; font-size: 25px"><i class = "fa fa-spinner fa-large" > </i> Online Voting System</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <?php
            require 'db_connection.php';
            $query = $conn->query("SELECT * from admin where admin_id ='$session_id'")or die(mysql_error());

            while ($row = $query->fetch_array()) {
                ?>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: black; font-size: 17px;">
                        <i class="fa fa-user"></i><?php echo $user_username = " " .$user_row['firstname'] . " " . $user_row['lastname']; ?>
                    </a>
                </li>
    </ul>

        <?php } ?>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href=""><i class="fa fa-menu fa-fw"></i> Menu </a>
                </li>

                <li>
                    <a href="user.php"><i class="fa fa-user fa-fw"></i> Admin </a>
                </li>
                
                <li>
                    <a href="candidate.php"><i class="fa fa-users fa-fw"></i> Candidates <span class=""></span></a>
                </li>

                <li>
                    <a href="voters.php"><i class="fa fa-users"></i> Voters<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="voters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                        </li>
                        <li>
                            <a href="../register/index.php"><i class = "fa fa-user fa-fw"></i> Add Voter</a>
                        </li>
                    </ul>                    
                </li>

                <li>
                    <a href="canvassing.php"><i class="fa fa-download fa-fw"></i> Canvassing Report</a>
                </li>
                
                <li>
                    <a href="logout.php"> <i class = "fa fa-sign-out" ></i> Logout</a>                        
                </li>

            </ul>
        </div>        
    </div>    
</nav>