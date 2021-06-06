<?php

require_once 'db_connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


   $query = $conn->query("SELECT * FROM admin WHERE adminname = '$username' AND password = MD5('$password')") or die(mysql_error());
    $rows = $query->num_rows;
    $fetch = $query->fetch_array();

    if ($rows == 0) {
        echo " <br><center><font color= 'red' size='3'>Invalid Username / Password</center></font>";
    } 

    else if ($rows > 0) {
        session_start();
        $_SESSION['id'] = $fetch['admin_id'];
        header("location:user.php");
    }
}
?>

<?php

// require_once 'db_connection.php';

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];


//     $query = $conn->query("SELECT * FROM admin WHERE adminname = '$username' AND password = '$password'") or die(mysql_error());
//     $rows = $query->num_rows;
//     $fetch = $query->fetch_array();

//     if ($rows == 0) {
//         echo " <br><center><font color= 'red' size='3'>Please fill the fields correctly</center></font>";
//     } 
//     else if ($rows > 0) {
//         session_start();
//         $_SESSION['id'] = $fetch['admin_id'];
//         header("location:user.php");
//     }
// }
?>