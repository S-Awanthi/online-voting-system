<?php include ('header.php'); ?>
<?php include ('session.php'); ?>

<body>

    <div id="row">
        <?php
        include ('side_bar.php');

        if (isset($_POST['submitVote'])) {
            if (!isset($_POST['pres_id'])) {
                $_SESSION['pres_id'] = "";
            } else {
                $_SESSION['pres_id'] = $_POST['pres_id'];
            }

            if (!isset($_POST['vpinternal_id'])) {
                $_SESSION['vpinternal_id'] = "";
            } else {
                $_SESSION['vpinternal_id'] = $_POST['vpinternal_id'];
            }

            if (!isset($_POST['vpexternal_id'])) {
                $_SESSION['vpexternal_id'] = "";
            } else {
                $_SESSION['vpexternal_id'] = $_POST['vpexternal_id'];
            }

            if (!isset($_POST['secretary_id'])) {
                $_SESSION['secretary_id'] = "";
            } else {
                $_SESSION['secretary_id'] = $_POST['secretary_id'];
            }


            if (!isset($_POST['auditor_id'])) {
                $_SESSION['auditor_id'] = "";
            } else {
                $_SESSION['auditor_id'] = $_POST['auditor_id'];
            }

            if (!isset($_POST['treasurer_id'])) {
                $_SESSION['treasurer_id'] = "";
            } else {
                $_SESSION['treasurer_id'] = $_POST['treasurer_id'];
            }
        }
        ?>
    </div>
<center>
    <form action="submit_vote.php" method="POST">

        <div class="col-lg-8" style = "margin-left:240px;" >
            <div class = "alert alert-info">
                <label>PRESIDENT</label>
                <br />
                
                <?php
                if (!$_SESSION['pres_id']) {
                    
                } else {
                    $fetch = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$_SESSION[pres_id]'")->fetch_array();

                    echo "Your vote for : " . $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['prof_image'] . "' style = 'height:70px; width:70px; border-radius:500px;' />";
                }
                ?>
            </div>

            
            <div class = "alert alert-success">
                <label>VICE PRESIDENT FOR INTERNAL AFFAIRS</label>
                <br/>

                <?php
                if (!$_SESSION['vpinternal_id']) {
                    
                } else {
                    $fetch = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$_SESSION[vpinternal_id]'")->fetch_array();

                    echo "Your vote for : " . $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['prof_image'] . "' style = 'height:70px; width:70px; border-radius:500px;' />";
                }
                ?>
            </div>
            
            <div class = "alert alert-info">
                <label>VICE PRESIDENT FOR EXTERNAL AFFAIRS</label>
                <br/>

                <?php
                if (!$_SESSION['vpexternal_id']) {
                    
                } else {
                    $fetch = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$_SESSION[vpexternal_id]'")->fetch_array();

                    echo "Your vote for : " . $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['prof_image'] . "' style = 'height:70px; width:70px; border-radius:500px;' />";
                }
                ?>
            </div>
            
            <div class = "alert alert-success">
                <label>SECRETARY</label>
                <br/>

                <?php
                if (!$_SESSION['secretary_id']) {
                    
                } else {
                    $fetch = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$_SESSION[secretary_id]'")->fetch_array();

                    echo "Your vote for : " . $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['prof_image'] . "' style = 'height:70px; width:70px; border-radius:500px;' />";
                }
                ?>
            </div>
            
            <div class = "alert alert-info">
                <label>AUDITOR</label>
                <br/>

                <?php
                if (!$_SESSION['auditor_id']) {
                    
                } else {
                    $fetch = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$_SESSION[auditor_id]'")->fetch_array();

                    echo "Your vote for : " . $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['prof_image'] . "' style = 'height:70px; width:70px; border-radius:500px;' />";
                }
                ?>
            </div>
            
            <div class = "alert alert-success">
                <label>TREASURER</label>
                <br/>

                <?php
                if (!$_SESSION['treasurer_id']) {
                    
                } else {
                    $fetch = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$_SESSION[treasurer_id]'")->fetch_array();

                    echo "Your vote for :  " . $fetch['firstname'] . " " . $fetch['lastname'] . " " . "<img src = 'admin/" . $fetch['prof_image'] . "' style = 'height:70px; width:70px; border-radius:500px;' />";
                }
                ?>
            </div>
            
            <br/>

            <button type = "submit" name="submitFinal" data-toggle = "modal" data-target = "#result" class = "btn btn-success" style="height: 50px; width: 40%; font-size: 20px; ">Confirm and Submit Final Vote</button>
            
        </div>
    </form>
</center>
</body>

<?php include ('script.php') ?>

</html>