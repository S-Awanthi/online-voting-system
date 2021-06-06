<?php
    $conn = new mysqli('localhost','root','','systemdb');
    
    if(!$conn){
        die("Error: Failed to connect to database");
    }
?>

