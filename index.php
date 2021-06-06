<?php include ('header.php');?>
<body>
    <div class="container">
        <div class="row">
		
		<center><h2>Online Voting System - Voter Panel</h2></center>
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h1 class="panel-title"><b> Voters Login</b></h1></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                    <div class="form-group">
					<label for = "username" >NIC Number</label>
					<input class="form-control" placeholder="Enter Your NIC Number" name="nic" type="text" maxlength="10" required = "required" autofocus>
                    </div>
								
                    <div class="form-group">
					<label for = "password" >Password</label>
					<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                    </div>
                             
                    <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
					</fieldset>
							
				<?php include ('login_query.php');?>
                        </form>
                        <h5><b>Note:</b> <i>You have already voted! You cannot vote again!</i> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>

