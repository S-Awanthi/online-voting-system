<?php 
    require_once 'db_connection.php';

    if(isset($_POST['login'])){

        $nic = $_POST['nic'];
        $password = $_POST['password'];
        
        $result = $conn -> query("SELECT * FROM voter WHERE NIC_number = '$nic' && password = '$password' && account = 'active' && status = 'Unvoted'") or die(mysqli_error());

        $row = $result -> fetch_array();
        
        $voted = $conn -> query("SELECT * FROM voter WHERE NIC_number = '$nic' && password = '$password' && status = 'Voted'") -> num_rows;
        $noOfRows = $result -> num_rows;
        
        if($noOfRows > 0){
            session_start();
            $_SESSION['voter_id'] = $row['voter_id'];
            header('location:vote.php');
        }
        
        if($voted == 1){
            echo "<br><center><font color= 'red' size='4'>You Can Vote Only One Time</center></font>";
        }
        else{
            echo " <br><center><font color= 'red' size='4'>Invalid Username / Password</center></font>";
        }
        
    }

?>

