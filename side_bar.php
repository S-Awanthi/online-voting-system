<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:lightslategrey;color:white;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="" style = "color:white; font-size: 25px;"><i class = "fa fa-home fa-large" ></i> Online Voting System</a>
					
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
				<?php 
					require 'admin/db_connection.php';
					$query = $conn->query("SELECT * from voter where voter_id ='$_SESSION[voter_id]'")or die (mysqli_errno ());
					$row = $query->fetch_array();
				?>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:white;font-size:14pt;">
						<i class="fa fa-user"></i> <?php echo " " . $row['firstname']." ".$row['lastname'];?>
					</a>
                </li>

                
            </ul>        

        </nav>            