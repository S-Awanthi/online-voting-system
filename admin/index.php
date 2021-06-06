<?php include ('head.php'); ?>

<body>

    <div class="container">
        <div class="row">
            <center><h2>Online Voting System - Admin Panel</h2></center>

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title"><b>Admin Login</b></h3></center>
                    </div>

                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
                                    <label for = "username" >Username</label>
                                    <input class="form-control" placeholder="Enter your Username" name="username" type="text" autofocus>
                                </div>

                                <div class="form-group">
                                    <label for = "password" >Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>

                            </fieldset>

                            <?php include ('login_query.php'); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('script.php'); ?>

</body>
</html>