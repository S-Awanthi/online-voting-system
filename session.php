<?php
	require 'admin/db_connection.php';
	session_start(); 
	
	if(!ISSET($_SESSION['voter_id'])){
		header("location:index.php");
	}
	else{

		$session_id = $_SESSION['voter_id'];
		$admin_query = $conn->query("SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_errno());
		
		$admin_row = $admin_query->fetch_array();
		$admin_adminname = $admin_row['firstname']." ".$admin_row['lastname'];
	}
?>